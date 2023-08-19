@extends('master')

@push('style')
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('/template/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/template/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script>
      $(function () {
        $("#dataTable").DataTable();
      });
    </script>    
@endpush

@section('title')
    Users
@endsection

@section('button_add')
  <a href="/dashboard/users/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-download fa-sm text-white-50"></i> Tambah User</a>
@endsection

@section('content')

<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table users</h6>
              </div>
              <div class="card-body">
                  <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @forelse ($users as $key => $value)
                        <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $value->username }}</td>
                          <td>{{ $value->password }}</td>
                          <td width="200px">
                            <a href="/dashboard/users/{{ $value->id }}" class="btn btn-success m-1 w-100">Detail</a>

                            <a href="/dashboard/users/{{ $value->id }}/edit" class="btn btn-warning m-1 w-100">Edit</a>

                            <form action="/dashboard/users/{{ $value->id }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input class="btn btn-danger m-1 w-100" type="submit" value="Delete">
                            </form>

                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td> No Users </td>
                        </tr>
                      @endforelse
                    
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>action</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection