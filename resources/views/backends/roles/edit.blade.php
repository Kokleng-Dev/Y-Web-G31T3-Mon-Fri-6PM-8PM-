@extends('templates.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Edit Role</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('role.update', $role->id) }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $role->name }}" required>
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="note" class="form-label">Note</label>
                            <input type="text" class="form-control" name="note" value="{{ $role->note }}"
                                value="description" required>
                        </div>
                        <div class="col-lg-6 col-12 text-end my-3">
                            <button class="btn btn-sm btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
