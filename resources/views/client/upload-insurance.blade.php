@extends('layouts.dashboard')

@section('content')


    <div class="page-inner">
        <div class="page-title">
            <h3>Insurance</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('client-dashboard')}}">Home</a></li>

                    <li class="active">Apply for Loan</li>
                </ol>
            </div>
        </div>
        @include('notification')
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Apply for Loan</h4><br>
                        </div>
                        <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="{{url('upload-insurance')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <label>Birth of Date</label>
                                    <input type="date" name="dob" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label for="drop" ></label>
                                    <select class="form-control"  name="marital_status" id="drop" required>

                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="sex" ></label>
                                    <select class="form-control"  name="sex" id="sex" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                </div>


                                <h3>Policy</h3>

                                <div class="form-group">
                                    <label for="term">Term</label>
                                    <select class="form-control"  name="term" id="term" required>
                                        <option value="10 years">10 years</option>
                                        <option value="15 years">15 Years</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="total_amount">Total Amount</label>
                                    <select class="form-control"  name="total_amount" id="total_amount" required>
                                        <option value="100000">100000</option>
                                        <option value="200000">200000</option>
                                        <option value="500000">500000</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="per_month" >Per Month</label>
                                    <select class="form-control"  name="per_month" id="per_month" required>
                                        <option value="3000">3000</option>
                                        <option value="6500">6500</option>
                                        <option value="13000">13000</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="coverage" >Coverage</label>
                                    <select class="form-control"  name="coverage" id="coverage" required>
                                        <option value="100%">100%</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="age_limit" >Age Limit</label>
                                    <select class="form-control"  name="age_limit" id="age_limit" required>
                                        <option value="50">50</option>

                                    </select>

                                </div>



                                <label>Choose Insurance Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="medical">Medical insurance</option>
                                    <option value="car">Car insurance</option>
                                    <option value="life">Life Insurance</option>
                                </select>
                                <br>
                                <br>
                                <div id="medical"  >

                                    <div class="form-group">
                                        <label>Name of Doctor</label>
                                        <input type="text" name="name_of_doctor" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Name of Patient</label>
                                        <input type="text" name="name_of_patient" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Hospital</label>
                                        <input type="text" name="hospital" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Sickness Diagnosis</label>
                                        <input type="text" name="sickness_diagnosis" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Drug Administered</label>
                                        <input type="text" name="drug_administered" class="form-control" placeholder="">
                                    </div>




                                </div>

                                <div id="car" style="display:none;">
                                    <div class="form-group">
                                        <label>License Number</label>
                                        <input type="text" name="license_number" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>License Held</label>
                                        <input type="text" name="license_held" class="form-control" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label>Car Type</label>
                                        <input type="text" name="car_type" class="form-control" placeholder="" >
                                    </div>

                                </div>

                                <div id="life" style="display:none;">
                                    <div class="form-group">
                                        <label>Next of Kin</label>
                                        <input type="text" name="next_of_kin" class="form-control" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label>Next of Kin Address</label>
                                        <input type="text" name="next_of_kin_address" class="form-control" placeholder="" >
                                    </div>

                                    <h4>Account Information</h4>
                                    <div class="form-group">
                                        <label>Bank Name</label>
                                        <input type="text" name="bank_name" class="form-control" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label>Account Number</label>
                                        <input type="text" name="account_number" class="form-control" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label>BVN</label>
                                        <input type="text" name="bvn" class="form-control" placeholder="" >
                                    </div>


                                    <div class="form-group">
                                        <label>Asset Worth</label>
                                        <input type="text" name="asset_worth" class="form-control" placeholder="" >
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2021 &copy; Abuja Enterprise Agency.</p>
        </div>
    </div><!-- Page Inner -->






@endsection
