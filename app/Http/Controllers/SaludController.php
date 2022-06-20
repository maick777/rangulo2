<?php

namespace App\Http\Controllers;

use App\Models\Salud;
use App\Models\User;
use App\Mail\mail_salud;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class SaludController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $data = Salud::all();

        $data = Salud::where('archivar', '=', '0')->orderBy('created_at', 'desc')->get();
        $data->each(function ($data) {
            $data->nombres;
            $data->celular;
            $data->email;
            $data->migracion;
            $data->tipo_pago;
            $data->estado;
            $data->created_at;
        });

        return view('salud.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos = [
            'titular_nombres'               => 'required|string|max:200',
            'titular_fecha_nacimiento'      => 'required|date',
            'celular'                       => 'required|string|max:20',
            'email'                         => 'required|string|max:50',
            'conyugue_nombres'              => 'nullable|string|max:200',
            'conyugue_fecha_nacimiento'     => 'nullable|date',
            'hijo_nombres'                  => 'nullable|string|max:200',
            'hijo_fecha_nacimiento'         => 'nullable|date',
            'hijo_nombres2'                 => 'nullable|string|max:200',
            'hijo_fecha_nacimiento2'        => 'nullable|date',
            'hijo_nombres3'                 => 'nullable|string|max:200',
            'hijo_fecha_nacimiento3'        => 'nullable|date',
            'migracion'                     => 'required|integer',
            'plan1'                         => 'nullable|integer',
            'plan2'                         => 'nullable|integer',
            'plan3'                         => 'nullable|integer',
            'plan4'                         => 'nullable|integer',
            'tipo_pago'                     => 'nullable|integer',
        ];

        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);
        $datos = request()->except('_token');

        if ($request->get('plan1') != 1) {
            $datos['plan1'] = 0;
        }
        if ($request->get('plan2') != 1) {
            $datos['plan2'] = 0;
        }
        if ($request->get('plan3') != 1) {
            $datos['plan3'] = 0;
        }
        if ($request->get('plan4') != 1) {
            $datos['plan4'] = 0;
        }

        $insert = Salud::create($datos);

        if ($insert) {

            $ejecutivo_mail = User::where('tipo_seguro', 'Seguro Salud')
                ->where('recibe_email', 1)
                ->first();
            $ejecutivo_admin = User::where('tipo_seguro', 'Todo')
                ->where('recibe_email', 1)
                ->first();

            if ($ejecutivo_mail == '') {
                $ejecutivo_mail = 'anguloricardo138@gmail.com';
            }
            if ($ejecutivo_admin == '') {
                $ejecutivo_admin = 'anguloricardo138@gmail.com';
            }


            $cliente   = 'cliente';
            $ejecutivo = 'ejecutivo';

            //ENVIO DE MAIL
            $cliente   = 'cliente';
            $ejecutivo = 'ejecutivo';

            try {
                //Mail para ejecutivo
                Mail::to($datos['email'])
                    ->cc($ejecutivo_admin)
                    ->send(new mail_salud($datos, $ejecutivo));

                //Mail para cliente
                Mail::to($datos['email'])
                    ->send(new mail_salud($datos, $cliente));
            } catch (Exception $e) {
                return response()->json(['warning' => false, "message" => $e->getMessage()]);
            }
        }

        return back()->with('message', 'agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salud  $salud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salud = Salud::findOrFail($id);
        return view('salud.show', compact('salud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salud  $salud
     * @return \Illuminate\Http\Response
     */
    public function edit(Salud $salud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salud  $salud
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $estado = Salud::where('id', $id)->value('id_estado');

        if ($estado == 1) {
            Salud::where('id', '=', $id)->update(
                [
                    'id_estado' => 0,
                    'id_admin' => auth()->user()->id
                ]
            );
        } else {
            Salud::where('id', '=', $id)->update(
                [
                    'id_estado' => 1,
                    'id_admin' => auth()->user()->id
                ]
            );
        }

        return redirect('salud')->with('message', 'atendido');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salud  $salud
     * @return \Illuminate\Http\Response
     */

    public function archivar($id)
    {
        Salud::where('id', '=', $id)->update(
            ['archivar' => 1]
        );
        return back()->with('message', 'archivado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salud  $salud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salud $salud)
    {
        $salud->delete();
        return redirect()->route('salud.index');
    }
}
