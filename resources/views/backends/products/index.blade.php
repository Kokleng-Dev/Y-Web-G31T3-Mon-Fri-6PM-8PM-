@extends('templates.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Product</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('product.create') }}" class="btn btn-primary mb-2">Create</a>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Shop</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>qty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="vertical-align: middle">
                    @foreach ($products as $key => $pro)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if ($pro->photo)
                                    <img src="{{ asset($pro->photo) }}" alt="" width="100">
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-primary">{{ $pro->shop->name }}</span>
                            </td>
                            <td>{{ $pro->category->name }}</td>
                            <td>{{ $pro->name }}</td>
                            <td>{{ $pro->price }}</td>
                            <td>{{ $pro->qty }}</td>
                            <td>
                                <a href="{{ route('product.edit', $pro->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('product.delete', $pro->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
