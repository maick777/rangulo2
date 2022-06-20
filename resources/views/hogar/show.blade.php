@extends('layouts.app', ['activePage' => 'hogar', 'titlePage' => __('Ver')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="" autocomplete="off" class="form-horizontal">
                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Datos registrados</h4>
                            <p class="card-category">{{ __('Información de: '). $hogar->nombres }}</p>
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

                            <h4 class="card-title">Datos del titular</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombres y Apellidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->nombres }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->fecha_nacimiento != null ? Carbon\Carbon::parse($hogar->fecha_nacimiento)->format('d/m/Y'):'' }}
                                </label>

                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Correo:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="mailto:{{ $hogar->email}}">{{ $hogar->email}}</a>
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Celular:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="whatsapp://send?text=&phone=:+51
                                    <?php $celular2 = str_replace("-", "", $hogar->celular);
                                    echo $celular2; ?>">
                                        {{ $hogar->celular }}
                                    </a>
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Dirección:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->direccion }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Distrito:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->distrito }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Provincia:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->provincia }}</label>
                            </div>


                            <div class="row">
                                <label class="col-sm-3 col-form-label">Departamento:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->departamento }}</label>
                            </div>

                            <h4 class="card-title">Detalles de Edificación</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Tipo edificación:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->tipo_edificacion == 1) Casa
                                    @else
                                    Departamento
                                    @endif
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Valor US$:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->valor_casa }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Valor del contenido US$:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->valor_contenido }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Tipo cobertura:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->cobertura == 1)
                                    A.- COBERTURA BÁSICA <small>(Sólo edificación)</small>
                                    @elseif ($hogar->cobertura == 2)
                                    B.- COBERTURA COMPLETA <small> (Edificación y contenido)</small>
                                    @else
                                    C.- COBERTURA RESTRINGIDA <small>(Solo contenido)</small>
                                    @endif
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Sistema de alarma:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->seguridad1 == 1)
                                    Alarma
                                    @else
                                    @endif
                                </label>
                                <label class="col-sm-3 col-form-label"></label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->seguridad2 == 1)
                                    Cámaras de video
                                    @else
                                    @endif
                                </label>

                                <label class="col-sm-3 col-form-label"></label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->seguridad3 == 1)
                                    Puertas con SUPER LOOK o CANTOL
                                    @else
                                    @endif
                                </label>

                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Uso de casa:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->tipo_uso_casa == 1)
                                    Vivienda de la familia
                                    @else
                                    Para alquiler
                                    @endif
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">¿Es casa de playa?</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->casa_playa == 1) Si
                                    @else
                                    No
                                    @endif
                                </label>
                            </div>

                            @if ($hogar->casa_playa == 1)
                            <div class="row">
                                <label class="col-sm-3 col-form-label">¿A cuantos metros de la orilla?</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->metros_orilla }}</label>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">¿Es club de playa?</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->club_playa == 1) Si
                                    @else
                                    No
                                    @endif
                                </label>
                            </div>
                            @endif

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Tipo de pago:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($hogar->tipo_pago == 1)
                                    Al contado
                                    @elseif ($hogar->tipo_pago == 2)
                                    En 4 cuotas sin interes
                                    Departamento
                                    @else
                                    En 12 cuotas con interes
                                    @endif
                                </label>
                            </div>

                            <h4 class="card-title">Más detalles de Edificación</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Metros cuadrados construidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->metro_cuadrado }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Año de construcción:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->anio_construccion }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">N° Pisos:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->numero_pisos }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">N° Sótanos o semi sótanos:</label>
                                <label class="col-sm-9 col-form-label">{{ $hogar->numero_sotanos }}</label>
                            </div>


                        </div>

                        <div class="card-footer ml-auto mr-auto">

                            <a href="{{ url('/hogar') }}" class="btn btn-primary">
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