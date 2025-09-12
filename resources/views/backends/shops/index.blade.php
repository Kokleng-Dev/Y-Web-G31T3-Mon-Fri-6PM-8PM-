@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">{{ __('shop') }}</h2>
        </div>
        <div class="card-body">
            @if (checkPermission('shop', 'create'))
                <a href="{{ route('shop.create') }}" class="btn btn-primary">Create</a>
            @endif
            <table class="table table-sm table-bordered table-hover mt-4 text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="vertical-align: middle">
                    @foreach ($shops as $i => $shop)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>
                                @if ($shop->photo)
                                    <img src="{{ asset($shop->photo) }}" alt="" width="100">
                                @endif
                            </td>
                            <td>{{ $shop->name }}</td>
                            <td>{{ $shop->phone }}</td>
                            <td>{{ $shop->note }}</td>
                            <td>
                                @if (checkPermission('shop', 'edit'))
                                    <a href="{{ route('shop.edit', $shop->id) }}" class="btn btn-sm btn-success">Edit</a>
                                @endif
                                @if (checkPermission('shop', 'delete'))
                                    <a href="{{ route('shop.destroy', $shop->id) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="float-end">
                {{ $shops->links() }}
            </div>
        </div>
    </div>
@endsection
