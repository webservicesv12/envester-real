<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomMessageRequestForm;
use App\Mail\CustomMessageMail;
use App\Models\CustomMessage;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class CustomMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Custom Message";
        return view('backend.custom-message.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomMessageRequestForm $request)
    {

        $request->validated();

        CustomMessage::create([
            'user_id'=>auth()->id(),
            'subject'=>$request->subject,
            'type'=>$request->type,
            'receiver_email'=>$request->receiver_email,
            'message'=>$request->message
        ]);

        // Determine the recipient
        if ($request->type == 'all_clients') {
            // Logic to send email to all clients
            $recipients = User::all()->pluck('email');
        } else {
            // Logic to send email to a specific address
            $recipients = $request->receiver_email;
        }

        // Send the email to each recipient
        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new CustomMessageMail($request->subject, $request->message,$recipient));

        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Custom message sent successfully.');
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
