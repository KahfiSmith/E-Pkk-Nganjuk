<?php

namespace App\Http\Controllers\frontend;

//import Model "Post

use App\Models\Berita;
use App\Models\Galeri;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class GaleryController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
        if ($request->has('search')){
            $galerys = Galeri::where('judul','LIKE','%' .$request->search.'%')->paginate(6);
        }else{
            $galerys = Galeri::latest()->paginate(6);
        }
        
        
        //render view with posts
        return view('frontend.galery', compact('galerys'));
       
        //get posts
        // $data = Galeri::latest()->paginate(6);
        
        // //render view with posts
        // return view('frontend.galery', compact('data'));
    }
    
}
