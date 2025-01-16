<?php

    include "koneksi.php";
    $idpegawai = $_GET['idpegawai'];;
    $sql = "SELECT * FROM pegawai WHERE idpegawai='$idpegawai'";
    $find_one = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($find_one);
?>

<div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Ubah Data Pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <form action="db/db_pegawai.php?action=edit" method="post">
              <div class="form-group">
            <input type="hidden" value="<?=$data['idpegawai'] ?>" id="idpegawai" name="idpegawai">
                  <label for="idpegawai">idpegawai</label>
                  <input type="number" class="form-control"  value="<?= $data['idpegawai'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" >
              </div>
              <div class="form-group">
                  <label for="nama">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" >
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="Password" class="form-control" id="password" name="password" >
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" > <?= $data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $data['nohp'] ?>" >
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-right">
              <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Ubah</button>
          </div>
          </form>
      </div>
      <!-- /.card -->