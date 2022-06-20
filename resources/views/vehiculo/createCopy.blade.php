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
                            <form method="post" action="{{ route('hogar.stores') }}" autocomplete="off" id="form" class="form-horizontal">
                                @csrf

                                <div class="wizard-header">
                                    <h4 class="wizard-title">
                                        COTIZA TU SEGURO VEHICULAR
                                    </h4>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#first" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➀</a></li>
                                        <li><a href="#second" data-toggle="tab" style="font-size: 24px;" style="width: 25%">➁</a></li>
                                    </ul>
                                </div>

                                <div class="tab-content">

                                    <div class="tab-pane" id="first">

                                        <h6 class="col-sm-12 mp-form">VEHÍCULO</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 mp-form">¿Vehículo con placa?</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="tipo_edificacion" value="1" onclick="ocultarEdificio()" {{ old('tipo_edificacion') == 1 ? 'checked' : ''}} required>
                                                                <span>Si</span>
                                                            </label>
                                                            <label class="form-check-label px-4">
                                                                <input type="radio" name="tipo_edificacion" value="2" onclick="ocultarCasa()" {{ old('tipo_edificacion') == 2 ? 'checked' : '' }} required>
                                                                <span>No</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12" id="collapseCasa" style="display: none;">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-money" name="valor_casa" id="input-valor_casa" value="{{ old('valor_casa') }}" placeholder="Ejm: F5U-777" required>
                                                            <label class="control-label">Número de placa:</label>
                                                        </div>
                                                    </div>

                                                    <div id="collapseDepartamento" style="display: none;">

                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <input type="text" class="form-control val-money" name="valor_departamento" id="input-valor_departamento" value="{{ old('nombres') }}" placeholder="Ejm: Toyota" required>
                                                                <label class="control-label">Marca:</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <input type="text" class="form-control val-money" name="valor_departamento" id="input-valor_departamento" value="{{ old('nombres') }}" placeholder="Ejm: Camry" required>
                                                                <label class="control-label">Modelo:</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <select class="form-control custom-select form-select-sm" name="compania_seguro" id="input-compania_seguro" required>
                                                                    <option value="">-- Seleccione --</option>
                                                                    <option value="M" {{ old('compania_seguro') == 'M' ? 'selected' : '' }}>Masculino</option>
                                                                    <option value="F" {{ old('compania_seguro') == 'F' ? 'selected' : '' }}>Femenino</option>
                                                                </select>
                                                                <label class="control-label">Tipo modelo</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="form-group label-floating">
                                                                <input type="text" class="form-control val-year" name="valor_departamento" id="input-valor_departamento" value="{{ old('nombres') }}" placeholder="Ejm: 2021" required>
                                                                <label class="control-label">Año:</label>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">¿Este es tu vehículo?</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <table id="datatable" class="table table-striped table-sm" cellspacing="0" width="100%">
                                                        <thead class=" text-primary">
                                                            <th>Seleccionar</th>
                                                            <th>Marca</th>
                                                            <th>Modelo</th>
                                                            <th>Referencia</th>
                                                            <th>Año</th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Seleccionado</td>
                                                                <td>Marca</td>
                                                                <td>Modelo</td>
                                                                <td>Referencia</td>
                                                                <td>Año</td>
                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                    <div class="tab-pane" id="second">

                                        <h6 class="col-sm-12 mp-form">Titular</h6>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">Datos del titular</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-5 col-sm-7 col-xs-8">
                                                        <div class="form-group label-floating">
                                                            <select class="form-control custom-select form-select-sm" name="compania_seguro" id="input-compania_seguro" required>
                                                                <option value="">-- Seleccione --</option>
                                                                <option value="1" {{ old('compania_seguro') == 1 ? 'selected' : '' }}>DNI</option>
                                                                <option value="2" {{ old('compania_seguro') == 2 ? 'selected' : '' }}>CE</option>
                                                                <option value="3" {{ old('compania_seguro') == 3 ? 'selected' : '' }}>CARNET DE DIPLOMÁTICO</option>
                                                                <option value="4" {{ old('compania_seguro') == 4 ? 'selected' : '' }}>PASAPORTE</option>
                                                            </select>
                                                            <label class="control-label">Tipo documento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-7 col-xs-8">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-ruc" name="ruc" id="input-ruc" value="{{ old('ruc') }}" minlength="11" maxlength="11" required>
                                                            <label class="control-label" for="input-ruc">N° Documento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-md-3 col-sm-4 col-xs-4">
                                                        <div class="form-group">
                                                            <a class="form-control input-search px-2">
                                                                <i class="material-icons">search</i> Buscar
                                                            </a>
                                                        </div>
                                                    </div>


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

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <select class="form-control custom-select form-select-sm" name="compania_seguro" id="input-compania_seguro" required>
                                                                <option value="">-- Seleccione --</option>
                                                                <option value="M" {{ old('compania_seguro') == 'M' ? 'selected' : '' }}>Masculino</option>
                                                                <option value="F" {{ old('compania_seguro') == 'F' ? 'selected' : '' }}>Femenino</option>
                                                            </select>
                                                            <label class="control-label">Tipo documento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="email" class="form-control" name="email" id="input-email" minlength="5" maxlength="40" value="{{ old('email') }}" required>
                                                            <label class="control-label" for="input-email">Correo</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control val-phone" name="celular" id="input-celular" minlength="11" maxlength="11" value="{{ old('celular') }}" required>
                                                            <label class="control-label" for="input-celular">Celular</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-sm-12">

                                                <h6 class="col-sm-12 pb-2 mp-form">Dirección</h6>

                                                <div class="col-sm-12 mp-form">

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="departamento" id="input-departamento" minlength="3" maxlength="40" value="{{ old('departamento') }}" required>
                                                            <label class="control-label" for="input-departamento">Departamento</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="provincia" id="input-provincia" minlength="3" maxlength="40" value="{{ old('provincia') }}" required>
                                                            <label class="control-label" for="input-provincia">Provincia</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="distrito" id="input-distrito" minlength="3" maxlength="40" value="{{ old('distrito') }}" required>
                                                            <label class="control-label" for="input-distrito">Distrito</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="form-group label-floating">
                                                            <input type="text" class="form-control" name="direccion" id="input-direccion" minlength="5" maxlength="70" value="{{ old('direccion') }}" required>
                                                            <label class="control-label" for="input-direccion">Dirección</label>
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
<script src="{{ url('/js/resource.js') }} "></script>
<script src="{{ url('/js/validations_mask.js') }} "></script>

<script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>

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