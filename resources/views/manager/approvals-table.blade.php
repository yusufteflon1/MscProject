@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Approvals</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('manager-dashboard')}}">Home</a></li>

                    <li class="active">Approval List</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Approvals</h4>
                        </div>
                        <div class="panel-body">
                             @include('notification')
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client Name</th>
{{--                                        <th>Business Name</th>--}}
                                        <th>Approving Manager</th>
                                        <th>Amount</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Allow</th>
                                         <th>Update</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($approvals as $approval)
                                        <tr>
                                            <td>{{$approval->apid}}</td>
                                            <td>{{$approval->client_name}}</td>
{{--                                            <td>{{$approval->business_name}}</td>--}}


                                            @if($approval->status == 'unattended')
                                            <form method="post" enctype="multipart/form-data" action="{{url('post-approval/' . $approval->apid) }}">
                                                {{ csrf_field() }}
                                                {{method_field('PUT')}}


                                                <td>
                                                    Auto-inputted
                                                    <input type="hidden" name="approving_manager_name" value="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" placeholder="Manager Name">
                                                </td>
                                                <td>
                                                    <input type="text" name="amount" placeholder="Amount">
                                                </td>

                                                <td>
                                                    <input type="text" name="comment" placeholder="Comment">
                                                </td>

                                                <td>
                                                    <select name="status" class="form-select">
                                                        <option class="caret">{{$approval->status}}</option>
                                                        <option value="Approved">Approve</option>
                                                        <option value="Disapproved">Disapprove</option>

                                                    </select>

                                                </td>



                                                <td>

                                                    <button type="submit" class="btn btn-primary" disabled>Allow Payment</button>

                                                </td>
                                                <td>

                                                       <button type="submit" class="btn btn-primary">Update</button>

                                                </td>

                                            </form>
                                            @elseif($approval->status == 'Approved')
                                                <td>{{$approval->approving_manager_name}}</td>
                                                <td>{{$approval->amount}}</td>
                                                <td>{{$approval->comment}}</td>
                                                <td>{{$approval->status}}</td>



                                                <form method="post" enctype="multipart/form-data" action="{{url('post-user-id/' . $approval->uid) }}">
                                                    {{ csrf_field() }}
                                                    {{method_field('PUT')}}

                                                    <input type="hidden" name="approval" value="1">

                                                    <td>

                                                        <button type="submit" class="btn btn-primary">Allow Payment</button>
                                                    </td>

                                                </form>


                                            @endif
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

                {{$approvals->links()}}

            </div>
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Limited.</p>
        </div>
    </div><!-- Page Inner -->

@endsection