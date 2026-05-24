<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankWithdrawalRequestForm;
use App\Mail\WithrawalTransaction;
use App\Models\BankWithdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BankWithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "Bank Withdrawal";
        $withdrawal = BankWithdrawal::where('user_id',auth()->id())->orderBy('id','desc')->paginate(10);
        return view('guest.withdraw.bank',compact('page_title','withdrawal'));
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
    public function store(BankWithdrawalRequestForm $request)
    {
        //
        $request->validated();

        $amount = $request->amount;
        $bank_name = $request->bank_name;
        $remote_code = $request->remote_code;
        $account_number = $request->account_number;
        $id_type = $request->id_type;

        $id_number = $request->id_number;



        $wallet = auth()->user();

        if ($wallet->balance < $amount){
            return back()->with('alert_error','Insufficient balance, please check and try again');
        }

        $reference = uniqid();
        $payment_method = "Bank Transfer";

        BankWithdrawal::create([
            'user_id'=>$wallet->id,
            'payment_method'=>$payment_method,
            'id_type' => $id_type,
            'reference'=>$reference,
            'id_number'=>$id_number,
            'amount'=>$amount,
            'bank_name'=>$bank_name,
            'account_number'=>$account_number,
            'remote_code'=>$remote_code
        ]);

        $wallet->balance-=$amount;
        $wallet->save();

        Mail::to(get_settings('official_email'))->send(new WithrawalTransaction("Admin",$payment_method,$request->amount,"processing",$reference,$wallet->email));

        return back()->with('alert_info','Your payment has been sent for processing');

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
        abort(404);
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
