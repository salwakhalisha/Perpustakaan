      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Tambah Data Buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="db/db_buku.php?action=create" method="post">
          <div class="card-body">

              <div class="form-group">
                  <label for="nobuku">Nomor Buku</label>
                  <input type="text" class="form-control" id="nobuku" name="nobuku" placeholder="Masukkan Nomor Buku">
              </div>
              <div class="form-group">
                  <label for="judul">Judul Buku</label>
                  <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang Buku</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Nama Pengarang">
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit Buku</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit">
              </div>
              <div class="form-group">  
                  <label for="ISBN">Kode ISBN</label>
                  <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="Masukkan Kode ISBN">
              </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
          </div>
          </form>
      </div>
      <!-- /.card -->