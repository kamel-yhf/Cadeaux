<?php

class Conf
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=cadeaux';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monConf = null;

	private function __construct()
	{
    		Conf::$monPdo = new PDO(Conf::$serveur.';'.Conf::$bdd, Conf::$user, Conf::$mdp); 
			Conf::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		Conf::$monPdo = null;
	}

	public  static function getConf()
	{
		if(Conf::$monConf == null)
		{
			Conf::$monConf= new Conf();
		}
		return Conf::$monConf;  
	}

	public function getLesCategories()
	{
		$req = "select * from categorie";
		$res = Conf::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getLesProduitsDeCategorie($idCategorie)
	{
	    $req="select * from produit where idCategorie = '$idCategorie'";
		$res = Conf::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}

	public function getLesProduitsDuTableau($desIdProduit)
	{
		$nbProduits = count($desIdProduit);
		$lesProduits=array();
		if($nbProduits != 0)
		{
			foreach($desIdProduit as $unIdProduit)
			{
				$req = "select * from produit where id = '$unIdProduit'";
				$res = Conf::$monPdo->query($req);
				$unProduit = $res->fetch();
				$lesProduits[] = $unProduit;
			}
		}
		return $lesProduits;
	}

	public function creerCommande($nom,$rue,$cp,$ville,$mail, $lesIdProduit )
	{
		$req = "select max(id) as maxi from commande";
		echo $req."<br>";
		$res = Conf::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$idCommande = $maxi;
		echo $idCommande."<br>";
		echo $maxi."<br>";
		$date = date('Y/m/d');
		$req = "insert into commande values ('$idCommande','$date','$nom','$rue','$cp','$ville','$mail')";
		echo $req."<br>";
		$res = Conf::$monPdo->exec($req);
		foreach($lesIdProduit as $unIdProduit)
		{
			$req = "insert into contenir values ('$idCommande','$unIdProduit')";
			echo $req."<br>";
			$res = Conf::$monPdo->exec($req);
		}
		
	
	}
}
?>