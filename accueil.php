<!DOCTYPE html>
<html>
<head>
      <meta charset="uft-8"/>
	    <link rel="stylesheet"type="text/css" href="boxe_test_2.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	    <title>Site Hervé COLIN artiste peintre</title>

</head>
<body>
	  <div class="container">
	    <?php include("boxe_test_inclusion_menu.php");
		  ?>
		<form method="Post" action="boxe_test_cible.php">     <!--cible vers php base de données-->
		</form>
  		<div class="flexbody">
    		<div class="menuleft item">
        		<ul>
        		    <li><a href="Ma galerie photos.pdf">La newsletter</a></li>
          			<br/>
          			<li><a href="Dossier artistique hervé COLIN 2 ok.pdf">Le dossier artistique</a></li>
          			<br/>
          			<li><a href="inscription.php">Devenir Membre !</a></li>
          			<br/>
          			<li><a href="http://www.nantes.maville.com/sortir/agenda_liste.php">Sortir à Nantes !</a></li>
          			<br/>
          			<li><a href="https://44.agendaculturel.fr/lieux-culturels/nantes/galerie-d-art/">Galerie d'art à Nantes !</a></li>
        		</ul>
        		   <form  class="password" method="Post" action="boxe_test_cible.php"> <!--Attention formulaire de message commenté et a traiter !!-->
          		  <label type="password" name="pass">Entrez votre password</label>
          		  <input type="password" name="pass"/>
          			<input type="submit" value="valider"/>
              </form>
    		</div>
  		    <div class="content item">
            <div id="slider1" class ="slider1">

              <script src="slider2.js"></script>
              <script>
               var imgs1 = [
              	 "img/Image1R.png", "img/Image5R.png", "img/Image6R.png", "img/Image9R.png", "img/Image11R.png",
              	 "img/Image29R.png", "img/Image30R.png","img/Image12R.png", "img/Image13R", "img/Image1R","img/Image16R","img/Image17R","img/Image22R","img/Image23R",
          	   ];
               new Slider("slider1", imgs1, {
                  delay: 4500, width: 20
               });
              </script>
            </div>
          </div>
  		    <div class="aside item"></div>
  		</div>
		   <div class="footer item">  © Copyright H.COLIN  2017 </div>
	 </div>
</body>
</html>
