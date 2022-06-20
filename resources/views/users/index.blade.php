@extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('CRUD de Hogar')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="row">
          <div class="col-12 text-left ml-3 pr-5">
            <a href="{{ route('user.create') }}" class="btn btn-success"><i class="material-icons">person_add</i> Agregar</a>
          </div>
        </div>

        <div class="card">

          <div class="card-header card-header-success">
            <h4 class="card-title "> LISTA DE EJECUTIVOS </h4>
            <p class="card-category">
              - Los Ejecutivos: Claudia (EPS), Karen(SALUD, SCTR) y Fernando(HOGAR) recibirán correos del cliente y la copia:<strong> ricardo.angulo@rangulo.pe </strong>.<br>
              - Si agrega más ejecutivos, estos solo tendrán acceso al sistema, más no recibirán correo del cliente.
            </p>
          </div>

          <div class="card-body">

            <table id="datatable" class="table table-striped table-responsive d-md-table" data-sort="[0, desc]" width="100%">

              <thead class=" text-primary">
                <tr>
                  <th>Nombres</th>
                  <th>Correo</th>
                  <th>Cargo</th>
                  <th>Seguro</th>
                  <th>¿Recibe Correo?</th>
                  <th class="text-right">Acciones</th>
                </tr>
              </thead>

              <tbody>
                @foreach($data as $index => $row)
                <tr>
                  <td>{{ $row->nombres}}</td>
                  <td>
                    <a href="mailto:{{ $row->email}}">{{ $row->email}}</a>
                  </td>
                  <td>{{ $row->cargo}}</td>

                  <td>@if($row->id == 4)
                    {{ $row->tipo_seguro }} - Sctr
                    @else
                    {{ $row->tipo_seguro }}
                    @endif
                  </td>

                  <td class="td-actions"> @if( $row->recibe_email == 0)
                    <a class="btn btn-danger btn-link">NO</a>
                    @else
                    <a class="btn btn-primary btn-link">SI</a>
                    @endif
                  </td>
                  <td class="td-actions text-right">
                    <form action="{{ route('user.destroy', $row->id) }}" class="form-del" method="post">
                      @csrf
                      @method('DELETE')

                      <a href="{{ route('user.edit', $row->id) }}" class="btn btn-primary btn-link">
                        <i class="material-icons">edit</i> <small>Editar</small>
                        <div class="ripple-container"></div>
                      </a>|

                      <button class="btn btn-danger btn-link" type="submit">
                        <i class="material-icons">clear</i> <small>Eliminar</small>
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

@if (session('message') == 'eliminado')
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
    title: 'Registro Eliminado'
  })
</script>
@endif

@if (session('message') == 'agregado')
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
    title: 'Registro Agregado'
  })
</script>
@endif


@if (session('message') == 'actualizado')
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
    title: 'Registro Actualizado'
  })
</script>
@endif

<script>
  $('.form-del').submit(function(e) {
    e.preventDefault();

    Swal.fire({
      title: '¿Estás seguro?',
      text: "¡No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })

  });
</script>

@if (session('message') == 'admin')
<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '¡No puedes eliminar al Super Administrador!',
    confirmButtonText: 'Aceptar',
  })
</script>
@endif




@endsection