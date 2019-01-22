<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    h1{
      font-size: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top:-20%;
      color: white;
      font-family: "Pokemon Hollow", sans-serif;
    }
h1:hover{
      transition: 1s;
      color: #b33c00;
    }
*{
      margin: 0;
      padding: 0;
}
.wrapper{
      background-image:url(buku.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items:center;
      margin: 0 auto;
      height: 637px;
    }
.judul{
      font-size: 30px;
      color: white;

    }

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #b33c00;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-left: 30px;
  margin-top: 10px;
  font-family: COOPBL;
}

.button:hover {
    background-color:#802b00 ;
    transition: 0.5s;
  }

.button:active {
  background-color: #802b00;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
a{
  padding-right: 30%;
}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="judul">
          <h1>Hello :)</h1>
          <a href="form-login.php"><button class="button">Login now !!!</button></a>

        </div>

      </div>

    </div>

  </body>
</html>
