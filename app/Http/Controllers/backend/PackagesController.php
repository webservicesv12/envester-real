<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequestForm;
use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_title = "All Packages";
        $packages = Packages::paginate(10);
        return view('backend.package.index',compact('page_title','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_title = "Create Package";
        return view('backend.package.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequestForm $request)
    {
        //
        $request->validated();

        Packages::create([
            'name'=>$request->name,
            'min_deposit'=>$request->min_deposit,
            'max_deposit'=>$request->max_deposit,
            'duration'=>strtolower($request->duration),
            'interest'=>$request->interest,
            'referral_percentage'=>$request->referral_percentage
        ]);

        return back()->with('alert_info','Package has been created successfully');
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
        $package = Packages::find($id);
        $page_title = "Edit Package";
        return view('backend.package.edit',compact('package','page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequestForm $request, $id)
    {
        //
        $request->validated();

        $package = Packages::find($id);
        $package->update([
            'name'=>$request->name,
            'min_deposit'=>$request->min_deposit,
            'max_deposit'=>$request->max_deposit,
            'duration'=>strtolower($request->duration),
            'interest'=>$request->interest,
            'referral_percentage'=>$request->referral_percentage
        ]);
        $package->save();

        return back()->with('alert_info','Package has been updated successfully');

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
