@extends('admin.index')
@section('content')
    <section class="content" style="margin-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Pengguna</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Username:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="roles">Role:</label>
                                    <select name="roles" id="roles" class="form-control">
                                        <option value="user" {{ $user->roles == 'user' ? 'selected' : '' }}>User</option>
                                        <option value="admin" {{ $user->roles == 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                </div>                                
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
