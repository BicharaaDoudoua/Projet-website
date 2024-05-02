<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Exemple Traitement formulaire en PHP</title>
</head>
<body>
  <?php
  if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND
  !empty($_POST['sexe']) AND !empty($_POST['ville']) )
  {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];

    $info = ($sexe == "H"?"Mr ":"Mme ").$nom." ".$prenom;
    $_SESSION['info']=$info;


    echo "<table border=\"1\" >";
    echo "<caption><b>Confirmation de vos coordonnées</b></caption>";

    echo "<tr> <td> Nom : &nbsp;</td> <td>".$nom."</td></tr>";
    echo "<tr> <td> Prenom : &nbsp;</td> <td>".$prenom."</td></tr>";
    echo "<tr> <td> Genre : &nbsp;</td> <td>".($sexe == "H"?"Homme":"Femme")."</td></tr>";
    echo "<tr> <td> Ville : &nbsp;</td> <td>".$ville."</td></tr>";

    echo "</table>";

    echo "<a href='page2.php'> Page suivante </a>";
  }
  else
  {
     echo "<script> alert('Le formulaire est incomplet'); ";
     echo "document.location='index.html' </script>";
  }
  ?>

</body>
</html>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Panier</title>
</head>

<body>
<h1 align="center">Liste des produits du panier:</h1>
<p align="center">&nbsp;</p>

  <?php
  $link = mysqli_connect(
    'localhost',
    'root',
    '',
    'projet');
  if(!link)
  {
    die('Erreur de connexion ('.mysqli_connect_error().')'.mysqli_connect_error())
  }
  if(!empty($_POST['categorie']))
  {
    $produit = $_POST['lib_produit'];
    $prix = $_POST['prix'];



    echo "<table border=\"1\" >";
    echo "<caption><b>Confirmation de vos coordonnées</b></caption>";

    echo "<tr> <td width="30%" bgcolor="grey"> Produit : &nbsp;</td> <td>".$Produit."</td></tr>";
    echo "<tr> <td width="30%" bgcolor="grey"> Prix : &nbsp;</td> <td>".$Prix."</td></tr>";
    echo "<tr> <td width="30%" bgcolor="grey"> Quantite : &nbsp;</td> <td>"1"</td></tr>";
    echo "<tr> <td width="30%" bgcolor="grey"> Subtotal : &nbsp;</td> <td>".$Prix."</td></tr>";

    echo "</table>";

    echo "<table align="left" width="20%" border="0" cellspacing="18" cellpadding="5">

    <tr>
    <td width="30%" bgcolor="grey">Total</td>
    <td width="30%" bgcolor="grey">".$Prix."</td>
    </tr>
    <tr>
        <td width="30%">
        <input type="reset" name="reset" value="Annuler" />
        </td>
      <td width="30%" colspan="2">
        <p align="center">
            <input type="submit" name="submit" value="Valider votre commande" />
        </p>
        </td>

    </tr>
  </table>";
  }
  else
  {
     echo "<script> alert('Le formulaire est incomplet'); ";
     echo "document.location='index.html' </script>";
  }
  ?>

</body>

</html>
