<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

Route::post('captcha',function(Request $request){
  //return response(['mensaje'=>'Captcha Valido'],200); //succes
  $recaptcha = $request->input('g-recaptcha-response');
  if($recaptcha != ''){
    $secret = '6LdP79gUAAAAAGJo9aIH-9jMLQlZqHGTNZGOT0iw';
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha.'&remoteip='.$_SERVER['REMOTE_ADDR'];
    $captcha = json_decode(file_get_contents($url),TRUE);
    if($captcha['success']){
      return response(['mensaje'=>'Captcha Valido'],200); //succes
    }else{
      return response(['error'=>'Error Valido'],200); //error del captcha
    }
  }else{
    return response(['error'=>'Captcha Vacio'],200); //captcha vacio
  }
});
