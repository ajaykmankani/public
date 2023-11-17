@extends('admin.layouts.app')
@section('data')
<div class="container-fluid page-body-wrapper">
  <!-- partial:../../partials/_navbar.html -->
  @include('admin.partials.navbar')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
          </ol>
        </nav>
      </div>
      @if(Session('deleted'))
      <div class="alert alert-danger alert-dismissible fade show zindex-fixed" role="alert">
        {{session('deleted')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
      @endif
      <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3">
                  <h4 class="card-title">Roles</h4>
                </div>
                <div class="col-3"></div>
                @can('create_permissions')
                <div class="col-3">
                  <a class="nav-link btn btn-success btn-sm" aria-expanded="false" href="{{route('add_permission')}}">+
                    Create New permission</a>
                </div>
                @endcan
                <div class="col-3"><a class="nav-link btn btn-success btn-sm" aria-expanded="false"
                    href="{{route('add_role')}}">+ Create New Role</a></div>

              </div>

              {{-- <p class="card-description"> Add class <code>.table-bordered</code>--}}
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Role Name </th>

                      <th> Actions </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($roles as $key=>$role)
                    <tr>
                      <td> {{$key+1}} </td>
                      <td> {{$role->name}} </td>

                      <td>
                        <a href="{{route('delete_role', $role->id)}}"><button class="btn btn-sm btn-danger"
                            onclick="return confirm('Do you want to delete this role')">Delete</button></a>
                        <a href="{{route('assign_permissions_index', $role->id)}}"><button class="btn btn-sm btn-info">+
                            Assign Permission</button></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    @endsection