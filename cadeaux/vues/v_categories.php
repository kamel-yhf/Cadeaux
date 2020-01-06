
<ul id="categories" class="list-group col-2 mt-5 ml-4">
<h2>catégories</h2>
<?php
foreach( $connexion as $uneCategorie) 
{
	$idCategorie = $uneCategorie['id'];
	$libCategorie = $uneCategorie['libelle'];
	?>
	<li class="list-group-item">
		<a href=index.php?uc=voirProduits&categorie=<?php echo $idCategorie ?>&action=voirProduits><?php echo $libCategorie ?></a>
	</li>
<?php
}
?>
</ul>
