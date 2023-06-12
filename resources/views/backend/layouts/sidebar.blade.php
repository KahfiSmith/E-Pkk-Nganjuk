 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_berita">
          <i class="fa-solid fa-newspaper"></i>
          <span>Berita</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="input_pengumuman">
          <i class="fa-sharp fa-solid fa-bullhorn"></i>
          <span>Pengumuman</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="galeri">
          <i class="fa-solid fa-image"></i>
          <span>Galeri</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-book"></i><span>Tinjauan Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="kesehatan">
              <i class="bi bi-circle"></i><span>Kesehatan</span>
            </a>
          </li>
          <li>
            <a href="kelestarian_lingkungan_hidup">
              <i class="bi bi-circle"></i><span>Kelestarian Lingkungan Hidup</span>
            </a>
          </li>
          <li>
            <a href="perencanaan_sehat">
              <i class="bi bi-circle"></i><span>Perencanaan Sehat</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">Halaman</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile" >
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