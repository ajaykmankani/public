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
                                <h4 class="card-title">Create New Call</h4>
                                <form action="{{ route('create_call') }}" method="post" class="form-sample"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <p class="card-description"> Call info </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Call Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" autofocus="autofocus" name="call_name"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Call link</label>
                                                <div class="col-sm-9">
                                                    <input type="link" name="call_link" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Call Image</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="call_image" class="form-control"  multiple="false" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">
                                                    Call Audio
                                                    <i class="fas fa-music text-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Only mp3 files are allowed">info</i>
                                                </label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="call_audio" class="form-control" accept=".mp3" multiple="false" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Call Text</label>
                                                <div class="col-sm-9">
                                                    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                                                    <textarea name="call_text" style="min-height: 6.875rem" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-success" type="submit">Create
                                            Call</button>
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
