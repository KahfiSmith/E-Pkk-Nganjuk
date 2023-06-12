<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LambangController extends Controller
{
    public function index(){
        return view('frontend.lambang');
    }
}