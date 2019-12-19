<div class="centre">
<?php
initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirCategories':
	{
  		$connexion = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		break;
	}
	case 'voirProduits' :
	{
		$connexion = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_produits.php");
		break;
	}
	case 'ajouterAuPanier' :
	{
		$idProduit=$_REQUEST['produit'];
		$categorie = $_REQUEST['categorie'];
		$ok = ajouterAuPanier($idProduit);
		if(!$ok)
		{
			$message = "<h2>Cet article est déjà dans le panier </h2>";
			include("vues/v_message.php");
		}
		$connexion = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_produits.php");
		break;
	}
}
?>
</div>
