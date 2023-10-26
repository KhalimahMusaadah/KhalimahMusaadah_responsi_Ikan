<?php
error_reporting(E_ALL ^ E_DEPRECATED AND E_NOTICE);
$host="localhost";
$username="root";
$password="";
$database="toyota_supra";
$conn=mysqli_connect($host,$username,$password,$database) or die('Gagal Connect');

