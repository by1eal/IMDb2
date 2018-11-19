 <?php
echo "<html>
<head>
<title>IMDb</title>
	<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
<link rel='stylesheet' href='css/bootstrap.css'>
</head>
<body style='background: #E6D3D3'>
	<style type='text/css'>
   
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
   </style>
	
<header class='container-fluid'>
	<nav class='navbar navbar-expand-lg navbar-light bg-liht'>
 <div>

	<div class='container-fluid'>
	<span class='navbar-text'>

		<div>
        <img alt='Brand' src='imagenes/logo.png' style='position: absolute;left:10
        ; top:10px; width:100.99; height:48.99px'>

		<input class='container-fluid'  class='input' type='text' size='70'  name='q' id='navbar-query' placeholder='Find Movies, TV shows, Celebrities and more...' style='position: absolute;left:130px; top:4px; width:434.99; height:30'>
		<a href='https://www.facebook.com/imdb/?ref=br_rs'>
<img style='position:absolute; left:940px; top:10px; width:50; height:25px' alt='Brand' src='imagenes/facebook.png' class='container-fluid' >
</a>
<a href='https://twitter.com/imdb'>
<img style='position:absolute; left:970px; top:10px; width:50; height:25px' alt='Brand' src='imagenes/twitter.png' class='container-fluid'>
</a>
<a href='https://www.instagram.com/imdb/'>
<img style='position:absolute; left:1000px; top:10px; width:50; height:25px' alt='Brand' src='imagenes/instagram.png' class='container-fluid'>
</a>
<a class='container-fluid' style='position: absolute; left: 890; top: 10'>AYUDA</a>

  <div id='header' class='container-fluid'>
   <ul class='nav' class='container-fluid' >

    <li  style='position: absolute; left: 130px; top: 50px;'><a href=''>Películas , TV
y Horarios</a>
    <ul>
      <li><a href='' style='color:red;'>peliculas</a></li>
      <li><a href=''>En los cines</a></li>
      <li><a href=''>Últimos trailers</a></li>
      <li><a href=''>Próximamente</a> </li>
      <li><a href=''>Calendario de publicación</a></li>
      <li><a href=''>Películas mejor valoradas</a></li>
      <li><a href=''>Las películas más populares</a></li> 
      <li><a href='' style='color:red;'>Cartas y tendencias</a></li>
      <li><a href=''> Taquilla </a></li>
      <li><a href=''>Más populares</a></li>
      <li><a href='' style='color:red;'>TV y video</a></li>
      <li><a href=''>Peliculas</a></li>
      <li><a href=''>Programas de Tv mejor valorado</li></a>
      <li><a href=''>Programas TV mas populares</li>
     </ul></a
    </li>
    <li>
    <li style='position: absolute; left:360px;top:50'><a href=''>Famosos , Eventos
y Fotos</a>
     <ul>
      <li><a href='' style='color:red;'>Celebridades</a></li>
      <li><a href=''>Fecha nacimiento</a></li>
      <li><a href=''>Noticias de celebridades</a></li>
      <li><a href=''>Famosos mas populares</a> </li>
      <li><a href='' style='color: orange;'>Fotos</a></li><li><a href=''>últimas fotos</a></li> 
      <li><a href=''>últimos carteles</a></li>  
     </ul>
    </li>
</li>
    <li style='position: absolute; left: 620px;top: 50';><a href=''>Noticias y 
Comunidad</a>
     <ul>
      <li><a href='' style='color: orange;'>Noticias</a></li>
      <li><a href=''>Noticias más importantes</a></li>
      <li><a href=''>Noticias de peliculas</a></li>
      <li><a href=''>Noticiero</a></li>
      <li><a href=''>Noticias de celebridades</a></li>
      <li><a href='' style='color: orange;'>Comunidad</a></li>
      <li><a href=''>Zona contribuyentes</a></li>
     </ul>

    </li>
</span>
      </a>
    </div>
  </div>
