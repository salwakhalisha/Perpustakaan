      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Tambah Data Siswa</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="db/db_siswa.php?action=insert" method="POST">
          <div class="card-body">

              <div class="form-group">
                  <label for="nisn">NISN</label>
                  <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN">
              </div>
              <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Masukkan Alamat"></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan nohp">
              </div>
           

          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
          </div>
          </form>
      </div>
      <!-- /.card -->