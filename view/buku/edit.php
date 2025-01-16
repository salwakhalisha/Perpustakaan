<?php
        include "koneksi.php";
        $nobuku= $_GET['nobuku'];
        $query = "SELECT * FROM buku WHERE nobuku='$nobuku'";
        $find_one = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($find_one);

        ?>
      <!-- Default box -->
      <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Ubah Data Buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
            <form action="db/db_buku.php?action=edit" method="post">
            <div class="form-group">
            <input type="hidden" value="<?=$data['nobuku'] ?>" id="nobuku" name="nobuku">
                  <label for="nobuku">No Buku</label>
                  <input type="number" class="form-control"  value="<?= $data['nobuku'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="judul">judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" >
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $data['pengarang'] ?>" >
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>" >
              </div>
              <div class="form-group">
                  <label for="ISBN">Kode ISBN</label>
                  <input type="text" class="form-control" id="ISBN" name="ISBN"  value="<?= $data['ISBN'] ?>">
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-right">
              <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Ubah</button>
          </div>
          </form>
      </div>
      <!-- /.card -->