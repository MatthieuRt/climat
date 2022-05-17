<?php 
	require_once('connexion.php');
	require_once('chargerClasse.php');

	


	function test_login($username,$password){
		$dbh=dbconnect();
		$result=true;

		$sql="SELECT * FROM admin WHERE username='%s' AND password=sha1('%s')";
		$sql=sprintf($sql,$username,$password);
		$resultats=$dbh->prepare($sql);
		$resultats->execute();
		$number_rows=$resultats->fetch();
		if($number_rows){
			$result=true;
		}
		else{
			$result=false;
		}
		return $result;
	}


	function insert_article($titre,$contenu,$continent,$date,$image){
		$dbh=dbconnect();


		$sql="INSERT INTO article VALUES('0','%s','%s','%s','%s','%s')";
		$sql=sprintf($sql,$titre,$contenu,$continent,$date,$image);
		$dbh->exec($sql);
	}

	function get_article($id){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where id='%d'";
		$sql = sprintf($sql,$id);
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		
		return $articles;
	}

	function get_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		
		return $articles;
	}

	function get_latest_article(){
		$dbh = dbconnect();

		$articles = array();
		$sql = "SELECT * FROM articles group by date asc limit 1";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_recent_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles group by date asc limit 2,3";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_africa_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where continent = 'Afrique'";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_asia_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where continent = 'Asie'";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_europe_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where continent = 'Europe'";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_Namerica_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where continent = 'Amerique du Nord'";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}

	function get_Samerica_articles(){
		$dbh = dbconnect();
		$articles = array();
		$sql = "SELECT * FROM articles where continent = 'Amerique du Sud'";
		$resultats = $dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$articles[]=new Article($row->id,$row->titre,$row->contenu,$row->continent,$row->date,$row->image);
		}
		$resultats->closeCursor();
		return $articles;
	}
	
	function get_products_from_panier(){
		$dbh=dbconnect();
		$produits=array();
		$sql="SELECT * FROM produit AS p JOIN panier AS pp ON p.id_produit=pp.id_produit";
		$resultats=$dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$produits[]=new Produit($row->id_produit,$row->id_categorie,$row->marque,$row->nom_produit,$row->prix,$row->annee_sortie,$row->energie,$row->description,$row->photo);
		}
		$resultats->closeCursor();
		return $produits;
	}

	function get_products_from_wishlist(){
		$dbh=dbconnect();
		$produits=array();
		$sql="SELECT * FROM produit AS p JOIN wishlist AS w ON p.id_produit=w.id_produit";
		$resultats=$dbh->query($sql);
		$resultats->setFetchMode(PDO::FETCH_OBJ);
		while($row = $resultats->fetch()){
			$produits[]=new Produit($row->id_produit,$row->id_categorie,$row->marque,$row->nom_produit,$row->prix,$row->annee_sortie,$row->energie,$row->description,$row->photo);
		}
		$resultats->closeCursor();
		return $produits;
	}

	function remove_from_panier($id_prod){
		$dbh=dbconnect();

		$sql="DELETE FROM panier WHERE id_produit='%d'";
		$sql=sprintf($sql,$id_prod);

		$dbh->exec($sql);
	}

	
	
?>