</div></nav>
</header>




 
 <header id='main-header' style='
    background-color: white'>
		<nav style='background-color: white;/* margin-bottom: 0.5em; */font-family: Verdana, Arial, sans-serif;font-size: 13px;/* margin: auto; */padding-left: 22px;/* margin-bottom: 22.5em;'>
			<h4>21 November 2018</h4>
			<ul>
					<li>
							<a href=''>Robin Hood</a> (2018)
					</li>
					<li>
							<a href=''>Creed II</a> (2018)
					</li>
					<li>
							<a href=''>Ralph Breaks the Internet</a> (2018)
					</li>
					<li>
							<a href=''>Green Book</a> (2018)
					</li>
					<li>
							<a href=''>The Front Runner</a> (2018)
					</li>
			</ul>
			<h4>22 November 2018</h4>
			<ul>
					<li>
							<a href=''>The Christmas Chronicles</a> (2018)
					</li>
			</ul>
			<h4>23 November 2018</h4>
			<ul>
					<li>
							<a href=''>The Favourite</a> (2018)
					</li>
					<li>
							<a href=''>Shoplifters</a> (2018)
					</li>
			</ul>
			<h4>30 November 2018</h4>
			<ul>
					<li>
							<a href=''>The Possession of Hannah Grace</a> (2018)
					</li>
					<li>
							<a href=''>Happy as Lazzaro</a> (2018)
					</li>
					<li>
							<a href=''>The Mercy</a> (2018)
					</li>
			</ul>
			<h4>03 December 2018</h4>
			<ul>
					<li>
							<a href=''>The Griddle House</a> (2018)
					</li>
			</ul>
			<h4>07 December 2018</h4>
			<ul>
					<li>
							<a href=''>Vox Lux</a> (2018)
					</li>
					<li>
							<a href=''>Mary Queen of Scots</a> (2018)
					</li>
					<li>
							<a href=''>Ben Is Back</a> (2018)
					</li>
					<li>
							<a href=''>Dumplin'</a> (2018)
					</li>
			</ul>
			<h4>14 December 2018</h4>
			<ul>
					<li>
							<a href=''>Spider-Man: Into the Spider-Verse</a> (2018)
					</li>
					<li>
							<a href=''>Mortal Engines</a> (2018)
					</li>
					<li>
							<a href=''>Roma</a> (2018)
					</li>
					<li>
							<a href=''>The Mule</a> (2018)
					</li>
					<li>
							<a href=''>Capernaum</a> (2018)
					</li>
			</ul>
			<h4>19 December 2018</h4>
			<ul>
					<li>
							<a href=''>Mary Poppins Returns</a> (2018)
					</li>
			</ul>
			<h4>21 December 2018</h4>
			<ul>
					<li>
							<a href=''>Aquaman</a> (2018)
					</li>
					<li>
							<a href=''>Cold War</a> (2018)
					</li>
					<li>
							<a href=''>Zero</a> (2018)
					</li>
					<li>
							<a href=''>Bumblebee</a> (2018)
					</li>
					<li>
							<a href=''>Holmes &amp; Watson</a> (2018)
					</li>
					<li>
							<a href=''>Welcome to Marwen</a> (2018)
					</li>
					<li>
							<a href=''>Second Act</a> (2018)
					</li>
			</ul>
			<h4>25 December 2018</h4>
			<ul>
					<li>
							<a href=''>Vice</a> (2018)
					</li>
					<li>
							<a href=''>On the Basis of Sex</a> (2018)
					</li>
					<li>
							<a href=''>Destroyer</a> (2018)
					</li>
			</ul>
			<h4>04 January 2019</h4>
			<ul>
					<li>
							<a href=''>Escape Room</a> (2019)
					</li>
					<li>
							<a href=''>Animal Crackers</a> (2017)
					</li>
			</ul>
			<h4>11 January 2019</h4>
                <ul>
                        <li>
                                <a href=''>Replicas</a> (2018)
                        </li>
                        <li>
                                <a href=''>The Upside</a> (2017)
                        </li>
                        <li>
                                <a href=''>A Dog's Way Home</a> (2019)
                        </li>
                        <li>
                                <a href=''>Ashes in the Snow</a> (2018)
                        </li>
                </ul>
                <h4>16 January 2019</h4>
                <ul>
                        <li>
                                <a href=''>Dragon Ball Super: Broly</a> (2018)
                        </li>
                </ul>
                <h4>18 January 2019</h4>
                <ul>
                        <li>
                                <a href=''>Glass</a> (2019)
                        </li>
                        <li>
                                <a href=''>Girl</a> (2018)
                        </li>
                        <li>
                                <a href=''>The Last Man</a> (2018)
                        </li>
                </ul>
                <h4>25 January 2019</h4>
                <ul>
                        <li>
                                <a href=''>Serenity</a> (2019)
                        </li>
                </ul>
                <h4>30 January 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Wild Pear Tree</a> (2018)
                        </li>
                </ul>
                <h4>01 February 2019</h4>
                <ul>
                        <li>
                                <a href=''>Arctic</a> (2018)
                        </li>
                        <li>
                                <a href=''>Miss Bala</a> (2019)
                        </li>
                </ul>
                <h4>08 February 2019</h4>
                <ul>
                        <li>
                                <a href=''>Cold Pursuit</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Lego Movie 2: The Second Part</a> (2019)
                        </li>
                        <li>
                                <a href=''>What Men Want</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Prodigy</a> (2019)
                        </li>
                        <li>
                                <a href=''>Everybody Knows</a> (2018)
                        </li>
                </ul>
                <h4>14 February 2019</h4>
                <ul>
                        <li>
                                <a href=''>Isn't It Romantic</a> (2019)
                        </li>
                        <li>
                                <a href=''>Alita: Battle Angel</a> (2019)
                        </li>
                        <li>
                                <a href=''>Happy Death Day 2U</a> (2019)
                        </li>
                        <li>
                                <a href=''>Fighting with My Family</a> (2019)
                        </li>
                </ul>
                <h4>22 February 2019</h4>
                <ul>
                        <li>
                                <a href=''>How to Train Your Dragon: The Hidden World</a> (2019)
                        </li>
                        <li>
                                <a href=''>All-Star Weekend</a> (2019)
                        </li>
                </ul>
                <h4>01 March 2019</h4>
                <ul>
                        <li>
                                <a href=''>Chaos Walking</a> (2019)
                        </li>
                        <li>
                                <a href=''>Tyler Perry's a Madea Family Funeral</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Kid Who Would Be King</a> (2019)
                        </li>
                </ul>
                <h4>08 March 2019</h4>
                <ul>
                        <li>
                                <a href=''>Captain Marvel</a> (2019)
                        </li>
                </ul>
                <h4>15 March 2019</h4>
                <ul>
                        <li>
                                <a href=''>Us</a> (2019)
                        </li>
                        <li>
                                <a href=''>Wonder Park</a> (2019)
                        </li>
                </ul>
				
                <h4>22 March 2019</h4>
                <ul>
                        <li>
                                <a href=''>Five Feet Apart</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Beach Bum</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Informer</a> (2019)
                        </li>
                </ul>
                <h4>29 March 2019</h4>
                <ul>
                        <li>
                                <a href=''>Captive State</a> (2019)
                        </li>
                        <li>
                                <a href=''>Dumbo</a> (2019)
                        </li>
                </ul>
                <h4>05 April 2019</h4>
                <ul>
                        <li>
                                <a href=''>Peterloo</a> (2018)
                        </li>
                        <li>
                                <a href=''>Shazam!</a> (2019)
                        </li>
                        <li>
                                <a href=''>Pet Sematary</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Best of Enemies</a> (2019)
                        </li>
                </ul>
                <h4>12 April 2019</h4>
                <ul>
                        <li>
                                <a href=''>Missing Link</a> (2019)
                        </li>
                        <li>
                                <a href=''>Hellboy</a> (2019)
                        </li>
                        <li>
                                <a href=''>After</a> (2019)
                        </li>
                </ul>
								
                <h4>19 April 2019</h4>
                <ul>
                        <li>
                                <a href=''>Under the Silver Lake</a> (2018)
                        </li>
                        <li>
                                <a href=''>The Curse of La Llorona</a> (2019)
                        </li>
                </ul>
                <h4>26 April 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Aftermath</a> (2019)
                        </li>
                </ul>
                <h4>03 May 2019</h4>
                <ul>
                        <li>
                                <a href=''>Untitled Avengers Movie</a> (2019)
                        </li>
                </ul>
                <h4>10 May 2019</h4>
                <ul>
                        <li>
                                <a href=''>UglyDolls</a> (2019)
                        </li>
                        <li>
                                <a href=''>Pokémon Detective Pikachu</a> (2019)
                        </li>
                </ul>
                <h4>17 May 2019</h4>
                <ul>
                        <li>
                                <a href=''>Rocketman</a> (2019)
                        </li>
                        <li>
                                <a href=''>John Wick: Chapter 3</a> (2019)
                        </li>
                        <li>
                                <a href=''>Doom</a> (2019)
                        </li>
                </ul>
                <h4>24 May 2019</h4>
                <ul>
                        <li>
                                <a href=''>Aladdin</a> (2019)
                        </li>
                        <li>
                                <a href=''>Ad Astra</a> (2019)
                        </li>
                </ul>
                <h4>31 May 2019</h4>
                <ul>
                        <li>
                                <a href=''>Godzilla: King of the Monsters</a> (2019)
                        </li>
                </ul>
                <h4>07 June 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Secret Life of Pets 2</a> (2019)
                        </li>
                        <li>
                                <a href=''>Dark Phoenix</a> (2019)
                        </li>
                </ul>
                <h4>14 June 2019</h4>
                <ul>
                        <li>
                                <a href=''>Untitled Men in Black Spin-Off</a> (2019)
                        </li>
                        <li>
                                <a href=''>Shaft</a> (2019)
                        </li>
                </ul>
                <h4>21 June 2019</h4>
                <ul>
                        <li>
                                <a href=''>Toy Story 4</a> (2019)
                        </li>
                        <li>
                                <a href=''>Child's Play</a> (2019)
                        </li>
                </ul>
                <h4>28 June 2019</h4>
                <ul>
                        <li>
                                <a href=''>Ford v. Ferrari</a> (2019)
                        </li>
                </ul>
                <h4>05 July 2019</h4>
                <ul>
                        <li>
                                <a href=''>Spider-Man: Far From Home</a> (2019)
                        </li>
                </ul>
                <h4>12 July 2019</h4>
                <ul>
                        <li>
                                <a href=''>17 Bridges</a> (2019)
                        </li>
                </ul>
                <h4>19 July 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Lion King</a> (2019)
                        </li>
                </ul>
                <h4>02 August 2019</h4>
                <ul>
                        <li>
                                <a href=''>Hobbs and Shaw</a> (2019)
                        </li>
                        <li>
                                <a href=''>Dora the Explorer</a> (2019)
                        </li>
                        <li>
                                <a href=''>The New Mutants</a> (2019)
                        </li>
                </ul>
                <h4>09 August 2019</h4>
                <ul>
                        <li>
                                <a href=''>Once Upon a Time in Hollywood</a> (2019)
                        </li>
                        <li>
                                <a href=''>Artemis Fowl</a> (2019)
                        </li>
                </ul>
                <h4>06 September 2019</h4>
                <ul>
                        <li>
                                <a href=''>It: Chapter Two</a> (2019)
                        </li>
                </ul>
                <h4>13 September 2019</h4>
                <ul>
                        <li>
                                <a href=''>Spies in Disguise</a> (2019)
                        </li>
                </ul>
                <h4>20 September 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Kitchen</a> (2019)
                        </li>
                </ul>
                <h4>04 October 2019</h4>
                <ul>
                        <li>
                                <a href=''>Joker</a> (2019)
                        </li>
                        <li>
                                <a href=''>Gemini Man</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Woman in the Window</a> (2019)
                        </li>
                </ul>
                <h4>11 October 2019</h4>
                <ul>
                        <li>
                                <a href=''>Zombieland 2</a> (2019)
                        </li>
                        <li>
                                <a href=''>The Goldfinch</a> (2019)
                        </li>
                </ul>
                <h4>18 October 2019</h4>
                <ul>
                        <li>
                                <a href=''>The Addams Family</a> (2019)
                        </li>
                        <li>
                                <a href=''>Untitled Mr. Rogers/Tom Hanks Project</a> (2019)
                        </li>
                </ul>
                <h4>01 November 2019</h4>
                <ul>
                        <li>
                                <a href=''>Untitled Terminator Reboot</a> (2019)
                        </li>
                        <li>
                                <a href=''>Charlie's Angels</a> (2019)
                        </li>
                </ul>
                <h4>08 November 2019</h4>
                <ul>
                        <li>
                                <a href=''>Kingsman 3</a> (2019)
                        </li>
                        <li>
                                <a href=''>Sonic the Hedgehog</a> (2019)
                        </li>
                </ul>
		</nav><!-- / nav -->
 
	</header><!-- / #main-header -->
</body>
</html>"
?>