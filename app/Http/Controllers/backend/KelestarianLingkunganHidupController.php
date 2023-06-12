<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\KelestarianLingkunganHidup;
use App\Http\Controllers\Controller;

class KelestarianLingkunganHidupController extends Controller
{
    public function index() {
        $data =  KelestarianLingkunganHidup::orderBy('id_kelpangan', 'desc')->where('status', 'pending')->orWhere('status', 'proses')->get();
        return view('backend.kelestarian_lingkungan_hidup', compact('data'));
    }
    public function edit(string $id_kelpangan)
    {
        $data = KelestarianLingkunganHidup::find($id_kelpangan);
        return view('backend.tampil_kelestarian_lingkungan_hidup', compact('data'));
    }
    public function update(Request $request, string $id_kelpangan)
    {
        $data = KelestarianLingkunganHidup::find($id_kelpangan);
            $data->update([
                'jamban' => $request->jamban,
                'spal' => $request->spal,
                'tps' => $request->tps,
                'mck' => $request->mck,
                'pdam' => $request->pdam,
                'sumur' => $request->sumur,
                'dll' => $request->dll,
                'gambar_upload' => $request->gambar_upload,
                'id_user' => $request->id_user,
                'status' => $request->status,
                'tanggal' => $request->tanggal,
            ]);
        return redirect()->route('kelestarian_lingkungan_hidup.index')->with(['success' => 'Berhasil Mengubah Status']);
    }
    public function destroy(string $id_kelpangan)
    {
        
        $data = KelestarianLingkunganHidup::find($id_kelpangan);

        $data->delete();

        return redirect()->route('kelestarian_lingkungan_hidup.index')->with(['success' => 'Berhasil Menghapus Laporan']);
    }
}
