<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Kesehatan;
use App\Http\Controllers\Controller;

class KesehatanController extends Controller
{
    public function index() {
        $data =  Kesehatan::orderBy('id_laporan_sehat', 'desc')->where('status', 'pending')->orWhere('status', 'proses')->get();
        return view('backend.kesehatan', compact('data'));
    }
    public function edit(string $id_laporan_sehat)
    {
        $data = Kesehatan::find($id_laporan_sehat);
        return view('backend.tampil_kesehatan', compact('data'));
    }
    public function update(Request $request, string $id_laporan_sehat)
    {
        $data = Kesehatan::find($id_laporan_sehat);
            $data->update([
                'kategori_laporan' => $request->kategori_laporan,
                'jumlah_posyandu' => $request->jumlah_posyandu,
                'jumlah_posyandu_iterasi' => $request->jumlah_posyandu_iterasi,
                'jumlah_klp' => $request->jumlah_klp,
                'jumlah_anggota' => $request->jumlah_anggota,
                'jumlah_kartu_gratis' => $request->jumlah_kartu_gratis,
                'gambar_upload' => $request->gambar_upload,
                'id_user' => $request->id_user,
                'status' => $request->status,
                'tanggal' => $request->tanggal,
            ]);
        return redirect()->route('kesehatan.index')->with(['success' => 'Berhasil Mengubah Status']);
    }
    public function destroy(string $id_laporan_sehat)
    {
        
        $data = Kesehatan::find($id_laporan_sehat);

        $data->delete();

        return redirect()->route('kesehatan.index')->with(['success' => 'Berhasil Menghapus Laporan']);
    }
}
