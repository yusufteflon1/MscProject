@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Staff</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('manager-dashboard')}}">Home</a></li>

                    <li class="active">Staff List</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            
                            <h4 class="panel-title">Staff</h4>
                        </div>
                        <div class="panel-body">
                            
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FirstName</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Phone Number</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Clients Verified</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->uid}}</td>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->department}}</td>
                                            <td>{{$user->email}}</td>
                                            <td><a type="submit" name="action" class="btn btn-info" href="{{url('verifiedClientDetail/' . $user->uid) }}">View</a></td>
                                            <td><a type="submit" name="action" class="btn btn-danger" href="{{url('manager-delete-user/' . $user->uid) }}">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @livewire('add-staff')
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
            <div class="row center-align">

                {{$users->links()}}

            </div>
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
