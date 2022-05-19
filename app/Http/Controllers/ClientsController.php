<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Guarantor;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('client');
    }

    public function clientProfile()
    {

        return view('client.profile');
    }

    public function clientPaymentHistory()
    {
        $uid = Auth::user()->uid;
        $payments = Payment::where('uid', $uid)->paginate(20);
        return view('client.payment-history', [
            'payments' => $payments,

        ]);
    }

    public function postClientProfile(Request $request)
    {
        try {
            $client = User::find(Auth::user()->uid);
            $client->first_name = $request->input('first_name');
            $client->last_name = $request->input('last_name');
            $client->address = $request->input('address');
            $client->phone = $request->input('phone');
            $client->education = $request->input('education');
            $client->gender = $request->input('gender');
            $client->age_range = $request->input('age_range');
            $client->disability = $request->input('disability');
            $client->state_of_origin = $request->input('state_of_origin');
            $client->identification = $request->input('identification');
            $client->id_number = $request->input('id_number');
            $client->id_issue_date = $request->input('id_issue_date');
            $client->id_expiry = $request->input('id_expiry');
            $client->nationality = $request->input('nationality');
            $client->qualification = $request->input('qualification');
            $client->lga = $request->input('lga');
            $client->completed = $request->input('completed');
            $client->address = $request->input('address');
            $client->house_condition = $request->input('house_condition');
            $client->save();
            $request->session()->flash('success', 'Profile Updated');
        } catch (\Exception $exception) {
            $request->session()->flash('error', 'Sorry An Error Occurred.');
        }

        return redirect('client-profile');
    }

    public function postUploadPayment(Request $request)
    {


        //  try{

        $payment = new payment();
        $payment->amount = $request->input('amount');
        $payment->uid = Auth::user()->uid;


        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $fileName = $file->getClientOriginalName();
            $file->move("uploads", $fileName);
            $payment->proof = url('uploads/' . $fileName);
        }

        $payment->save();




        $request->session()->flash('success', 'payment uploaded.');

        return redirect('client-profile');


        //  }catch (\Exception $exception){

        //   $request->session()->flash('error','Sorry an error occurred. Please try again');
        //  return redirect( 'client-profile');

        //}



    }
    public function postUploadGuarantor(Request $request)
    {


        try {
            $guarantor = new Guarantor();
            $guarantor->first_name = $request->input('first_name');
            $guarantor->last_name = $request->input('last_name');
            $guarantor->email = $request->input('email');
            $guarantor->phone = $request->input('phone');
            $guarantor->education = $request->input('education');
            $guarantor->occupation = $request->input('occupation');
            $guarantor->emp_status = $request->input('emp_status');
            $guarantor->job_title = $request->input('job_title');
            $guarantor->state_of_origin = $request->input('state_of_origin');
            $guarantor->grade_level = $request->input('grade_level');
            $guarantor->length_of_service = $request->input('length_of_service');
            $guarantor->bvn = $request->input('bvn');
            $guarantor->lga = $request->input('lga');
            $guarantor->marital_status = $request->input('marital_status');
            $guarantor->dob = $request->input('dob');
            $guarantor->date_of_appointment = $request->input('date_of_appointment');
            $guarantor->uid = Auth::user()->uid;

            $guarantor->save();


            $client = User::find(Auth::user()->uid);
            $client->guarantorFilled = $request->input('guarantorFilled');
            $client->save();

            $request->session()->flash('success', 'Guarantor uploaded.');

            return redirect('client-profile');
        } catch (\Exception $exception) {

            $request->session()->flash('error', 'Sorry an error occurred. Please try again');
            return redirect('client-profile');
        }
    }

    public function postUploadBusiness(Request $request)
    {


        try {

            $business = new Business();
            $business->business_name = $request->input('business_name');
            $business->business_status = $request->input('business_status');
            $business->email = $request->input('email');
            $business->phone = $request->input('phone');
            $business->number_of_emp = $request->input('number_of_emp');
            $business->location = $request->input('location');
            $business->business_type = $request->input('business_type');
            $business->business_start = $request->input('business_start');
            $business->gross_revenue = $request->input('gross_revenue');
            $business->primary_source = $request->input('primary_source');
            $business->annual_turnover = $request->input('annual_turnover');
            $business->gross_profit_margin = $request->input('gross_profit_margin');
            $business->net_profit_margin = $request->input('net_profit_margin');
            $business->collateral_cover = $request->input('collateral_cover');
            $business->bank_account_duration = $request->input('bank_account_duration');
            $business->account_type = $request->input('account_type');
            $business->status_of_borrowing = $request->input('status_of_borrowing');
            $business->id_type = $request->input('id_type');
            $business->supplier_invoice = $request->input('supplier_invoice');
            $business->age_bracket = $request->input('age_bracket');
            $business->business_function = $request->input('business_function');
            $business->type_incorporation = $request->input('type_incorporation');
            $business->qualification_level = $request->input('qualification_level');
            $business->business_address = $request->input('business_address');
            $business->employment_status = $request->input('employment_status');
            $business->home_address = $request->input('home_address');
            $business->member_of_association = $request->input('member_of_association');
            $business->intro_letter = $request->input('intro_letter');
            $business->house_status = $request->input('house_status');
            $business->referees = $request->input('referees');
            $business->any_capital = $request->input('any_capital');
            $business->equity_ratio = $request->input('equity_ratio');
            $business->certifications = $request->input('certifications');
            $business->business_class = $request->input('business_class');
            $business->shareholder_1 = $request->input('shareholder_1');
            $business->shareholder_2 = $request->input('shareholder_2');
            $business->shareholder_3 = $request->input('shareholder_3');
            $business->shareholder_4 = $request->input('shareholder_4');
            $business->experience = $request->input('experience');
            $business->main_supplier = $request->input('main_supplier');
            $business->main_clients = $request->input('main_clients');
            $business->risk_plan = $request->input('risk_plan');
            $business->uid = Auth::user()->uid;


            $business->save();

            $client = User::find(Auth::user()->uid);
            $client->businessFilled = $request->input('businessFilled');
            $client->credit_score = $request->input('credit_score');
            $client->save();




            $request->session()->flash('success', 'Business uploaded.');

            return redirect('client-profile');
        } catch (\Exception $exception) {

            $request->session()->flash('error', 'Sorry an error occurred. Please try again');
            return redirect('client-profile');
        }
    }
}
