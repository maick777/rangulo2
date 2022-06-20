<?php

namespace App\Http\Controllers;

use App\Models\Sctr;
use App\Models\User;
use App\Mail\mail_sctr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SctrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sctr::where('archivar', '=', '0')->orderBy('created_at', 'desc')->get();
        $data->each(function ($data) {
            $data->razon_social;
            $data->ruc;
            $data->nombre_contacto;
            $data->celular_contacto;
            $data->email_contacto;
            $data->actividad;
            $data->total_trabajadores;
            $data->planilla_total;
            $data->adjunto_trama;
            $data->created_at;
        });

        return view('sctr.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sctr.create');
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
            'razon_social'        => 'required|string|max:70',
            'ruc'                 => 'required|string|max:11',
            'actividad'           => 'required|string|max:100',
            'nombre_contacto'     => 'required|string|max:70',
            'celular_contacto'    => 'required|string|max:11',
            'email_contacto'      => 'required|string|max:50',
            'total_trabajadores'  => 'required|integer',
            'planilla_total'      => 'required|string|max:20',
            'adjunto_trama'       => 'nullable|max:2048|mimes:pdf,xlsx,docx',
        ];
        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);
        $datos = request()->except('_token');

        if ($request->hasFile('adjunto_trama')) {
            $datos['adjunto_trama'] = request()->file('adjunto_trama')->store('uploads', 'public');
        }

        $insert =  Sctr::create($datos);

        if ($insert) {

            $ejecutivo_mail = User::where('tipo_seguro', 'Seguro Sctr')
                ->where('recibe_email', 1)
                ->first();
                
            $ejecutivo_admin = User::where('tipo_seguro', 'Todo')
                ->where('recibe_email', 1)
                ->first();

            $ejecutivo_mail =  'karen.rivera@rangulo.pe';

            if ($ejecutivo_mail == '') {
                $ejecutivo_mail = 'karen.rivera@rangulo.pe';
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
                    ->send(new mail_sctr($datos, $ejecutivo));

                //Mensaje para el cliente
                Mail::to($datos['email_contacto'])
                    ->send(new mail_sctr($datos, $cliente));
            } catch (\Exception $e) {
                return response()->json(['warning' => false, "message" => $e->getMessage()]);
            }
        }

        return back()->with('message', 'agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sctr  $sctr
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sctr = Sctr::findOrFail($id);
        return view('sctr.show', compact('sctr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sctr  $sctr
     * @return \Illuminate\Http\Response
     */
    public function edit(Sctr $sctr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sctr  $sctr
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $estado = Sctr::where('id', $id)->value('id_estado');

        if ($estado == 1) {
            Sctr::where('id', '=', $id)->update(
                [
                    'id_estado' => 0,
                    'id_admin' => auth()->user()->id
                ]
            );
        } else {
            Sctr::where('id', '=', $id)->update(
                [
                    'id_estado' => 1,
                    'id_admin' => auth()->user()->id
                ]
            );
        }

        return redirect('sctr')->with('message', 'atendido');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sctr  $sctr
     * @return \Illuminate\Http\Response
     */

    public function archivar($id)
    {
        Sctr::where('id', '=', $id)->update(
            ['archivar' => 1]
        );
        return back()->with('message', 'archivado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sctr  $sctr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sctr $sctr)
    {
        //
    }
}
