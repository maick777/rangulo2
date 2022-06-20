@extends('layouts.app', ['activePage' => 'salud', 'titlePage' => __('CRUD DE Salud')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 text-left ml-3 pr-5">
                        <a href="{{ url('cotizacion_salud') }}" target="_blank" class="btn btn-success">REGISTRAR SEGURO SALUD</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">LISTA DE SEGUROS SALUD</h4>
                        <p class="card-category">Correo enviado por los clientes</p>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-striped table-responsive d-md-table" width="100%">

                            <thead class=" text-primary">
                                <th>Fecha</th>
                                <th>Titular</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>¿Migración?</th>
                                <th>Estado</th>
                                <th class="text-right">Acciones</th>
                            </thead>

                            <tbody>
                                @foreach($data as $index => $row)
                                <tr>
                                    <td>{{ $row->created_at != null ? $row->created_at->isoFormat('DD/MM/YYYY, H:mm:ss'):'Sin fecha' }}</td>
                                    <td>{{ $row->titular_nombres}}</td>
                                    <td>
                                        <a href="mailto:{{ $row->email}}">{{ $row->email}}</a>
                                    </td>
                                    <td>
                                        <a href="whatsapp://send?text=&phone=:+51
                                        <?php $celular2 = str_replace("-", "", $row->celular);
                                        echo $celular2; ?>">
                                            {{ $row->celular }}
                                        </a>
                                    </td>
                                    <td class="td-actions">
                                        @if( $row->migracion == 2)
                                        <a href="#" class="btn btn-danger btn-link">
                                            NO
                                        </a>
                                        @else
                                        <a href="#" class="btn btn-primary btn-link">
                                            SI
                                        </a>
                                        @endif
                                    </td>
                                    <td class="td-actions">

                                        <form action="{{ route('salud.update', $row->id) }}" method="post">
                                            @csrf
                                            @method('put')

                                            @if( $row->id_estado == 0)
                                            <button class="btn btn-danger btn-link" type="submit">
                                                <i class="material-icons">crop_square</i><small> PENDIENTE</small>
                                            </button>
                                            @else
                                            <button class="btn btn-primary btn-link" type="submit">
                                                <i class="material-icons">check_box</i><small> ATENDIDO</small>
                                            </button>
                                            @endif

                                        </form>

                                    </td>

                                    <td class="td-actions text-right">

                                        <form action="{{ route('salud.archivar', $row->id) }}" class="form-del" method="post">
                                            @csrf
                                            @method('put')

                                            <a href="{{ route('salud.show', $row->id) }}" class="btn btn-primary btn-link">
                                                <i class="material-icons">visibility</i> <small>Ver</small>
                                                <div class="ripple-container"></div>
                                            </a>|

                                            <button class="btn btn-danger btn-link" type="submit">
                                                <i class="material-icons">delete</i> <small>Archivar</small>
                                                <div class="ripple-container"></div>
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                            
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $('.form-del').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡El registro se archivará!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Archivar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })

    });
</script>

@if (session('message') == 'archivado')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Registro Archivado'
    })
</script>
@endif

@if (session('message') == 'atendido')
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Estado de correo cambiado'
    })
</script>
@endif

@endsection