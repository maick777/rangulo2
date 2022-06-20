<div class="card ">
    <div class="card-header card-header-success">
        <h4 class="card-title">{{$modo}} Ajecutivo</h4>
        <p class="card-category">{{ __('Información del ejecutivo') }}</p>
    </div>

    <div class="card-body ">
        @if (session('status'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Nombres y Apellidos') }} <small class="m-red">*</small></label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('nombres') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" id="input-nombres" type="text" minlength="5" maxlength="70" placeholder="" value="{{ isset($usuario->nombres)?$usuario->nombres:old('nombres') }}" required="true" aria-required="true" />
                    @if ($errors->has('nombres'))
                    <span id="nombres-error" class="error text-danger" for="input-nombres">{{ $errors->first('nombres') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Email') }} <small class="m-red">*</small></label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" minlength="5" maxlength="50" value="{{ isset($usuario->email)?$usuario->email:old('email') }}" required="true" aria-required="true" />
                    @if ($errors->has('email'))
                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Cargo') }} </label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('cargo') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}" name="cargo" id="input-cargo" type="text" minlength="5" maxlength="50" value="{{ isset($usuario->cargo)?$usuario->cargo:old('cargo') }}" />
                    @if ($errors->has('cargo'))
                    <span id="cargo-error" class="error text-danger" for="input-cargo">{{ $errors->first('cargo') }}</span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Tipo Seguro') }}<small class="m-red"> *</small></label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('tipo_seguro') ? ' has-danger' : '' }}">
                    <select class="browser-default custom-select form-select-sm" name="tipo_seguro" id="input-tipo_seguro" aria-label=".form-select-sm example" required>
                        <option value="">-- Seleccione --</option>
                        <option value="Seguro Hogar" {{ isset($usuario->tipo_seguro)?$usuario->tipo_seguro == 'Seguro Hogar'  ? 'selected' : '':old('tipo_seguro') == 'Seguro Hogar' ? 'selected' : '' }}>Seguro Hogar</option>
                        <option value="Seguro Salud" {{ isset($usuario->tipo_seguro)?$usuario->tipo_seguro == 'Seguro Salud'  ? 'selected' : '':old('tipo_seguro') == 'Seguro Salud' ? 'selected' : '' }}>Seguro Salud</option>
                        <option value="Seguro EPS" {{ isset($usuario->tipo_seguro)?$usuario->tipo_seguro == 'Seguro EPS'  ? 'selected' : '':old('tipo_seguro') == 'Seguro EPS' ? 'selected' : '' }}>Seguro EPS</option>
                        <option value="Seguro Sctr" {{ isset($usuario->tipo_seguro)?$usuario->tipo_seguro == 'Seguro Sctr'  ? 'selected' : '':old('tipo_seguro') == 'Seguro Sctr' ? 'selected' : '' }}>Seguro Sctr</option>
                        <option value="Todo" {{ isset($usuario->tipo_seguro)?$usuario->tipo_seguro == 'Todo'  ? 'selected' : '':old('tipo_seguro') == 'Todo' ? 'selected' : '' }}>Todo</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <label class="col-sm-2 col-form-label">{{ __('Contraseña') }}<small class="m-red">*</small></label>
            <div class="col-sm-7">
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="text" @if($modo=='Crear' ) value="secret@rangulo2022" @else value="" @endif />
                    @if($modo == 'Crear')
                    <small>Contraseña sugerida</small>
                    @endif
                    @if ($errors->has('password'))
                    <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
        </div>

    </div>

    <div class="card-footer ml-auto mr-auto">

        <a href="{{ url('/user') }}" class="btn btn-primary">
            <i class="material-icons">arrow_back</i>Volver
        </a>

        <button type="submit" class="btn btn-success"> <i class="material-icons">save</i> Guardar</button>

    </div>

</div>


@section('js')

@if (session('message') == 'email_duplicado')
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '¡El correo ya está en uso, Elija otro correo!',
        confirmButtonText: 'Aceptar',
    })
</script>

@endif


@endsection