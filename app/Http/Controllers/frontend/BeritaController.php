<?php

namespace App\Http\Controllers\frontend;

//import Model "Post
use App\Models\Berita;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // public function index(Request $request){
    //     $keyword = $request->keyword;

    //     $beritas = Berita::where('judul', 'LIKE', '%'.$keyword.'%');
    //     return view('frontend.berita', compact('beritas'));
    // }
    /**
     * index
     *
      * @return View
     */
    public function index(Request $request): View
    {
        
        if ($request->has('search')){
            $beritas = Berita::where('judul','LIKE','%' .$request->search.'%')->paginate(3);
        }else{
            $beritas = Berita::latest()->paginate(3);
        }
        
        
        //render view with posts
        return view('frontend.berita', compact('beritas'));
       
        
    }
     
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Berita::findOrFail($id);

        //render view with post
        return view('frontend.show', compact('post'));
    }
    // public function index(){
    //     $berita = Berita::get();
    //     return view('frontend.berita', ['tampil' => $berita]);
    // }
}
