<?php
session_start();
include "koneksi.php";
if(isset($_POST['create'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];

	$query="insert into pengguna(id,username,password,nama_user) values('','$username','$password','$name')";
        mysqli_query($GLOBALS['conn'],$query);
        header("Location: login.php"); 
}
?>

<html>
	<head>
		<title>Registrasi </title>
	</head>
	<body>
		<h1>Registrasi Sistem Gudang</h1>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        	<table>
            	<tr>
                    <td>Nama</td>
            		<td><input type="text" name="name" id="name"></td>
            	</tr>
            	<tr>
                	<td>username</td>
            	    <td><input type="text" name="username" id="username"></td>
          	  	</tr>
            	<tr>
            		<td>Password</td>
                    <td><input type="password" name="password" id="password"></td>
            	</tr>
                <tr>
                <td><input type="submit" name="create" value="Buat Akun Baru"> <a href="login.php"><button>Kembali</a></td>
    	</form>
	</body>
</html>