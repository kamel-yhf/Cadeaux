<?php
function initPanier()
{
	if(!isset($_SESSION['produits']))
	{
		$_SESSION['produits']= array();
	}
}

function supprimerPanier()
{
	unset($_SESSION['produits']);
}

function ajouterAuPanier($idProduit)
{
	$ok = true;
	if(in_array($idProduit,$_SESSION['produits']))
	{
		$ok = false;
	}
	else
	{
		$_SESSION['produits'][]= $idProduit;
	}
	return $ok;
}

function getLesIdProduitsDuPanier()
{
	return $_SESSION['produits'];
}

function nbProduitsDuPanier()
{
	$n = 0;
	if(isset($_SESSION['produits']))
	{
	$n = count($_SESSION['produits']);
	}
	return $n;
}

function retirerDuPanier($idProduit)
{
		$index =array_search($idProduit,$_SESSION['produits']);
		unset($_SESSION['produits'][$index]);
}

function estUnCp($codePostal)
{
   
   return strlen($codePostal)== 5 && estEntier($codePostal);
}

function estEntier($valeur) 
{
	return preg_match("/[^0-9]/", $valeur) == 0;
}

function estUnMail($mail)
{
return  preg_match ('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', $mail);
}

function getErreursSaisieCommande($nom,$rue,$ville,$cp,$mail)
{
	$lesErreurs = array();
	if($nom=="")
	{
		$lesErreurs[]="Il faut saisir le champ nom";
	}
	if($rue=="")
	{
	$lesErreurs[]="Il faut saisir le champ rue";
	}
	if($ville=="")
	{
		$lesErreurs[]="Il faut saisir le champ ville";
	}
	if($cp=="")
	{
		$lesErreurs[]="Il faut saisir le champ Code postal";
	}
	else
	{
		if(!estUnCp($cp))
		{
			$lesErreurs[]= "erreur de code postal";
		}
	}
	if($mail=="")
	{
		$lesErreurs[]="Il faut saisir le champ mail";
	}
	else
	{
		if(!estUnMail($mail))
		{
			$lesErreurs[]= "erreur de mail";
		}
	}
	return $lesErreurs;
}