<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<h2>Ubah Produk</h2>
<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Rp</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi Produk</label>
        <textarea name="deskripsi" class="form-control" rows="10">
            <?php echo $pecah['deskripsi_produk'];?>
        </textarea>
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button> 
</form>

<?php
if (isset($_POST['ubah']))
{
    $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',
    harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]'
    WHERE id_produk='$_GET[id]'");

    echo "<script>alert('Data Produk Telah Diubah');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>