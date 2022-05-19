@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Credit Recovery</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('staff-dashboard')}}">Home</a></li>

                    <li class="active">Credit Recovery List</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Credit Recovery List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Proof of Payment</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($payments as $payment)
                                        <tr>
                                            <td>{{$payment->pid}}</td>
                                            <td>{{$payment->User->first_name}}</td>
                                            <td>{{$payment->User->last_name}}</td>
                                            <td>{{$payment->User->phone}}</td>
                                            <td>{{$payment->User->address}}</td>
                                            <td>{{$payment->User->email}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td><a type="submit" class="btn btn-secondary" href="{{url($payment->proof) }}" download>Download</a></td>

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

                {{$payments->links()}}

            </div>
            <div style="height: 390px;"></div>

        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
