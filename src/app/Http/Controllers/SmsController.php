<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index(Request $request){
        $reviews = Review::where('from','=',$request->ip())->orWhere('from','=','all')->orderBy('id','desc')->get()->toArray();

        return view('sms',['reviews'=>json_encode($reviews)]);
    }

    public function accept(Request $request){
        $id = session('id');
        $req = \App\Models\Request::find($id);
        if($request->get('code') == $req->code){
            return 'ok';
        }else{
            return 'wrong';
        }
    }

    public function update_sms(Request $request){
        $id = session('id');
        $req = \App\Models\Request::find($id);
        $req->code = rand(10000,99999);
        $req->save();
        file_get_contents('https://smsc.ru/sys/send.php?login=genersite&psw=genersite&phones='.$req->phone.'&mes=Код+подтверждения:+'.$req->code);
    }

}
