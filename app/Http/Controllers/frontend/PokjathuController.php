<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PokjathuController extends Controller
{
    public function index(){
        return view('frontend.pokjathu');
    }
}