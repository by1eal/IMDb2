<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, nombreusuario,correo,contrasena FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
  $titulo="";
  $tiempo="";
  $autor="";
  $url="";
  $info="";
  $sitio="";
  $img="";

  $records = $conn->prepare('SELECT titulo,tiempo, autor, url, info, sitio, img FROM noticias WHERE tiempo=(SELECT MAX(tiempo)from noticias)');
  
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);
  $titulo = $results['titulo'];
  $tiempo = $results['tiempo'];
  $autor = $results['autor'];
  $url = $results['url'];
  $info = $results['info'];
  $img = $results['img'];
  $sitio = $results['sitio'];
  $re= "imagenes/imagen";


?>

<html>
<head>
  <title>Celebrity News</title>
</head>
<body>
<?php include "barra.php"; ?>

<div style="border: 1px solid #7C7B79;
width: 700px;
margin: 0 auto;
		background-color: #F0EFED">
<h3 style="font-family:sans-serif;margin-left: 30px">Celebrity News</h3>		

<table style="
		height: 300px;
		width: 600px;
		font-family:sans-serif; 
		margin: 0 auto;
		background-color:#E7E6E4;">

<tr>
<td><a name="1" href=<?php echo $url?>><?php echo $titulo?></a> </td>
</tr>

<tr>
<td name="2"><?php echo $tiempo?> | by <?php echo $autor?> | <a href=<?php echo $url?>> <?php echo $sitio?></a></td>
</tr>
<tr>
<td>
<img name="a" style="float: left;" src="<?php echo $re . $img?>.jpg" /><?php echo utf8_encode( $info)?></td>
</tr>

<tr>
	<td>
		<a href="<?php echo $url?>"> See full article at <?php echo $sitio?>»</a>
	</td>
</tr>
</table>

<table style="
		height: 300px;
		width: 600px;
		font-family:sans-serif; 
		margin: 0 auto;
		background-color:#E7E6E4;">

<tr>
<td><a name="1" href="https://people.com/tv/vanessa-hudgens-princess-switch-parent-trap/">Jim Carrey Doesn’t Care If His Political Paintings Cost Him Fans</a> </td>
</tr>

<tr>
<td name="2">14 hours ago | by Dana Rose Falcone | <a href="https://www.indiewire.com">Indiewire</a></td>
</tr>
<tr>
<td>
<img name="a" style="float: left;" src="imagenes/imagen6.jpg" />If you follow Jim Carrey on Twitter — or if you’ve read anything at all about him in the last few years — then you’re well aware of his political leanings. A harsh critic of Donald Trump, the actor has produced a number of paintings that portray the president in particular and his administration in general in a decidedly unfavorable light.

Not everyone was onboard with him doing so: "It was interesting, because when I first starting playing on Twitter like everyone else, I got in trouble because I was honest," Carrey said during Vulture Festival today. "A terrible thing to be on Twitter!"</td>
</tr>

<tr>
	<td>
		<a href="https://www.indiewire.com/2018/11/jim-carrey-politics-paintings-twitter-trump-1202021813/"> See full article at Indiewire »</a>
	</td>
</tr>
</table>

</div>
</body>
</html>




<style type="text/css">
	
	img[name="a"] {
		height: 150px;
		width: 100px;
		margin-right: 10px;
	}
	a[name="1"]{
		font-size: 20px;
	}
	td[name="2"]{
		font-size: 12px
	}




</style>