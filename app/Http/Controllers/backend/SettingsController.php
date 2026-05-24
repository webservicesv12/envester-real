<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "Settings";

        $all_settings = Settings::distinct()->whereNotIN('settings_input_type',['file'])->get(array('id','settings_type','settings_description','settings_key','settings_value','settings_input_type'));

        $all_settings_arrays = array();

        foreach ($all_settings as $all_setting){
            $old_key = $all_setting['settings_type'];

            $all_settings_arrays[$old_key][] = array(
                'id'=>$all_setting['id'],
                'key' => $all_setting['settings_key'],
                'value' => $all_setting['settings_value'],
                'settings_input_type'=>$all_setting['settings_input_type'],
                'descr' => $all_setting['settings_description']
            );
        }

        $all_key = array_keys($all_settings_arrays);
        $all_settings_array = $all_settings_arrays;


        return view('backend.settings.index',compact('page_title','all_key','all_settings_array'));
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
        $all_settings_data = $request->except('_token');

        // return $all_settings_data;


        foreach ($all_settings_data as $key => $value){
            $settings = \App\Models\Settings::find($key);
            $settings->settings_value = @$value;
            $settings->save();
        }

        return redirect()->back()->with('alert_info','Settings has been updated successfully')->withInput();
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
