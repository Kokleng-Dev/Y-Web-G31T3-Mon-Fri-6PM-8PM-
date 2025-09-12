@extends('templates.master')
@section('title')
    {{ __('product_category') }}
@endsection
@section('content')
    <a href="{{ route('product_category.create') }}" class="btn btn-primary mb-3">Create</a>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">{{ __('product_category') }}</h2>
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
                    @foreach ($product_categories as $index => $cat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>

                                <a href="{{ route('product_category.edit', $cat->id) }}" class="btn btn-sm btn-success">
                                    {{ __('edit') }}
                                </a>
                                <a href="{{ route('product_category.delete', $cat->id) }}" class="btn btn-sm btn-danger">
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
