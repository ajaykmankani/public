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
                @if (Session('deleted'))
                    <div class="alert alert-danger alert-dismissible fade show zindex-fixed" role="alert">
                        {{ session('deleted') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <div class="row">

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <h4 class="card-title">Enquiries</h4>
                                    </div>
                                    <div class="col-3"></div>
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        @can('create_enquiry')
                                            <a class="nav-link btn btn-success btn-sm" aria-expanded="false"
                                                href="{{ route('create_enquiry') }}">+
                                                Create New Enquiry</a>
                                        @endcan
                                    </div>
                                </div>
                                </p>
                                <div class="table-responsive">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Name </th>
                                                <th> Phone </th>
                                                <th> Email </th>
                                                <th> Investment </th>
                                                <th> State </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($enquiries as $key => $enquiry)
                                                <tr>
                                                    <td> {{ $key + 1 }} </td>
                                                    <td> {{ $enquiry->name }} </td>
                                                    <td>
                                                        {{ $enquiry->phone }}
                                                    </td>
                                                    <td> {{ $enquiry->email }} </td>
                                                    <td> {{ $enquiry->total_exist_investment }} </td>
                                                    <td> {{ $enquiry->state }} </td>
                                                    <td> <a href="{{ route('edit_enquiry', $enquiry->id) }}"><button
                                                                class="btn btn-sm
                            btn-primary">Edit</button></a>
                                                        <a href="{{ route('delete_enquiry', $enquiry->id) }}"><button
                                                                class="btn btn-sm btn-danger">Delete</button></a>
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#callModal{{ $key }}">View
                                                            Detail</button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="callModal{{ $key }}" tabindex="-1"
                                                    aria-labelledby="callModal{{ $key }}Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="callModal{{ $key }}Label">KYC Details of {{ $enquiry->name }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    @php $fields = ['name', 'email', 'phone', 'boe', 'dob', 'age_group', 'adhar', 'pan', 'experience', 'trading_goal', 'trading_amount', 'trading_type', 'annual_income', 'income_source', 'resource', 'earning_person', 'dependent_family', 'existing_investment', 'emergency', 'total_exist_investment', 'preferred_segment', 'preference','adhaar_card_front', 'adhaar_card_back', 'pan_card', 'pdf' ]; @endphp
                                                                    @foreach ($fields as $field)
                                                                    <div class="col-12"> <label for=""><b style="color: rgb(107, 107, 107)">{{ $field }}:</b> </label></div>

                                                                        <div class="col-12">

                                                                            @if($field == 'adhaar_card_front')
                                                                            <img src="{{ asset($enquiry->$field) }}"width="300px" >
                                                                            @elseif($field == 'adhaar_card_back')
                                                                            <img src="{{ asset($enquiry->$field) }}"width="300px" >
                                                                            @elseif($field == 'pan_card')
                                                                            <img src="{{ asset($enquiry->$field) }}"width="300px" >
                                                                            @else
                                                                            {{ $enquiry->$field }}
                                                                            @endif
                                                                        </div>
                                                                        <hr>

                                                                        @if($field == 'pdf')
                                                                        @if($enquiry->$field == '')
                                                                        Not Available
                                                                        @else
                                                                        <div class="col-12">
                                                                            <a href="{{ asset('storage/admin/pdfs/'.$enquiry->$field) }}" target="__blank">Download Pdf File</a>
                                                                        </div>
                                                                        @endif
                                                                        @endif
                                                                    @endforeach

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>


                                    {!! $enquiries->links('pagination::bootstrap-5') !!}

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @endsection
