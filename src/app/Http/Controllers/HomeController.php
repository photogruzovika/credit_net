<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $reviews = Review::where('from','=',$request->ip())->orWhere('from','=','all')->orderBy('id','desc')->get()->toArray();
        return view('welcome',['reviews'=>json_encode($reviews),'mainPage' => 1]);
    }

    public function add_email(Request $request){
        Questions::create(['email'=>$request->get('email')]);
        return 'ok';
    }
    public function add_review(Request $request){
        Review::create(['name'=>$request->get('name'),'text'=>$request->get('message'),'from'=>$request->ip()]);
        return 'ok';
    }
    public function reg(Request $request){
        $code = rand(10000,99999);
        $req = \App\Models\Request::create([
            'fname'=>$request->get('fname'),
            'sname'=>$request->get('sname'),
            'tname'=>$request->get('tname'),
            's_pas'=>$request->get('serial_pas'),
            'num_pas'=>$request->get('num_pas'),
            'country_from'=>$request->get('country'),
            'phone'=>$request->get('phone'),
            'code'=>$code,
        ]);
        file_get_contents('https://smsc.ru/sys/send.php?login=kotobankredit&psw=12345aaasss&phones='.$request->get('phone').'&mes=Код+подтверждения:+'.$code);
        session(['id' => $req->id]);
        return redirect('/sms');
    }
}
