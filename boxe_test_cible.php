<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8"/>
	          <link rel="stylesheet"type="text/css" href="boxe_test_2.css"/>
            <title>Page Membre/Admin</title>
	 </head>
	 <body>
     <p><a class="retour_accueil" href="accueil.php"> Retour accueil</a></p>
	   <h1>Page Membre/Admin</h1>
	 <?php include("boxe_test_inclusion_menu.php");
		?>
	   <p>Le message est :
	 <br/>
	 <?php
	 echo $_POST['message'];
	 ?>
	 <br/>
	 <?php
    if (isset($_POST['pass']) AND $_POST['pass']== "azteca")
	   {
		echo 'Vous êtes membre : Bienvenue !';
	   }
    else{
		echo 'Vous n\'êtes pas membre ! No Enter...';
	  }
	?>
	 </p>
	</body>
</html>
