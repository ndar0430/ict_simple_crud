<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_db = Company::all();

        return view('company.view', compact('company_db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_db = Company::all();

        return view('company.add', compact('company_db'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation of fields
        $this->validate($request, [
            'company_name' => 'required',
            'company_address'   => 'required',
            'zipcode'   => 'required',
            'contactno'   => 'required',
            'fax'   => 'required',
            'emailaddress'   => 'required|unique:company_main',
            'category'   => 'required',
            ]);
        
            $company = new Company;
            $company->company_name = $request['company_name'];
            $company->company_address = $request['company_address'];
            $company->zipcode = $request['zipcode'];
            $company->contactno = $request['contactno'];
            $company->fax = $request['fax'];
            $company->emailaddress = $request['emailaddress'];
            $company->category = $request['category'];
            $company->status = "Pending";
            $company->save();

            return redirect()->route('company.index')->with('message', 'Your listing is on pending!');


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
