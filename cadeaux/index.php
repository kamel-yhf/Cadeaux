<?php
session_start();
require_once("util/fonctions.php");
require_once("util/class.Conf.php");
include_once("vues/v_entete.php") ;
include_once("vues/v_bandeau.php") ;


if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = Conf::getConf();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirProduits' :
		{include("controleurs/c_voirProduits.php");break;}
	case 'gererPanier' :
		{ include("controleurs/c_gestionPanier.php");break; }
}

include("vues/v_pied.php") ;
?>

