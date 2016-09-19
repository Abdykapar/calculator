<?php

namespace App\Http\Controllers;

use App\Term_Insurance;
use App\Type;
use Illuminate\Http\Request;

use App\Http\Requests;

class CalculatorController extends Controller
{
    public function index(){
        $class = Type::all();
        $term = Term_Insurance::all();
        return view('index',compact('class','term'));
    }
}
