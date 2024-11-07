<?php
$aksi=$_GET['action'];
include "../koneksi.php";

if($aksi=='insert'){
    $idpegawai=$_POST['idpegawai'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

    mysqli_query($koneksi,"INSERT INTO pegawai SET 
    idpegawai='$idpegawai', nama='$nama', username='$username',
    password='$password', alamat='$alamat', nohp='$nohp'");
}

elseif($aksi=="edit"){
    $idpegawai=$_POST['idpegawai'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    // var_dump($idpegawai,$nama,$alamat);

    $sql="UPDATE pegawai SET nama='$nama', username='$username',
    password='$password', alamat='$alamat', nohp='$nohp' WHERE idpegawai='$idpegawai'";

    $update=mysqli_query($koneksi,$sql);
 

}
//elseif($aksi=='hapus'){
//   $idpegawai=$_GET['idpegawai'];
//   $sql="DELETE FROM pegawai WHERE idpegawai='$idpegawai'";
//    mysqli_query($koneksi,$sql);
//}

header("location:../index.php?title=pegawai&page=pegawai");