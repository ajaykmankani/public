@extends('admin.layouts.app')
<?php use Carbon\Carbon; ?>
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
                    <h4 class="card-title">History Calls</h4>
{{--                    <p class="card-description"> Add class <code>.table-bordered</code>--}}
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered" >
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Symbol Name </th>
                            <th> Call Date </th>

                              <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($calls as $key=>$call)

                        @if(Carbon::now()->isSameDay($call->created_at))
                        @else
                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$call->call_name}} </td>
                            <td>
                             {{date('d-m-Y',strtotime($call->created_at))}}
                            </td>

                            <td> @can('edit_calls')<a href="{{route('edit_call', $call->id)}}"><button class="btn btn-sm
                            btn-primary">Edit</button></a>@endcan
                            @can('delete_calls')<a href="{{route('delete_call', $call->id)}}"><button class="btn btn-sm btn-danger">Delete</button></a>@endcan
                            @can('view_live_calls')<button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#callModal{{ $key }}">View Call
            </button>@endcan</td>
                          </tr>
                          @endif
                           <!-- Modal -->
            <div class="modal fade" id="callModal{{ $key }}" tabindex="-1" aria-labelledby="callModal{{ $key }}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="callModal{{ $key }}Label">Call Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <label>Call Name</label>
                                    <p>{{ $call->call_name }}</p>
                                </div>
                                <hr>

                                @if ($call->call_link != null)
                                <div class="col-12">
                                    <label>Call Link</label>
                                    <p><a href="{{ $call->call_link }}"
                                            target="__blank">{{ $call->call_link }}</a>
                                    </p>
                                </div>
                                <hr>
                                @endif
                                @if ($call->call_text != null)
                                <div class="col-12">
                                    <label>Call Text</label>
                                    <p>{{ $call->call_text }}</p>
                                </div>
                                <hr>
                                @endif
                                @if ($call->follow_up != null)
                                    <div class="col-12">
                                        <label>Call Follow Up</label>
                                        <p>{{ $call->follow_up }}</p>
                                    </div>
                                <hr>
                                @endif
                                @if ($call->call_image != null)
                                <div class="col-12">
                                    <label>Call image</label>
                                    <p><img src="{{ asset($call->call_image) }}"
                                            style="width: 400px"></p>
                                </div>
                                <hr>
                                 @endif
                                @if ($call->call_audio != null)
                                <div class="col-12">
                                    <label>Call audio</label>

                                    <p>
                                        <audio controls>
                                            <source src="{{ asset($call->call_audio) }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>
                        @endforeach
                        </tbody>
                      </table>
                      {!! $calls->links('pagination::bootstrap-5') !!}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

  @endsection
