@extends('layouts.dashboard')

@section('content')

    <div class="page-inner">
        <div class="page-title">
            <h3>Dashboard</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{url('client-profile')}}">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            @include('notification')

            <div class="row">
                <div class="col-md-6">
                   <div style="padding: 20px;">
                       <div class="panel panel-white" >
                           <div class="panel-heading clearfix">
                               <h4 class="panel-title">PERSONAL DETAIL</h4><br>
                           </div>
                           <div class="panel-body">
                               <form method="post" action="{{url('post-client-profile')}}">
                                   {{ csrf_field() }}

                                   <div class="" style="width: 600px;">
                                       <div class="form-row">
                                           <div class="col-md-5" >
                                               <label for="address">Address</label>
                                               <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your address"  value="{{Auth::user()->address}}"  required="">
                                           </div>
                                           <div class="col-md-5">
                                               <label for="review">Phone Number</label>
                                               <input type="text" class="form-control" id="review" name="phone" placeholder="Enter your number"  value="{{Auth::user()->phone}}"  required="">
                                           </div>
                                           <br>
                                           <br>
                                           <div class="col-md-12">
                                               <button class="btn" style="background: #0AB1BC !important;" type="submit">Save</button>
                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>

                       </div>

                   </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Upload Payment</h4><br>
                        </div>
                        <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="{{url('upload-payment')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                                </div>
                                <div class="form-group">
                                    <label>Proof</label>
                                    <input type="file" name="proof" class="form-control" placeholder="Proof" required>
                                </div>



                                @if(Auth::user()->approval == 0)
                                    <button type="submit" class="btn btn-primary" disabled>Upload</button>
                                @elseif(Auth::user()->approval == 1)
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                @endif




                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Upload Guarantor</h4><br>
                        </div>
                        <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="{{url('upload-guarantor')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="education" class="form-control" placeholder="Education" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="emp_status" class="form-control" placeholder="Employment Status" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="job_title" class="form-control" placeholder="Job Title" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="state_of_origin" class="form-control" placeholder="State Of Origin" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="grade_level" class="form-control" placeholder="Grade Level" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="bvn" class="form-control" placeholder="BVN" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="length_of_service" class="form-control" placeholder="Length Of Service" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="lga" class="form-control" placeholder="Local Government Area" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="marital_status" class="form-control" placeholder="Marital Status" required>
                                </div>

                                <div class="form-group">
                                    <input type="date" name="date_of_appointment" class="form-control" placeholder="Date of Appointment" required>
                                </div>

                                <div class="form-group">
                                    <input type="date" name="dob" class="form-control" placeholder="Date of Birth" required>
                                </div>

                                <input type="hidden" name="guarantorFilled" value="1">

                                    <button type="submit" class="btn btn-primary">Upload</button>





                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Upload Business</h4><br>
                        </div>
                        <div class="panel-body">
                            <form method="post" enctype="multipart/form-data" action="{{url('upload-business')}}">
                                {{ csrf_field() }}



                                <div class="form-group">
                                    <input type="text" name="business_name" class="form-control" placeholder="Business Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="business_status" class="form-control" placeholder="Business Status" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" name="number_of_emp" class="form-control" placeholder="Number of Employes" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="location" class="form-control" placeholder="Location" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="business_type" class="form-control" placeholder="Business Type" required>
                                </div>

                                <div class="form-group">
                                    <input type="date" name="business_start" class="form-control" placeholder="Business Start" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="gross_revenue" class="form-control" placeholder="Gross Revenue" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="certifications" class="form-control" placeholder="Certifications" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="business_class" class="form-control" placeholder="Business Class" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="shareholder_1" class="form-control" placeholder="Share Holder 1" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="shareholder_2" class="form-control" placeholder="Share Holder 2" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="shareholder_3" class="form-control" placeholder="Share Holder 3" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="shareholder_4" class="form-control" placeholder="Share Holder 4" required>
                                </div>


                                <div class="form-group">
                                    <input type="text" name="experience" class="form-control" placeholder="Experience" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="main_supplier" class="form-control" placeholder="Main Supplier" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="main_clients" class="form-control" placeholder="Main Clients" required>
                                </div>

                                <div class="form-group">
                                    <label>Risk Plan</label>
                                    <textarea type="text" name="risk_plan" class="form-control" required></textarea>
                                </div>


                                <div class="form-group">
                                    <label>What is your primary sources of loan repayment? </label>
                                    <select id="primary_source" onchange="setPrimarySource()" name="primary_source" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="Cashflows">Cashflows – Sales</option>
                                        <option value="Salary"> Salary</option>
                                        <option value="Pension">Pension</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>What is your annual turnover?</label>
                                    <select id="annual_turnover" onchange="setAnnualTurnover()" name="annual_turnover" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="over 200%">Over 200%</option>
                                        <option value="180%">180%</option>
                                        <option value="100%">100%</option>
                                        <option value="60%">60%</option>
                                        <option value="lessThan59%"> Less than 59%</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>What is your gross profit margin?</label>
                                    <select id="gross_profit_margin" onchange="setGrossProfitMargin()" name="gross_profit_margin" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="50%">50%</option>
                                        <option value="40%">40%</option>
                                        <option value="30%">30%</option>
                                        <option value="20%">20%</option>
                                        <option value="10%">10%</option>
                                        <option value="5%">5%</option>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label>How adequate is your net profit margin?</label>
                                    <select id="net_profit_margin" onchange="setNetProfitMargin()" name="net_profit_margin" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="50%"> 50%</option>
                                        <option value="40%">40%</option>
                                        <option value="30%"> 30%</option>
                                        <option value="20%">20%</option>
                                        <option value="10%">10%</option>
                                        <option value="5%">5%</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>What collateral cover do you currently have?</label>
                                    <select id="collateral_cover" onchange="setCollateralCover()" name="collateral_cover" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="fixed deposit">Fixed Deposit</option>
                                        <option value="sale of shares">Sale of Shares</option>
                                        <option value="3rd party guarantee">3rd Party Guarantee (Association)</option>
                                        <option value="debenture over assets">Debenture over assets</option>
                                        <option value="ownership of assets">Ownership of assets</option>
                                        <option value="legal mortgage">legal mortgage</option>
                                        <option value="life insurance">Life Insurance</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>How long have you had this bank account?</label>
                                    <select id="bank_account_duration" onchange="setBankAccountDuration()" name="bank_account_duration" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="less than a year">Less than a year</option>
                                        <option value="one year">One Year</option>
                                        <option value="two years">Two Years</option>
                                        <option value="three years">Three Years</option>
                                        <option value="four years">Four Years</option>
                                        <option value="five years and above">Five Years and above</option>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label>What type of account do you have?</label>
                                    <select id="account_type" onchange="setAccountType()" name="account_type" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="savings">Savings Account</option>
                                        <option value="current">Current Account</option>
                                        <option value="corporate">Corporate Account</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label> What is the status of your previous borrowings? </label>
                                    <select id="status_of_borrowing" onchange="setStatusOfBorrowing()" name="status_of_borrowing" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="not serviced"> Not serviced</option>
                                        <option value="performing">Performing</option>
                                        <option value="rapid">Repaid</option>
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label>Identification type?</label>
                                    <select id="id_type" onchange="setIdType()" name="id_type" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="international passport">International passport</option>
                                        <option value="driver license">Driver’s license</option>
                                        <option value="national ID">National ID</option>
                                        <option value="other">Other ID</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Do you have an invoice from your supplier?</label>
                                    <select id="supplier_invoice" onchange="setSupplierInvoice()" name="supplier_invoice" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>What is your age bracket? </label>
                                    <select id="age_bracket" onchange="setAgeBracket()" name="age_bracket" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="below 20 years">Below 20 years</option>
                                        <option value="21-25">21-25</option>
                                        <option value="26-30">26-30</option>
                                        <option value="31-40">31-40</option>
                                        <option value="41-59">41-59</option>
                                        <option value="60 and above">60 and above</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>How long has your business been functioning? </label>
                                    <select id="business_function" onchange="setBusinessFunction()" name="business_function" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="less than 1 year">Less than 1 year</option>
                                        <option value="1 year"> 1 Year</option>
                                        <option value="2 years">2 Years</option>
                                        <option value="3 years">3 Years</option>
                                        <option value="4 years and above">4 Years and above</option>
                                    </select>

                                </div>


                                <div class="form-group">
                                    <label>Type of incorporation? </label>
                                    <select id="type_incorporation" onchange="setTypeIncorporation()" name="type_incorporation" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="cooperative">Cooperative/association</option>
                                        <option value="enterprise">Enterprise</option>
                                        <option value="limited">Limited</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>What is your level of qualification?? </label>
                                    <select id="qualification_level" onchange="setQualificationLevel()" name="qualification_level" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="apprenticeship">Apprenticeship</option>
                                        <option value="primary school">Primary School</option>
                                        <option value="secondary school">Secondary School</option>
                                        <option value="tertiary">Tertiary/Professional/Degree</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input id="business_address" onchange="setBusinessAddress()" type="text" name="business_address" class="form-control" placeholder="What is your home address?" required>
                                </div>


                                <div class="form-group">
                                    <label>What is your employment status? </label>
                                    <select id="employment_status" onchange="setEmploymentStatus()" name="employment_status" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="employed">Employed</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <input id="home_address"  onchange="setHomeAddress()" type="text" name="home_address" class="form-control" placeholder="What is your home address?" required>
                                </div>

                                <div class="form-group">
                                    <input id="member_of_association" onchange="setMemberOfAssociation()" type="text" name="member_of_association" class="form-control" placeholder="Are you a member of any association?">
                                </div>

                                <div class="form-group">
                                    <label>Do your have an introduction letter from your village head?</label>
                                    <select id="intro_letter" onchange="setIntroLetter()" name="intro_letter" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>What is the status of the house you live in? </label>
                                    <select id="house_status" onchange="setHouseStatus()" name="house_status" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="rented">Rented</option>
                                        <option value="leased">Leased</option>
                                        <option value="own property">Own Property</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>How many referees do you have?</label>
                                    <select id="referees" onchange="setReferees()" name="referees" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="one">One</option>
                                        <option value="two">Two</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Do you have any capital? </label>
                                    <select id="any_capital" onchange="setAnyCapital()" name="any_capital" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="cash">Cash</option>
                                        <option value="stock">Stock</option>
                                        <option value="debtors">Debtors</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>What is your equity ratio? </label>
                                    <select id="equity_ratio" onchange="setEquityRatio()" name="equity_ratio" class="form-control" required>
                                        <option value="">--Please choose an option--</option>
                                        <option value="none">None</option>
                                        <option value="10%">10%</option>
                                        <option value="20%">20%</option>
                                        <option value="30% and above">30% AND ABOVE</option>
                                    </select>
                                </div>

                                <input type="hidden" name="businessFilled" value="1">
                                <input id="sumValue" type="hidden" name="credit_score">


                                    <button onclick="sumAll()" type="submit" class="btn btn-primary">Upload</button>




                            </form>
                        </div>
                    </div>

                </div>
            </div>



            <div style="height: 390px;"></div>

        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s">2022 &copy; Abuja Enterprise Agency</p>
        </div>
    </div><!-- Page Inner -->

    <script>
        var sumValue;
        var newValue;
        var mainValue;
        var finalValue;
        var secondValue;


        var primary_source;
        var annual_turnover;
        var gross_profit_margin;
        var net_profit_margin;
        var collateral_cover;
        var bank_account_duration;
        var account_type;
        var status_of_borrowing;
        var id_type;
        var supplier_invoice;
        var age_bracket;
        var business_function;
        var type_incorporation;
        var qualification_level;
        var business_address;
        var employment_status;
        var home_address;
        var member_of_association;
        var intro_letter;
        var house_status;
        var referees;
        var any_capital;
        var equity_ratio;

        var primary_source1;
        var annual_turnover1;
        var gross_profit_margin1;
        var net_profit_margin1;
        var collateral_cover1;
        var bank_account_duration1;
        var account_type1;
        var status_of_borrowing1;
        var id_type1;
        var age_bracket1;
        var business_function1;
        var type_incorporation1;
        var qualification_level1;
        var business_address1;
        var employment_status1;
        var home_address1;
        var member_of_association1;
        var intro_letter1;
        var house_status1;
        var referees1;
        var any_capital1;
        var equity_ratio1;



        function setPrimarySource(){

            primary_source = document.getElementById('primary_source').value;

            if (primary_source  == 'Cashflows') {
                primary_source1 ='5';
            } else if (primary_source == 'Salary') {
                primary_source1 ='10';
            } else if(primary_source == 'Pension') {
                primary_source1 ='5';
            } else if(primary_source == 'Other') {
                primary_source1 ='0';
            }

        }

        function setAnnualTurnover(){
            annual_turnover = document.getElementById('annual_turnover').value;

            if (annual_turnover  == 'over 200%') {
                annual_turnover1 ='10';
            } else if (annual_turnover == '180%') {
                annual_turnover1 ='8';
            } else if(annual_turnover == '100%') {
                annual_turnover1 ='5';
            } else if(annual_turnover == '60%') {
                annual_turnover1 ='3';
            } else if(annual_turnover == 'lessThan59%') {
                annual_turnover1 ='3';
            }
        }

        function setGrossProfitMargin(){

            gross_profit_margin = document.getElementById('gross_profit_margin').value;


            if (gross_profit_margin  == '50%') {
                gross_profit_margin1 ='5';
            } else if (gross_profit_margin == '40%') {
                gross_profit_margin1 ='4';
            } else if(gross_profit_margin == '30') {
                gross_profit_margin1 ='3';
            } else if(gross_profit_margin == '20%') {
                gross_profit_margin1 ='2';
            } else if(gross_profit_margin == '10%') {
                gross_profit_margin1 ='1';
            } else if(gross_profit_margin == '5%') {
                gross_profit_margin1 ='0';
            }
        }
        function setNetProfitMargin(){

            net_profit_margin = document.getElementById('net_profit_margin').value;


            if (net_profit_margin  == '50%') {
                net_profit_margin1 ='5';
            } else if (net_profit_margin == '40%') {
                net_profit_margin1 ='4';
            } else if(net_profit_margin == '30') {
                net_profit_margin1 ='3';
            } else if(net_profit_margin == '20%') {
                net_profit_margin1 ='2';
            } else if(net_profit_margin == '10%') {
                net_profit_margin1 ='1';
            } else if(net_profit_margin == '5%') {
                net_profit_margin1 ='0';
            }

        }

        function setCollateralCover(){

            collateral_cover = document.getElementById('collateral_cover').value;


            if (collateral_cover  == 'fixed deposit') {
                collateral_cover1 ='15';
            } else if (collateral_cover == 'sale of shares') {
                collateral_cover1 ='15';
            } else if(collateral_cover == '3rd party guarantee') {
                collateral_cover1 ='5';
            } else if(collateral_cover == 'debenture over assets') {
                collateral_cover1 ='13';
            } else if(collateral_cover == 'ownership of assets') {
                collateral_cover1 ='13';
            } else if(collateral_cover == 'legal mortgage') {
                collateral_cover1 ='13';
            } else if(collateral_cover == 'life insurance') {
                collateral_cover1 ='5';
            } else if(collateral_cover == 'none') {
                collateral_cover1 ='0';
            }

        }

        function setBankAccountDuration(){

            bank_account_duration = document.getElementById('bank_account_duration').value;


            if (bank_account_duration  == 'less than a year') {
                bank_account_duration1 ='0';
            } else if (bank_account_duration == 'one year') {
                bank_account_duration1 ='1';
            } else if(bank_account_duration == 'two years') {
                bank_account_duration1 ='2';
            } else if(bank_account_duration == 'three years') {
                bank_account_duration1 ='3';
            } else if(bank_account_duration == 'four years') {
                bank_account_duration1 ='4';
            } else if(bank_account_duration == 'five years and above') {
                bank_account_duration1 ='5';
            }


        }

        function setAccountType(){

            account_type = document.getElementById('account_type').value;



            if (account_type  == 'none') {
                account_type1 ='0';
            } else if (account_type == 'savings') {
                account_type1 =2;
            } else if(account_type == 'current') {
                account_type1 ='5';
            } else if(account_type == 'corporate') {
                account_type1 ='5';
            }
        }
        function setStatusOfBorrowing(){

            status_of_borrowing = document.getElementById('status_of_borrowing').value;

            if (status_of_borrowing  == 'none') {
                status_of_borrowing1 ='0';
            } else if (status_of_borrowing == 'not serviced') {
                status_of_borrowing1 ='0';
            } else if(status_of_borrowing == 'performing') {
                status_of_borrowing1 ='2';
            } else if(status_of_borrowing == 'rapid') {
                status_of_borrowing1 ='5';
            }

        }

        function setIdType(){

            id_type = document.getElementById('id_type').value;



            if (id_type  == 'international passport') {
                id_type1 ='5';
            } else if (id_type == 'driver license') {
                id_type1 ='5';
            } else if(id_type == 'national ID') {
                id_type1 ='5';
            } else if(id_type == 'Other') {
                id_type1 ='1';
            } else if(id_type == 'none') {
                id_type1 ='0';
            }

        }

        function setSupplierInvoice(){

            supplier_invoice = document.getElementById('supplier_invoice').value;


            if (supplier_invoice  == 'yes') {
                supplier_invoice1 ='5';
            } else if (supplier_invoice == 'no') {
                supplier_invoice1 = '2';
            }

        }

        function setAgeBracket(){

            age_bracket = document.getElementById('age_bracket').value;



            if (age_bracket  == 'below 20 years') {
                age_bracket1 ='0';
            } else if (age_bracket == '21-25') {
                age_bracket1 ='1';
            } else if(age_bracket == '26-30') {
                age_bracket1 ='2';
            } else if(age_bracket == '31-40') {
                age_bracket1 ='2';
            } else if(age_bracket == '41-59') {
                age_bracket1 ='2';
            } else if(age_bracket == '60 and above') {
                age_bracket1 ='0';
            }
        }

        function setBusinessFunction(){

            business_function = document.getElementById('business_function').value;

            if (business_function  == 'less than 1 year') {
                business_function1 ='0';
            } else if (business_function == '1 year') {
                business_function1 ='1';
            } else if(business_function == '2 years') {
                business_function1 ='2';
            } else if(business_function == '3 years') {
                business_function1 ='3';
            }else if(business_function == '4 years and abov') {
                business_function1 ='4';
            }
        }

        function setTypeIncorporation(){

            type_incorporation = document.getElementById('type_incorporation').value;



            if (type_incorporation  == 'none') {
                type_incorporation1 ='0';
            } else if (type_incorporation == 'cooperative') {
                type_incorporation1 ='1';
            } else if(type_incorporation == 'enterprise') {
                type_incorporation1 ='1';
            } else if(type_incorporation == 'limited') {
                type_incorporation1 ='2';
            }

        }
        function setQualificationLevel(){
            qualification_level = document.getElementById('qualification_level').value;


            if (qualification_level  == 'none') {
                qualification_level1 ='0';
            } else if (qualification_level == 'apprenticeship') {
                qualification_level1 ='2';
            } else if(qualification_level == 'primary school') {
                qualification_level1 ='2';
            } else if(qualification_level == 'secondary school') {
                qualification_level1 ='2';
            }  else if(qualification_level == 'tertiary') {
                qualification_level1 ='2';
            }

        }

        function setBusinessAddress(){

            business_address = document.getElementById('business_address').value;


            business_address1 = '1';
        }
        function setEmploymentStatus(){

            employment_status = document.getElementById('employment_status').value;

            if (employment_status  == 'none') {
                employment_status1 ='0';
            } else if (employment_status == 'employed') {
                employment_status1 ='1';
            }
        }
        function setHomeAddress(){
            home_address = document.getElementById('home_address').value;

            home_address1 = '1';
        }
        function setMemberOfAssociation(){

            member_of_association = document.getElementById('member_of_association').value;

            if(member_of_association == null){
                member_of_association1 = '0';
            } else{
                member_of_association1 = '1';
            }

        }

        function setIntroLetter(){
            intro_letter = document.getElementById('intro_letter').value;



            if (intro_letter  == 'yes') {
                intro_letter1 ='1';
            } else if (intro_letter == 'no') {
                intro_letter1 ='0';
            }
        }
        function setHouseStatus(){

            house_status = document.getElementById('house_status').value;


            if (house_status  == 'rented') {
                house_status1 ='1';
            } else if (house_status == 'leased') {
                house_status1 ='2';
            } else if(house_status == 'own property') {
                house_status1 ='3';
            }

        }
        function setReferees(){

            referees = document.getElementById('referees').value;

            if (referees  == 'none') {
                referees1 ='0';
            } else if (referees == 'one') {
                referees1 ='1';
            } else if(referees == 'two') {
                referees1 ='2';
            }

        }
        function setAnyCapital(){

            any_capital = document.getElementById('any_capital').value;

            if (any_capital  == 'none') {
                any_capital1 ='0';
            } else if (any_capital == 'cash') {
                any_capital1 ='3';
            } else if(any_capital == 'stock') {
                any_capital1 ='1';
            } else if(any_capital == 'debtors') {
                any_capital1 ='1';
            }
        }

        function setEquityRatio(){

            equity_ratio = document.getElementById('equity_ratio').value;

            if (equity_ratio  == 'none') {
                equity_ratio1 ='0';
            } else if (equity_ratio == '10%') {
                equity_ratio1 ='3';
            } else if(equity_ratio == '20%') {
                equity_ratio1 ='4';
            } else if(equity_ratio == '30% and above') {
                equity_ratio1 ='5';
            }

        }

        function sumAll(){

            mainValue = parseInt(primary_source1) + parseInt(annual_turnover1)  
            + parseInt(gross_profit_margin1)  + parseInt(net_profit_margin1) + 
            parseInt(collateral_cover1)  + parseInt(bank_account_duration1);

            secondValue = parseInt(account_type1) + parseInt(status_of_borrowing1) + 
            parseInt(id_type1) + parseInt(age_bracket1) + parseInt(business_function1);

            newValue = parseInt(type_incorporation1) + parseInt(qualification_level1) + 
            parseInt(business_address1) + parseInt(employment_status1) + parseInt(home_address1) + 
            parseInt(member_of_association1);

            finalValue =  parseInt(intro_letter1)  + parseInt(house_status1) + parseInt(referees1) + 
            parseInt(any_capital1)  + parseInt(equity_ratio1);

            var totalValue = mainValue + secondValue + newValue + finalValue;

            sumValue = document.getElementById('sumValue').setAttribute('value', totalValue);

        }


    </script>

@endsection