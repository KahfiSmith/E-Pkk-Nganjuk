<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StrukturController extends Controller
{
    public function index(){
        return view('frontend.struktur');
    }
}
