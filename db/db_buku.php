<?php
session_start();
include "../koneksi.php";
$aksi=$_GET['action'];

if($aksi=="create"){
    $nobuku=$_POST['nobuku'];
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $ISBN=$_POST['ISBN'];
    $idpegawai=$_SESSION['idpegawai'];
    $tanggal_catat=date("Y-m-d");

    $query="INSERT INTO buku SET nobuku='$nobuku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', ISBN='$ISBN', idpegawai='$idpegawai', tanggal_catat='$tanggal_catat' ";
    mysqli_query($koneksi,$query);
}
header("location:../index.php?title=buku&page=buku");