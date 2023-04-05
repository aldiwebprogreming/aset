<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aset</title>
  </head>
  <body>

   <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Aset <?= $aset['nama_aset'] ?></h1>
        <p class="lead">Data aset Universitas Harapan Medan</p>
        <hr>
        <div class="card">
          <div class="card-body">
           

            <div class="row">

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Nama Aset</h7>
                    <p><?= $aset['nama_aset'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Kategori</h7>
                    <p><?= $aset['kategori'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Kualitas</h7>
                    <p><?= $aset['kualitas'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Lokasi</h7>
                    <p><?= $aset['lokasi_aset'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">No Faktur</h7>
                    <p style="font-size: 13px;"><?= $aset['no_faktur_pembelian'] ?></p>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Harga</h7>
                    <p><?= $aset['harga_pembelian'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Toko Pem</h7>
                    <p><?= $aset['toko_pembelian'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Foto</h7>
                    <img src="<?= base_url('assets/berkas/') ?><?= $aset['foto'] ?>" class="img-fluid" alt="Responsive image">
                  </div>
                </div>
              </div>


            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>