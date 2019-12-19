<div id="creationCommande" class="container">
<form class="form" method="POST" action="index.php?uc=gererPanier&action=confirmerCommande">
   <fieldset >
     <h3>Formulaire de commande</h3>
     <br>
     <br>
		<p>
			<label for="nom">Nom Prénom:</label>
			<input id="nom" type="text" name="nom" value="<?php echo $nom ?>" >
		</p>
		<p>
			<label for="rue">rue:</label>
			 <input id="rue" type="text" name="rue" value="<?php echo $rue ?>" >
		</p>
		<p>
         <label for="cp">code postal:</label>
         <input id="cp" type="text" name="cp" value="<?php echo $cp ?>" >
      </p>
      <p>
         <label for="ville">ville:</label>
         <input id="ville" type="text" name="ville"  value="<?php echo $ville ?>" >
      </p>
      <p>
         <label for="mail">mail:</label>
         <input id="mail" type="text"  name="mail" value="<?php echo $mail ?>" >
      </p> 
	  	<p>
         <input class="btn btn-success" type="submit" value="Valider" name="valider">
         <input class="btn btn-danger" type="reset" value="Annuler" name="annuler"> 
      </p>
    </fieldset>
</form>
</div>
