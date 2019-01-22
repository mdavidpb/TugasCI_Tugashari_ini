<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form-login.css">
  </head>
  <body>
    <div class="form">
    <h1>Login</h1>
  <table>
    <div class="tabel">
      <div class="form">
        <form class="login-form" action="Login.php" method="post">
          <input required type="text" name="username" placeholder="username"/>
          <input required type="password" name="password" value="" placeholder="password"/>
          <button type="submit" name="simpan" value="Login">login</button>
          <p class="message">Gak punya akun? <a href="#">Buat dulu dong!</a> Lupa Password? </p>
        </form>
      </div>
    </div>
  </table>
</div>
  </body>
</html>
