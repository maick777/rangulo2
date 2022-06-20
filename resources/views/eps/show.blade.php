@extends('layouts.app', ['activePage' => 'eps', 'titlePage' => __('Ver')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="" autocomplete="off" class="form-horizontal">
                    <div class="card ">

                        <div class="card-header card-header-success">
                            <h4 class="card-title">Datos registrados</h4>
                            <p class="card-category">{{ __('Información de: '). $eps->razon_social }}</p>
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
                                <label class="col-sm-9 col-form-label">{{ $eps->razon_social }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Dirección:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->direccion }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Teléfono:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->telefono }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">RUC:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->ruc }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombre contacto:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->nombre_contacto }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Cargo contacto:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->cargo_contacto }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Celular contacto:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="whatsapp://send?text=&phone=:+51
                                    <?php $celular2 = str_replace("-", "", $eps->celular_contacto);
                                    echo $celular2; ?>">
                                        {{ $eps->celular_contacto }}
                                    </a>

                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Correo contacto:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="mailto:{{ $eps->email_contacto}}">{{ $eps->email_contacto}}</a>
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombre representante legal:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->nombre_representante_legal }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Cargo representante legal:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->cargo_representante_legal }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Broker:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->broker }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Planilla anual:</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->planilla_anual }}</label>
                            </div>

                            <h4 class="card-title">TOTAL APORTE AL AÑO</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Con gratificación <small>(14)</small></label>
                                <label class="col-sm-9 col-form-label">{{ $eps->nro_aporte_anio_con_grati }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Sin gratificación <small>(12)</small></label>
                                <label class="col-sm-9 col-form-label">{{ $eps->nro_aporte_anio_sin_grati }}</label>
                            </div>


                            <div class="row">
                                <label class="col-sm-3 col-form-label">Total trabajadores en planilla</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->numero_total_trabajadores }}</label>
                            </div>

                            <h4 class="card-title">COMPOSICIÓN DEL GRUPO</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Titular solo</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->titutar_solo }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Titular + 1 dependiente</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->titular1_dependiente }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Titular + 2 dependientes</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->titular2_dependiente }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Titulat + 3 o más dependientes</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->titular3_dependiente }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Total asegurados en EPS <small>(Titular y dependientes)</small></label>
                                <label class="col-sm-9 col-form-label">{{ $eps->numero_total_asegurados_eps_actual }}</label>
                            </div>

                            <h4 class="card-title">SEGUROS ACTUALES</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">¿Cuéntas con EPS actualmente?</label>

                                <label class="col-sm-9 col-form-label">
                                    @if ($eps->eps == 1) Si
                                    @else
                                    No
                                    @endif
                                </label>

                            </div>

                            @if($eps->eps == 1)
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Actual EPS</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->eps_actual }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Compañía de seguros</label>
                                <label class="col-sm-9 col-form-label">{{ $eps->compania_seguro }}</label>
                            </div>


                            @if($eps->adjunto_plan_salud != '')
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Adjunto plan de salud actual</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="{{ asset('storage').'/'.$eps->adjunto_plan_salud }}" class="btn btn-primary btn-link" target="_blank">
                                        <i class="material-icons">visibility</i> Ver</a>|
                                    <a href="{{ asset('storage').'/'.$eps->adjunto_plan_salud }}" class="btn btn-success btn-link" download>
                                        <i class="material-icons">get_app</i> Descargar</a>
                                </label>
                            </div>
                            @endif

                            @if($eps->adjunto_siniestralidad != '')
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Adjunto siniestralidad</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="{{ asset('storage').'/'.$eps->adjunto_siniestralidad }}" class="btn btn-primary btn-link" target="_blank">
                                        <i class="material-icons">visibility</i> Ver</a>|
                                    <a href="{{ asset('storage').'/'.$eps->adjunto_siniestralidad }}" class="btn btn-success btn-link" download>
                                        <i class="material-icons">get_app</i> Descargar</a>
                                </label>
                            </div>
                            @endif

                            @endif

                        </div>

                        <div class="card-footer ml-auto mr-auto">

                            <a href="{{ url('/eps') }}" class="btn btn-primary">
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