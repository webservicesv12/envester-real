<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\DepositTransactions;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Deposits";
        $deposits = Deposit::orderBy('id','desc')->paginate(10);
        return view('backend.deposit.index',compact('page_title','deposits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $page_title = "Deposit Transaction Details";
        $deposit = Deposit::find($id);
        return view('backend.deposit.show',compact('page_title','deposit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $deposit = Deposit::find($id);


        $status = $request->status;

       if (in_array($status, ['completed'])) {
            $deposit->user->balance += $deposit->amount;
            $deposit->user->save(); // Save the user model, not the balance field
        }


        $deposit->status = $status;
        $deposit->save();

        Mail::to($deposit->user->email)->send(new DepositTransactions($deposit->user->name,$deposit->payment_method->name,$deposit->amount,$status,$deposit->reference,$deposit->user->email));

        return back()->with('alert_success','User deposit has been on '.$status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        abort(404);
    }
}
