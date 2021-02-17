<!DOCTYPE html>
<html lang="en">
    @include('templates.head')
<body>

      <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Isi Form Dibawah Ini Dengan Benar</h1> <br>
          <h1>Untuk melengkapi formulis Request</h1>
        </div>
      </div>
    </div>
  </header>

    <!-- Image Showcases -->
    <section class="showcase">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img my-4">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control form-control-lg" placeholder="Alamat Tujuan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="notlp" class="form-control form-control-lg" placeholder="Nomor Telpon">
                        </div>
                        <div class="form-group">
                            <textarea name="detail" class="form-control" id="w3review" rows="4" cols="50" placeholder="Isi sesuai kebutuhan anda!!"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>Re-pair Atau Perawatan Aquascape</h2>
                  <p class="lead mb-0">Re-pair Aquascapemu Untuk Tampilan Yang Berbeda Atau Perawatan Untuk Aquascapemu Agar Ekosistem Didalamnya Tetap Terjaga!</p>
                </div>
              </div>
          </div>
        </div>
    </section>
    
</body>
</html>