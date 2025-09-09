@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Customer Type</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('customer_type.create') }}" class="btn btn-primary mb-2">Create</a>
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer_types as $i => $customer_type)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $customer_type->name }}</td>
                            <td>
                                <a href="{{ route('customer_type.edit', $customer_type->id) }}"
                                    class="btn btn-success btn-sm me-1">Edit</a>
                                <a href="{{ route('customer_type.destroy', $customer_type->id) }}"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-3 float-end">{{ $customer_types->links() }}</div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .page-link {
            border-radius: 0 !important;
        }
    </style>
@endsection
