<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <title>SALUD SEGUROS - R. ANGULO</title>
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
                            <form method="post" action="{{ route('salud.stores') }}" autocomplete="off" class="form-horizontal" id="form">
                                @csrf

                                <div class="wizard-header">
                                    <h4 class="wizard-title">
                                        COTIZA TU SEGURO SALUD
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

                                                <h6 class="col-sm-12 px-4 pb-2">DATOS DEL TITULAR</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="titular_nombres" id="input-titular_nombres" minlength="5" maxlength="70" value="{{ old('titular_nombres') }}" required>
                                                            <label class="control-label">Nombres y Apellidos</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating is-focused is-empty">
                                                            <input type="date" class="form-control" name="titular_fecha_nacimiento" id="input-titular_fecha_nacimiento" min="1930-01-01" max="<?= date('Y-m-d'); ?>" value="{{ old('titular_fecha_nacimiento') }}" required>
                                                            <label class="control-label">Fecha Nacimiento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="celular" id="input-celular" minlength="11" maxlength="11" value="{{ old('celular') }}" required>
                                                            <label class="control-label">Celular</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="email" class="form-control" name="email" id="input-email" minlength="5" maxlength="50" value="{{ old('email') }}" required>
                                                            <label class="control-label">Correo</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">DATOS DEL CÓNYUGUE</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="conyugue_nombres" id="input-conyugue_nombres" minlength="5" maxlength="70" value="{{ old('conyugue_nombres') }}">
                                                            <label class="control-label">Nombres y Apellidos</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating is-focused is-empty">
                                                            <input type="date" class="form-control" name="conyugue_fecha_nacimiento" id="input-conyugue_fecha_nacimiento" min="1930-01-01" max="<?= date('Y-m-d'); ?>" value="{{ old('conyugue_fecha_nacimiento') }}">
                                                            <label class="control-label">Fecha Nacimiento</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="second">

                                        <h6 class="col-sm-12">DEPENDIENTES</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 px-4 pb-2">Hijo 1</h6>

                                                <div class="col-sm-12 mp-form">


                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Nombres y Apellidos</label>
                                                            <input type="text" class="form-control" name="hijo_nombres" id="input-hijo_nombres" minlength="5" maxlength="70" value="{{ old('hijo_nombres') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating is-focused is-empty">
                                                            <label class="control-label">Edad</label>
                                                            <input type="number" class="form-control val-dig-2" name="edad" id="input-edad" value="{{ old('edad') }}">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 px-4 pb-2">Hijo 2</h6>

                                                <div class="col-sm-12 mp-form">


                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label" for="input-hijo_nombres2">Nombres y Apellidos</label>
                                                            <input type="text" class="form-control" name="hijo_nombres2" id="input-hijo_nombres2" minlength="5" maxlength="70" value="{{ old('hijo_nombres2') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating is-focused is-empty">
                                                            <label class="control-label">Edad</label>
                                                            <input type="number" class="form-control val-dig-2" name="edad2" id="input-edad2" value="{{ old('edad2') }}">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 px-4 pb-2">Hijo 3</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-5 col-md-5 col-sm-7 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Nombres y Apellidos</label>
                                                            <input type="text" class="form-control" name="hijo_nombres3" id="input-hijo_nombres3" minlength="5" maxlength="70" value="{{ old('hijo_nombres3') }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                                        <div class="form-group label-floating is-focused is-empty">
                                                            <label class="control-label">Edad</label>
                                                            <input type="number" class="form-control val-dig-2" name="edad3" id="input-edad3" value="{{ old('edad3') }}">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane" id="third">

                                        <h6 class="col-sm-12">Plan y Método de pago</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">¿CUÉNTAS CON PÓLIZA ACTUALMENTE?<small class="importante"> *</small></h6>

                                                <div class=" col-sm-12 mp-form">

                                                    <div class="col-sm-12">

                                                        <div class="form-group label-floating">

                                                            <label class="form-check-label px-3">
                                                                <input type="radio" name="migracion" id="input-migracion1" value="1" {{ old('migracion') == 1 ? 'checked' : ''}} required>
                                                                <span>Si</span>
                                                            </label>

                                                            <label class="form-check-label px-4">
                                                                <input type="radio" name="migracion" id="input-migracion2" value="2" {{ old('migracion') == 2 ? 'checked' : ''}} required>
                                                                <span>No</span>
                                                            </label>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">¿QUÉ TIPO DE PLAN?<small class="importante"> *</small></h6>

                                                <div class=" col-sm-12 mp-form">

                                                    <div class="col-sm-12 ">

                                                        <label class="col-lg-5 col-md-5 col-sm-7 col-xs-8 form-check-label m-black">
                                                            <input type="checkbox" class="form-check-input" name="plan1" value="1" {{ old('plan1') == 1 ? 'checked' : ''}}>
                                                            A.- Plan Internacional
                                                        </label>
                                                        <small>
                                                            <span class="btn-link" id="input-plan_one" onclick="show_hide_plan(this.id)">Ver beneficios<i class="material-icons" style="font-size: 14px;">expand_more</i> </span>
                                                        </small>

                                                        <div class="px-5" id="collapseOne" style="display: none">

                                                            <label class="m-black m-s">{{ __('Beneficios principales') }}</label>
                                                            <p>
                                                                Ámbito de cobertura, en todo el mundo <br>
                                                                8 redes de clínicas afiliadas<br>
                                                                Atenciones ambulatorias y hospitalarias en el extranjero, a través de una precertificación<br>
                                                                Atenciones ambulatorias en Perú, con el DNI<br>
                                                                Atenciones hospitalarias en Perú, con carta de garantía<br>
                                                                Reembolso médico por consulta médica privada<br>
                                                                Emergencia médica de viajero al 100%, hasta US$ 50,000<br>
                                                                Chequeo Preventivo gratuito al 100%, en proveedores establecidos<br>
                                                                Reembolso por chequeo médico hasta S/. 500, en consulta privada<br>
                                                                Plan Enfermedades Crónicas – 4 diagnósticos<br>
                                                                Emergencia accidental al 100% las 1eras 24 horas<br>
                                                                Emergencia médica al 100% las 1eras 24 horas<br>
                                                                Cobertura de maternidad al 100%<br>
                                                                Oncología al 100% redes 1 a 7. Red 8 con deducibles<br>
                                                                Beneficio de odontológico y oftalmológico<br>
                                                                Sepelio, al 100% <br>
                                                            </p>

                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12">

                                                        <label class="col-lg-5 col-md-5 col-sm-7 col-xs-8 form-check-label m-black">
                                                            <input type="checkbox" class="form-check-input plan" name="plan2" value="1" {{ old('plan2') == 1 ? 'checked' : ''}}>
                                                            B.- Plan Nacional <small>(Con reembolso médico)</small>
                                                        </label>

                                                        <small>
                                                            <span class="btn-link" id="input-plan_two" onclick="show_hide_plan(this.id)">Ver beneficios<i class="material-icons" style="font-size: 14px;">expand_more</i> </span>
                                                        </small>

                                                        <div class="px-5" id="collapseTwo" style="display: none">
                                                            <label class="m-black m-s">{{ __('Beneficios principales') }}</label>
                                                            <p>
                                                                Ámbito de cobertura en el Perú <br>
                                                                8 redes de clínicas afiliadas <br>
                                                                Atenciones ambulatorias, con presentación de DNI <br>
                                                                Atenciones hospitalarias, con cartas de garantía <br>
                                                                Reembolso médico por consulta médica privada <br>
                                                                Plan enfermedades crónicas – 4 diagnósticos <br>
                                                                Emergencia médica de viajero al 100%, hasta US$ 50,000 <br>
                                                                Chequeo Preventivo gratuito al 100% <br>
                                                                Reembolso por chequeo médico hasta S/. 500 <br>
                                                                Emergencia accidental al 100% las 1eras 24 horas <br>
                                                                Emergencia médica con deducible y copago <br>
                                                                Cobertura de maternidad al 100% <br>
                                                                Oncología al 100% redes 1 a 7. Red 8 con deducibles <br>
                                                                Beneficio de odontológico <br>
                                                                Sepelio al 100% hasta S/. 15,000
                                                            </p>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12">

                                                        <label class="col-lg-5 col-md-5 col-sm-7 col-xs-8 form-check-label m-black">
                                                            <input type="checkbox" class="form-check-input" name="plan3" value="1" {{ old('plan3') == 1 ? 'checked' : ''}}>
                                                            C.- Plan Nacional <small>(Sin reembolso médico)</small>
                                                        </label>
                                                        <small>
                                                            <span class="btn-link" id="input-plan_three" onclick="show_hide_plan(this.id)">Ver beneficios<i class="material-icons" style="font-size: 14px;">expand_more</i> </span>
                                                        </small>

                                                        <div class="px-5" id="collapseTree" style="display: none">
                                                            <label class="m-black m-s">{{ __('Beneficios principales') }}</label>
                                                            <p>
                                                                Ámbito de cobertura, solo en el Perú <br>
                                                                8 redes de clínicas afiliadas <br>
                                                                Atenciones ambulatorias y hospitalarias, con médicos y clínicas afiliadas con DNI <br>
                                                                No tiene reembolso médico de ningún tipo <br>
                                                                Emergencia médica de viajero al 100%, hasta US$ 15,000 <br>
                                                                Chequeo Preventivo gratuito al 100%. En proveedores establecidos <br>
                                                                Plan enfermedades crónicas al 100% - 4 diagnósticos <br>
                                                                Emergencia accidental al 100% las 1eras 24 horas <br>
                                                                Emergencia médica con deducible y copago <br>
                                                                Cobertura de maternidad al 100% <br>
                                                                Cobertura Oncológica Al 100%, sólo con la Red Oncológica de la póliza <br>
                                                                Beneficio de odontológico y Oftalmológico <br>
                                                                Sepelio, al 100%
                                                            </p>
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-12">

                                                        <label class="col-lg-5 col-md-5 col-sm-7 col-xs-8 form-check-label m-black">
                                                            <input type="checkbox" class="form-check-input" name="plan4" value="1" {{ old('plan4') == 1 ? 'checked' : ''}}>
                                                            D.- Plan Red Preferente
                                                        </label>
                                                        <small>
                                                            <span class="btn-link" id="input-plan_three" onclick="show_hide_plan(this.id)">Ver beneficios<i class="material-icons" style="font-size: 14px;">expand_more</i> </span>
                                                        </small>

                                                        <div class="px-5" id="collapseFour" style="display: none">
                                                            <b><label class="m-black m-s">{{ __('Beneficios principales') }}</label></b>
                                                            <p>
                                                                Ámbito de cobertura, en el Perú <br>
                                                                Limitado a un grupo de redes de clínicas afiliadas <br>
                                                                Atenciones ambulatorias y hospitalarias, con DNI o carta garantía <br>
                                                                No tiene reembolso médico de ningún tipo <br>
                                                                Plan Enfermedades crónicas – 4 diagnósticos <br>
                                                                Chequeo Preventivo gratuito al 100% en proveedores establecidos <br>
                                                                Emergencia accidental al 100% las 1eras 24 horas <br>
                                                                Emergencia médica con deducible y copago <br>
                                                                Cobertura de maternidad al 100% <br>
                                                                Al 100% en ALIADA y SANNA Golf y S. Borja <br>
                                                                Beneficio de odontológico y oftalmológico <br>
                                                                Sepelio al 100%
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 mp-form">¿CÓMO DESEA PAGARLO?<small class="importante"> *</small></h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="1" {{ old('tipo_pago') == 1 ? 'checked' : ''}} required>
                                                            <span>Al contado</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="2" {{ old('tipo_pago') == 2 ? 'checked' : ''}} required>
                                                            <span>En 4 cuotas sin interés</span>
                                                        </label>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <label class="col-sm-12 form-check-label">
                                                            <input type="radio" name="tipo_pago" value="3" {{ old('tipo_pago') == 3 ? 'checked' : ''}} required>
                                                            <span>En 12 cuotas con interés</span>
                                                        </label>
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
<script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>

<script src="{{ asset('material') }}/js/plugins/jQuery-Mask-Plugin-js-query.mask.min.js"></script>
<script src="{{ url('/js/resource.js') }}"></script>
<script src="{{ url('/js/validations_mask.js') }}"></script>
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


@if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
    <li>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '{{ $error }}'
            })
        </script>
    </li>
    @endforeach
</ul>
@endif






</html>