<?php
session_start();       //initialisation de ma session
?>

<!DOCTYPE html>
<html lang="fr">         <!--la langue ! -->
<meta charset="utf-8"/>
<head>
         <meta charset="utf-8"/>
		     <meta name="viewport" content"width=device-width, initial-scale=1">
		     <link rel="stylesheet" style="text/css" href="style.css"/> <!--link css-->
         <title>Inscription</title>
</head>
<body>
  <a class="retour_page" href="accueil.php">Retour accueil</a>
  <div>
   <form class="formulaire" method="POST" action ="boxe_test_cible.php">  <!--ma cible vers mon php base données !!-->
      <fieldset>
       <legend>Inscription </legend>  <!--mon 1ère field -->
        <label for="password">Password</label>
        <input type="password" name="pass" class="password"/>
        <br/>
        <label for="nom">Nom</label>
        <input type="text" name="nom" class="nom"/>
        <label for="nom">Prénom</label>
        <input type="text" name="prenom" class="prénom"/>
        <br/>
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="adresse"/>
        <label for="email">@</label>
        <input type="text" name="email" class="email"/>
        <br/>
        <label for="tel">Téléphone</label>
        <input type="text" name="telephone" class="telephone"/>
       <input type="submit" value ="Valider" class="valider">
     </fieldset>
   </form>
    <div class="pub">  <!--div accrocher le client !!-->
       <fieldset>
        <legend>4 Bonnes raisons de s'inscrire !</legend>
           <label for="commenter">Commenter mes tableaux !</label><br/>
           <img src="img/Image1R.png" width="400px" height="120" /><br/>
           <label for="noter">Soutenir l'artiste !</label><br/>
           <img src="img/Image6R.png" width="400px" height="120" /><br/>
           <label for="proposer">Proposer des projets !</label><Br/>
           <img src="img/Image11R.png" width="400px" height="120"/><br/>
           <label for="modérateur">Devenir membre modérateur !</label><br/>
           <img src="img/Image16R.png" width="400px" height="120"/>
        </fieldset>
   </div>
		<br/>
<?php                          //mon php !
   $password = $_POST['pass'];  //attention $password=$_POST['pass'] vers la boxe_cible_test.php!!
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];

   $_SESSION = $password.$nom.$prenom.$adresse.$telephone.$email; //initialisation de ma session good
    if (empty($_SESSION)){   // condition si champs non valider
   $_SESSION =[];
    }
     else{
         echo "<p>Bienvenue ! ".$prenom.' '.$nom.' : '.$adresse.", vous êtes membre ! </P>";
         }
        if (empty($_SESSION)){       //si vide on prévient qu'il faut  saisir !
     //echo  message d'erreur "Veuillez renseigner un nom de produit SVP !" ;
          echo "<p >Veuillez renseigner les champs d'inscription SVP !</p> ";
        }
 ?>
</body>
</html>
