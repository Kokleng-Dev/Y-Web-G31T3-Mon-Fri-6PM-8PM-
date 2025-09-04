@extends('templates.master')
@section('content')
    <a href="{{ route('role.index') }}" class="btn btn-danger mb-3">Back</a>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-2">Role Permission For Role : {{ $role->name }}</h2>
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
                <tbody style="vertical-align: middle">
                    @foreach ($role_permissions as $i => $permission)
                        @if ($isNew)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $permission->name }}</td>
                                <td class="p-0 b-0">
                                    <table class="table m-0">
                                        <tr class="text-center b-0">
                                            @foreach ($permission->permission_feature as $feature)
                                                <td class="b-0">
                                                    {{ $feature->name }} <br>
                                                    <input type="checkbox">
                                                </td>
                                            @endforeach

                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        @else
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
