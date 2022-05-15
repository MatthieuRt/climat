<?php 
	require_once('../incs/connexion.php');

	class Article{
		public $id;
		public $titre;
		public $contenu;
		public $continent;
		public $date;

		public function __construct($id,$titre,$contenu,$continent,$date){
			$this->setid($id);
			$this->setTitre($titre);
			$this->setContenu($contenu);
			$this->setContinent($continent);
			$this->setDate($date);
		}

		public function setId($id){
			$this->_id=$id;
		}

		public function getId(){
			return $this->_id;
		}

		public function setTitre($titre){
			$this->_titre = $titre;
		}

		public function getTitre(){
			return $this->_titre;
		}

		public function setContenu($contenu){
			$this->_contenu=$contenu;
		}

		public function getContenu(){
			return $this->_contenu;
		}

		public function setContinent($continent){
			$this->_continent=$continent;
		}

		public function getContinent(){
			return $this->_continent;
		}

		public function setDate($date){
			$this->_date=$date;
		}

		public function getDate(){
			return $this->_date;
		}
	}
?>