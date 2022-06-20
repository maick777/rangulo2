@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('Usuario Perfil Profile')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('user.destroy',$usuario->id) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')
                    @include('users.form', ['modo' => 'Editar'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection