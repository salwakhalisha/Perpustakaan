<?php
$aksi=$_GET['action'];
include "../koneksi.php";

if($aksi=='insert'){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

    mysqli_query($koneksi,"INSERT INTO siswa SET 
    nisn='$nisn', nama='$nama', 
    alamat='$alamat', nohp='$nohp'");
}

elseif($aksi=="edit"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    // var_dump($nisn,$nama,$alamat);

    $sql="UPDATE siswa SET nama='$nama', alamat='$alamat', nohp='$nohp' WHERE nisn='$nisn'";

    $update=mysqli_query($koneksi,$sql);
 

}

//elseif($aksi=='hapus'){
//    $nisn=$_GET['nisn'];

//    $sql="DELETE FROM siswa WHERE nisn='$nisn'";
//    mysqli_query($koneksi,$sql);
//}

header("location:../index.php?title=siswa&page=siswa");