<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT id, correo, contrasena FROM usuarios WHERE correo = :email and contrasena =:pass');
    $records->bindParam(':email', $_POST['email']);
    $records->bindParam(':pass', $_POST['pass']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if ($results['correo']== $_POST['email'] && $results['contrasena']== $_POST['pass']) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: cnews.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>

<html>
<head>

	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<img class="img-rouded" src="imagenes/logo.png" height="50" width="100">
<div class="jumbotron boxlogin">
	<h2>Sign in</h2>


	<form method="post" name="flogin" id="flogin">
	<label >Email</label>
	<input type="text" name="email" id="email" class="form-control">

	<label>Password</label>
	<input type="text" name="pass" id="pass" class="form-control">
	<input type="submit" class="btn" value="Sign in" >

	<label class="label2">————————New to IMDb?————————</label>

	
	

	<input type="submit" class="btn2" value="Create your IMDb account" >

	<?php if (!empty($message)):?>
	<span><?= $message  ?></span>
	<?php endif; ?>

	</form>
	</div>

	</div>

       <footer>
       	<p>© 1996-2018, Amazon.com, Inc. o sus afiliados</p>
       </footer>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"   ></script>
</body>
</html>

<style type="text/css">
	{
		margin:0px;
		padding: 0px;
	}

	img{
		margin-top: 15px;
		margin-left: 670px;
	}
	.boxlogin{
		border-radius: 4px;
		margin-top: 15px;
		margin-left: 560px ;
		width: 320px;
		border: 1px solid #DCDBD7;
		background-color: white;
	}
	input[type="text"]{
		border: 2px solid #DCDBD7;
		width: 300px;
		margin-left: 10px;

	}
	label{
		margin-left: 10px;
		margin-top: 5px;
	}

	label[class="label2"]{
		color: #C6C5C2;
		font-family: arial;
		font-size: 13px;
		margin-top: 20px;


	}
	h2{
		margin-top:-20px; 
		margin-left: 10px;
	}
	input[type="submit"]{
		margin-top: 14px;
		padding: 5px;
		width:300px;
		margin-left: 10px;
		background-color: #FFCD33;
		color: black;
		border: 1px solid #DCDBD7;
	}
	.btn:hover{
    color: black;
    background-color: #FFBF00;
    text-decoration: none;
  }
  input[class="btn2"]{
		margin-top: 5px;
		padding: 5px;
		width:300px;
		margin-left: 10px;
		background-color: #ECEBE7;
		color: black;
		border: 1px solid #DCDBD7;
	}
	.btn2:hover{
    color: black;
    background-color: #E4E3DF;
    text-decoration: none;
  }

	footer{
		position: relative;
		margin-top: 0px;
		width: 100%;
		padding: 170px;
		clear: both;
		background: #F8F7F4;
		text-align: center;
		color: #898884;
	}  
	p
	{
		margin-top: -130px;
	}



</style>