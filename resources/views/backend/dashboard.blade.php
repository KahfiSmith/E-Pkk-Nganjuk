@extends('backend/layouts.template')

@section('content')

<main id="main" class="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{ $message }}
  </div>
  @endif

  <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->

          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pengguna</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jmlh_user }}</h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah total pengguna</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Galeri</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-image"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $count1 }}</h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah total galeri</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Tinjauan Laporan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $count2 }}</h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah total laporan</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            
            <div class="col-md-12 mx-auto mt-2">

        <div class="pagetitle">
          <h1>Daftar Pengguna</h1>
        <div class="card mt-2">
          <div class="card-body">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Pengguna</th>
                  <th scope="col">Nama Kecamatan</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @forelse ($pengguna as $user)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  </td>
                  <td>{{ $user->nama_pengguna }}</td>
                  <td>{{ $user->nama_kec}}</td>
                </tr>
                @empty
                <div class="alert alert-danger mt-4">
                    Tidak ada data Pengguna
                </div> 
                @endforelse
              </tbody>
            </table>
          </div>
        </div>

        <div class="pagetitle">
          <h1>Daftar Galeri</h1>
        </div><!-- End Page Title -->

        <div class="card mt-2">
          <div class="card-body">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @forelse ($data as $tampil)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td><img src="{{ asset('frontend/assets/img/galeri/'.$tampil->gambar1) }}" class="rounded img" style="width: 150px" style="height: 100px">
                  </td>
                  <td>{{ $tampil->judul }}</td>
                  <td>{{ $tampil->status }}</td>
                  <td>
                    
                      <form action="{{ route('galeri.destroy', $tampil->id_user)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus galeri?')"
                        >Hapus</button>
                      </form>
                    
                  </td>
                </tr>
                @empty
                <div class="alert alert-danger mt-4">
                    Tidak ada data galeri
                </div> 
                @endforelse
                
              </tbody>
            </table>

          </div>
        </div>

        <div class="pagetitle">
          <h1>Daftar Laporan Kesehatan</h1>
        </div><!-- End Page Title -->

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
                @forelse ($data1 as $sehat1)
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  </td>
                  <td>{{ $sehat1->gambar_upload }}</td>
                  <td>{{ $sehat1->kategori_laporan }}</td>
                  <td class="text-center">{{ $sehat1->jumlah_posyandu }}</td>
                  <td class="text-center">{{ $sehat1->jumlah_posyandu_iterasi }}</td>
                  <td class="text-center">{{ $sehat1->jumlah_klp }}</td>
                  <td class="text-center">{{ $sehat1->jumlah_anggota }}</td>
                  <td class="text-center">{{ $sehat1->jumlah_kartu_gratis }}</td>
                  <td>{{ $sehat1->status }}</td>
                  <td>{{ $sehat1->tanggal }}</td>
                  <td>

                      <form action="{{ route('kesehatan.destroy', $sehat1->id_laporan_sehat)}}" method="POST" class="d-inline">
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

          <div class="pagetitle">
                  <h1>Daftar Laporan Kelestarian Lingkungan Hidup</h1>
                </div><!-- End Page Title -->
      
                <div class="card mt-2">
                  <div class="card-body">
      
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Gambar</th>
                          <th class="text-center" scope="col">Jamban</th>
                          <th class="text-center" scope="col">Spal</th>
                          <th class="text-center" scope="col">Tps</th>
                          <th class="text-center" scope="col">Mck</th>
                          <th class="text-center" scope="col">Pdam</th>
                          <th class="text-center" scope="col">Sumur</th>
                          <th class="text-center" scope="col">Dll</th>
                          <th scope="col">Status</th>
                          <th scope="col">tanggal</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                        @forelse ($data2 as $pangan1)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          </td>
                          <td>{{ $pangan1->gambar_upload }}</td>
                          <td class="text-center">{{ $pangan1->jamban }}</td>
                          <td class="text-center">{{ $pangan1->spal }}</td>
                          <td class="text-center">{{ $pangan1->tps }}</td>
                          <td class="text-center">{{ $pangan1->mck }}</td>
                          <td class="text-center">{{ $pangan1->pdam }}</td>
                          <td class="text-center">{{ $pangan1->sumur }}</td>
                          <td class="text-center">{{ $pangan1->dll }}</td>
                          <td>{{ $pangan1->status }}</td>
                          <td>{{ $pangan1->tanggal }}</td>
                          <td>
      
                              <form action="{{ route('kelestarian_lingkungan_hidup.destroy', $pangan1->id_kelpangan)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus galeri?')"
                                >Hapus</button>
                              </form> 
                            
                          </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger mt-4">
                            Tidak ada data kelestarian lingkugan hidup
                        </div> 
                        @endforelse
                        
                      </tbody>
                    </table>
      
                  </div>
                </div>

                <div class="pagetitle">
                  <h1>Daftar Laporan Perencanaan Sehat</h1>
                </div><!-- End Page Title -->
      
                <div class="card mt-2">
                  <div class="card-body">
      
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Gambar</th>
                          <th class="text-center" scope="col">Perempuan Subur</th>
                          <th class="text-center" scope="col">Wanita subur</th>
                          <th class="text-center" scope="col">Kb Perempuan</th>
                          <th class="text-center" scope="col">Kb Wanita</th>
                          <th class="text-center" scope="col">Kk Tbg</th>
                          <th scope="col">Status</th>
                          <th scope="col">Tanggal</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                        @forelse ($data3 as $p_sehat1)
                        <tr>
                          <th scope="row">{{ $no++ }}</th>
                          </td>
                          <td>{{ $p_sehat1->gambar }}</td>
                          <td class="text-center">{{ $p_sehat1->J_Psubur }}</td>
                          <td class="text-center">{{ $p_sehat1->J_Wsubur }}</td>
                          <td class="text-center">{{ $p_sehat1->Kb_p }}</td>
                          <td class="text-center">{{ $p_sehat1->Kb_w }}</td>
                          <td class="text-center">{{ $p_sehat1->Kk_tbg }}</td>
                          <td>{{ $p_sehat1->status }}</td>
                          <td>{{ $p_sehat1->tanggal }}</td>
                          <td>
      
                              <form action="{{ route('perencanaan_sehat.destroy', $p_sehat1->id_p_sehat)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus laporan?')"
                                >Hapus</button>
                              </form> 
                            
                          </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger mt-4">
                            Tidak ada data perencanaan sehat
                        </div> 
                        @endforelse
                        
                      </tbody>
                    </table>
      
                  </div>
                </div>

      </div>
    </div>


      </div>
    </div>
  </section>

  </main><!-- End #main -->

  @endsection