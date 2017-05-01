
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="Coq_2.css"/>
</head>
<body>
	<p><a class="retour_accueil" href="accueil.php"> Retour accueil</a></p>
  <div class="container">               <!--Mon conteneur -->
	  <div class="bodyflex">       <!-- Mon bodyflex des 2 boites-->
	     <div class="boite_2 item">    <!--boite 2 !-->
	       <div class="adresse">    <!--mon contact !-->
	           <p>Contact </p>
	   	       <p> Hervé Colin <br/>42 rue Jules Méline<br/>Tél : 06 06 06 36 78<br/>Mail : hervcolin@yahoo.fr
	   	       </p>
	      </div>
	     </div>
	       <div class="boite_3 item">            <!-- boite 3-->
	         	<div class="map">                    <!--Ma map googl-->
	           <script type="text/javascript" src="http://www.supportduweb.com/google_map_gen.js?lati=47.25706793&long=-1.517905&zoom=0&width=700&height=600&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_search=yes&map_small=yes&marqueur=yes&info_bulle=Nous%20sommes%20ici%20!"></script><br /><a href="http://www.supportduweb.com/generateur-cartes-google-maps-mettre-cartes-google-map-sur-son-site-gratuitement-gadget-widget.html"></a>
	       </div>
	   	</div>
	</div>
	        <div class="boite_4 item">                  <!--Boite 4-->
	        <form method="POST" action="boxe_test_cible.php">   <!--link cible php vers base de données-->
						<label for="message" class="message">Votre message !</label>
            <textarea class="message" name="message" type ="text" rows="5" cols="30" placeholder="Laissez voter message !"> </textarea> <!--formulaire textarea-->
            <input class="message"type="reset" value="reset"/>
			 <br/>
			 <br/>
			     <fieldset class="coordonnees" name="coordonnees"> <!--mon formulaire coordonnée-->
			       <legend>Mes coordonnées</legend>
			             <label for="Nom" id="nom">Nom</label>
			             <input type="text" name="nom" id="nom"/>
			             <label name="pre">Prénom</label>
			             <input type="text" name="pre"/>
			             <label for ="adresse" id="adresse">Adresse</label>
			             <input type="adresse"id="adresse" name="adresse"/>
			             <label for="ville" id="telephone">Ville</label>
			             <input type="text" name="ville" id="ville"/>
			             <label for="mail" id="mail">@</label>
			             <input type="text" name="mail" id="mail"/>
			             <label for="tel" id="tel">Téléphone</label>
			             <input type="text" name="tel" id="tel"/>
			 				</fieldset>
                   <input type="submit" value="valider" class="btn"/>    <!--Mon bouton valider !-->
	       </form>
	   </div>
  </div>
</body>

</html>
