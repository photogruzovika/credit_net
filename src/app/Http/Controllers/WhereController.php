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
}
