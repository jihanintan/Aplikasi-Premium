<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<h2>Tambah Pembelian</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pembeli</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Tanggal Pembelian</label>
        <input type="date" class="form-control" name="tanggal">
    </div>
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="namaproduk">
    </div>
    <div class="form-group">
        <label>Harga Produk</label>
        <input type="number" class="form-control" name="hargaproduk">
    </div>
    <div class="form-group">
        <label>Jumlah Item</label>
        <input type="number" class="form-control" name="jumlahitem">
    </div>
    <div class="form-group">
        <label>Harga Total</label>
        <input type="number" class="form-control" name="hargatotal">
    </div>
    <button class="btn btn-primary" name="save">Simpan</button> 
</form>
<?php
if (isset($_POST['save']))
{
    $koneksi->query("INSERT INTO pembelian
        (nama_pembeli, tanggal_pembelian, nama_produk, harga_produk, jumlah_item, harga_total)
        VALUES('$_POST[nama]','$_POST[tanggal]','$_POST[namaproduk]','$_POST[hargaproduk]','$_POST[jumlahitem]','$_POST[hargatotal]')");

    echo "<div class='alert alert-into'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pembelian'>";
}
?>

