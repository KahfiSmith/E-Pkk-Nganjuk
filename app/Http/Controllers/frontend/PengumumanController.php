<?php

namespace App\Http\Controllers\frontend;

//import Model "Post
use App\Models\Pengumuman;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
        
        if ($request->has('search')){
            $pengumumen = Pengumuman::where('judulPengumuman','LIKE','%' .$request->search.'%')->paginate(3);
        }else{
            $pengumumen = Pengumuman::latest()->paginate(3);
        }
        
        
        //render view with posts
        return view('frontend.pengumuman', compact('pengumumen'));
       
        
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
        $post = Pengumuman::findOrFail($id);

        //render view with post
        return view('frontend.ehh', compact('post'));
    }
}
