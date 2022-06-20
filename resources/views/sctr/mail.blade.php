<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Mail Sctr</title>
</head>

<body>

    <div class="container">

        <div class="row">

            @if($para == 'cliente')
            <div class="col-sm-12">
                <label><strong> Estimad@: </strong>{{ $msg['nombre_contacto'] }},</label> <br><br>
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
                <strong> <label class="col-lg-4">Actividad a realizar: </label></strong>
                <label>{{ $msg['actividad'] }}</label>
            </div>

            <label>------------------------------------------------</label>
            <h3>DATOS DEL CONTACTO</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Nombres: </label></strong>
                <label>{{ $msg['nombre_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Correo: </label></strong>
                <label>{{ $msg['email_contacto'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Celular: </label></strong>
                <label>{{ $msg['celular_contacto'] }}</label>
            </div>

            <label>------------------------------------------------</label>
            <h3>TRABAJADORES</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Total trabajadores</label></strong>
                <label>{{ $msg['total_trabajadores'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Planilla total de trabajador S/. : </label></strong>
                <label>{{ $msg['planilla_total'] }}</label>
            </div>

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