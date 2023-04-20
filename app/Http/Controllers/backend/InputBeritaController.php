<?php

namespace App\Http\Controllers\backend;

use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class InputBeritaController extends Controller
{
    public function index(){
        $data = Berita::all();
        return view('backend.input_berita', compact('data'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        Berita::create([
            'image' => $imageName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect()->route('input_berita.index')->with(['success' => 'Berhasil Menambahkan Berita']);
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);

        $data = Berita::find($id);
        $data->update([
            'image' => $imageName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('input_berita.index')->with(['success' => 'Berhasil Mengedit Berita']);
    }

    public function edit(string $id)
    {
        $data = Berita::find($id);
        return view('backend.tampil_berita', compact('data'));
    }

    public function destroy(string $id)
    {
        $data = Berita::find($id);
        $data->delete();
        return redirect()->route('input_berita.index')->with(['success' => 'Berhasil Menghapus Berita']);
    }
}
