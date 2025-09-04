@extends('templates.master')
@section('title')
    Role
@endsection
@section('content')
    <a href="{{ route('role.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Role</h2>
        </div>
        <div class="card-body">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $index => $role)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a href="{{ route('role_permission.index', $role->id) }}"
                                    class="btn btn-sm btn-dark">Permission</a>

                                <a href="{{ route('role.edit', $role->id) }}" class="btn btn-sm btn-success">
                                    {{ __('edit') }}
                                </a>
                                <a href="{{ route('role.delete', $role->id) }}" class="btn btn-sm btn-danger">
                                    {{ __('delete') }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
