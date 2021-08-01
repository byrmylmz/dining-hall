<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\person;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Get('/balance-control/{card_id}', function($card_id){
    
    $persons=person::where('card_id',$card_id)->get();
  
     foreach ($persons as $person) {
         if($person->balance <=0){
            return response('Yetersiz Bakiye Lütfen Bakiye Yükleyin');
         } else{
            $persons=DB::table('people')->select(DB::raw('cast(balance as integer'))->decrement('balance',1);
            return response('İşlem Başarıyla Tamamlandı');
         }        
     }
   
  
});


