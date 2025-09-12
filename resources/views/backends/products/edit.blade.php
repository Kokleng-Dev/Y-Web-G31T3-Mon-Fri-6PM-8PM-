@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Edit Product</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('product.update', $product->id) }}') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="shop_id">{{ __('shop') }}</label>
                    <select name="shop_id" id="shop_id" class="form-select" required>
                        <option value="">{{ __('Select a shop') }}</option>
                        @foreach ($shops as $shop)
                            <option value="{{ $shop->id }}" {{ $shop->id == $product->shop_id ? 'selected' : '' }}>
                                {{ $shop->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" value="{{ $product->name }}" id="name" name="name">
                    <span class="text-danger">
                        {{ $errors->first('name') }}
                    </span>
                </div>

                <div class="mb-3">
                    <label for="price">Product Price</label>
                    <input type="number" class="form-control" value="{{ $product->price }}" id="price" name="price"
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
                            <option value="{{ $category->id }}"
                                {{ $category->id == $product->product_category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="qty">Product Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" value="{{ $product->qty }}">
                </div>

                <div class="mb-3">
                    <label for="img">Product Picture</label>
                    <input type="file" class="form-control" id="img" name="photo">
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
@endsection
