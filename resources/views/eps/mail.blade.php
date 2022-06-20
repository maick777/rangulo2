<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Mail EPS</title>
</head>

<body>

    <div class="container">

        <div class="row">

            @if($para == 'cliente')
            <div class="col-sm-12">
                <label><strong> Estimad@: </strong>{{ $msg['nombre_contacto'] }},</label> <br>
                <label>{{ $msg['cargo_contacto'] }},</label><br> <br>
            </div>

            <div class="col-sm-12">
                <label>Le informamos que su solicitud ha sido enviado de manera satisfactoria.
                </label> <br>
                <label>Aquí detallamos su información:</label>
                <br>
            </div>
            @endif

            <label>------------------------------------------------</label>
            <h3>DATOS DE LA EMPRESA</h3>

            <div class="col-sm-12">
                <strong><label class="col-lg-4">Razón Social: </label></strong>
                <label>{{ $msg['razon_social'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Ruc: </label> </strong>
                <label>{{ $msg['ruc'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Celular: </label></strong>
                <label>{{ $msg['telefono'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Dirección: </label></strong>
                <label>{{ $msg['direccion'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Nombre del contacto: </label></strong>
                <label>{{ $msg['nombre_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Cargo del contacto: </label></strong>
                <label>{{ $msg['cargo_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Celular del contacto: </label></strong>
                <label>{{ $msg['celular_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Correo del contacto: </label></strong>
                <label>{{ $msg['email_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Nombre del representante: </label></strong>
                <label>{{ $msg['nombre_representante_legal'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Cargo del representante: </label></strong>
                <label>{{ $msg['cargo_representante_legal'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Broker: </label></strong>
                <label>{{ $msg['broker'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Planilla Anual S/.: </label></strong>
                <label>{{ $msg['planilla_anual'] }}</label>
            </div>


            <label>------------------------------------------------</label>
            <h3>TOTAL APORTES AL AÑO</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Con gratificación</label></strong>
                <label>{{ $msg['nro_aporte_anio_con_grati'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Sin gratificación: </label></strong>
                <label>{{ $msg['nro_aporte_anio_sin_grati'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Total trabajadores en planilla: </label></strong>
                <label>{{ $msg['numero_total_trabajadores'] }}</label>
            </div>

            <label>------------------------------------------------</label>
            <h3>COMPOSICIÓN DE GRUPO</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Titular solo: </label></strong>
                <label>{{ $msg['titutar_solo'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Totular + 1 dependiente: </label></strong>
                <label>{{ $msg['titular1_dependiente'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Titular + 2 dependientes: </label></strong>
                <label>{{ $msg['titular2_dependiente'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Titular + 3 o más dependientes : </label></strong>
                <label>{{ $msg['titular3_dependiente'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Total asegurados en la la eps actual: </label></strong>
                <label>{{ $msg['numero_total_asegurados_eps_actual'] }}</label>
            </div>

            <label>------------------------------------------------</label>

            <h3>SEGUROS ACTUALES</h3>


            <div class="col-sm-12">
                <strong> <label class="col-lg-4">¿Cuéntas con EPS actualmente?: </label></strong>
                <label>@if($msg['eps'] == 1)
                    SI
                    @else
                    NO
                    @endif</label>
            </div>

            @if($msg['eps'] == 1)
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Eps actual: </label></strong>
                <label>{{ $msg['eps_actual'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Compañia de seguros </label></strong>
                <label>{{ $msg['compania_seguro'] }}</label>
            </div>

            @endif

            <label>------------------------------------------------</label> <br><br>

            @if($para == 'cliente')
            <label> * En breve nuestro ejecutivo a cargo se estará comunicando.</label> <br><br>
            @endif
            <a href="https://rangulo.pe/">Página web R-Angulo</a> <br> <br>

            <label>Cotiza con nosotros:</label> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_eps">Seguro EPS</a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_salud">Seguro Salud </a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_hogar">Seguro Hogar</a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_sctr">Seguro Sctr</a> <br>

        </div>

    </div>

</body>

</html>