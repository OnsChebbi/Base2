<?php

include 'config.php';


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> A PROPOS CE PRODUIT </title>
</head>
<body>
<fieldset align="center" padding="50px">
	<?php
	
    $req="select * from produit where id=$id";
    $db=config::getConnection();
    $listP=$db->query($req) ;
        foreach ($listP as $donnees)
{ 
		  
		{	 echo "<p>Réference du produit: ".$donnees['ref']." </p>";
		     echo "<p>Catégorie: ".$donnees['categ']." </p>";
		     echo "<p>Nom du Produit: ".$donnees['nomP']." </p>";
		     echo "<p>Prix Vente EN GROS: ".$donnees['prixVG']." </p>";
		     echo "<p>Prix Vente EN LIGNE: ".$donnees['prixVL']." </p>";
		     echo "<p>Caractéristiques: ".$donnees['carac']." </p> <br/>";	
		 }

}		 
	?>
	</fieldset>
</body>
</html>