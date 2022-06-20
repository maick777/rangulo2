<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <title>SCTR SEGUROS - R. ANGULO</title>
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
                            <form method="post" action="{{ route('sctr.stores') }}" autocomplete="off" class="form-horizontal" id="form" enctype="multipart/form-data">
                                @csrf

                                <div class="wizard-header">
                                    <h4 class="wizard-title">
                                        COTIZA TU SEGURO SCTR
                                    </h4>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#first" data-toggle="tab" style="font-size: 24px;">➀</a></li>
                                        <li><a href="#second" data-toggle="tab" style="font-size: 24px;">➁</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">

                                    <div class="tab-pane" id="first">
                                        <h6 class="col-sm-12 mp-form">DATOS REQUERIDOS</h6>

                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">EMPRESA</h6>

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

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="razon_social" id="input-razon_social" minlength="5" maxlength="70" value="{{ old('razon_social') }}" required>
                                                            <label class="control-label" for="input-razon_social">Razon Social</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="actividad" id="input-actividad" minlength="5" maxlength="100" value="{{ old('actividad') }}" required>
                                                            <label class="control-label">Actividad a realizar: <small>Especificar</small> </label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">CONTACTO</h6>


                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="nombre_contacto" id="input-nombre_contacto" minlength="5" maxlength="70" value="{{ old('nombre_contacto') }}" required>
                                                            <label class="control-label" for="input-nombre_contacto">Nombres:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="celular_contacto" id="input-celular_contacto" value="{{ old('celular_contacto') }}" minlength="11" maxlength="11" required>
                                                            <label class="control-label">Celular:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="email" class="form-control" name="email_contacto" id="input-email_contacto" minlength="5" maxlength="50" value="{{ old('email_contacto') }}" required>
                                                            <label class="control-label">Correo:</label>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane" id="second">

                                        <h6 class="col-sm-12 mp-form">DATOS REQUERIDOS</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">TRABAJADORES</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="number" class="form-control val-dig-5" name="total_trabajadores" id="input-total_trabajadores" value="{{ old('total_trabajadores') }}" required>
                                                            <label class="control-label">Total de trabajadores:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-money" name="planilla_total" id="input-planilla_total" maxlength="20" value="{{ old('planilla_total') }}" required>
                                                            <label class="control-label">Planilla total de trabajadores S/.:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-grou label-floating">
                                                            <label class="control-label m-black" for="input-adjunto_trama">Adjuntar trama</label>
                                                            <input type="file" class="form-contro" name="adjunto_trama" id="input-adjunto_trama" maxlength="255" value="{{ old('adjunto_trama') }}">
                                                            <small>(Archivos permitido: EXCEL Máximo 2MB)</small>
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
                                        <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' value='Enviar' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' value='Atras' />
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