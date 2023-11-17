@extends('admin.layouts.app')
@section('data')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
       @include('admin.partials.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">  </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
               @if(Session('success'))
                    <div class="alert alert-danger alert-dismissible fade show zindex-fixed"
                    role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
            <div class="row">

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Users</h4>
{{--                    <p class="card-description"> Add class <code>.table-bordered</code>--}}
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered" >
                        <thead>
                          <tr>
                          <th> # </th>
                            <th> User Name </th>
                            <th> Email </th>
                            <th>Subscription start/end date</th>
                            <th>days left</th>

                              <th> State </th>

                              <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $key=>$user)



                        @if($user->hasRole('Un-Registered User'))

                        <tr>
                        <td> {{$key+1}} </td>
                            <td> {{$user->name}} </td>
                            <td>
                             {{$user->email}}
                            </td>
                            <td>
                                @if ($user->subscriptions->isNotEmpty())
                                    {{ \Carbon\Carbon::parse($user->subscriptions->first()->starting_date)->format('d-m-Y') }}
                                    /
                                    {{ \Carbon\Carbon::parse($user->subscriptions->first()->ending_date)->format('d-m-Y') }}
                                    (
                                    {{ \Carbon\Carbon::parse($user->subscriptions->first()->starting_date)->diffInDays(\Carbon\Carbon::parse($user->subscriptions->first()->ending_date)) }}
                                    days )
                                @else
                                    Not Subscribed
                                @endif

                            </td>
                            <td>
                                @if ($user->subscriptions->isNotEmpty())
                                    {{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($user->subscriptions->first()->ending_date)) }}
                                    days left
                                @else
                                    No Subscription
                                @endif
                            </td>
                            <td> {{$user->state}} </td>
                            <td> <a href="{{route('edit_user', $user->id)}}"><button class="btn btn-sm
                            btn-primary">Edit</button></a>
                                <a href="{{route('delete_user', $user->id)}}"><button class="btn btn-sm btn-danger">Delete</button></a></td>
                          </tr>
                          @endif

                        @endforeach
                        </tbody>
                      </table>
                      {!! $users->links('pagination::bootstrap-5') !!}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

  @endsection
