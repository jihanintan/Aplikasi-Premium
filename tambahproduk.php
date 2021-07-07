<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Deskripsi Produk</label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div>
    <button class="btn btn-primary" name="save">Simpan</button> 
</form>
<?php
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO produk
        (nama_produk, harga_produk, deskripsi_produk)
        VALUES('$_POST[nama]','$_POST[harga]','$_POST[deskripsi]')");

    echo "<div class='alert alert-into'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
}
?>