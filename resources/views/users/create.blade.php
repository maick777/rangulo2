@extends('layouts.app', ['activePage' => 'admin', 'titlePage' => __('Usuario Perfil')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('user.store') }}" autocomplete="off" id="form" class="form-horizontal" id="myform" >
                    @csrf
                    @include('users.form', ['modo' => 'Crear'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection