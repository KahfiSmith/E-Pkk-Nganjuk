<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kesehatan;
use App\Models\KelestarianLingkunganHidup;
use App\Models\PerencanaanSehat;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $pengguna = Pengguna::orderBy('id', 'desc')->paginate(5);

        $jmlh_user = Pengguna::count();
        $count1 = Galeri::count();
        $modelPertama = Kesehatan::count();
        $modelKedua = KelestarianLingkunganHidup::count();
        $modelKetiga = PerencanaanSehat::count();
        $count2 = $modelPertama + $modelKedua + $modelKetiga;
        $data = Galeri::where('status', 'upload')->paginate(5);
        $data1 = Kesehatan::where('status', 'selesai')->paginate(5);
        $data2 = KelestarianLingkunganHidup::where('status', 'selesai')->paginate(5);
        $data3 = PerencanaanSehat::where('status', 'selesai')->paginate(5);
        return view('backend.dashboard', compact('pengguna', 'data', 'count1', 'jmlh_user', 'count2', 'data1', 'data2', 'data3'));
    }

}