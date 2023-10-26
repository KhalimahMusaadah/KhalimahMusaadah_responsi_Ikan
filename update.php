<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header('Location: index.php');
}
$upd = $_GET['upd'];
if(isset($_POST['update'])){
    $upd = $_GET['upd'];
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $lokasi_gudang = $_POST['lokasi_gudang'];
    $sql = "UPDATE pengiriman SET kode_produk='$kode_produk',nama_produk='$nama_produk',keterangan='$keterangan',lokasi_gudang='$lokasi_gudang' WHERE kode_produk='$upd'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "<script>";
        echo "document.location = 'index.php';";
        echo "</script>";
    }
}

$sql = "SELECT * FROM pengiriman WHERE kode_produk='$upd'";
$query = mysqli_query($conn,$sql);
$data = mysqli_fetch_array($query);

?>

<html>
<head>
    <title>Ubah Data Produk</title>
</head>
<body>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td>Kode Produk</td>
                <td><input type="text" name="kode_produk"  value="<?php echo $data['kode_produk']?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"  value="<?php echo $data['nama_produk']?>"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td><textarea name="keterangan"><?php echo $data['keterangan']?></textarea></td>
            </tr>
            <tr>
                <td>kode_gudang</td>
                <td><select name='lokasi_gudang' value="<?php echo $data['lokasi_gudang']?>">
                    <option>GDG-JKT</option>
                    <option>GDG-PWT</option>
                    <option>GDG-PBG</option>
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" name='update' value="Simpan">
        <input type="reset" name='batal' value="Batal">
    </form>
    </div>
</body>
</html>