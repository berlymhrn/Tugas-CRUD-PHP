<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi,"select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

$jurusan = array('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','TEKNIK KIMIA');
function active_radio_button($value,$input){
  $result = $value==$input?'checked':'';
  return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form edit</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h2>ADMIN - EDIT</h2>
  <div class="form-edit">
      <form method="post" action="edit.php">
    <input type="hidden" value="<?php echo $row['id_mhs'];?>" name="id_mhs">
    <table>
      <tr><td>NIM</td><td><input type="text" value="<?php echo $row['nim'];?>" name="nim" class="input"></td></tr>
      <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama" class="input"></td></tr>
      <tr><td>JENIS KELAMIN</td><td>
        <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L",$row['jenis_kelamin'])?>>Laki Laki
        <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P",$row['jenis_kelamin'])?>>Perempuan
      </td></tr>
      <tr><td >JURUSAN</td><td><?php echo $row['jurusan'];?></td><td>
        <select name="jurusan" class="input">
          <?php
          foreach($jurusan as $j){
            echo "<option value='$j'";
            echo $row['jurusan']==$j?' selected="selected"':'';
            echo ">$j</option>";
          }
          ?>
        </select>
      </td></tr>
      <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat" class="input"></td></tr> 
      <tr><td colspan="2">
        <button type="submit" value="simpan" class="button">SIMPAN</button>
        <a href="index.php"><button class="button">KEMBALI</button></a>
      </td></tr>
    </table>
  </form>
  </div>
  <footer>
    <p>Copyright &copy; 2023 Berliana Maharany</p>
  </footer>
</body>
</html>

