<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];

//cari di tabel pegawai username dan password yang sesuai dengan yang diinput

include "koneksi.php";

$query="SELECT * FROM pegawai WHERE username='$user'";
$login=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($login);
if(password_verify($pass,$data['password'])){
    $_SESSION['username']=$data['username'];
    $_SESSION['idpegawai']=$data['idpegawai'];
    $_SESSION['nama']=$data['nama'];
    $_SESSION['login_status']=true;
    header('location:index.php');
}else{
    header("location:login.php?pesan=Gagal");
}