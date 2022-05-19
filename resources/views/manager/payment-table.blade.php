@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Insurance Payments</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('agent-dashboard')}}">Home</a></li>

                    <li class="active">Insurance Payments</li>
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
                                    <h4 class="panel-title">Insurance Payments</h4>
                                </div>
                                <div class="col-lg-6"></div>


                            </div>

                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Month</th>
                                        <th>Amount</th>
                                        <th>Receipt Number</th>
                                        <th>Generated</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($payments as $payment)
                                        <tr>

                                            <td>{{$payment->pid}}</td>
                                            <td>{{$payment->user->name}}</td>
                                            <td>{{$payment->month}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment->receipt_no}}</td>

                                            <td>{{$payment->created_at}}</td>
                                            <td><a class="btn btn-danger" href="{{url('delete-payment/' . $payment->pmid) }}">Delete</a></td>
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
            <p class="no-s">2021 &copy; IAbuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
