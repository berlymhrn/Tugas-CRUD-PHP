<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h2 class="header">SISTEM INFORMASI MAHASISWA</h2>
  <nav>
    <ul class="nav-link">
      <li><a href="home.php">Home</a></li>
      <li><a href="result-data.php">Mahasiswa</a></li>
      <li><a href="login.php">Admin</a></li>
    </ul>
  </nav>

  <h2>ADMIN</h2>

  <table border="1" class="table-result">
    <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>ALAMAT</th><th>ACTION</th>
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
    <td>
    <a href='form-edit.php?id_mhs=$row[id_mhs]' class='edit'>EDIT</a>
    <a href='delete.php?id_mhs=$row[id_mhs]' class='delete'>DELETE</a>    
    </td>
    
    </tr>";
    $no++;
  }
  ?>
  </table>
  <div class="button-home">
      <a href="form-input.php"><button class="button">Tambah Data</button></a>
  </div>

  <footer>
    <p>Copyright &copy; 2023 Berliana Maharany</p>
  </footer>
</body>
</html>