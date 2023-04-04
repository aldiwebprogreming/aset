<style>
  td{
    font-weight: normal;
  }
</style>
<!-- Main content -->
<section class="content">


  <div class="row">
    <div class="col-md-12">

      <div class="box box-danger">
        <div class="box-header">
          <h3 class="box-title">  <i class="fa fa-users"></i> Data Aset</h3>

        </div>
        <div class="box-body">
          <hr>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Aset
          </button>



          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-plus"></i> Form Tambah Data Aset</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="<?= base_url('app/act_addAset') ?>">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Aset</label>
                    <input type="text" name="kode" class="form-control" required value="<?= $kode ?>">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Aset</label>
                    <input type="text" name="nama_aset" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <select class="form-control" name="kategori">
                      <option>-- Pilih Kategori --</option>
                      <?php 
                      foreach ($kategori as $kate) {
                        ?>
                        <option><?= $kate['nama_kategori'] ?></option>

                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kualitas</label>
                    <select class="form-control" name="kualitas">
                      <option>-- Pilih Kualitas --</option>
                      <?php 
                      foreach ($kualitas as $kt) {
                        ?>
                        <option><?= $kt['kualitas'] ?></option>

                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Aset</label>
                    <select class="form-control" name="lokasi_aset">
                      <option>-- Pilih Lokasi Aset --</option>
                      <?php 
                      foreach ($lokasi as $lk) {
                        ?>
                        <option><?= $lk['nama_lokasi'] ?></option>

                      <?php } ?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">No Faktur Pembelian</label>
                    <input type="text" name="no_faktur_pembelian" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Pembelian</label>
                    <input type="number" name="harga_pembelian" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Toko Pembelian</label>
                    <input type="text" name="toko_pembelian" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Foto Barang</label>
                    <input type="file" name="foto" class="form-control" required="">
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" id="cetakqr" >Cetak QR Aset</button>
        <form method="post" action="<?= base_url('app/cetakqr') ?>" target="_blank">

          <button type="submit" class="btn btn-primary" id="actklik" style="display:none">Cetak QR</button>


          <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Aset</th>
                    <th>Kategori</th>
                    <th>Kualitas</th>
                    <th>Lokasi Aset</th>
                    <th>Faktur Pembelian</th>
                    <th>Harga Pembelian</th>
                    <th>Toko Pembelian</th>
                    <th>Foto</th>
                    <th>QR</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($aset as $data){ ?>
                    <tr>
                      <td>
                       <div class="form-check">
                        <input required class="form-check-input" name="kodeqr[]" type="checkbox" value="<?= $data['kode'] ?>" id="defaultCheck1">
                      </form>
                    </div>
                  </td>
                  <td><?= $no++ ?></td>
                  <td>
                    <?= $data['kode'] ?>
                  </td>
                  <td><?= $data['nama_aset'] ?></td>
                  <td><?= $data['kategori'] ?></td>
                  <td><?= $data['kualitas'] ?></td>
                  <td><?= $data['lokasi_aset'] ?></td>
                  <td><?= $data['no_faktur_pembelian'] ?></td>
                  <td><?= $data['harga_pembelian'] ?></td>
                  <td><?= $data['toko_pembelian'] ?></td>

                  <td>
                    <a href="<?= base_url('assets/berkas/') ?><?= $data['foto'] ?>" target="_blank"><img src="<?= base_url('assets/berkas/') ?><?= $data['foto'] ?>" style="height: 100px;"></a>
                  </td>
                  <td>
                    <img src="<?= base_url('assets/qr/') ?><?= $data['qr'] ?>.png" style="height: 100px;">
                  </td>
                  <td>
                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModaledit<?= $data['id'] ?>"><i class="fa fa-pen"></i> Edit</a>

                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalhapus<?= $data['id'] ?>"><i class="fa fa-trash"></i></a>

                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalpinjam<?= $data['id'] ?>">Pinjam</a>


                  </td>
                </tr>


                <!-- Modal Edit -->
                <div class="modal fade" id="exampleModaledit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Lokasi Aset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">0

                        <form method="post" enctype="multipart/form-data" action="<?= base_url('app/act_editaset') ?>">

                          <input type="hidden" name="id" value="<?= $data['id']  ?>">

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Aset</label>
                            <input type="text" name="kode" class="form-control" readonly required value="<?= $data['kode'] ?>">
                          </div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Aset</label>
                            <input type="text" name="nama_aset" class="form-control" value="<?= $data['nama_aset'] ?>" required="">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kategori</label>
                            <select class="form-control" name="kategori">
                              <option><?= $data['kategori'] ?></option>
                              <option>-- Pilih Kategori --</option>
                              <?php 

                              foreach ($kategori as $kate) {
                                ?>
                                <option><?= $kate['nama_kategori'] ?></option>

                              <?php } ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Kualitas</label>
                            <select class="form-control" name="kualitas">
                             <option><?= $data['kualitas'] ?></option>
                             <option>-- Pilih Kualitas --</option>
                             <?php 
                             foreach ($kualitas as $kt) {
                              ?>
                              <option><?= $kt['kualitas'] ?></option>

                            <?php } ?>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Lokasi Aset</label>
                          <select class="form-control" name="lokasi_aset">
                           <option><?= $data['lokasi_aset'] ?></option>
                           <option>-- Pilih Lokasi Aset --</option>
                           <?php 
                           foreach ($lokasi as $lk) {
                            ?>
                            <option><?= $lk['nama_lokasi'] ?></option>

                          <?php } ?>
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">No Faktur Pembelian</label>
                        <input type="text" name="no_faktur_pembelian" class="form-control" required="" value="<?= $data['no_faktur_pembelian'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Harga Pembelian</label>
                        <input type="number" name="harga_pembelian" class="form-control" required="" value="<?= $data['harga_pembelian'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Toko Pembelian</label>
                        <input type="text" name="toko_pembelian" class="form-control" required="" value="<?= $data['toko_pembelian'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto Barang</label>
                        <input type="file" name="foto" class="form-control">
                      </div>



                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- End Modal Edit -->

            <!-- Modal Hapus -->
            <div class="modal fade" id="exampleModalhapus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data Aset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <h4>Apakah anda ingin menghapus data ini ? </h4>
                    <form method="post" action="<?= base_url('app/act_hapusaset') ?>">
                      <input type="hidden" name="id" value="<?= $data['id'] ?>">

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>



            <!-- End Modal Edit -->


            <!-- Modal pinjam -->
            <div class="modal fade" id="exampleModalpinjam<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman Data Aset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">


                    <form method="post" action="<?= base_url('app/act_addpinjam') ?>">
                      <input type="hidden" name="id" value="<?= $data['id'] ?>">

                      <input type="hidden" name="kode_aset" value="<?= $data['kode'] ?>">



                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" class="form-control" required="">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Peminjam</label>
                        <textarea class="form-control" name="alamat_peminjam" required></textarea>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">No Hp Peminjam</label>
                        <input type="text" name="nohp_peminjam" class="form-control" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Barang</label>
                        <input type="number" name="jml_barang" class="form-control" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Peminjaman</label>
                        <input type="date" name="tgl_peminjaman" class="form-control" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Pengembalian</label>
                        <input type="date" name="tgl_pengembalian" class="form-control" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Keterangan</label>
                        <textarea class="form-control" name="keterangan"></textarea>
                      </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          <?php } ?>

        </tbody>
        <tfoot>
          <tr>
            <th>#</th>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Aset</th>
            <th>Kategori</th>
            <th>Kualitas</th>
            <th>Lokasi Aset</th>
            <th>Faktur Pembelian</th>
            <th>Harga Pembelian</th>
            <th>Toko Pembelian</th>
            <th>Foto</th>
            <th>QR</th>
            <th>Opsi</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</tbody>


</section>
<!-- /.content -->
</div>


<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){

    $("#cetakqr").click(function(){

      $("#actklik").trigger('click'); 

    })

  })
</script>