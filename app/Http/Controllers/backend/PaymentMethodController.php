<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentMethodRequestForm;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "Payment Method";
        $payment_method = PaymentMethod::paginate(10);
        return view('backend.payment-method.index',compact('page_title','payment_method'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Create Payment Method";
        return view('backend.payment-method.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentMethodRequestForm $request)
    {
        //
        $request->validated();

        PaymentMethod::create([
            'name'=>$request->name,
            'wallet_address'=>$request->wallet_address,
            'network'=>$request->network
        ]);

        return back()->with('alert_info','Payment Method has been added successfully');
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
        abort(404);
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
        $page_title = "Payment Method";
        $payment_method = PaymentMethod::find($id);
        return view('backend.payment-method.edit',compact('payment_method','page_title'));
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
        $page_title = "Edit Payment Method";
        $payment_method = PaymentMethod::find($id);
        $payment_method->update([
            'name'=>$request->name,
            'wallet_address'=>$request->wallet_address,
            'network'=>$request->network
        ]);
        $payment_method->save();

        return back()->with('alert_info','Payment Method has been updated successfully');
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
