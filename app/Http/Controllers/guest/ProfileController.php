<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequestForm;
use App\Http\Requests\ProfileRequestForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "Account Profile";
        return view('guest.profile.index',compact('page_title'));
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
    public function store(ProfileRequestForm $request)
    {
        //
        $request->validated();

        $user = auth()->user();
        $user->phone = $request->phone;
        $user->name = $request->name;
        $user->save();

        return back()->with('alert_info','Profile has been updated successfully');
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
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChangePasswordRequestForm $request, $id)
{
    // Validate the request
    $request->validated();

    // Get the currently authenticated user
    $user = auth()->user();

    // Check if the old password matches the user's current password
    if (!Hash::check($request->old_password, $user->password)) {
        return back()->with('alert_error', 'Invalid old password, please check and try again');
    }

    // Update the user's password
    $user->password = Hash::make($request->new_password);
    $user->save();

    // Redirect back with a success message
    return back()->with('alert_info', 'Your password has been changed successfully');
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
