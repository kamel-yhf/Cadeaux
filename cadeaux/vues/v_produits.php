<div class="container cont">
<div class="col-10" id="produits">
<?php
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
?>	
	<ul>
		<li><img src="<?php echo $image ?>" alt=image /></li>
		<li><?php echo $description ?></li>
		<li><?php echo " : ".$prix." Euros" ?>
		<li><a href=index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier> 
		 <img class="panier" src="images/mettrepanier.png" TITLE="Ajouter au panier" </li></a>
	</ul>
<?php			
}
?>
</div>
</div>
