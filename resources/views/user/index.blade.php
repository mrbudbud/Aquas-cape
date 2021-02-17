


<!DOCTYPE html>
<html lang="en">

@include('templates.head')


<body>
  @include('vendor.sweetalert.alert')
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">JasCape</a>
      <a class="btn btn-primary" href="{{ route('login') }}">Sign In</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Selamat Datang di Jasa Aquascape Lampung</h1>
        </div>
        
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a href="{{ route('request')}}" class="text-dark">
            <div class="features-icons-item mx-auto mb-6 mb-lg-0 mb-lg-4 my-4" style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Request Aquascape</h3>
              <p class="lead mb-0 text-primary">Melayani Pembuatan Aquascape</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{ route('repair')}}" class="text-dark">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 my-4"  style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Repair / Perawatan</h3>
              <p class="lead mb-0 text-primary">Melayani Perbaikan dan penanganan Aquqscape</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{route('konsultasi')}}" class="text-dark">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Konsultasi Aquascape</h3>
              <p class="lead mb-0 text-primary">Melayani keluhan dalam membuat Aquascape</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="{{route('jenis')}}" class="text-dark">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Jenis jenis Aquascape</h3>
              <p class="lead mb-0 text-primary">Melihat Jenis-jenis Aquascape sebagai referensi untuk membuat Aquascape</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="text-dark">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Testimoni</h3>
              <p class="lead mb-0 text-primary">Ready to use with your own content, or customize the source files!</p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="text-dark">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3 my-4"  style="width: 200px;">
              <div class="features-icons-icon d-flex">
                <img src="{{asset('templates/img/tanaman.jpeg')}}" alt="">
              </div>
              <h3>Alat dan Bahan</h3>
              <p class="lead mb-0 text-primary">Ready to use with your own content, or customize the source files!</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('templates/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
