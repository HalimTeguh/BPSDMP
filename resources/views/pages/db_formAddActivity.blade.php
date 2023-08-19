@extends('master')

@section('title')
    Activity
@endsection

@section('content')
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Activity</h6>
                </div>
                <div class="card-body">
                    <form action="/dashboard/activity" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title" value="{{ old('title') }}">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="date">Date</label>
                                  <input type="date" class="form-control" id="date" name="date" placeholder="Enter your date" value="{{ old('date') }}">
                                </div>
                                @error('date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="img">image</label>
                                    <input type="file" class="form-control mb-2" id="img" name="img" value="{{ old('img') }}">
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" name="description" id="" cols="30" rows="10" >{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                          <label for="excerpt">Excerpt</label>
                          <textarea class="form-control" name="excerpt" id="" cols="30" rows="5">{{ old('excerpt') }}</textarea>
                        </div>
                        @error('excerpt')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

