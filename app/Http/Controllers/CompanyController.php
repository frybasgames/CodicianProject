<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Personal;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $personal = Personal::all();
       return view('company.index',compact(['company','personal']));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        $personal = Personal::all();
        return view('company.create',compact('company','personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'companyname' => 'required|max:255',
            'companyvkntckn' => 'required|min:11|max:11',
            'companyaddress' => 'required|max:255',
            'companywebsite' => 'required|max:255',
            'companyphone' => 'required|min:10|max:11',
            'companyarea' => 'required|max:255'
        ]);

        $company = new Company([
            'companyname' => $request->get('companyname'),
            'companyvkntckn' => $request->get('companyvkntckn'),
            'companyaddress' => $request->get('companyaddress'),
            'companywebsite' => $request->get('companywebsite'),
            'companyphone' => $request->get('companyphone'),
            'companyarea' => $request->get('companyarea')
        ]);
        $company->save();

        return redirect('/Company')->with('success','Company saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        
        return view('company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);

        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'companyname' => 'required|max:255',
            'companyvkntckn' => 'required|min:11|max:11',
            'companyaddress' => 'required|max:255',
            'companywebsite' => 'required|max:255',
            'companyphone' => 'required|min:10|max:11',
            'companyarea' => 'required|max:255'
        ]);

        $company = Company::find($id);
        $company->companyname = $request->get('companyname');
        $company->companyvkntckn = $request->get('companyvkntckn');
        $company->companyaddress = $request->get('companyaddress');
        $company->companywebsite = $request->get('companywebsite');
        $company->companyphone = $request->get('companyphone');
        $company->companyarea = $request->get('companyarea');
        $company->save();

        return redirect('/Company')->with('success','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/Company')->with('success', 'Company deleted!');
    }
}
