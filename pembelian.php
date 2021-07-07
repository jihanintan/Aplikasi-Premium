<?php
// skrip koneksi
$koneksi = new mysqli("localhost","root","","trainittoko");
?>

<h2>Data Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Tanggal Pembelian</th>
            <th>Nama Produk</th>
            <th>Harga Produk</th>
            <th>Jumlah Item</th>
            <th>Harga Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pembelian"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah ['nama_pembeli'] ?></td>
            <td><?php echo $pecah ['tanggal_pembelian'] ?></td>
            <td><?php echo $pecah ['nama_produk'] ?></td>
            <td><?php echo $pecah ['harga_produk'] ?></td>
            <td><?php echo $pecah ['jumlah_item'] ?></td>
            <td><?php echo $pecah ['harga_total'] ?></td>
            <td>
                 <a href="index.php?halaman=hapuspembelian&id=<?php echo $pecah['id_pembelian']; ?>" class="btn-danger btn">Hapus</a>
                 <a href="index.php?halaman=ubahpembelian&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-warning">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="index.php?halaman=tambahpembelian" class="btn btn-primary">Tambah Pembelian</a>