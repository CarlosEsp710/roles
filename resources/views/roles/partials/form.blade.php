<div class="form-group">
    {!! Form::label('name', 'Nombre del Role') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
    <label>{!! Form::radio('name', 'Admin') !!} Acceso total</label>
    <label>{!! Form::radio('name', 'Suspendido') !!} Ningún acceso</label>
</div>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
            <li>
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, null) !!}
                    {{ $permission->name }}
                </label>
            </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
</div>
