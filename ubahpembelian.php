<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<h2>Ubah Pembelian</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pembeli</label>
        <input type="text" name="namapembeli" class="form-control" value="<?php echo $pecah['nama_pembeli']; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal Pembelian</label>
        <input type="date" name="tanggal" class="form-control" value="<?php echo $pecah['tanggal_pembelian']; ?>">
    </div>
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="namaproduk" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Produk</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Jumlah Item</label>
        <input type="number" name="jumlahitem" class="form-control" value="<?php echo $pecah['jumlah_item']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Total</label>
        <input type="number" name="hargatotal" class="form-control" value="<?php echo $pecah['harga_total']; ?>">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button> 
</form>

<?php
if (isset($_POST['ubah']))
{

    $koneksi->query("UPDATE pembelian SET nama_pembeli='$_POST[namapembeli]',
    tanggal_pembelian='$_POST[tanggal]',nama_produk='$_POST[namaproduk]',
    harga_produk='$_POST[harga]',jumlah_item='$_POST[jumlahitem]',harga_total='$_POST[harga_total]'
    WHERE id_pembelian='$_GET[id]'");

    echo "<script>alert('Data Pelanggan Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=pelanggan';</script>";
}
?>