<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;

class FeesController extends Controller
{
    public function viewform(){
        return view('095049.fees');
    }
    public function register(){
        $fees=new Fees();
        $fees->StudentNo=request('Sno');
        $fees->Date=request('date');
        $fees->Amount=request('Amount');
        $fees->save();
        return redirect('/');
    }
    public function search(){
        $fees= Fees::all()->where("StudentNo", request('Sno'));
        return view('095049.displayFees', ['fees' => $fees]);
    }
    public function homepage(){
        $fees=new Fees();
        return view('095049.homepage', compact('fees'));
    }
}
