<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
?>