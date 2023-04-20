@extends('backend/layouts.template')

@section('content')

<main id="main" class="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{ $message }}
  </div>
  @endif

    {{-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

  </main><!-- End #main -->

  @endsection