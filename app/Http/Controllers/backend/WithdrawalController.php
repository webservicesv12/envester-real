<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\WithrawalTransaction;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Withdrawal";
        $withdrawal = Withdrawal::orderBy('id','desc')->paginate(10);
        return view('backend.withdrawal.index',compact('page_title','withdrawal'));
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
        $page_title = "Withdrawal Transaction Details";
        $withdrawal = Withdrawal::find($id);
        return view('backend.withdrawal.show',compact('page_title','withdrawal'));
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
        $withdrawal = Withdrawal::find($id);

        $status = $request->status;

        if (in_array($status,array('cancelled','failed'))){
            $withdrawal->user->balance-=$withdrawal->amount;
            $withdrawal->user->save();
        }

        $withdrawal->status = $status;
        $withdrawal->save();



        Mail::to($withdrawal->user->email)->send(new WithrawalTransaction($withdrawal->user->name,$withdrawal->amount,$status,$withdrawal->reference,$withdrawal->user->email));

        return back()->with('alert_success','User withdrawal has been on '.$status);
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
    }
}
