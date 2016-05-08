<?php 
	class About{
		public function fetch_all(){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM abouts_diu");
			$query->execute();

			return $query->fetchALL();
		}
		public function fetch_data($about_id){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM abouts_diu WHERE about_id=?"); 
			$query->bindValue(1, $about_id);
			$query->execute();

			return $query->fetch();
		}
	}
?>