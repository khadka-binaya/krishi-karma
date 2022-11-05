@section('navbar')
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a href="/" class="navbar-brand mx-auto mx-lg-0">KrishiKarma</a>

    <div class="d-flex align-items-center d-lg-none">
      <i class="navbar-icon bi-telephone-plus me-3"></i>
      <a class="custom-btn btn" href="#section_5">
        023-055326
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-lg-5">
        <li class="nav-item">
          <a class="nav-link click-scroll" href="#section_1">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="#section_2">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="#section_3">Categories</a>
        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="{{route('frontend.package')}}">Packages</a>

        </li>

        <li class="nav-item">
          <a class="nav-link click-scroll" href="#section_5">Contact</a>
        </li>
      </ul>

      <div class="d-lg-flex align-items-center d-none ms-auto">
        <i class="navbar-icon bi-telephone-plus me-3"></i>
        <a class="custom-btn btn" href="#section_5">
          023-055326
        </a>
      </div>
    </div>
  </div>
</nav>

@endsection