@extends('layouts.app', ['activePage' => 'sctr', 'titlePage' => __('Ver')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="" autocomplete="off" class="form-horizontal">
                    <div class="card ">

                        <div class="card-header card-header-success">
                            <h4 class="card-title">Datos registrados</h4>
                            <p class="card-category">{{ __('Información de: '). $sctr->razon_social }}</p>
                        </div>

                        <div class="card-body ">
                            @if (session('status'))
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <h4 class="card-title">DATOS DE LA EMPRESA</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Razón Social:</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->razon_social }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">RUC:</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->ruc }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Actividad a realizar:</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->actividad }}</label>
                            </div>

                            <h4 class="card-title">DATOS DEL CONTACTO</h4>


                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombre:</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->nombre_contacto }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Celular:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="whatsapp://send?text=&phone=:+51
                                        <?php $celular2 = str_replace("-", "", $sctr->celular_contacto);
                                        echo $celular2; ?>">
                                        {{ $sctr->celular_contacto }}
                                    </a>
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Correo:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="mailto:{{ $sctr->email_contacto}}">{{ $sctr->email_contacto}}</a>
                                </label>
                            </div>

                            <h4 class="card-title">TRABAJADORES</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Total de trabajadores:</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->total_trabajadores }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Planilla total de trabajadores S/. :</label>
                                <label class="col-sm-9 col-form-label">{{ $sctr->planilla_total }}</label>
                            </div>

                            @if($sctr->adjunto_trama != '')
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Adjunto plan de salud actual</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="{{ asset('storage').'/'.$sctr->adjunto_trama }}" class="btn btn-success btn-link" download>
                                        <i class="material-icons">get_app</i> Descargar</a>
                                </label>
                            </div>
                            @endif

                        </div>

                        <div class="card-footer ml-auto mr-auto">

                            <a href="{{ url('/sctr') }}" class="btn btn-primary">
                                <i class="material-icons">arrow_back</i>Volver
                            </a>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection