<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Models\Company;

class PersonalController extends Controller
{
    public function index()
    {
        $company = Company::all();
       $personal = Personal::all();
       return view('personal.index',compact(['company','personal']));

       
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
       return view('personal.create',compact('company','personal'));
   
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
            'personalname' => 'required|max:255',
            'personallastname' => 'required|max:255',
            'personalemail' => 'required|email|max:255',
            'personalphone' => 'required|min:10|max:11',
            'personaltitle' => 'required|max:255',
            'personaltc' => 'required|min:11|max:11',
            'personalcompany' => 'required|max:255'
        ]);

        $personal = new Personal([
            'personalname' => $request->get('personalname'),
            'personallastname' => $request->get('personallastname'),
            'personalemail' => $request->get('personalemail'),
            'personalphone' => $request->get('personalphone'),
            'personaltitle' => $request->get('personaltitle'),
            'personaltc' => $request->get('personaltc'),
            'personalcompany' => $request->get('personalcompany')
        ]);
        $personal->save();

        return redirect('/Personal')->with('success','Personal saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);

        return view('personal.show',compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);
        $company = Company::find($id);
        return view('personal.edit',compact(['personal','company']));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'personalname' => 'required|max:255',
            'personallastname' => 'required|max:255',
            'personalemail' => 'required|email|max:255',
            'personalphone' => 'required|min:10|max:11',
            'personaltitle' => 'required|max:255',
            'personaltc' => 'required|min:11|max:11',
            'personalcompany' => 'required|max:255'
        ]);

        $personal = Personal::find($id);
        $personal->personalname = $request->get('personalname');
        $personal->personallastname = $request->get('personallastname');
        $personal->personalemail = $request->get('personalemail');
        $personal->personalphone = $request->get('personalphone');
        $personal->personaltitle = $request->get('personaltitle');
        $personal->personaltc = $request->get('personaltc');
        $personal->personalcompany = $request->get('personalcompany');
        $personal->save();

        return redirect('/Personal')->with('success','Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->delete();

        return redirect('/Personal')->with('success', 'Personal deleted!');
    }
}
