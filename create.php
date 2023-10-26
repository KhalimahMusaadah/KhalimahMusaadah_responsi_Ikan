<?php
include "koneksi.php";
if(isset($_POST['insertData'])){
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $lokasi_gudang = $_POST['lokasi_gudang'];
    $query = "insert into pengiriman(kode_produk, nama_produk, keterangan, lokasi_gudang) values ('$kode_produk','$nama_produk','$keterangan','$lokasi_gudang')";
    $result = mysqli_query($conn,$query);
    header("Location: index.php");
}
?>

<html>
    <head>
        <title>Tambah Data Produk</title>
    </head>
    <body>
        <h1>Tambah Data Produk</h1>
        <br><br>
        <form action="create.php" method="POST">
            <table border="0">
                <tr>
                    <td>Kode Produk</td>
                    <td><input type="text" name="kode_produk"
                    id="kode_produk"></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama_produk"
                    id="nama_produk"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><textarea name="keterangan"
                    id="keterangan"></textarea></td>
                </tr>
                <tr>
                    <td>Kode Gudang</td>
                    <td><select name='lokasi_gudang'>
                    <option>GDG-JKT</option>
                    <option>GDG-PWT</option>
                    <option>GDG-PBG</option></td>
                </tr>
            </table>
            <hr>
        <input type="submit" name='insertData' value="Simpan">
        <input type="reset" name='batal' value="Batal">
    </body>
</html>