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
                    <style>
                        .form-control {
                            color: #fff !important;
                        }
                    </style>
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Call</h4>
                                <form action="{{ route('update_user') }}" method="post" class="form-sample">
                                    @csrf
                                    <input type="hidden" value="{{ $user->id }}" name="id">
                                    <p class="card-description"> Personal info </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ old('name', $user->name) }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="tel" name="phone" class="form-control"
                                                        value="{{ old('phone', $user->phone) }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ old('email', $user->email) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">State</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="state" class="form-control"
                                                        value="{{ old('state', $user->state) }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Investment</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="investment" class="form-control"
                                                        value="{{ old('investment', $user->investment) }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Resource</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="resource" class="form-control"
                                                        value="{{ old('resource', $user->resource) }}" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" class="form-control" placeholder="enter if you want to change"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Subscription</label>
                                                <div class="col-sm-9">

                                                    <select name="subscription" class="form-control">
                                                        <option selected disabled>Select Subscription</option>
                                                        <option @if ($subscription && $subscription->subscription_name === '1m') selected @endif
                                                            value="1m">1 Month</option>
                                                        <option @if ($subscription && $subscription->subscription_name === '2m') selected @endif
                                                            value="2m">2 Months</option>
                                                        <option @if ($subscription && $subscription->subscription_name === '3m') selected @endif
                                                            value="3m">3 Months</option>
                                                        <option @if ($subscription && $subscription->subscription_name === '1y') selected @endif
                                                            value="1y">1 Year</option>
                                                        <option @if ($subscription && $subscription->subscription_name === '2y') selected @endif
                                                            value="2y">2 Year</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Role</label>
                                                <div class="col-sm-9">

                                                    <select name="role" class="form-control">
                                                        <option selected disabled>Select Role</option>
                                                        @foreach ($roles as $role)
                                                            <option @if ($user->roles->isNotEmpty() && $user->roles->first()->id === $role->id) selected @endif
                                                                value="{{ $role->id }}">
                                                                {{ $role->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-success" type="submit">Edit
                                            user</button>
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
