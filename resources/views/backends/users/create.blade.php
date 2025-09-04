@extends('templates.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Create User</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" required>
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="role" class="form-label">Role</label>
                        <select name="role_id" id="role" class="form-select" required>
                            <option value="">Please Select</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-12"></div>
                    <div class="col-lg-6 col-12 text-end my-3">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
