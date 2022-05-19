@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3></h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('staff-dashboard')}}">Home</a></li>

                    <li class="active">Business</li>
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
                                        <th>Business Name</th>
                                        <th>Business Status</th>
                                        <th>Email</th>
                                        <th>Phone </th>
                                        <th>Number Of Employees</th>
                                        <th>Location</th>
                                        <th>Business Type</th>
                                        <th>Business Start</th>
                                        <th>Gross Revenue</th>
                                        <th>Certifications</th>
                                        <th>Business Class</th>
                                        <th>Shareholder 1</th>
                                        <th>Shareholder 2</th>
                                        <th>Shareholder 3</th>
                                        <th>Shareholder 4</th>
                                        <th>Experience</th>
                                        <th>Main Supplier</th>
                                        <th>Main Clients</th>
                                        <th>Risk Plan </th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($businesss as $business)
                                        <tr>
                                            <td>{{$business->bid}}</td>
                                            <td>{{$business->business_name}}</td>
                                            <td>{{$business->business_status}}</td>
                                            <td>{{$business->email}}</td>
                                            <td>{{$business->phone}}</td>
                                            <td>{{$business->number_of_emp}}</td>
                                            <td>{{$business->location}}</td>
                                            <td>{{$business->business_type}}</td>
                                            <td>{{$business->business_start}}</td>
                                            <td>{{$business->gross_revenue}}</td>
                                            <td>{{$business->certifications}}</td>
                                            <td>{{$business->business_class}}</td>
                                            <td>{{$business->shareholder_1}}</td>
                                            <td>{{$business->shareholder_2}}</td>
                                            <td>{{$business->shareholder_3}}</td>
                                            <td>{{$business->shareholder_4}}</td>
                                            <td>{{$business->experience}}</td>
                                            <td>{{$business->main_supplier}}</td>
                                            <td>{{$business->main_clients}}</td>
                                            <td>{{$business->risk_plan}}</td>

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