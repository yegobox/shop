<?php

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
use Webkul\Customer\Models\CustomerAudio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


Route::get('products',function (){
    return;
});
Route::get('categories',function (){
   return;
});
Route::post('customer/register',function(){
   return;
});
Route::post('customer/login',function(){
   return;
});
Route::post('audios',function(){

   $validation = Validator::make( request()->all(), [
      'audio' => 'required',
      'token' => 'required',
  ]);

  if ($validation->fails()) {
      return response()->json($validation->errors(), 422);
  }

  $data = request()->all();

  if (request()->file('audio')) {
   $path = request()->file('audio')->storePublicly('public');
   $link =  Storage::url($path);
  }

  $data['is_seen'] = 0;
  $data['audios'] = $link;

 $data= CustomerAudio::create($data);

  return response()->json(['data' => $data], 200);
});