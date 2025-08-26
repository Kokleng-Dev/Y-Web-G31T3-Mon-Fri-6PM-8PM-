@extends('templates.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Product</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-2">Create</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>qty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $pro)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $pro->category->name }}</td>
                            <td>{{ $pro->name }}</td>
                            <td>{{ $pro->price }}</td>
                            <td>{{ $pro->qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
