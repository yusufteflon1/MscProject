@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3></h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('staff-dashboard')}}">Home</a></li>

                    <li class="active">Guarantors</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <a class="btn btn-primary" href="{{url('staff-client-table')}}"><span class="menu-icon glyphicon glyphicon-chevron-left"></span></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone </th>
                                        <th>Education</th>
                                        <th>Occupation</th>
                                        <th>Employee Status</th>
                                        <th>Job Title</th>
                                        <th>State Of Origin</th>
                                        <th>Grade Level</th>
                                        <th>Length Of Service</th>
                                        <th>BVN</th>
                                        <th>Local Govt. Area</th>
                                        <th>Marital Status</th>
                                        <th>Date Of Appointment</th>
                                        <th>Date Of Birth</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($guarantors as $guarantor)
                                        <tr>
                                            <td>{{$guarantor->gid}}</td>
                                            <td>{{$guarantor->first_name}}</td>
                                            <td>{{$guarantor->last_name}}</td>
                                            <td>{{$guarantor->email}}</td>
                                            <td>{{$guarantor->phone}}</td>
                                            <td>{{$guarantor->education}}</td>
                                            <td>{{$guarantor->occupation}}</td>
                                            <td>{{$guarantor->emp_status}}</td>
                                            <td>{{$guarantor->job_title}}</td>
                                            <td>{{$guarantor->state_of_origin}}</td>
                                            <td>{{$guarantor->grade_level}}</td>
                                            <td>{{$guarantor->length_of_service}}</td>
                                            <td>{{$guarantor->bvn}}</td>
                                            <td>{{$guarantor->lga}}</td>
                                            <td>{{$guarantor->marital_status}}</td>
                                            <td>{{$guarantor->date_of_appointment}}</td>
                                            <td>{{$guarantor->dob}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
            <div class="row center-align">

            </div>
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Limited.</p>
        </div>
    </div><!-- Page Inner -->

@endsection