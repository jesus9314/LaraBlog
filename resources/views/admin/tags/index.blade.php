@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}">Nuevo Tag</a>
    @endcan
    <h1>Lista de Tags</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('info') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>

                </tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td width="10px">
                            @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $tag) }}">Editar</a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('admin.tags.destroy')
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop
