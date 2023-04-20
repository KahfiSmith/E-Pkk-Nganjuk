<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiMisiController extends Controller
{
    public function index(){
        return view('frontend.visimisi');
    }
}
