<!DOCTYPE html>
<html>
<head>
	<title>Galerie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="../css/style.css">
	<link type="text/css" rel="stylesheet" href="../css/main.css">
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="../bootstrap/fonts/glyphicons-halflings-regular.svg">
	
	<script src="../bootstrap/js/bootstrap.js"></script>
	

</head>
<body>
<header id ="header">

	<div class="container">

		<div class="menuTop">

 		<!-- menu en haut -->

			<nav>

				<ul>
					
					<li><a href="home.php#contact">Contact</a></li><!-- lien vers la page home -->
					
					<li><a href="home.php#auteur">Auteur</a></li><!-- ancre vers la page home et ancre id auteur -->

					<li><a href="home.php#galerie">Galerie</a></li><!-- ancre vers la page home et ancre id galerie-->

					<li><a href="home.php">Accueil</a></li><!-- ancre vers la page home et ancre id header -->

					<li class="menuGauche"><a href="#">Christian PELTIER PHOTOGRAPHIE</a></li>
				
				</ul>

			</nav>

		</div>
				
	</div>

	<span class="iconeTitre">Christian Peltier</span><!-- logo christian Peltier -->

	<div class="icon"><!-- symbole du menu hamburger -->

		<button class="icon">&#9776;</button> 

	</div>

</header>

<div class="comble"></div> 	

<div class="menu"><!-- menu qui s'affiche suite clique sur menu Hamburger -->

	<div class="menuTitre">Christian PELTIER PHOTOGRAPHIE</div>

	<div class="menuTexte">

		
		<a href="home.php">Accueil</a><!-- lien vers la page home -->

		<a href="home.php#galerie">Galerie</a><!-- ancre vers la page home et ancre id galerie -->

		<a href="home.php#auteur">Auteur</a><!-- ancre vers la page home et ancre id auteur -->

		<a href="home.php#contact">Contact</a><!-- ancre vers la page home et ancre id contact -->

	</div>

</div>

	

   


   <!-- galerie -->

   

		<div class="container" id="galerie">

		<!-- galerie faune -->

			<div class="row">

           		<div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
					<div class="conteneur">
	               		<a href="../php/faune.php"><img class="imageGalerie" src="../image/galerieFaune.png" alt="photo d'un renard"></a>
						
						
					</div>
           		</div>

           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	
					
               		<h1 class="titreGalerie">Faune</h1>

               		<p class="texteGalerie">Mamifères, oiseaux, amphibiens, insectes...</p> 

           		</div>

			</div>

		<!-- galerie flore -->

			<div class="row">

           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<h1 class="titreGalerie">Flore</h1>

               		<p class="texteGalerie">Toutes les fleurs sauvages...</p>

           		</div>
           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<a href="#"><img id="galerieFlore" class="imageGalerie" src="../image/galerieFlore.png" alt="photo d'une fleur"></a>
					
					

           		</div>
			</div>
			<!-- galerie paysage -->

			<div class="row">

           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<a href="#"><img class="imageGalerie" src="../image/galeriePaysage.png" alt="photo d'un paysage"></a>


					

           		</div>
           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<h1 class="titreGalerie">Paysage</h1>

               		<p class="texte">Montagnes, panoramas, cascades...</p>

           		</div>
			</div>
			<!-- galerie Autre -->
			
			<div class="row">
           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<h1 class="titreGalerie">Autre</h1>

               		<p class="texte">Vidéo, astro, graphiques...</p>

           		</div>
           		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

               		<a href="#"><img class="imageGalerie" src="../image/galerieAutre.png" alt="photo d'étoiles"></a> <!--photo 993X993 -->

					

           		</div>
			</div>
           

       </div>
   


 
   <!-- footer -->

   <footer id="footer">
		<div class="container">
			
           <div class="col-xs-12">

               <p class="piedDePage">
					Copyright © 2010-2019 - Christian Peltier<br />
					Toute reproduction interdite - Tous droits réservés<br />
					site créer par Christian Peltier<br /> 
					<span >	<a href="https://www.facebook.com/christian.peltier.733"><img class="facebook" src="../icone/SVG/Facebook.svg"></a>
							<a href="https://www.instagram.com/peltier_christian_photographie/"><img class="instagram" src="../icone/SVG/Instagram.svg"></a>
							<a href="https://twitter.com/bill25dev"><img class="twitter" src="../icone/SVG/Twitter.svg"></a>
							
   				</p>
           </div>

           

       </div>
   </footer>
</body>

	<script src="../js/script.js"></script>

</html>