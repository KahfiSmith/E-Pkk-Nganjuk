{{-- @extends('backend/layouts.template') --}}

{{-- @section('content1') --}}

<!DOCTYPE html>
,<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profil</title>
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
          <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Menu</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="{{ route('input_berita.index') }}">
                <i class="bi bi-circle"></i><span>Berita</span>
              </a>
            </li>
            <li>
              <a href="{{ route('input_pengumuman.index') }}">
                <i class="bi bi-circle"></i><span>Pengumuman</span>
              </a>
            </li>
          </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/pages-faq.html')}}">
            <i class="fa-solid fa-image"></i>
            <span>Galeri</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="{{asset('backend/pages-faq.html')}}">
            <i class="fa-solid fa-book"></i>
            <span>Tinjauan Laporan</span>
          </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-heading">Halaman</li>

        <li class="nav-item">
          <a class="nav-link" href="profil" >
            <i class="fa-solid fa-user"></i>
            <span>Profil</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Keluar</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Profil</h1>
      </div><!-- End Page Title -->
    
      <section class="section profile">
        <div class="row">
    
          <div class="col-xl-8">
    
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
    
                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
                  </li>
    
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                  </li>
    
                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Kata Sandi</button>
                  </li>
    
                </ul>
                <div class="tab-content pt-2">
    
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-4" role="alert">
                      {{ $message }}
                    </div>
                    @endif
    
                    <h5 class="card-title">Profile lengkap</h5>
    
                    <div class="row">
                        <div class="col-lg-3 col-md-4 label">Nama lengkap</div>
                        <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nomer telepon</div>
                      <div class="col-lg-9 col-md-8">{{ $user->nomer_telepon }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat</div>
                      <div class="col-lg-9 col-md-8">{{ $user->alamat }}</div>
                    </div>
    
                  </div>
    
                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                    <h5 class="card-title">Edit profil</h5>
    
                        <!-- Profile Edit Form -->
                        <form action="{{ route('profile.update', $user->id) }}" method="POST">
                          
                            @method('PUT')
                            @csrf
      
                          <div class="row mb-3">
                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama lengkap</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="name" type="text" class="form-control" id="name" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Harap lengkapi nama')" 
                              oninput="this.setCustomValidity('')" value="{{ $user->name }}">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="email" type="text" class="form-control" readonly id="email" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Harap lengkapi email')" 
                              oninput="this.setCustomValidity('')" value="{{ $user->email }}">
                            </div>
                          </div>
      
                          <div class="row mb-3">
                            <label for="nomer_telepon" class="col-md-4 col-lg-3 col-form-label">Nomer telepon</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="nomer_telepon" type="number" maxlength="13" class="form-control @error('nomer_telepon') is-invalid @enderror" id="nomer_telepon" placeholder="Masukkan Nomer Telepon" required oninvalid="this.setCustomValidity('Harap lengkapi nomer telepon')" 
                              oninput="this.setCustomValidity('')" value="{{ $user->nomer_telepon }}">
                                                          @error('nomer_telepon')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                            </div>

                          </div>
      
                          <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                            <div class="col-md-8 col-lg-9">
                              <textarea class="form-control" name="alamat" rows="6" id="alamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Harap lengkapi alamat')" 
                              oninput="this.setCustomValidity('')">{{ $user->alamat }}</textarea>
                            </div>
                          </div>
      
                          <div class="text-end mt-4">
                            <button class="btn btn-primary mr-auto background-blue-1 mb-2 fw-semibold fs-5" type="submit">Edit Data Profil</button>
                          </div>
                        </form><!-- End Profile Edit Form -->
    
                  </div>
    
                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <h5 class="card-title">Ubah Kata Sandi</h5>
                    
                    <form action="{{ route('change_password.update', $user->id) }}" method="POST">
    
                        @method('PUT')
                        @csrf
    
                        <div class="row mb-3">
                          <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Kata sandi saat ini</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="currentPassword" type="password" class="form-control @error('currentPassword') is-invalid @enderror" id="currentPassword" placeholder="Masukkan Kata Sandi Saat Ini" required autocomplete="email" oninvalid="this.setCustomValidity('Harap lengkapi kata sandi anda')" 
                            oninput="this.setCustomValidity('')">
                            @error('currentPassword')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>

                        </div>
    
                        <div class="row mb-3">
                          <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Kata sandi baru</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror" id="newPassword" placeholder="Masukkan Kata Sandi Baru" required autocomplete="email" oninvalid="this.setCustomValidity('Harap lengkapi kata sandi anda anda')" 
                            oninput="this.setCustomValidity('')">
                          </div>
                          @error('newpassword')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
    
                        <div class="row mb-3">
                          <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Konfirmasi kata sandi baru </label>
                          <div class="col-md-8 col-lg-9">
                            <input name="renewpassword" type="password" class="form-control @error('renewpassword') is-invalid @enderror" id="renewPassword" placeholder="Konfirmasi Kata Sandi Anda" required autocomplete="email" oninvalid="this.setCustomValidity('Harap lengkapi kata sandi anda')" 
                            oninput="this.setCustomValidity('')">
                          </div>
                          @error('renewpassword')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
    
                        <div class="text-end mt-4">
                          <button class="btn btn-primary mr-auto background-blue-1 mb-2 fw-semibold fs-5" type="submit">Ubah Kata Sandi</button>
                        </div>
                      </form><!-- End Change Password Form -->
    
                  </div>
    
                </div><!-- End Bordered Tabs -->
    
              </div>
            </div>
    
          </div>
        </div>
      </section>
    
    </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

{{-- </html> --}}
{{-- @endsection --}}