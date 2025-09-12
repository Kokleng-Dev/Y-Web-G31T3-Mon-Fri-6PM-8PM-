@extends('templates.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Permission</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('permission.update', $permission->id) }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-6">
                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $permission->name }}"
                                required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="key" class="form-label">Key</label>
                            <input type="text" class="form-control" name="key" value="{{ $permission->key }}"
                                required>
                        </div>
                        <div class="col-lg-6 col-12 text-end my-3">
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
