<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

        <!-- Vendor CSS Files -->
    <link href="{{ asset ('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- style -->
    <link rel="stylesheet" href="frontend/assets/css/login.css">

</head>

<body>

    <section class="scrollbar-hidden-x h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-1 text-black">
                <div class="row g-0">

                  <div class="col-lg-6 align-items-center background-blue-1">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4 text-center m-auto">
                        <h4 class="mb-4 mt-4">PKK KABUPATEN NGANJUK</h4>
                        <p class="small mb-5">Pusat Informasi Seputar Kegiatan PKK di Kabupaten Nganjuk</p>
                        <img src="frontend/assets/img/favicon.png"
                          style="width: 200px;" alt="logo" class="mb-5" class="img-center">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                      <div class="text-center">
                        <h2 class="mt-1 mb-5 pb-1 font-col">Masuk</h2>
                      </div>

                      @if ($message = Session::get('success'))
                      <div class="alert alert-success" role="alert">
                        {{ $message }}
                      </div>
                      @endif
                      
                      <form action="{{ route('login') }}" method="POST">
                        @csrf                 
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            required autocomplete="email" oninvalid="this.setCustomValidity('Harap lengkapi data anda')" 
                            oninput="this.setCustomValidity('')"
                            placeholder="Masukkan Email Anda" value="{{ old('email')}}"/>
                            @error('email')
                            <div class="invalid-feedback">
                              {{ 'Email yang anda masukkan salah' }}
                            </div> @enderror
                        </div>
      
                        <div class="form-outline mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" 
                            required autocomplete="password" oninvalid="this.setCustomValidity('Harap lengkapi data anda')" 
                            oninput="this.setCustomValidity('')"
                            placeholder="Masukkan Password Anda"/>
                            @error('password')
                            <div class="invalid-feedback">
                              {{ 'Password yang anda masukkan salah' }}
                            </div> @enderror
                        </div>

                        {{-- <div class="block mt-1 mb-5">
                          <label for="remember_me" class="inline-flex items-center">
                              <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                              <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Ingatkan saya</span>
                          </label>
                      </div> --}}
      
                        <div class="text-center pt-1 mb-3 pb-1">
                          <button class="btn btn-primary form-control background-blue-1 mb-3 fw-semibold fs-5" type="submit">Login</button>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <a class="text-muted" href="{{  route('password.request')  }}">Lupa password?</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>

</html>