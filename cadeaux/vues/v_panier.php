<h2>Votre Panier:</h2>
<?php

foreach( $lesProduitsDuPanier as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$image = $unProduit['image'];
	$prix = $unProduit['prix'];
?>

	<p>
	<img src="<?php echo $image ?>" alt=image width=100	height=100 />
	<?php
		echo $description."($prix Euros)";
	?>	
	<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article ?');">
	<img class="panier" src="images/retirerpanier.png" TITLE="Retirer du panier" ></a>
	
	
	</p>
<?php
}
?>
<br>
<a href=index.php?uc=gererPanier&action=passerCommande><button class="btn btn-danger">Passer Commande</button></a>
