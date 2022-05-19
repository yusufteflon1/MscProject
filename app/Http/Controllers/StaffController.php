<?php

namespace App\Http\Controllers;


use App\Models\approvals;
use App\Models\Business;
use App\Models\Guarantor;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
    }

    public function staffDashboard()
    {
        $clients = User::where('role', 'client')->get();
        $amountPaidBack = Payment::sum('amount');
        $amountGiven = Approvals::where('status', 'approved')->sum('amount');
        $approvals = Approvals::all();

        return view('staff.dashboard', [
            'clients' => $clients,
            'approvals' => $approvals,
            'amountPaidBack' => $amountPaidBack,
            'amountGiven' => $amountGiven,

        ]);
    }

    public function clientTable()
    {

        $clients = User::where('role', 'client')->paginate(20);

        return view('staff.client-table', [
            'clients' => $clients
        ]);
    }


    /**
     * postVerify
     *Verify each client and also create a request for approval accessabe to the manager.
     * @param  mixed $request
     * @param  mixed $uid
     * @return void
     */
    public function postVerify(Request $request, $uid)
    {
        $currentId = Auth::user()->uid;

        try {

            DB::table('users')
                ->where('uid', $uid)
                ->update(
                    ['verifiedBy' => $currentId, 'verified' => 1]
                );
            $approval = new approvals();
            $approval->client_name = $request->input('client_name');
            $approval->amount = $request->input('amount');
            $approval->uid = $request->input('uid');
            $approval->sid = Auth::user()->uid;
            $approval->save();
            $request->session()->flash('success', 'Request Approved');
        } catch (\Exception $exception) {
            $request->session()->flash('error', 'Sorry An Error Occurred.');
            print_r($exception);
        }

        return redirect('staff-client-table');
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $clients = User::where('role', 'client')
            ->where('first_name', 'LIKE', "%{$search}%")
            ->orWhere('last_name', 'LIKE', "%{$search}%")
            ->paginate(20);

        // Return the search view with the resluts compacted
        return view('staff.client-table', compact('clients'));
    }




    public function postStaffProfile(Request $request)
    {

        try {
            $staff = User::find(Auth::user()->uid);
            $staff->first_name = $request->input('first_name');
            $staff->last_name = $request->input('last_name');
            $staff->department = $request->input('department');
            $staff->completed = $request->input('completed');
            $staff->phone = $request->input('phone');
            $staff->role = $request->input('role');
            $staff->save();
        } catch (\Exception $exception) {
            $request->session()->flash('error', 'Sorry An Error Occurred.');
        }

        return redirect('staff-dashboard');
    }


    public function creditRecoveryTable()
    {

        $payments = Payment::paginate(20);
        // $payments->User->first_name = User::where('uid', 'pid')->get();
        return view('staff.creditRecoveryTable', [
            'payments' => $payments

        ]);
    }
    public function guarantorDetail($uid)
    {
        $guarantors = Guarantor::where('uid', $uid)->get();

        return view('staff.guarantorDetail', [
            'guarantors' => $guarantors,
        ]);
    }

    public function businessDetail($uid)
    {
        $business = Business::where('uid', $uid)->get();

        return view('staff.businessDetail', [
            'businesss' => $business,
        ]);
    }
    public function clientDetail($uid)
    {
        $client = User::where('uid', $uid)->get();


        return view('staff.clientDetail', [
            'clients' => $client,
        ]);
    }
}
