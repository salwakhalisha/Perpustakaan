<?php
        include "koneksi.php";
        $nobuku = $_GET['nobuku'];
        $query = "SELECT * FROM buku WHERE nobuku='$nobuku'";
        $find_one = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($find_one);

        ?>


      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Judul <?= $data['judul'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">

              <div class="form-group">
                  <label for="nobuku">No Buku</label>
                  <input type="text" class="form-control" id="nobuku" name="nobuku" value="<?= $data['nobuku'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="judul">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang Buku</label>
                  <textarea class="form-control" rows="3" id="pengarang" name="pengarang" disabled> <?= $data['pengarang'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit Buku</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="ISBN">Kode ISBN</label>
                  <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?= $data['ISBN'] ?>" disabled>
              </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <a href="index.php?title=buku&page=buku" class="btn btn-success"><i class="fas fa-undo-alt"></i> Kembali</a>
          </div>

      </div>
      <!-- /.card -->