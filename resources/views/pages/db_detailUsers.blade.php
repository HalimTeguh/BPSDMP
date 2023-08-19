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
                    <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/users/" method="GET"> 
                        @csrf
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" value="{{ $users->username }}" readonly>
                        </div>
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password" value="{{ $users->password }}" readonly>
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="img">image</label><br>
                            <img src="{{ asset('/img/profile/'. $users->image) }}" alt="" width="200px">
                        </div>
                        <button type="submit" class="btn btn-danger">Back</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

