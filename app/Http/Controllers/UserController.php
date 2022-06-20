<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\mail_user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $data = User::where('id_estado', '=', '0')
            ->where('id', '!=', 1)
            ->orderBy('id', 'asc')->get();
        $data->each(function ($data) {
            $data->nombres;
            $data->email;
            $data->cargo;
            $data->tipo_seguro;
            $data->created_at;
        });

        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email'                   => 'required|string|max:50',
            'cargo'                   => 'nullable|string|max:100',
            'tipo_seguro'             => 'required|string|max:30',
            'password'                => 'required|string|max:255'
        ];

        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);

        $datos = request()->except('_token');

        if ($datos['password'] == '') {
            $datos['password'] = trim(Hash::make('secret@rangulo2022'));
        } else {
            $datos['password'] = trim(Hash::make($datos['password']));
        }

        
        $email_duplicado = User::where('email', $datos['email'])->first();
        if ($email_duplicado != '') {
            return back()->withInput()->with('message', 'email_duplicado');
        }

        $insert = User::create($datos);

        if ($request->get('password') == '') {
            $datos['password'] = $request->get('password');
        } else {
            $datos['password'] = 'secret@rangulo2022';
        }

        //ENVIO DE MAIL
        if ($insert) {

            try {
                Mail::to($datos['email'])
                    ->send(new mail_user($datos));
            } catch (Exception $e) {
                return response()->json(['warning' => false, "message" => $e->getMessage()]);
            }
        }

        return redirect('user')->with('message', 'agregado');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('users.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos = [
            'nombres'                 => 'required|string|max:200',
            'email'                   => 'required|string|max:50',
            'cargo'                   => 'nullable|string|max:100',
            'tipo_seguro'             => 'required|string|max:30',
            'password'                => 'nullable|string|max:255'
        ];

        $message = [
            'required' => 'El :attribute es requirido'
        ];

        $this->validate($request, $campos, $message);
        $datos = request()->except(['_token', '_method']);

        if (!empty($datos['password']))
            $datos['password'] = Hash::make($datos['password']);
        else
            unset($datos['password']);


        $email_duplicado = User::where('email', $datos['email'])
            ->where('id', '!=', $id)
            ->first();
        if ($email_duplicado != '') {
            return back()->withInput()->with('message', 'email_duplicado');
        }

        User::where('id', '=', $id)->update($datos);
        $empleado = User::findOrFail($id);
        return redirect('user')->with('message', 'actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($id != 1 and $id != 2) {
            User::destroy($id);
            return redirect('user')->with('message', 'eliminado');
        } else {
            return redirect('user')->with('message', 'admin');
        }
    }
}
