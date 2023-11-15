<?php
include 'koneksi.php';
if($koneksi->connect_error){
  die("Connection failed:" .$koneksi->connect_error);
}

$nama = $_POST['nama'];
$password = $_POST['password'];

$query = "SELECT * FROM mahasiswa WHERE nama='$nama' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) > 0){
  echo "LOGIN BERHASIL";
  header("location:index.php");
}else{
  header("location:error-page.php");
}
?>