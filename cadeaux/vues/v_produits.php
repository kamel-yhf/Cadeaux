<div class="container cont mt-5">
<div class="col-10 offset-1" id="produits">
<?php
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
?>	
	<ul>
		<p><img src="<?php echo $image ?>" alt=image /></p>
		<p><?php echo $description ?></p>
		<p><?php echo "Prix : ".$prix." Euros"?>
		<a href=index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier> 
		 <img class="panier" src="images/mettrepanier.png" TITLE="Ajouter au panier"> </p></a>
	</ul>
<?php			
}
?>
</div>
</div>