@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Roles
                        @can('roles.create')
                            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Crear</a>
                        @endcan
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td width="10px">
                                            @can('roles.show')
                                                <a href="{{ route('roles.show', $product->id) }}"
                                                    class="btn btn-sm btn-link">Ver</a>
                                            @endcan
                                        </td>
                                        <td width="10px">
                                            @can('roles.edit')
                                                <a href="{{ route('roles.edit', $product->id) }}"
                                                    class="btn btn-sm btn-link">Editar</a>
                                            @endcan
                                        </td>
                                        <td width="10px">
                                            @can('roles.destroy')
                                                {!! Form::open(['route' => ['roles.destroy', $product->id], 'method' =>
                                                'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @can('roles.index')
                            {{ $roles->links('pagination::bootstrap-4') }}
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
