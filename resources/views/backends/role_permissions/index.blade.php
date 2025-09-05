@extends('templates.master')
@section('content')
    <a href="{{ route('role.index') }}" class="btn btn-danger mb-3">Back</a>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-2">Role Permission For Role : {{ $role->name }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('role_permission.set_permission') }}" method="POST">
                @csrf
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    {{-- [
                    [
                        'permission_id' => 12,
                        'feature' => [
                            [
                                feature_id => 4
                                value => 1
                            ],
                            [
                                feature_id => 1
                                value => 1
                            ]
                        ]
                    ],
                    []
                ] --}}
                    <tbody style="vertical-align: middle">

                        @foreach ($permissions as $i => $permission)
                            <input type="hidden" name="role_id" value="{{ $role->id }}">
                            <input type="hidden" name="role_permissions[{{ $i }}][permission_id]"
                                value="{{ $permission->id }}">
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $permission->name }}</td>
                                <td class="p-0 b-0">
                                    <table class="table m-0">
                                        <tr class="text-center b-0">
                                            @foreach ($permission->permission_feature as $j => $feature)
                                                @php
                                                    // check role permission table exist
                                                    $is_this_feature_extist = DB::table('role_permissions')
                                                        ->where('role_id', $role->id)
                                                        ->where('permission_id', $permission->id)
                                                        ->where('permission_feature_id', $feature->id)
                                                        ->exists();
                                                @endphp

                                                <input type="hidden"
                                                    name="role_permissions[{{ $i }}][features][{{ $j }}][feature_id]"
                                                    value="{{ $feature->id }}">
                                                <td class="b-0">
                                                    <label for="{{ $feature->id }}">{{ $feature->name }}</label> <br>
                                                    <input id="{{ $feature->id }}" type="checkbox"
                                                        onclick="checkPermission({{ $feature->id }})"
                                                        name="role_permissions[{{ $i }}][features][{{ $j }}][value]"
                                                        value="1" {{ $is_this_feature_extist ? 'checked' : '' }}>
                                                </td>
                                            @endforeach
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <button class="btn btn-sm btn-success" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection


@push('js')
    <script>
        function checkPermission(inputId) {
            var input = document.getElementById(inputId);
            if (!input.checked) {
                input.value = 0;
            } else {
                input.value = 1;
            }
        }
    </script>
@endpush
