@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Clients</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('staff-dashboard')}}">Home</a></li>

                    <li class="active">Client List</li>
                </ol>
            </div>
        </div>

        @include('notification')
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Clients</h4>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{url('staff-client-table')}}" class="btn btn-primary">Refresh</a>
                                </div>
                                <br>
                                <div class="col-6">
                                    <form action="{{ route('search') }}" method="GET">
                                        <input type="text" name="search" required/>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive">

                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name </th>
                                        {{-- <th>Last Name</th> --}}
                                        {{-- <th>Address</th> --}}
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Credit Score</th>
                                        <th>Full profile</th>
                                        <th>Verify Client</th>
                                        <th>View Business</th>
                                        <th>View Guarantors</th>
                                        <th>Download PDF</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if($clients->isNotEmpty())
                                        @foreach($clients as $client)
                                            <tr>
                                                <td>{{$client->uid}}</td>
                                                <td>{{$client->first_name}} {{$client->last_name}}</td>
                                                {{-- <td></td> --}}
                                                {{-- <td>{{$client->address}}</td> --}}
                                                <td>{{$client->phone}}</td>
                                                <td>{{$client->email}}</td>
                                                <td>{{$client->credit_score}}</td>
                                                <td><a class="btn btn-info" href="{{url('clientDetail/' . $client->uid) }}">Full profile</a></td>


                                                @if($client->guarantorFilled == 1 && $client->businessFilled == 1)

                                                    @if($client->verified == 0)

                                                        <td>
                                                            <form method="post" enctype="multipart/form-data"  action="{{url('post-verify/'.$client->uid) }}">
                                                                {{ csrf_field() }}
                                                                {{method_field('PUT')}}
                                                                <input type="hidden" name="verified"  value="1">
                                                                <input type="hidden" name="verifiedBy" value="{{Auth::user()->uid}}">


                                                                <input type="hidden" name="client_name"  value="{{$client->first_name}}{{$client->last_name}}">

                                                                <input type="text" name="amount" placeholder="Loan Amount" required>
                                                                <input type="hidden" name="uid" value="{{$client->uid}}">


                                                                <button type="submit" class="btn btn-primary" href="">Verify</button>

                                                            </form>

                                                        </td>


                                                    @elseif($client->verified == 1)
                                                        <td>Verified</td>
                                                    @endif


                                                @elseif($client->guarantorFilled == 0 && $client->businessFilled == 0)

                                                    <td class="badge-danger">Client cannot be verified business and guarantor not filled</td>
                                                @endif




                                                <td><a class="btn btn-info" href="{{url('businessDetail/' . $client->uid) }}">View Business</a></td>
                                                <td><a class="btn btn-info" href="{{url('guarantorDetail/' . $client->uid) }}">View Guarantor</a></td>
                                                <td><a class="btn btn-info" href="{{url('/uploads/'.$client->identification)}}" download>Download</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div>
                                            <h2>No client found</h2>
                                        </div>
                                    @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
            <div class="row center-align">

                {{$clients->links()}}

            </div>
            <div style="height: 390px;"></div>

        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection