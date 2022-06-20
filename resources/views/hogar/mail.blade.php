<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Mail HOGAR</title>
</head>

<body>

    <div class="container">

        <div class="row">

            @if($para == 'cliente')
            <div class="col-sm-12">
                <label><strong>Estimad@ </strong> {{ $msg['nombres'] }},</label> <br>
            </div>

            <div class="col-sm-12">
                <label>Le informamos que su solicitud ha sido enviado de manera satisfactoria.
                </label> <br>
                <label>Aquí detallamos su información:</label>
                <br>
            </div>
            @endif

            <label>------------------------------------------------</label>
            <h3>INFORMACIÓN DEL TITULAR</h3>

            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['nombres'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['fecha_nacimiento'])->format('d/m/Y') }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Correo: </label></strong>
                <label>{{ $msg['email'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Celular: </label></strong>
                <label>{{ $msg['celular'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Dirección: </label></strong>
                <label>{{ $msg['direccion'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Distrito: </label></strong>
                <label>{{ $msg['distrito'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Provincia: </label></strong>
                <label>{{ $msg['provincia'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Departamento: </label></strong>
                <label>{{ $msg['departamento'] }}</label>
            </div>

            <label>------------------------------------------------</label>
            <h3>DETALLES DE EDIFICACIÓN</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Tipo de edificación: </label></strong>
                <label>
                    @if ($msg['tipo_edificacion'] == 1)
                    Casa
                    @else
                    Departamento
                    @endif
                </label>

            </div>

            @if ($msg['tipo_edificacion'] == 1)
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Valor US$: </label></strong>
                <label>{{ $msg['valor_casa'] }}</label>
            </div>
            @endif

            @if ($msg['tipo_edificacion'] == 2)
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Valor US$: </label></strong>
                <label>{{ $msg['valor_departamento'] }}</label>
            </div>
            @endif

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Valor del contenido US$: </label></strong>
                <label>{{ $msg['valor_contenido'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Tipo de cobertura: </label></strong>
                <label>{{ $msg['cobertura'] }}
                    @if ($msg['cobertura'] == 1)
                    A.- COBERTURA BÁSICA <small>(Sólo edificación)</small>
                    @elseif ($msg['cobertura'] == 2)
                    B.- COBERTURA COMPLETA <small>(Edificación y contenido)</small>
                    @elseif ($msg['cobertura'] == 3)
                    C.- COBERTURA RESTRINGIDA <small>(Solo contenido)</small>
                    @else
                    @endif

                </label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Sistema de alarma: </label></strong>
                <br>
                <label>
                    @if ($msg['seguridad1'] == 1)
                    Alarma
                    @else
                    @endif
                </label> <br>
                <label>
                    @if ($msg['seguridad2'] == 1)
                    Cámaras de video
                    @else
                    @endif
                </label><br>

                <label>
                    @if ($msg['seguridad3'] == 1)
                    Puertas con SUPER LOOK o CANTOL
                    @else
                    @endif
                </label><br>

            </div>


            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Uso de casa: </label></strong>
                <label>
                    @if ($msg['tipo_uso_casa'] ==1)
                    Vivienda familiar
                    @else
                    Para alquiler
                    @endif
                </label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">¿Es en la playa? </label></strong>
                <label>
                    @if ($msg['casa_playa'] == 1)
                    Si
                    @else
                    No
                    @endif
                </label>
            </div>

            @if($msg['casa_playa'] == 1)
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">¿A cuantos metros de la orilla? </label></strong>
                <label>{{ $msg['metros_orilla'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">¿Es club de playa? </label></strong>
                <label>
                    @if ($msg['club_playa'] == 1)
                    Si
                    @else
                    No
                    @endif
                </label>
            </div>
            @endif

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Tipo de pago: </label></strong>
                <label>
                    @if ($msg['tipo_pago'] == 1)
                    Al contado
                    @elseif ($msg['tipo_pago'] == 2)
                    En 4 cuotas sin interés
                    @elseif ($msg['tipo_pago']== 3)
                    En 12 cuotas con interés
                    @else
                    @endif
                    <label>

            </div>

            <label>------------------------------------------------</label>
            <h3>MÁS DETALLES DE LA EDIFICACIÓN</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Metros cuadrados construidos: </label></strong>
                <label>{{ $msg['metro_cuadrado'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Año de construcción: </label></strong>
                <label>{{ $msg['anio_construccion'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">N° pisos: </label></strong>
                <label>{{ $msg['numero_pisos'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">N° sótanos o semi sótanos: </label></strong>
                <label>{{ $msg['numero_sotanos'] }}</label>
            </div>

            <label>------------------------------------------------</label> <br><br>

            @if($para == 'cliente')
            <label> * En breve nuestro ejecutivo a cargo se estará comunicando.</label> <br><br>
            @endif
            <a href="https://rangulo.pe/">Página web R-Angulo</a> <br> <br>

            <label>Cotiza con nosotros:</label> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_eps">Seguro EPS</a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_salud">Seguro Salud </a> <br>
            <a href="https://cotiza.rangulo.pe/cotizacion_hogar">Seguro Hogar</a><br>
            <a href="https://cotiza.rangulo.pe/cotizacion_sctr">Seguro Sctr</a><br>

        </div>

    </div>

</body>

</html>