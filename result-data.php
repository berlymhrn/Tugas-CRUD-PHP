<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>result data</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h2 class="header">SISTEM INFORMASI MAHASISWA</h2>
  <nav>
    <ul class="nav-link">
      <li><a href="home.php">Home</a></li>
      <li><a href="result.php">Mahasiswa</a></li>
      <li><a href="login.php">Admin</a></li>
    </ul>
  </nav>

  <h2>Data Mahasiswa</h2>

  <table border="1" class="table-result">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>ALAMAT</th>
  </tr>

  <?php
  include 'koneksi.php';
  $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
  $no=1;
  
  foreach($mahasiswa as $row){
    $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki laki';
    echo "<tr>
    <td>".$no."</td>
    <td>".$row['nim']."</td>
    <td>".$row['nama']."</td>
    <td>".$jenis_kelamin."</td>
    <td>".$row['jurusan']."</td>
    <td>".$row['alamat']."</td>
    
    </tr>";
    $no++;
  }
  ?>
  </table>
  
  <footer>
    <p>Copyright &copy; 2023 Berliana Maharany</p>
  </footer>
</body>
</html>