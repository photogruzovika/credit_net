<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class WhereController extends Controller
{
    public function index(Request $request){
        $reviews = Review::where('from','=',$request->ip())->orWhere('from','=','all')->orderBy('id','desc')->get()->toArray();
        return view('from',['reviews'=>json_encode($reviews)]);
    }
    public function save_from(Request $request){
        mb_internal_encoding("UTF-8");

        $id = session('id');
        $req = \App\Models\Request::find($id);
        $req->country_to_delivery = $request->get('country');
        $req->city_to_delivery = $request->get('city');
        $req->address = $request->get('address');
        $req->save();
        return 'ok';
    }
}
