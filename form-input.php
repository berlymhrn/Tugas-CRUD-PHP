<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat Form Inputan Data</title>
  <link rel="stylesheet" href="style.css"/>
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
  <h2>ADMIN - TAMBAH DATA</h2>
  
  <div class="form-input">
  <form method="post" action="simpan.php">
    <table class="form-input">
      <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" name="nim" class="input"></td></tr>
      <tr><td>NAMA</td><td><input type="text" name="nama" class="input"></td></tr>
      <tr>
        <td>JENIS KELAMIN</td>
        <td>
          <input type="radio" name="jenis_kelamin" value="L">Laki Laki
          <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td>
      </tr>
      <tr>
        <td>JURUSAN</td>
        <td>
          <select name="jurusan" class="input">
            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
          </select>
        </td>
      </tr>
      <tr><td>ALAMAT</td><td><input type="text" name="alamat" class="input"></td></tr>
      <tr><td colspan="2"><button type="submit" value="simpan" class="button">SIMPAN</button></td></tr>
    </table>
  </form>
  </div>

  <footer>
    <p>Copyright &copy; 2023 Berliana Maharany</p>
  </footer>
</body>
</html>
