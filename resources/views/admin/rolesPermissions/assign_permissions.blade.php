@extends('admin.layouts.app')
@section('data')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        @include('admin.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Form elements </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                        </ol>
                    </nav>
                </div>
                @if (Session('success'))
                    <div class="alert alert-success alert-dismissible fade show zindex-fixed" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <div class="row">

                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Assign Permissions</h4>
                                <form action="{{ route('assign_permissions') }}" method="post" class="form-sample">
                                    @csrf
                                    <p class="card-description"> Permission info </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Roles Name</label>
                                                <div class="col-sm-8">
                                                    <input type="hidden" name="role" value="{{ $roles->id }}">
                                                    <input type="text" value="{{ $roles->name }}"

                                                        class="form-control" required readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            @foreach ($permissions as $permission)
                                                <div class="col-3">
                                                    <input type="checkbox" name="permissions[]"
                                                    @if ($roles->hasPermissionTo($permission)) checked @endif
                                                        value="{{ $permission->name }}"> <label
                                                        class=" col-form-label">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach


                                        </div>






                                    </div>
                                    <div class="row">




                                    </div>
                                    <div class="row">


                                    </div>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-success" type="submit">Assign
                                            Permissions</button>
                                    </span>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
