<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <title>EPS SEGUROS - R. ANGULO</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/img/logo.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('/img/logo.png') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href="{{ asset('material') }}/icon/material-icons/css/material-icons.css" />

    <!-- css -->
    <link href="{{ asset('material') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/css/material-bootstrap-wizard.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/css/material-bootstrap-paddind.css" rel="stylesheet" />
    <link href="{{ url('/css/resource.css') }}" rel="stylesheet" />


</head>

<body>

    <div class="image-container set-full-height">

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <!--      Wizard container        -->

                    <p>
                        @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    </p>

                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <form method="post" action="{{ route('eps.stores') }}" autocomplete="off" class="form-horizontal" id="form" enctype="multipart/form-data">
                                @csrf

                                <div class="wizard-header">
                                    <h4 class="wizard-title">
                                        COTIZA TU SEGURO EPS
                                    </h4>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#first" data-toggle="tab" style="font-size: 24px;">➀</a></li>
                                        <li><a href="#second" data-toggle="tab" style="font-size: 24px;">➁</a></li>
                                        <li><a href="#third" data-toggle="tab" style="font-size: 24px;">➂</a></li>

                                    </ul>
                                </div>

                                <div class="tab-content">

                                    <div class="tab-pane" id="first">

                                        <h6 class="col-sm-12">Datos requeridos</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">EMPRESA</h6>

                                                <div class="col-sm-12 mp-form">


                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-7">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-ruc" name="ruc" id="input-ruc" value="{{ old('ruc') }}" minlength="11" maxlength="11" required>
                                                            <label class="control-label" for="input-ruc">RUC</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-md-5 col-sm-4 col-xs-5">
                                                        <div class="form-group">
                                                            <a class="form-control input-search px-2">
                                                                <i class="material-icons">search</i> Buscar
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="razon_social" id="input-razon_social" minlength="5" maxlength="70" value="{{ old('razon_social') }}" required>
                                                            <label class="control-label" for="input-razon_social">Razon Social</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="telefono" id="input-telefono" value="{{ old('telefono') }}" minlength="11" maxlength="11" required>
                                                            <label class="control-label" for="input-telefono">Celular</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="direccion" id="input-direccion" minlength="5" maxlength="70" value="{{ old('direccion') }}" required>
                                                            <label class="control-label" for="input-direccion">Dirección de la empresa</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">CONTACTO</h6>

                                                <div class="col-sm-12 mp-form">


                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="nombre_contacto" id="input-nombre_contacto" minlength="5" maxlength="70" value="{{ old('nombre_contacto') }}" required>
                                                            <label class="control-label" for="input-nombre_contacto">Nombres contacto</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label" for="input-cargo_contacto">Cargo contacto</label>
                                                            <input type="text" class="form-control" name="cargo_contacto" id="input-cargo_contacto" minlength="5" maxlength="50" value="{{ old('cargo_contacto') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="email" class="form-control" name="email_contacto" id="input-email_contacto" minlength="5" maxlength="50" value="{{ old('email_contacto') }}" required>
                                                            <label class="control-label">Correo contacto</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="celular_contacto" id="input-celular_contacto" minlength="11" maxlength="11" value="{{ old('celular_contacto') }}" required>
                                                            <label class="control-label">Celular contacto</label>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">REPRESENTANTE LEGAL</h6>

                                                <div class="col-sm-12 mp-form">


                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="nombre_representante_legal" id="input-nombre_representante_legal" minlength="5" maxlength="70" value="{{ old('nombre_representante_legal') }}" required>
                                                            <label class="control-label" for="input-nombre_representante_legal">Nombres representante legal</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="cargo_representante_legal" id="input-cargo_representante_legal" minlength="5" maxlength="50" value="{{ old('cargo_representante_legal') }}" required>
                                                            <label class="control-label" for="input-cargo_representante_legal">Cargo representante legal</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="broker" id="input-broker" value="RICARDO ANGULO RIEDNER" minlength="5" maxlength="70" readonly="readonly" required="required">
                                                            <label class="control-label" for="input-broker">Broker o Corredor</label>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">Cantidad de aportes al año</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-dig-5" name="nro_aporte_anio_con_grati" id="input-nro_aporte_anio_con_grati" value="{{ old('nro_aporte_anio_con_grati') }}" required>
                                                            <label class="control-label" for="input-nro_aporte_anio_con_grati">Con gratificaciones <small>(14)</small></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-dig-5" name="nro_aporte_anio_sin_grati" id="input-nro_aporte_anio_sin_grati" value="{{ old('nro_aporte_anio_sin_grati') }}" required>
                                                            <label class="control-label" for="input-nro_aporte_anio_sin_grati">Sin gratificaciones <small>(12)</small></label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-money" name="planilla_anual" id="input-planilla_anual" value="{{ old('planilla_anual') }}" required>
                                                            <label class="control-label" for="input-planilla_anual">Planilla anual S/.</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="second">

                                        <h6 class="col-sm-12">Datos requeridos</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">TRABAJADORES</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="numero_total_trabajadores" id="input-numero_total_trabajadores" value="{{ old('numero_total_trabajadores') }}" required>
                                                            <label class="control-label" for="input-numero_total_trabajadores">Total de trabajadores en planilla</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 px-4 pb-2">COMPOSICIÓN DEL GRUPO</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="titutar_solo" id="input-titutar_solo" value="{{ old('titutar_solo') }}" required>
                                                            <label class="control-label" for="input-titutar_solo">Titular solo</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="titular1_dependiente" id="input-titular1_dependiente" value="{{ old('titular1_dependiente') }}" required>
                                                            <label class="control-label" for="input-titular1_dependiente">Titular + 1 dependiente</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="titular2_dependiente" id="input-titular2_dependiente" value="{{ old('titular2_dependiente') }}" required>
                                                            <label class="control-label" for="input-titular2_dependiente">Titular + 2 dependientes</label>

                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="titular3_dependiente" id="input-titular3_dependiente" value="{{ old('titular3_dependiente') }}" required>
                                                            <label class="control-label" for="input-titular3_dependiente">Titular + 3 o más dependientes</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="numero_total_asegurados_eps_actual" id="input-numero_total_asegurados_eps_actual" value="{{ old('numero_total_asegurados_eps_actual') }}" required>
                                                            <label class="control-label" for="input-numero_total_asegurados_eps_actual">Total de asegurados en EPS actual <small>(Titular y dependientes)</small></label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="third">

                                        <h6 class="col-sm-12">Datos requeridos</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">¿CUÉNTAS CON EPS ACTUALMENTE?<small class="importante"> *</small></h6>

                                                <div class="col-sm-12">
                                                    <label class="px-3 form-check-label">
                                                        <input type="radio" name="eps" id="input-eps" value="1" {{ old('eps') == 1 ? 'checked' : ''}} onclick="show_eps_actual()" required>
                                                        <span>Si</span>
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input type="radio" name="eps" id="input-eps" value="2" {{ old('eps') == 2 ? 'checked' : ''}} onclick="hide_eps_actual()" required>
                                                        <span>No</span>
                                                    </label>
                                                </div>

                                            </div>

                                            <div id="div_eps_actual" style="display: none">

                                                <div class="col-sm-12">

                                                    <h6 class="px-4">SEGUROS ACTUALES</h6>

                                                    <div class="col-sm-12 mp-form">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <select class="form-control custom-select form-select-sm" name="eps_actual" id="input-eps_actual" required>
                                                                    <option value="">-- Seleccione --</option>
                                                                    <option value="PACÍFICO EPS" {{ old('eps_actual') == 'PACÍFICO EPS' ? 'selected' : '' }}>PACÍFICO EPS</option>
                                                                    <option value="RIMAC EPS" {{ old('eps_actual') == 'RIMAC EPS' ? 'selected' : '' }}>RIMAC EPS</option>
                                                                    <option value="MAPFRE EPS" {{ old('eps_actual') == 'MAPFRE EPS' ? 'selected' : '' }}>MAPFRE EPS</option>
                                                                    <option value="SANITAS EPS" {{ old('eps_actual') == 'SANITAS EPS' ? 'selected' : '' }}>SANITAS EPS</option>
                                                                </select>
                                                                <label class="control-label">EPS Actual</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <select class="form-control custom-select form-select-sm" name="compania_seguro" id="input-compania_seguro" required>
                                                                    <option value="">-- Seleccione --</option>
                                                                    <option value="PACÍFICO EPS" {{ old('compania_seguro') == 'PACÍFICO EPS' ? 'selected' : '' }}>PACÍFICO EPS</option>
                                                                    <option value="RIMAC EPS" {{ old('compania_seguro') == 'RIMAC EPS' ? 'selected' : '' }}>RIMAC EPS</option>
                                                                    <option value="MAPFRE EPS" {{ old('compania_seguro') == 'MAPFRE EPS' ? 'selected' : '' }}>MAPFRE EPS</option>
                                                                    <option value="SANITAS EPS" {{ old('compania_seguro') == 'SANITAS EPS' ? 'selected' : '' }}>SANITAS EPS</option>
                                                                </select>
                                                                <label class="control-label">Compañía de seguros</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-grou label-floating">
                                                                <label class="control-label m-black" for="input-adjunto_plan_salud">Adjuntar plan se salud Actual</label>
                                                                <input type="file" class="form-contro" name="adjunto_plan_salud" id="input-adjunto_plan_salud" value="{{ old('adjunto_plan_salud') }}">
                                                                <small>(Archivos permitido: PDF, DOCX y XLSX Máximo 2MB)</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-grou label-floating">
                                                                <label class="control-label m-black" for="input-adjunto_siniestralidad">Adjuntar siniestralidad</label>
                                                                <input type="file" class="form-contro" name="adjunto_siniestralidad" id="input-adjunto_siniestralidad" value="{{ old('adjunto_siniestralidad') }}">
                                                                <small>(Archivos permitido: PDF, DOCX y XLSX Máximo 1MB)</small>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div id="aviso" class="col-lg-12 col-md-12 col-sm-12" style="display:none;">
                                                <div class="col-sm-9 px-5">
                                                    <div class="form-grou label-floating is-focused is-empty">
                                                        <label class="control-label m-black">Puedes continuar precionando el botón ENVIAR</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' value='Siguiente' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' value='Enviar' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' value='Atrás' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->

                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer footer-fix">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
                <a href="http://www.rangulo.pe" target="_blank">
                    <img width="100px" src="https://rangulo.pe/wp-content/uploads/2021/11/logo-white-300x90.png" alt="Logo A-Angulo">
                </a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <a href="#" target="_blank" class="m-gris">&copy; Desarrollado por NSS</a>
            </div>

        </div>
    </div>

    <div id="preloader" class="preloader" style="display: none">
        <div class="load"></div>
        <span class="enviar">Enviando...</span>
    </div>

</body>



<!--   Core JS Files   -->
<script src="{{ asset('material') }}/js/jquery-2.2.4.min.js"></script>
<script src="{{ asset('material') }}/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('material') }}/js/core/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Wizard -->
<script src="{{ asset('material') }}/js/material-bootstrap-wizard.js" type="text/javascript"></script>

<!--  Jquery.validate  -->
<script src="{{ asset('material') }}/js/core/jquery.validate.min.js" type="text/javascript"></script>

<script src="{{ asset('material') }}/js/plugins/jQuery-Mask-Plugin-js-query.mask.min.js"></script>

<script src="{{ url('/js/resource.js') }} "></script>
<script src="{{ url('/js/validations_mask.js') }} "></script>
<script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>

@if (session('message') == 'agregado')

<script>
    Swal.fire({
        icon: 'success',
        title: '¡Buen trabajo!',
        text: 'Muy pronto nuestro administrador se comunicará con usted.',
        showConfirmButton: 'Ok',
        timer: 10000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>

@endif


</html>