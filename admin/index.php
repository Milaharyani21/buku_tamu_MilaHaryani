<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<meta charset="utf-8">
<style type="text/css">
    .login {
        margin: 100px auto;
        width: 400px;
        height: 160px;
        padding: 10px;
        border: 1px solid #ccc;
        background: grey;
    }
    img{
        width: 150px;
        height: 110px;
      

    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 94%;
        padding: 10px;
    }
    input[type=submit] {
        margin : 20px auto;
        float: right;
        padding: 10px;
        width: 400px;
        border: 1px solid #fff;
        color: #fff;
        background: pink;
        cursor: pointer;
    }

</style>
</head>
<body background="maxresdefault_L04IWRV.jpg">
<img src="milla.png">
<div class="login">

<form method="post" action="cek_login.php">
    <input name="id_user"
	type="text" id="id_user" placeholder="Silahkan Masukkan Email"><br>
    <input name="password" type="password"
		id="password" placeholder="Silahkan isi password"><br>
    <input type="submit" name="login" value="Login">
</form>
</div>
</body>
</html>
