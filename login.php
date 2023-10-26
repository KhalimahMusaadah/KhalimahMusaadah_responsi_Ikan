<?php
    session_start();
    include "koneksi.php";
    if(isset($_POST['login'])){
        $nama=$_POST['username'];
        $password=$_POST['password'];
        $query="Select * from pengguna where username='$nama' and password='$password'";
        $row=mysqli_fetch_array(mysqli_query($GLOBALS['conn'],$query));
        if(mysqli_num_rows(mysqli_query($GLOBALS['conn'],$query))!=0){
            $row=mysqli_fetch_array(mysqli_query($GLOBALS['conn'],$query));
            if($row['username']==$nama && $row['password']==$password){
                $_SESSION['login']=true;
                $_SESSION['username']=$nama;
                $_SESSION['password']=$password;
                header("Location: index.php");
            }
        }
    }
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Sistem Gudang</h1>
        <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
            <table>
                <tr>
                    <td>Username <input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td>Password <input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login"> <a href="register.php"><button>Buat Akun Baru</a></td>

                </tr>
            </table>
        </form>
    </body>
</html>