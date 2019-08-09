<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function index(Request $request){
        $reviews = Review::where('from','=',$request->ip())->orWhere('from','=','all')->orderBy('id','desc')->get()->toArray();
        return view('choose',['reviews'=>json_encode($reviews),'notTel'=>1]);
    }

    public function save_sum(Request $request){
        $id = session('id');
        $req = \App\Models\Request::find($id);
        $req->price = $request->get('price');
        $req->save();
        return 'ok';
    }
}
