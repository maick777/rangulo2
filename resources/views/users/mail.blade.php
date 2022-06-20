<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Mail user</title>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-sm-12">
                <label>Estimad@ <strong> {{ $msg['nombres'] }},</strong></label> <br>
                <strong><label>{{ $msg['cargo'] }},</label> </strong><br>
            </div>

            @if($msg['tipo_seguro'] == 'Todo')
            <div class="col-sm-12">
                <p>Se le ha asignado como Super Administrador del sistema: <strong>Cotizador R. Angulo</strong><br>
                    Dónde usted podrá realizar las siguientes acciones:<br>
                    - Ver los registros enviados por los clientes del <strong>Seguro Salud.</strong> <br>
                    - Ver los registros enviados por los clientes del <strong>Seguro Hogar.</strong><br>
                    - Ver los registros enviados por los clientes del <strong>Seguro EPS.</strong><br>
                    - Realizar seguimiento de correos: ATENDIDOS y PENDIENTES <br>
                    - Archivar los correos ya atendidos. <br>
                    - Registrar y Actualizar datos de los Administradores. <br>
                    - Eliminar a los Administradores registrados. <br>
                    - Ver y Actualizar su perfil. <br>
                    - Cambiar su Contraseña. <br>
                </p>
            </div>
            @else
            <div class="col-sm-12">
                <p>Se le ha asignado el módulo: <strong>{{ $msg['tipo_seguro'] }} </strong><br>
                    Dónde usted podrá realizar las siguientes acciones:<br>
                    - Ver los registros enviados por los clientes del seguro asignado. <br>
                    - Cambiar el Estado del correo: ATENDIDO | PENDIENTE <br>
                    - Archivar los correos ya atendidos. <br>
                    - Ver y Actualizar su perfil. <br>
                    - Cambiar su Contraseña. <br> <br>
                </p>
            </div>

            @endif

            <label>Datos de acceso al Sistema:</label> <br>
            <label>------------------------------------------------</label><br>

            <div class="col-sm-12">
                <strong><label class="col-lg-4">Usuario: </label></strong>
                <label>{{ $msg['email'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong><label class="col-lg-4">Contraseña: </label></strong>
                <label>{{ $msg['password'] }}</label> <br> <small>(Importante: Cambiar su Contraseña en el sistema)</small>
            </div><br>

            <div class="col-sm-12">
                <label>Para acceder al sistema ingrese al: <a href="https://cotiza.rangulo.pe/">Cotizador R. Angulo</a></label> <br>
            </div> <br><br><br>

            <a href="https://rangulo.pe/">Página web R-Angulo</a> <br> <br>

            <label>Cotiza con nosotros:</label> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_eps">Seguro EPS</a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_salud">Seguro Salud </a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_hogar">Seguro Hogar</a>
            <a href="https://cotiza.rangulo.pe/cotizacion_sctr">Seguro Sctr</a>

            <label> Gracias.</label>
            <br><br><br><br><br>

        </div>

    </div>

</body>

</html>