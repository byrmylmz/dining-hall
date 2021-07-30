<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $persons=person::all();
        return view('person.index',compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=company::all();
        return view('person.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        person::create($request->all()+['users_id'=>auth()->id(),'companies_id'=>$request->company]);
        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(person $person)
    {
        
        $companies=company::all();
        return view('person.edit',compact('person','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, person $person)
    {
        $person->update($request->all()+['users_id'=>auth()->id(),'companies_id'=>$request->company]);
        return redirect()->route('person.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(person $person)
    {
        $person->delete();
        return redirect()->route('person.index');
    }


    public function balance($id)
    {   
        $balance=DB::table('people')->where('id',$id)->first();
        return view('person.balance',compact('balance'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    
    public function addBalance(person $person)
    {
       // $person->update()
    }
}
