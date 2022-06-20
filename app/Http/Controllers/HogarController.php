<?php

namespace App\Http\Controllers;

use App\Models\Hogar;
use App\Models\User;
use App\Mail\mail_hogar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class HogarController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
        // $this->middleware('auth', ['except' => ['store']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $hogares = Hogar::all();
        return view('hogar.index', compact('hogares'));*/

        $data = Hogar::where('archivar', '=', '0')->orderBy('created_at', 'desc')->get();
        $data->each(function ($data) {
            $data->nombres;
            $data->celular;
            $data->email;
            $data->tipo_edificacion;
            $data->tipo_pago;
            $data->created_at;
        });

        return view('hogar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hogar.create');
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
            'nombres'                 => 'required|string|max:200',
            'fecha_nacimiento'        => 'required|date',
            'celular'                 => 'required|string|max:20',
            'email'                   => 'required|string|max:50',
            'direccion'               => 'required|string|max:255',
            'distrito'                => 'required|string|max:50',
            'provincia'               => 'required|string|max:50',
            'departamento'            => 'required|string|max:50',
            'tipo_edificacion'        => 'required|integer',
            'valor_casa'              => 'nullable|string|max:25',
            'valor_departamento'      => 'nullable|string|max:25',
            'valor_contenido'         => 'nullable|string|max:25',
            'cobertura'               => 'required|integer',
            'seguridad1'              => 'nullable|integer',
            'seguridad2'              => 'nullable|integer',
            'seguridad3'              => 'nullable|integer',
            'tipo_uso_casa'           => 'required|integer',
            'casa_playa'              => 'nullable|integer|',
            'metros_orilla'           => 'nullable|string|max:10',
            'club_playa'              => 'nullable|integer',
            'tipo_pago'               => 'required|integer',
            'metro_cuadrado'          => 'required|string|max:10',
            'anio_construccion'       => 'required|string|max:4',
            'numero_pisos'            => 'required|integer',
            'numero_sotanos'          => 'required|integer',

        ];

        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);
        $datos = request()->except('_token');

        if ($request->get('club_playa') != 1) {
            $datos['club_playa'] = 0;
        }

        if ($request->get('seguridad1') != 1) {
            $datos['seguridad1'] = 0;
        }
        if ($request->get('seguridad2') != 1) {
            $datos['seguridad2'] = 0;
        }
        if ($request->get('seguridad3') != 1) {
            $datos['seguridad3'] = 0;
        }
   
        $insert =  Hogar::create($datos);

        if ($insert) {
            $ejecutivo_mail = User::where('tipo_seguro', 'Seguro Hogar')
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


            $cliente = 'cliente';
            $ejecutivo = 'ejecutivo';

            try {
                //Mail para ejecutivo
                Mail::to($ejecutivo_mail)
                    ->cc($ejecutivo_admin)
                    ->send(new mail_hogar($datos, $ejecutivo));

                //Mail para el cliente
                Mail::to($datos['email'])
                    ->send(new mail_hogar($datos, $cliente));
            } catch (Exception $e) {
                return response()->json(['warning' => false, "message" => $e->getMessage()]);
            }
        }

        return back()->with('message', 'agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hogar = Hogar::findOrFail($id);
        return view('hogar.show', compact('hogar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function edit(Hogar $post)
    {
        // return view('post.edit', compact('hogar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $estado = Hogar::where('id', $id)->value('id_estado');
        if ($estado == 1) {
            Hogar::where('id', '=', $id)->update(
                [
                    'id_estado' => 0,
                    'id_admin' => auth()->user()->id
                ],
            );
        } else {
            Hogar::where('id', '=', $id)->update(
                [
                    'id_estado' => 1,
                    'id_admin' => auth()->user()->id
                ],

            );
        }

        return redirect('hogar')->with('message', 'atendido');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */

    public function archivar($id)
    {
        Hogar::where('id', '=', $id)->update(
            ['archivar' => 1]
        );
        return back()->with('message', 'archivado');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hogar  $hogar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hogar::where('id', '=', $id)->update(
            ['archivar' => 1]
        );
        return redirect('hogar')->with('message', 'archivado');
    }
}
