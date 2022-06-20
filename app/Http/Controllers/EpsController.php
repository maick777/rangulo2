<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\User;
use App\Mail\mail_eps;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class EpsController extends Controller
{


    public function __construct()
    {
        Carbon::setLocale('es');
        //$this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eps::where('archivar', '=', '0')->orderBy('id_estado', 'desc')->get();
        $data->each(function ($data) {
            $data->razon_social;
            $data->ruc;
            $data->celular_contacto;
            $data->email_contacto;
            $data->nombre_representante_legal;
            $data->tipo_pago;
            $data->estado;
            $data->created_at;
        });

        return view('eps.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eps.create');
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
            'razon_social'                  => 'required|string|max:70',
            'direccion'                     => 'required|string|max:70',
            'telefono'                      => 'required|string|max:11',
            'ruc'                           => 'required|string|max:11',
            'nombre_contacto'               => 'required|string|max:70',
            'cargo_contacto'                => 'nullable|string|max:50',
            'celular_contacto'              => 'required|string|max:11',
            'email_contacto'                => 'required|string|max:50',
            'nombre_representante_legal'    => 'required|string|max:70',
            'cargo_representante_legal'     => 'required|string|max:50',
            'broker'                        => 'required|string|max:50',
            'planilla_anual'                => 'required|string|max:20',
            'nro_aporte_anio_con_grati'     => 'required|integer',
            'nro_aporte_anio_sin_grati'     => 'required|integer',
            'numero_total_trabajadores'     => 'required|integer',
            'titutar_solo'                  => 'required|integer',
            'titular1_dependiente'          => 'required|integer',
            'titular2_dependiente'          => 'required|integer',
            'titular3_dependiente'          => 'required|integer',
            'numero_total_asegurados_eps_actual'  => 'required|integer',
            'eps'                           => 'required|integer',
            'eps_actual'                    => 'nullable|string|max:30',
            'compania_seguro'               => 'nullable|string|max:30',
            'adjunto_plan_salud'            => 'nullable|max:2048|mimes:pdf,xlsx,docx',
            'adjunto_siniestralidad'        => 'nullable|max:2048|mimes:pdf,xlsx,docx',
        ];

        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);
        $datos = request()->except('_token');

        if ($request->hasFile('adjunto_plan_salud')) {
            $datos['adjunto_plan_salud'] = request()->file('adjunto_plan_salud')->store('uploads', 'public');
        }
        if ($request->hasFile('adjunto_siniestralidad')) {
            $datos['adjunto_siniestralidad'] = request()->file('adjunto_siniestralidad')->store('uploads', 'public');
        }

        $insert =  Eps::create($datos);

        if ($insert) {
            $ejecutivo_mail = User::where('tipo_seguro', 'Seguro EPS')
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
                    ->send(new mail_eps($datos, $ejecutivo));

                //Mensaje para el cliente
                Mail::to($datos['email_contacto'])
                    ->send(new mail_eps($datos, $cliente));
            } catch (Exception $e) {
                return response()->json(['warning' => false, "message" => $e->getMessage()]);
            }
        }
        return back()->with('message', 'agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eps = Eps::findOrFail($id);
        return view('eps.show', compact('eps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function edit(Eps $eps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $estado = Eps::where('id', $id)->value('id_estado');
        if ($estado == 1) {
            Eps::where('id', '=', $id)->update(
                [
                    'id_estado' => 0,
                    'id_admin' => auth()->user()->id
                ]
            );
        } else {
            Eps::where('id', '=', $id)->update(
                [
                    'id_estado' => 1,
                    'id_admin' => auth()->user()->id
                ]
            );
        }


        return redirect('eps')->with('message', 'atendido');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eps  $eps
     * @return \Illuminate\Http\Response
     */

    public function archivar($id)
    {
        Eps::where('id', '=', $id)->update(
            ['archivar' => 1]
        );
        return back()->with('message', 'archivado');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eps  $eps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eps $eps)
    {
        //
    }
}
