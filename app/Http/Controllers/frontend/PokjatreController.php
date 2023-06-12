<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PokjatreController extends Controller
{
    public function index(){
        return view('frontend.pokjatre');
    }
}