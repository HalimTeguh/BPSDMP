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
                    <div class="text-center" >
                        <img src="{{ asset('/img/kegiatan/' . $activity->image) }}" alt="" width="500px">
                    </div>
                    <form action="/dashboard/activity" method="GET" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter your title" value="{{ $activity->title }}" readonly>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                  <label for="date">Date</label>
                                  <input type="date" class="form-control" id="date" name="date" placeholder="Enter your date" value="{{ $activity->date }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" name="description" id="" cols="30" rows="10" readonly>{{ $activity->description }}</textarea>
                        </div>

                        <div class="form-group">
                          <label for="excerpt">Excerpt</label>
                          <textarea class="form-control" name="excerpt" id="" cols="30" rows="5" readonly>{{ $activity->excerpt }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-danger">Back</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

