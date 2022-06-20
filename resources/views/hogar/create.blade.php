<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <title>HOGAR SEGUROS - R. ANGULO</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/img/logo.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('/img/logo.png') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href="{{ asset('material') }}/icon/material-icons/css/material-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('material') }}/css/select2-bootstrap.min.css" rel="stylesheet" />


    <!-- css -->
    <link href="{{ asset('material') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/css/material-bootstrap-wizard.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/css/material-bootstrap-paddind.css" rel="stylesheet" />
    <link href="{{ url('/css/resource.css') }}" rel="stylesheet" />


</head>

<body>

    <div class="image-container set-full-height">

        <!--   Big container   -->
        <div class="container" id="app">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">

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

                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="green" id="wizardProfile">
                            <form method="post" action="{{ route('hogar.stores') }}" autocomplete="off" id="form" class="form-horizontal">
                                @csrf
                                <div class="wizard-header">
                                    <h4 class="wizard-title">
                                        COTIZA TU SEGURO HOGAR
                                    </h4>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#fourth" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➃</a></li>
                                        <li><a href="#first" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➀</a></li>
                                        <li><a href="#second" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➁</a></li>
                                        <li><a href="#third" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➂</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">

                                    <div class="tab-pane" id="first">

                                        <h6 class="col-sm-12"> ¿Qué desea asegurar? </h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">A.- EDIFICACIÓN <small class="importante">*</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="tipo_edificacion" value="1" onclick="ocultarEdificio()" {{ old('tipo_edificacion') == 1 ? 'checked' : ''}} required>
                                                                <span>Casa</span>
                                                            </label>
                                                            <label class="form-check-label px-4">
                                                                <input type="radio" name="tipo_edificacion" value="2" onclick="ocultarCasa()" {{ old('tipo_edificacion') == 2 ? 'checked' : '' }} required>
                                                                <span>Departamento</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12" id="collapseCasa" style="display: none;">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-money" name="valor_casa" id="input-valor_casa" value="{{ old('valor_casa') }}" placeholder="Ejm: 9,500.00" required>
                                                            <label class="control-label">Valor US$:</label>
                                                            <small class="text-muted">Valor de reconstrucción a nuevo, (excluir valor terreno)</small>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12" id="collapseDepartamento" style="display: none;">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-money" name="valor_departamento" id="input-valor_departamento" value="{{ old('nombres') }}" placeholder="Ejm: 9,500.00" required>
                                                            <label class="control-label">Valor US$:</label>
                                                            <small class="text-muted">Valor a reposición en dólares.</small>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">B.- CONTENIDO</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Valor US$:</label>
                                                            <input type="text" class="form-control val-money" name="valor_contenido" id="input-valor_contenido" value="{{ old('valor_contenido') }}" placeholder="Ejm: 9,500.00">
                                                            <small class="text-muted">Valor a reposición en dólares.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="second">

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">¿Cómo desea asegurar? <small class="importante"> *</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <label class="form-check-label m-black">
                                                            <input type="radio" name="cobertura" value="1" {{ old('tipo_edificacion') == 1 ? 'checked' : '' }} required>
                                                            <span> A.- COBERTURA BÁSICA <small>(Sólo edificación)</small></span>
                                                        </label><br>
                                                        <label class="mp-form">1.- Incendio + Riesgos de la naturaleza + Riesgos políticos.</label><br>
                                                        <label class="mp-form">2.- Responsabilidad civil frente a terceros.</label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="form-check-label m-black">
                                                            <input type="radio" name="cobertura" value="2" {{ old('cobertura') == 2 ? 'checked' : '' }} required>
                                                            <span> B.- COBERTURA COMPLETA <small>(Edificación y contenido)</small></span>
                                                        </label><br>
                                                        <label class="mp-form">1.- Incendio + Riesgos de la naturaleza + Riesgos políticos.</label><br>
                                                        <label class="mp-form">2.- Responsabilidad civil frente a terceros.</label><br>
                                                        <label class="mp-form">3.- Robo y Asalto.</label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="form-check-label m-black">
                                                            <input type="radio" name="cobertura" value="3" {{ old('cobertura') == 3 ? 'checked' : '' }} required>
                                                            <span> C.- COBERTURA RESTRINGIDA <small>(Solo contenido)</small></span>
                                                        </label><br>
                                                        <label class="mp-form">1.- Robo y Asalto.</label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="third">

                                        <h6 class="col-sm-12">Descripción de edificación</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form m-black">¿SISTEMA DE ALARMA O PROTECCIÓN DEL HOGAR? <small class="importante"> *</small></h6>


                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="checkbox" name="seguridad1" value="1" {{ old('seguridad1') == 1 ? 'checked' : '' }}>
                                                            <span>Alarma</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="checkbox" name="seguridad2" value="1" {{ old('seguridad2') == 1 ? 'checked' : '' }}>
                                                            <span>Cámaras de video</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="checkbox" name="seguridad3" value="1" {{ old('seguridad3') == 1 ? 'checked' : '' }}>
                                                            <span>Puertas con SUPER LOOK o CANTOL</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form m-black">USO DE CASA <small class="importante"> *</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_uso_casa" value="1" {{ old('tipo_uso_casa') == 1 ? 'checked' : '' }} required>
                                                            <span>Vivienda de la familia</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_uso_casa" value="2" {{ old('tipo_uso_casa') == 2 ? 'checked' : '' }} required>
                                                            <span>Para alquiler</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form m-black">¿ES CASA DE PLAYA? <small class="importante"> *</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <div class="col-sm-12 form-group label-floating">

                                                            <label class="form-check-label">
                                                                <input type="radio" name="casa_playa" id="input-casa_playa" value="1" onclick="show_casa_playa()" {{ old('casa_playa') == 1 ? 'checked' : ''}} required>
                                                                <span>Si</span>
                                                            </label>

                                                            <label class="form-check-label px-4">
                                                                <input type="radio" name="casa_playa" id="input-casa_playa" value="2" onclick="hide_casa_playa()" {{ old('casa_playa') == 2 ? 'checked' : ''}} required>
                                                                <span>No</span>
                                                            </label>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12" id="divCasaPlaya" style="display: none">

                                                            <div class="form-group label-floating">
                                                                <input type="text" class="form-control val-metros" name="metros_orilla" id="input-metros_orilla" maxlength="10" value="{{ old('metros_orilla') }}" required>
                                                                <label class="control-label" for="input-metros_orilla">¿A cuántos metros de la orilla?</label>
                                                            </div>

                                                            <div class="form-group label-floating">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" name="club_playa" id="input-club_playa" value="1" {{ old('club_playa') == 1 ? 'checked' : '' }}>
                                                                    <span>¿Está en un club de playa?</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form m-black">TIPO DE PAGO <small class="importante"> *</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="1" {{ old('tipo_pago') == 1 ? 'checked' : '' }} required>
                                                            <span>Al contado</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="2" {{ old('tipo_pago') == 2 ? 'checked' : '' }} required>
                                                            <span>En 4 cuotas sin interés</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="3" {{ old('tipo_pago') == 3 ? 'checked' : '' }} required>
                                                            <span>En 12 cuotas con interés</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="fourth">

                                        <h6 class="col-sm-12">Descripción de datos</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form pb-2">DATOS DEL TITULAR</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="nombres" id="input-nombres" minlength="5" maxlength="70" value="{{ old('nombres') }}" required>
                                                            <label class="control-label"> Nombres y Apellidos</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="date" class="form-control" name="fecha_nacimiento" id="input-fecha_nacimiento" min="1930-01-01" max="<?= date('Y-m-d'); ?>" value="{{ old('fecha_nacimiento') }}" required>
                                                            <label class="control-label" for="input-fecha_nacimiento">Fecha Nacimiento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="email" class="form-control" name="email" id="input-email" minlength="5" maxlength="40" value="{{ old('email') }}" required>
                                                            <label class="control-label" for="input-email">Correo</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="celular" id="input-celular" minlength="11" maxlength="11" value="{{ old('celular') }}" required>
                                                            <label class="control-label" for="input-celular">Celular</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="direccion" id="input-direccion" minlength="5" maxlength="70" value="{{ old('direccion') }}" required>
                                                            <label class="control-label" for="input-direccion">Dirección</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <select class="form-control custom-select form-select-sm select2"  name="departamento" id="input-departamento" required>
                                                                <option value="0">-- Seleccione --</option>
                                                                <option v-for='departamento in departamentos' :value='departamento.id'>@{{departamento.nombre }}</option>
                                                            </select>
                                                            <label class="control-label">Departamento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <select class="form-control custom-select form-select-sm select2" name="provincia" id="input-provincia" required>
                                                                <option value="0">-- Seleccione --</option>
                                                                <option v-for='provincia in provincias' :value='provincia.id'>@{{provincia.nombre }}</option>
                                                            </select>
                                                            <label class="control-label">Provincia</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <select class="form-control custom-select form-select-sm select2" name="distrito" id="input-distrito" required>
                                                                <option value="0">-- Seleccione --</option>
                                                                <option v-for='distrito in distritos' :value='distrito.id'>@{{distrito.nombre }}</option>
                                                            </select>
                                                            <label class="control-label">Distrito</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form pb-2">DETALLES DE EDIFICACIÓN</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-metros" name="metro_cuadrado" id="input-metro_cuadrado" maxlength="10" value="{{ old('metro_cuadrado') }}" required>
                                                            <label class="control-label" for="input-metro_cuadrado">Metros cuadrados construidos</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-year" name="anio_construccion" id="input-anio_construccion" value="{{ old('anio_construccion') }}" minlength="4" maxlength="4" required>
                                                            <label class="control-label" for="input-anio_construccion">Año de construcción</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-3" name="numero_pisos" id="input-numero_pisos" value="{{ old('numero_pisos') }}" required>
                                                            <label class="control-label" for="input-numero_pisos">N° Pisos</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-2" name="numero_sotanos" id="input-numero_sotanos" value="{{ old('numero_sotanos') }}" required>
                                                            <label class="control-label" for="input-numero_sotanos">N° sótanos o semi sótanos</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' value='Siguiente' />
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' id='btnEnviar' value='Enviar' />
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
<script src="{{ url('/js/validations_mask.js') }} "></script>
<script src="{{ url('/js/resource.js') }} "></script>



<!-- PRUBA DE LIBRARIAS -->

<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- PRUEBA DE LIBRARIAS FIN -->
<script src="{{ url('/js/api/api_departamento.js') }} "></script>

<script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2({
            language: {

                noResults: function() {

                    return "No hay resultado";
                },
                searching: function() {

                    return "Buscando..";
                }
            }
        });
    });
</script>

@if (session('message') == 'agregado')
<script>
    // $("#btnEnviar").attr("disabled", true);

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