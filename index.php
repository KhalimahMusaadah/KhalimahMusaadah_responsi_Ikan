<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";
function selectData(){
    $query="select * from pengiriman";
    $result= mysqli_query($GLOBALS['conn'],$query);
    while($row=mysqli_fetch_array($result)){
        echo "
        <tr>
        <td>$row[kode_produk]</td>
        <td>$row[nama_produk]</td>
        <td>$row[keterangan]</td>
        <td>$row[lokasi_gudang]</td>
        <td>
        <a href='index.php?del=$row[nama_produk]'>Hapus</a>
        <a href='update.php?upd=$row[kode_produk]'>Ubah</a>
        </td>
        </tr>";
    }
}

if(isset($_GET['del'])){
    $nama_produk=$_GET['del'];
    $query="delete from pengiriman where nama_produk='$nama_produk'";
    $hasil_query = mysqli_query($conn, $query);
    if($hasil_query) {
        ?>
        <script>
        alert('Data <?php echo $nama_produk; ?> telah dihapus');
        window.location='index.php';
        </script>;
        <?php
      }
}
?>


<html>
    <head>
        <title>Sistem Gudang</title>
    </head>
    <body>
        <?php echo "<H1> Selamat Datang, Pak " . $_SESSION["username"] . " :D </H1>"; ?>
        <a href="destroy.php"><button>Logout</button></a>
        <hr>
        <h3>Data Produk Gudang </h3>
        <a href="create.php"><button>Tambah Data</button></a>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="pengiriman">
            <table border="1px" >
                <tr>
                    <td>Kode produk</td>
                    <td>Nama produk</td>
                    <td>Keterangan</td>
                    <td>Kode gudang</td>
                    <td>Aksi</td>
                </tr>
                <?php selectData(); ?>
            </table>
        </form>
        <br><br>
    </body>
</html>