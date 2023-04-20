{{-- @extends('backend/layouts.template') --}}

{{-- @section('content1') --}}

<!DOCTYPE html>
,<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Input Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="backend/assets/img/favicon.png" rel="icon">
 <link href="backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.gstatic.com" rel="preconnect">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
 <link href="backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
 <link href="backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
 <link href="backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="backend/assets/css/style.css" rel="stylesheet">

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
          <a class="nav-link collapsed" href="dashboard">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="input_berita" class="active">
                <i class="bi bi-circle"></i><span>Berita</span>
              </a>
            </li>
            <li>
              <a href="components-accordion.html">
                <i class="bi bi-circle"></i><span>Pengumuman</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/pages-faq.html')}}">
            <i class="bi bi-person"></i>
            <span>Galeri</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/pages-faq.html')}}">
            <i class="bi bi-person"></i>
            <span>Review Laporan</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-heading">Halaman</li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/users-profile.html')}}">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/pages-contact.html')}}">
            <i class="bi bi-envelope"></i>
            <span>Kontak</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/logout">
            <i class="bi bi-envelope"></i>
            <span>Logout</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-md-12 mx-auto mt-2">
          <div class="pagetitle">
            <h1>Input Berita</h1>
          </div><!-- End Page Title -->
          
          <div class="card">
            <div class="card-body mt-4">
              <form action="{{ route('input_berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf   
                <div class="form-outline mb-4">
                  <label for="image" class="form-label">Gambar</label>
                  <input type="file" name="image" id="image" class="form-control"
                    required oninvalid="this.setCustomValidity('Harap unggah gambar berita')" 
                    oninput="this.setCustomValidity('')"/>
                </div>
                
                <div class="form-outline mb-4">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control"
                    required oninvalid="this.setCustomValidity('Harap lengkapi judul berita')" 
                    oninput="this.setCustomValidity('')"
                    placeholder="Masukkan Judul Berita"/>
                </div>

                <div class="form-outline mb-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="6" id="deskripsi" placeholder="Masukkan Dekripsi Berita" required oninvalid="this.setCustomValidity('Harap lengkapi deskripsi berita')" 
                    oninput="this.setCustomValidity('')"></textarea>
                    <div class="invalid-feedback">
                    Harap lengkapi deskripsi berita
                    </div>
                </div>

                <div class="text-end pt-1 pb-1 mt-4">
                  <button class="btn btn-primary ps-xxl-5 pe-xxl-5 mr-auto background-blue-1 mb-2 fw-semibold fs-5" type="submit">Kirim</button>
                </div>

              </form>

            </div>
          </div>

          <div class="pagetitle">
            <h1>List Berita</h1>
          </div><!-- End Page Title -->

          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif

          <div class="card mt-2">
            <div class="card-body">

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @forelse ($data as $berita)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td><img src="{{ asset('images/'.$berita->image) }}" class="rounded" style="width: 150px">
                    </td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ Str::limit($berita->deskripsi, 75) }}</td>
                    <td>
                        <a href="{{ route('input_berita.edit', $berita->id) }}" class="btn btn-sm btn-tambah">EDIT</a>

                        <form action="{{ route('input_berita.destroy', $berita->id)}}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus berita?')"
                          >Delete</button>
                      </form>
                      
                    </td>
                  </tr>
                  @empty
                  <div class="alert alert-danger mt-4">
                      Tidak ada data berita
                  </div> 
                  @endforelse
                  
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="backend/assets/vendor/chart.js/chart.umd.js"></script>
<script src="backend/assets/vendor/echarts/echarts.min.js"></script>
<script src="backend/assets/vendor/quill/quill.min.js"></script>
<script src="backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="backend/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="backend/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="backend/assets/js/main.js"></script>

</body>

{{-- </html> --}}
{{-- @endsection --}}