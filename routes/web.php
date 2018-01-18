<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Events\HeRequest as HeRequest;

Route::name('webview')->get('/',function (){
//    event(new HeRequest(array('simple'=>$_SERVER['HTTP_USER_AGENT'],'nombre'=>$_SERVER['HTTP_HOST'])));
    Mail::send('plaiConMain',array('dados'=> array('simple'=>'m','nombre'=>'n')),function ($message){
        $message->to('codedevelopment.24@gmail.com')->from('maicon.fazzio2012.md@gmail.com')->subject('Contact');
    });
    return response('Content-type',200)->json(array('message'=>'RequestComplete'));
});
