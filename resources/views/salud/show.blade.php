@extends('layouts.app', ['activePage' => 'salud', 'titlePage' => __('Ver')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="" autocomplete="off" class="form-horizontal">
                    <div class="card ">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Datos registrados</h4>
                            <p class="card-category">{{ __('Información de: '). $salud->nombres }}</p>
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
                                <label class="col-sm-9 col-form-label">{{ $salud->titular_nombres }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->titular_fecha_nacimiento != null ? Carbon\Carbon::parse($salud->titular_fecha_nacimiento)->format('d/m/Y'):'' }}</label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Correo:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="mailto:{{ $salud->email}}">{{ $salud->email}}</a>
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Celular:</label>
                                <label class="col-sm-9 col-form-label">
                                    <a href="whatsapp://send?text=&phone=:+51
                                    <?php $celular2 = str_replace("-", "", $salud->celular);
                                    echo $celular2; ?>">
                                        {{ $salud->celular }}
                                    </a>
                                </label>
                            </div>

                            <h4 class="card-title">Datos del cónyugue</h4>

                            @if ($salud->conyugue_nombres != '')
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombres y Apellidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->conyugue_nombres }}</label>

                            </div>
                            @endif

                            @if ($salud->conyugue_fecha_nacimiento != '')
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->conyugue_fecha_nacimiento != null ? Carbon\Carbon::parse($salud->conyugue_fecha_nacimiento)->format('d/m/Y'):'' }}</label>
                            </div>
                            @endif

                            <h4 class="card-title">Datos de los dependientes</h4>
                            @if ($salud->hijo_nombres != '' || $salud->hijo_fecha_nacimiento != '')
                            <h4 class="card-title">Hijo 1</h4>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombres y Apellidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_nombres }}</label>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_fecha_nacimiento != null ? Carbon\Carbon::parse($salud->hijo_fecha_nacimiento)->format('d/m/Y'):'' }}</label>
                            </div>
                            @endif

                            @if ($salud->hijo_nombres2 != '' || $salud->hijo_fecha_nacimiento2 != '')
                            <h4 class="card-title">Hijo 2</h4>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombres y Apellidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_nombres2 }}</label>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_fecha_nacimiento2 != null ? Carbon\Carbon::parse($salud->hijo_fecha_nacimiento2)->format('d/m/Y'):'' }}</label>

                            </div>
                            @endif

                            @if ($salud->hijo_nombres3 != '' || $salud->hijo_fecha_nacimiento3 != '')
                            <h4 class="card-title">Hijo 3</h4>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Nombres y Apellidos:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_nombres3 }}</label>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Fecha Nacimiento:</label>
                                <label class="col-sm-9 col-form-label">{{ $salud->hijo_fecha_nacimiento3 != null ? Carbon\Carbon::parse($salud->hijo_fecha_nacimiento3)->format('d/m/Y'):'' }}</label>

                            </div>
                            @endif

                            <h4 class="card-title">Plan</h4>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">¿Cuénta con póliza actualmente?</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->migracion == 2) NO
                                    @else
                                    SI
                                    @endif
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Tipo de plan:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->plan1 == 1)
                                    A.- Plan Internacional
                                    @else
                                    @endif
                                </label>
                                <label class="col-sm-3 col-form-label"></label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->plan2 == 1)
                                    B.- Plan Nacional <small>(Con reembolso médico)</small>
                                    @else
                                    @endif
                                </label>
                                <label class="col-sm-3 col-form-label"></label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->plan3 == 1)
                                    C.- Plan Nacional <small>(Sin reembolso médico)</small>
                                    @else
                                    @endif
                                </label>
                                <label class="col-sm-3 col-form-label"></label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->plan4 == 1)
                                    D.- Plan Red Preferente
                                    @else
                                    @endif
                                </label>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label">Tipo de pago:</label>
                                <label class="col-sm-9 col-form-label">
                                    @if ($salud->tipo_pago == 1)
                                    Al contado
                                    @elseif ($salud->tipo_pago == 2)
                                    En 4 cuotas sin interes
                                    Departamento
                                    @else
                                    En 12 cuotas con interes
                                    @endif
                                </label>
                            </div>


                        </div>

                        <div class="card-footer ml-auto mr-auto">

                            <a href="{{ url('/salud') }}" class="btn btn-primary">
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