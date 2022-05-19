@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Make payment</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('admin-dashboard')}}">Home</a></li>

                    <li class="active">Make Payment</li>
                </ol>
            </div>
        </div>
        @include('notification')
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Make Monthly Re-Payment</h4><br>
                            @include('notification')
                        </div>
                        <div class="panel-body" style="width: 600px;">
                            <form method="post" enctype="multipart/form-data" action="{{url('add-payment')}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                                </div>
                                <div class="form-group">
                                    <label>Month</label>
                                    <input type="month" name="month" class="form-control" placeholder="Month" required>
                                </div>


                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer justify-content-center">
            <p class="no-s">2021 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->

@endsection
