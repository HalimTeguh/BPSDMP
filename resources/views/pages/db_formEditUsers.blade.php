@extends('master')

@section('title')
    Users
@endsection

@section('content')
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/users/{{ $users->id }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" value="{{ $users->username }}">
                        </div>
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" value="{{ $users->password }}">
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="img">image</label><br>
                            <img src="{{ asset('/img/profile/'. $users->image) }}" alt="" width="200px">
                            <input type="file" class="form-control mb-2" id="img" name="img" value="{{ $users->image }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/dashboard/users" class="btn btn-danger">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

