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
                <label><strong>Estimad@ </strong> {{ $msg['titular_nombres'] }},</label> <br>
            </div>

            <div class="col-sm-12">
                <label>Le informamos que su solicitud ha sido enviado de manera satisfactoria.
                </label> <br>
                <label>Aquí detallamos su información:</label>
                <br>
            </div>
            @endif

            <label>------------------------------------------------</label>
            <h3>DATOS DEL TITULAR</h3>

            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['titular_nombres'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['titular_fecha_nacimiento'])->format('d/m/Y') }}</label>

            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Correo: </label></strong>
                <label>{{ $msg['email'] }}</label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Celular: </label></strong>
                <label>{{ $msg['celular'] }}</label>
            </div>

            <label>------------------------------------------------</label>
            <h3>DATOS DEL CÓNYUGUE</h3>

            @if($msg['conyugue_nombres'] != '')
            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['conyugue_nombres'] }}</label>
            </div>
            @endif

            @if($msg['conyugue_fecha_nacimiento'] != '')
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['conyugue_fecha_nacimiento'])->format('d/m/Y') }}</label>
            </div>
            @endif

            <label>------------------------------------------------</label>
            <h3>DATOS DE LOS DEPENDIENTES</h3>

            @if($msg['hijo_nombres'] != '')
            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['hijo_nombres'] }}</label>
            </div>
            @endif
            @if($msg['hijo_fecha_nacimiento'] != '')
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['hijo_fecha_nacimiento'])->format('d/m/Y') }}</label>
            </div> <br>
            @endif

      
            @if($msg['hijo_nombres2'] != '')
            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['hijo_nombres2'] }}</label>
            </div>
            @endif
            @if($msg['hijo_fecha_nacimiento2'] != '')
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['hijo_fecha_nacimiento2'])->format('d/m/Y') }}</label>
            </div> <br>
            @endif

            

            @if($msg['hijo_nombres3'] != '')
            <div class="col-sm-12">
                <strong><label class="col-lg-4">Nombres y Apellidos: </label></strong>
                <label>{{ $msg['hijo_nombres3'] }}</label>
            </div>
            @endif

            @if($msg['hijo_fecha_nacimiento3'] != '')
            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Fecha Nacimiento: </label> </strong>
                <label>{{ Carbon\Carbon::parse($msg['hijo_fecha_nacimiento3'])->format('d/m/Y') }}</label>
            </div>
            @endif

            <label>------------------------------------------------</label>
            <h3>PLAN</h3>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">¿Cuénta con póliza actualmente? </label></strong>
                <label>
                    @if ($msg['migracion'] == 2)
                    No
                    @else
                    Si
                    @endif
                </label>
            </div>

            <div class="col-sm-12">
                <strong> <label class="col-lg-4">Tipo plan: </label></strong>
                <br>
                <label>
                    @if ($msg['plan1'] == 1)
                    A.- Plan Internacional
                    @else
                    @endif
                </label> <br>


                <label>
                    @if ($msg['plan2'] == 1)
                    B.- Plan Nacional <small>(Con reembolso médico)</small>
                    @else
                    @endif
                </label> <br>

                <label>
                    @if ($msg['plan3'] == 1)
                    C.- Plan Nacional <small>(Sin reembolso médico)</small>
                    @else
                    @endif
                </label> <br>

                <label>
                    @if ($msg['plan4'] == 1)
                    D.- Plan Red Preferente
                    @else
                    @endif
                </label>

            </div>


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