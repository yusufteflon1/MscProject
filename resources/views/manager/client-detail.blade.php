@extends('layouts.dashboard')

 @section('content')


     <div class="page-inner">
         <div class="page-title">
             <h3></h3>
             <div class="page-breadcrumb">
                 <ol class="breadcrumb">
                     <li><a href="{{url('manager-dashboard')}}">Home</a></li>

                     <li class="active">Clients Verified</li>
                 </ol>
             </div>
         </div>
         <div id="main-wrapper">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-white">
                         <div class="panel-heading clearfix">
                             <a class="btn btn-primary" href="{{url('manager-users-table')}}"><span class="menu-icon glyphicon glyphicon-chevron-left"></span></a>
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
                                         <th>Nationality</th>
                                         <th>Email</th>
                                         <th>Credit Score</th>
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
                                             <td>{{$user->nationality}}</td>
                                             <td>{{$user->email}}</td>
                                             <td>{{$user->credit_score}}</td>
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
             <p class="no-s">2022 &copy; Abuja Enterprise Agency.</p>
         </div>
     </div><!-- Page Inner -->

 @endsection