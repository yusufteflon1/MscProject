@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Payments</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('client-profile')}}">Home</a></li>

                    <li class="active">Payments</li>
                </ol>
            </div>

        </div>
        <div id="main-wrapper">
            @include('notification')
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">

                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="panel-title">Payments</h4>
                                </div>
                                <div class="col-lg-6"></div>
                                <div class="col-lg-2">

                                </div>

                            </div>

                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Amount</th>
                                        <th>Proof</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($payments as $payment)
                                        <tr>
                                            <td>{{$payment->pid}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td><a class="btn btn-primary" href="{{url($payment->proof)}}" download>Download</a></td>
                                            <td>{{$payment->created_at}}</td>
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
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
