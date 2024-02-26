
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tahmid | @yield('page_title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @include('backend.includes.style')
  
</head>

<body>

  <!-- ======= Header ======= -->
 @include('backend.includes.header')

  <!-- ======= Sidebar ======= -->
 @include('backend.includes.sidebar')

  <main id="main" class="main">
    {{-- <div class="pagetitle">
      <h1>@yield('page_title')</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">@yield('menu_title')</li>
          <li class="breadcrumb-item active">@yield('menu_subtitle')</li>
        </ol>
      </nav>
    </div> --}}
    <!-- End Page Title -->

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('backend.includes.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('backend.includes.script')

</body>

</html>