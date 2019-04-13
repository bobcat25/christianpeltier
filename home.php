

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Page d'acceuil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" media="screen" type="text/css" title="Mon style" href="../css/style.css">
	
	
	<link href="../bootstrap/fonts/glyphicons-halflings-regular.svg">
	
	<script src="../bootstrap/js/bootstrap.js"></script>
	<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->

</head>
<body>


	


   
		

<header id ="header">

	<div class="container">

		<div class="menuTop">

 		<!-- menu en haut -->

			<nav>

				<ul>
					
					<li><a href="#contact">Contact</a></li><!-- lien vers la page home -->
					
					<li><a href="#auteur">Auteur</a></li><!-- lien vers ancre avec id auteur -->

					<li><a href="#galerie">Galerie</a></li><!-- lien vers ancre avec id galerie -->

					<li><a href="home.php">Accueil</a></li><!-- lien vers ancre avec id header -->

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

<!-- carousel -->

    <section id="carousel">

           <div class="container">

			  <div class="col-xs-12">

			    <div class="carousel slide" data-ride="carousel" data-interval="5000">
				<!-- bulle blanche du carousel -->
					<ol class="carousel-indicators">

					    <li data-target="#carousel" data-slide-to="0" class="active"></li>

					 	<li data-target="#carousel" data-slide-to="1"></li>               

					    <li data-target="#carousel" data-slide-to="2"></li>                

					    <li data-target="#carousel" data-slide-to="3"></li>              

	  				</ol>
	  			<!-- images qui défilent	-->
				    <div class="carousel-inner" role="listbox">

						

				        <div class="item active"> <img alt="photographie d'un lynx boréal" src="../image/carousel1.jpg" /></div>

						

						

				        <div class="item"> <img  alt="photographie d'un martin pêcheur" src="../image/carousel2.jpg" /></div>       

						

				        <div class="item"> <img  alt="photographie d'un chevreuil" src="../image/carousel3.jpg" /></div>        

				        <div class="item"> <img  alt="photographie d'une pensée" src="../image/carousel4.jpg" /></div>        

				    </div>
				<!-- flèches gauche et droite 	
					<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Précédent</span>
					</a>
					<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Suivant</span>
					</a>
				-->
			    </div>

			  </div>

			</div>

			<script src="../js/jquery.js"></script>

			<script src="../bootstrap/js/bootstrap.js"></script>

	
   </section> 

	

   


   <!-- galerie -->

	<section id="galerie">   

		<div class="container">

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
   
    </section>   

   <!-- auteur -->

   <section id="auteur">
		<div class="container">
			<div class="row">
          	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

				
               <img class="imageAuteur" src="../image/photo_auteur.png">

           	</div>

           	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

				

               <h1 class="titreAuteur">Auteur</h1>

               <p class="texte">Né en 1972, dans une magnifique région , la Franche-Comté, j'ai rapidement été attiré par les merveilles et la diversité de la nature.</p>

           		<a href="auteur.php">En savoir plus...</a>

           	</div>
			
           

       </div>
   </div>
   </section>


   <!-- contact -->

   <section id="contact" >
		<div class="container">
			<div class="row">
	           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

	               <h1 class="titreContact">Contact</h1>
						<p class="texteContact">
							Vous avez une question, une remarque, une demande, alors laissez moi un message et je vous répondrai dès que j'aurai pris connaissance de votre message.<br /> 
							Vous pouvez aussi me contacter via les raiseaux sociaux. 
						</p>
						<span class="fitg">	<a href="https://www.facebook.com/christian.peltier.733"><img class="facebookVert" src="../icone/SVG/FacebookVert.png"></a>
							<a href="https://www.instagram.com/peltier_christian_photographie/"><img class="instagramVert" src="../icone/SVG/InstagramVert.png"></a>
							<a href="https://twitter.com/bill25dev"><img class="twitterVert" src="../icone/SVG/TwitterVert.png"></a>
							
						
						<p class="email"><img class="enveloppe" src="../icone/SVG/enveloppeVert.svg" />
							christian"at"christianpeltier.com
						</p>
						<p class="telephone"><img class="telephone" src="../icone/SVG/telephoneVert.png" />
							+33(0)6 88 46 02 33
						</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">		
						<form>
							<div class="form-group">
								<label id="labelNom" for="nom">Nom :</label>
								<input  class="form-control" type="text" name="nom"/>
								
							</div>
							<div class="form-group">
								<label for="mail"></span>Mail :</label>
								<input id="courriel" class="form-control" type="email" name="email"/>
								<span id="aideCourriel"></span>
							</div>
							<div class="form-group">
								<label for="sujet">Sujet :</label>
								<input class="form-control" type="text" name="text"/>
								
							</div>
							<div class="form-group">
								<label for="message">Message :</label>
								<textarea class="form-control" name="message" id="message"></textarea>
								
							</div>
							
							
								
							<div class="form-group">
								<input type="submit" id="envoyer" value="Envoyer"  />
							</div>
							<br/>
						</form>

	           	</div>
			</div>
           

       </div>
   </section>



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
