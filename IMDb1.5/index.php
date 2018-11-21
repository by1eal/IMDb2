<html>
<head>
<title>IMDb</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background: #E6D3D3">
	<style type="text/css">
   
   * {
    margin:0px;
    padding:0px;
   }
   
   #header {
    margin:10px;
    width:500px;
    font-family:Arial, Helvetica , sans-serif ;
    font-size: 20px;
   }
   
   .nav ul, ol {
    list-style:none;
   }
   
   .nav > li {
    float:left;
   }
   
    .nav li a {
    background-color:#000;
    color:#F9F4F4;
    text-decoration:none;
    padding:5px 6px;
    display:block;

   }
   
   .nav li a:hover {
    background-color:#434343;
    z-index: 3;
   }
   
   .nav li ul {
    display:none;
    position:absolute;
    min-width:100px;
   }
   
   .nav li:hover > ul {
    display:block;
   }
   
   .nav li ul li {
    position:relative;

   }
   
   div#general{
   	 width: 960px;
   	 height: 800px;
   	 background-color: #514949;
     position: relative;
     z-index: 2;
   }
div#general2{
     width: 960px;
     height: 800px;
     background-color: #BFC9CA;
     position: relative;
     z-index: 2;
   }

   header, nav{
padding:0.5em;
margin: 0.5em;
background-color:#020000;
width:80%;
}

   input {
    margin:auto;
    width:auto;
    padding: 8px;
    border-radius:0.5em;
   }

   section#contenedor {
padding:0.5em ;
margin:0.3em;
border-radius:0.5em;
border: 1px solid black;
width:95%;
text-align: center;
}
div #navbar
{
  position: relative;
  z-index: 3;
}
.btn:hover{
    color: black;
    background-color: #FFBF00;
    text-decoration: none;
  }
   </style>

<header class="container-fluid" >
	<nav class="navbar navbar-expand-lg navbar-light bg-liht">
 <div id="navbar">

	<div class="container-fluid" id=navbar>
	<span class="navbar-text">

		<div>
        <img alt="Brand" src="imagenes/logo.png" style="position: absolute;left:10
        ; top:10px; width:100.99; height:48.99px" id=navbar>


		<input class="container-fluid"  class="input" type="text" size="70"  name="q" id="navbar-query" placeholder="Find Movies, TV shows, Celebrities and more..." style="position: absolute;left:130px; top:4px; width:434.99; height:30">
		
		<a href="https://www.facebook.com/imdb/?ref=br_rs">
<img style="position:absolute; left:940px; top:10px; width:50; height:25px" alt="Brand" src="imagenes/facebook.png" class="container-fluid" >
</a>
<a href="">
<img style="position:absolute; left:800px; top:9px; width:80; height:20px" alt="Brand" src="imagenes/IMDBPRO.png" class="container-fluid">
</a>
<a href="https://twitter.com/imdb">
<img style="position:absolute; left:970px; top:10px; width:50; height:25px" alt="Brand" src="imagenes/twitter.png" class="container-fluid">
</a>
<a href="https://www.instagram.com/imdb/">
<img style="position:absolute; left:1000px; top:10px; width:50; height:25px" alt="Brand" src="imagenes/instagram.png" class="container-fluid">

<img style="position:absolute; left:10px; top:120px; width:201; height:298px" alt="Brand" src="imagenes/IMAGEN1.jpg" class="container-fluid"">
</a>

<img style="position:absolute; left:220px; top:120px; width:201; height:298px" alt="Brand" src="imagenes/IMAGEN2.jpg" class="container-fluid"">
</a>

<img style="position:absolute; left:430px; top:120px; width:201; height:298px" alt="Brand" src="imagenes/IMAGEN3.jpg" class="container-fluid"">
</a>
<img style="position: absolute;top: 250; left: 50;" src="imagenes/play-button1 .png" class="container-fluid">

<img style="position: absolute;top: 250; left: 270;" src="imagenes/play-button1 .png" class="container-fluid">
<img style="position: absolute;top: 250; left: 470;" src="imagenes/play-button1 .png" class="container-fluid">

<a class="container-fluid" style="position: absolute; left: 870; top: 10">AYUDA</a>

<input type="submit" class="btn" value="Sign in" onclick="window.location.href='http://imdb2.miaplicacionweb.mx/login.php'" style="position: absolute; left: 890;top: 40;">

  <div id="header" class="container-fluid" id=navbar>
   <ul class="nav" class="container-fluid" >

    <li  style="position: absolute; left: 130px; top: 47px;"><a href="">Movies,TV
& Showtimes</a>
    <ul>
      <li><a href="" style="color:red;">peliculas</a></li>
      <li><a href="">En los cines</a></li>
      <li><a href="">Últimos trailers</a></li>
      <li><a href="">Próximamente</a> </li>
      <li><a href="">Calendario de publicación</a></li>
      <li><a href="">Películas mejor valoradas</a></li>
      <li><a href="">Las películas más populares</a></li> 
      <li><a href="" style="color:red;">Cartas y tendencias</a></li>
      <li><a href=""> Taquilla </a></li>
      <li><a href="">Más populares</a></li>
      <li><a href="" style="color:red;">TV y video</a></li>
      <li><a href="">Peliculas</a></li>
      <li><a href="">Programas de Tv mejor valorado</li></a>
      <li><a href="">Programas TV mas populares</li>
     </ul></a>
    </li>
    <li>
    <li style="position: absolute; left:360px;top:47"><a href="">Celebs, Events
& Photos</a>
     <ul>
      <li><a href="" style="color:red;">Celebridades</a></li>
      <li><a href="">Fecha nacimiento</a></li>
      <li><a href="">Noticias de celebridades</a></li>
      <li><a href="">Famosos mas populares</a> </li>
      <li><a href="" style="color: orange;">Fotos</a></li><li><a href="">últimas fotos</a></li> 
      <li><a href="">últimos carteles</a></li>  
     </ul>
    </li>
</li>
    <li style="position: absolute; left: 600px;top: 47";><a href="">News &
Community</a>
     <ul>
      <li><a href="" style="color: orange;">Noticias</a></li>
      <li><a href="">Noticias más importantes</a></li>
      <li><a href="">Noticias de peliculas</a></li>
      <li><a href="">Noticiero</a></li>
      <li><a href="">Noticias de celebridades</a></li>
      <li><a href="" style="color: orange;">Comunidad</a></li>
      <li><a href="">Zona contribuyentes</a></li>
     </ul>

    </li>
</span>
      </a>
    </div>
  </div >
</div></nav>
<div id=general style="position: absolute;left:135
        ; top:114px; width:1079px; height:399px"  class="container-fluid">
</div> 

<div id=general2 style="position: absolute;left:135
        ; top:514px; width:1079px; height:399px"  class="container-fluid">
</div> 
</header>
    
 </body>
</html>