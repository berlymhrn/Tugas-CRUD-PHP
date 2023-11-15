<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
  <h1>Login</h1>
  <div class="form-login">
      <form action="process_login.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="nama" required class="input"><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required class="input"><br>

        <button type="submit" class="button">Login</button>
    </form>
  </div>
  
  <footer>
    <p>Copyright &copy; 2023 Berliana Maharany</p>
  </footer>

</body>
</html>
