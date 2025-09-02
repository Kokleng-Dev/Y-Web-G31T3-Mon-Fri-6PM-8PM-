@extends('templates.master')
@section('title')
    {{ my_title() }}
@endsection
@section('content')
    @include('backends.customers.create')
    @if ($customer)
        @include('backends.customers.edit')
    @endif
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0"> {{ __('customer') }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-1">
                    Select
                </div>
                <div class="col-1">
                    <select class="form-select form"
                        onchange="changePerPage('{{ route('customer.index') }}?per_page='+this.value)">
                        <option value="10"
                            {{ request()->get('per_page') == 10 || request()->get('per_page') == null ? 'selected' : '' }}>
                            10</option>
                        <option value="50" {{ request()->get('per_page') == 50 ? 'selected' : '' }}>
                            50
                        </option>
                        <option value="100" {{ request()->get('per_page') == 100 ? 'selected' : '' }}>100</option>
                    </select>
                </div>
                <div class="col text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                        Create
                    </button>
                </div>
            </div>
            <a href="{{ route('customer.export') }}" class="btn btn-sm btn-success">
                <i class="fas fa-file-excel"></i> Export
            </a>
            @include('backends.customers.import')
            <table class="table table-border table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>
                            Address
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $index => $cus)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $cus->customer_type_name }}</td>
                            <td>{{ $cus->full_name }}</td>
                            <td>{{ $cus->email }}</td>
                            <td>{{ $cus->phone }}</td>
                            <td>{{ $cus->address }}</td>
                            <td>
                                <a href="{{ route('customer.index') }}?id={{ $cus->id }}"
                                    class="btn btn-success btn-sm me-1">Edit</a>
                                <a href="{{ route('customer.delete', $cus->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="my-2">
                {{ $customers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function changePerPage(url) {
            window.location.href = url
        }
    </script>
@endsection
