<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dahsboardController extends Controller
{
    public function dashboard(){

        $totalPerson=DB::table('people')->count();
        $totalCompany=DB::table('companies')->count();
        $totalBalance=DB::table('people')->select( DB::raw('SUM(cast(balance as double precision)) as balance '))->first();

        return view('dashboard',compact('totalPerson','totalCompany','totalBalance'));    
    }
}
