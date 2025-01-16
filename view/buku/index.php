<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=buku_create&title=buku_create" class="btn btn-success btn-md"><i class="fas fa-book-medical"></i> Tambah Buku</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                    
                  </tr>
                  </thead>
                  
                  <tbody>

<?php
    include "koneksi.php";
    $no=1;
    $sql="SELECT * FROM buku";
    $hasil=mysqli_query($koneksi,$sql);

    while($data=mysqli_fetch_array($hasil)){
        echo "
        <tr>
        <td>$no</td>
        <td>$data[judul]</td>
        <td>$data[pengarang]</td>
        <td>$data[penerbit]</td>
        <td>
        <a href='index.php?title=buku&page=buku_detail&nobuku=$data[nobuku]' class='btn btn-outline-primary btn-sm' title='view'>
            <i class='fas fa-eye'></i>
        </a>

        <a href='index.php?title=buku&page=buku_edit&nobuku=$data[nobuku]' class='btn btn-outline-success btn-sm' title='edit'>
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