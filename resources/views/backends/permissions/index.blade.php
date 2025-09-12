@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Permission</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('permission.create') }}" class="btn btn-primary">Create</a>
            <table class="table table-sm table-bordered table-hover mt-4">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Key</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $i => $permission)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->key }}</td>
                            <td>
                                <a href="{{ route('permission_feature.index', $permission->id) }}"
                                    class="btn btn-sm btn-info">Feature</a>
                                <a href="{{ route('permission.edit', $permission->id) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('permission.destroy', $permission->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
