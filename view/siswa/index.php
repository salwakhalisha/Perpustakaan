<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Siswa</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=siswa_create&title=siswa_create" class="btn btn-success btn-md"><i class="fas fa-user-edit"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama siswa</th>
                    <th>Alamat</th>
                    <th>Nohp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                        include "koneksi.php";
                        $no=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM siswa");
                        while($data=mysqli_fetch_array($sql)){
                            echo "
                            <tr>
                            <td>$no</td>
                            <td>$data[nisn]</td>
                            <td>$data[nama]</td>
                            <td>$data[alamat]</td>
                            <td>$data[nohp]</td>
                            <td>
                            <a href='index.php?title=siswa&page=siswa_detail&nisn=$data[nisn]' class='btn btn-outline-primary btn-sm' title='View'>
                                <i class='fas fa-eye'></i>
                            </a>
                            
                            <a href='index.php?title=siswa&page=siswa_edit&nisn=$data[nisn]' class='btn btn-outline-success btn-sm' title='view'>
                                <i class='fas fa-edit'></i>
                            </a>
   
                        </td>
                          </tr>"; 
                          $no++;
                        }
                        ?>
            
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>