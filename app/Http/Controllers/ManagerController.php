<?php

namespace App\Http\Controllers;


use App\Models\approvals;
use App\Models\Payment;
use App\Models\User;
use App\Notifications\LoanApproved;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('manager');
    }

    public function managerDashboard()
    {
        $staff = User::where('role', 'staff')->get();
        $manager = User::where('role', 'manager')->get();
        $clients = User::where('role', 'client')->get();
        $approvals = Approvals::all();
        $amountPaidBack = Payment::sum('amount');
        $amountGiven = Approvals::where('status', 'approved')->sum('amount');

        return view('manager.dashboard', [
            'staff' => $staff,
            'amountPaidBack' => $amountPaidBack,
            'amountGiven' => $amountGiven,
            'clients' => $clients,
            'approvals' => $approvals,
            'manager' => $manager,

        ]);
    }

    public function approvalsTable()
    {

        $approvals = Approvals::paginate(20);

        return view('manager.approvals-table', [
            'approvals' => $approvals
        ]);
    }

    /**
     * clientDetail
     * Retrive all verified clients details
     * @param  mixed $uid
     * @return void
     */
    public function clientDetail($uid)
    {
        $users = User::where('verifiedBy', $uid)->where('role', 'client')->get();

        return view('manager.client-detail', [
            'users' => $users
        ]);
    }

    /**
     * postApproval
     *Allows all managers quary database for approvals and changes the state of the approvals.
     * @param  mixed $request
     * @param  mixed $apid
     * @return void
     */
    public function postApproval(Request $request, $apid)
    {

        $approvals = Approvals::findorFail($apid);
        $approvals->approving_manager_name = $request->input('approving_manager_name');
        $approvals->status = $request->input('status');
        $approvals->amount = $request->input('amount');
        $approvals->comment = $request->input('comment');
        $approvals->save();

        $request->session()->flash('success', 'Request Approved');



        // $client = DB::table('Users')
        //     ->join('Approvals', function ($join) {
        //         $join->on('Users.uid', '=', 'Users.uid')
        //             ->where('Users.uid', $this->approvals->uid);
        //     })
        //     ->get();




        // // $approvalData = [
        // //     'body' => '',
        // //     'approvalText' => '',
        // //     'url' => '',
        // //     'thankypu' => ''
        // // ];

        // // $client->notify(new LoanApproved($approvalData));

        // dd($client);
        return redirect('manager-approval-table');
    }

    /**
     * postUserID
     *
     * @param  mixed $request
     * @param  mixed $uid
     * @return void
     */
    public function postUserID(Request $request, $uid)
    {

        $users = User::findorFail($uid);
        $users->approval = $request->input('approval');
        $users->save();

        $request->session()->flash('success', 'Request Approved');

        return redirect('manager-approval-table');
    }




    /**
     * usersTable
     *
     * @return void
     */
    public function usersTable()
    {


        $users = User::where('role', 'staff')->paginate(20);

        return view('manager.user-table', [
            'users' => $users
        ]);
    }

    public function deleteUser(Request $request, $uid)
    {
        user::destroy($uid);

        $request->session()->flash('success', 'Staff Deleted.');
        return redirect('manager-users-table');
    }
}
