{{-- @extends('backend/layouts.template')

@section('content') --}}

<!DOCTYPE html>
,<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kesehatan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="icon">
 <link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.gstatic.com" rel="preconnect">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
 <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

   {{-- fontawesome --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="{{asset('backend/assets/img/pkk.png')}}" alt="">
          <span class="d-none d-lg-block">PKK NGANJUK</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->
  
      <nav class="header-nav ms-auto">
      </nav><!-- End Icons Navigation -->
  
    </header><!-- End Header -->
  
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('input_berita.index') }}">
            <i class="fa-solid fa-newspaper"></i>
            <span>Berita</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('input_pengumuman.index') }}">
            <i class="fa-sharp fa-solid fa-bullhorn"></i>
            <span>Pengumuman</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('galeri.index') }}">
            <i class="fa-solid fa-image"></i>
            <span>Galeri</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-book"></i><span>Tinjauan Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('kesehatan.index') }}" class="active">
                <i class="bi bi-circle"></i><span>Kesehatan</span>
              </a>
            </li>
            <li>
              <a href="{{ route('kelestarian_lingkungan_hidup.index') }}">
                <i class="bi bi-circle"></i><span>Kelestarian Lingkungan Hidup</span>
              </a>
            </li>
            <li>
              <a href="{{ route('perencanaan_sehat.index') }}">
                <i class="bi bi-circle"></i><span>Perencanaan Sehat</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Halaman</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('profile.index') }}" >
            <i class="fa-solid fa-user"></i>
            <span>Profil</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/logout" onclick="return confirm('Apakah anda yakin ingin keluar?')">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Keluar</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
    <div class="pagetitle">
            <h1>Daftar Laporan Kesehatan</h1>
          </div><!-- End Page Title -->

          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif

          <div class="card mt-2">
            <div class="card-body">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Kategori</th>
                    <th class="text-center" scope="col">Posyandu</th>
                    <th class="text-center" scope="col">Posyandu Integrasi</th>
                    <th class="text-center" scope="col">Klp</th>
                    <th class="text-center" scope="col">Anggota</th>
                    <th class="text-center" scope="col">Kartu Gratis</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @forelse ($data as $sehat)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td><img src="{{ asset('frontend2/assets/Bidang_kesehatan/'.$sehat->gambar_upload) }}" class="rounded img" width="200" height="200">
                    </td>
                    <td>{{ $sehat->kategori_laporan }}</td>
                    <td class="text-center">{{ $sehat->jumlah_posyandu }}</td>
                    <td class="text-center">{{ $sehat->jumlah_posyandu_iterasi }}</td>
                    <td class="text-center">{{ $sehat->jumlah_klp }}</td>
                    <td class="text-center">{{ $sehat->jumlah_anggota }}</td>
                    <td class="text-center">{{ $sehat->jumlah_kartu_gratis }}</td>
                    <td>{{ $sehat->status }}</td>
                    <td>{{ $sehat->tanggal }}</td>
                    <td>
                         <a href="{{ route('kesehatan.edit', $sehat->id_laporan_sehat) }}" class="btn btn-sm btn-tambah">Review</a>

                        <form action="{{ route('kesehatan.destroy', $sehat->id_laporan_sehat)}}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus laporan?')"
                          >Hapus</button>
                        </form> 
                      
                    </td>
                  </tr>
                  @empty
                  <div class="alert alert-danger mt-4">
                      Tidak ada data kesehatan
                  </div> 
                  @endforelse
                  
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Vendor JS Files -->
<script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

{{-- @endsection --}}