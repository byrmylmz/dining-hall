<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $person->delete();
        return redirect()->route('person.index');
    }
    
    
    public function balance($id)
    {       
        //dd($id);
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $balance=DB::table('people')->where('id',$id)->first();
        return view('person.balance',compact('balance'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    
    public function updateBalance(request $request, $id)
    {  
        
        abort_if(Gate::denies('people_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $data=array();
        $data['balance']=$request->balance;
        DB::table('people')->where('id',$id)->update($data);
        return redirect()->route('person.index');    
    }
}
