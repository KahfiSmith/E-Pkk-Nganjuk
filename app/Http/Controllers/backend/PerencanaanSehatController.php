<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\PerencanaanSehat;
use App\Http\Controllers\Controller;

class PerencanaanSehatController extends Controller
{
    public function index() {
        $perencanaan_sehat =  PerencanaanSehat::orderBy('id_p_sehat', 'desc')->where('status', 'pending')->orWhere('status', 'proses')->get();
        return view('backend.perencanaan_sehat', compact('perencanaan_sehat'));
    }
    public function edit(string $id_p_sehat)
    {
        $data = PerencanaanSehat::find($id_p_sehat);
        return view('backend.tampil_perencanaan_sehat', compact('data'));
    }
    public function update(Request $request, string $id_p_sehat)
    {
        $data = PerencanaanSehat::find($id_p_sehat);
            $data->update([
                'J_Psubur' => $request->J_Psubur,
                'J_Wsubur' => $request->J_Wsubur,
                'Kb_p' => $request->Kb_p,
                'Kb_w' => $request->Kb_w,
                'Kk_tbg' => $request->Kk_tbg,
                'status' => $request->status,
                'id_user' => $request->id_user,    
                'tanggal' => $request->tanggal,
                'gambar' => $request->gambar,
            ]);
        return redirect()->route('perencanaan_sehat.index')->with(['success' => 'Berhasil Mengubah Status']);
    }
    public function destroy(string $id_p_sehat)
    {
        
        $data = PerencanaanSehat::find($id_p_sehat);

        $data->delete();

        return redirect()->route('perencanaan_sehat.index')->with(['success' => 'Berhasil Menghapus Laporan']);
    }
}
