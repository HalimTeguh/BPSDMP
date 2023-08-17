<?php

// session_start();

// if($_SESSION["username"] == "" || $_SESSION["username"] == null){
//   header('Location: ' . $_SERVER['HTTP_REFERER']);
//   exit();
// }

// require_once __DIR__ . "\Config\connection.php";
// require_once __DIR__ . "\model\User.php";
// require_once __DIR__ . "\Repository\user_rep.php";
// require_once __DIR__ . "\service\user_ser.php";

?>

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
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                      <th>Photos</th>
                      <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>
                        <form action="editUser.php" method="post">
                          <input  type="hidden" name="id" value="">
                          <a href="edit.php"><button class="btn btn-success">Edit</button></a>
                        </form>
                        <form action="../dashboard/utility/user_delete.php" method="post">
                          <input type="hidden" name="id" value="">
                          <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Photos</th>
                      <th>action</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
        </div>
    </div>
@endsection