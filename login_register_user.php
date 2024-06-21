<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu Login | YouthInsight</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style_login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header><img src="D:\4.DATA TUGAS KULIAH\Semester 4\REKAYASA PERANGKAT LUNAK\logohitam.jpg" width="250" height="50"></header>
      <form action="#">
        <input type="text" placeholder="Masukan Email">
        <input type="password" placeholder="Masukan Password">
        <a href="#">Lupa Password?</a>
        <input type="button" class="button" value="Masuk">
      </form>
      <div class="signup">
        <span class="signup">Belum Punya Akun?
         <label for="check">Daftar</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Silakan Daftar</header>
      <form action="#">
        <input type="text" placeholder="Masukan Email">
        <input type="password" placeholder="Masukan Password">
        <input type="password" placeholder="Masukan Ulang Password">
        <input type="button" class="button" value="Mendaftar">
      </form>
      <div class="signup">
        <span class="signup">Sudah Punya Akun?
         <label for="check">Klik Masuk</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
