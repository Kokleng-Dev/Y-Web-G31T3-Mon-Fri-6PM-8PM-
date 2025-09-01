@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Create Product</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name">
                    <span class="text-danger">
                        {{ $errors->first('name') }}
                    </span>
                </div>

                <div class="mb-3">
                    <label for="price">Product Price</label>
                    <input type="number" class="form-control" value="{{ old('price') }}" id="price" name="price"
                        step="0.01">
                    <span class="text-danger">
                        {{ $errors->first('price') }}
                    </span>
                </div>

                <div class="mb-3">
                    <label for="category">Product Category</label>
                    <select class="form-select" id="category" name="product_category_id">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="qty">Product Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty">
                </div>

                <div class="mb-3">
                    <label for="img">Product Picture</label>
                    <input type="file" class="form-control" id="img" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Create Product</button>
            </form>
        </div>
    </div>
@endsection
