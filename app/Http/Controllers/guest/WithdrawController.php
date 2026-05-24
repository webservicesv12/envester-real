<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawalRequestForm;
use App\Mail\WithrawalTransaction;
use App\Models\PaymentMethod;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "Withdrawal";
        $withdrawal = Withdrawal::where('user_id',auth()->id())->orderBy('id','desc')->paginate(10);
        return view('guest.withdraw.index',compact('page_title','withdrawal'));
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
    public function store(WithdrawalRequestForm $request)
    {
        //
        $request->validated();

        $amount = $request->amount;
        $wallet_address = $request->wallet_address;
        $payment_method_id = $request->payment_method;
        $payment_methodname = "Cryptocurrency";

        $payment_method = PaymentMethod::find($payment_method_id);

        $wallet = auth()->user();

        if ($wallet->balance < $amount){
            return back()->with('alert_error','Insufficient balance, please check and try again');
        }

        $reference = uniqid();

        Withdrawal::create([
            'user_id'=>$wallet->id,
            'payment_method_id'=>$payment_method->id,
            'payment_method' => $payment_methodname,
            'reference'=>$reference,
            'amount'=>$amount,
            'withdrawal_details'=>$wallet_address
        ]);

        $wallet->balance-=$amount;
        $wallet->save();

        Mail::to(get_settings('official_email'))->send(new WithrawalTransaction("Admin",$payment_method->name,$request->amount,"processing",$reference,$wallet->email));

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
