<?php 
	class Article{
		public function fetch_all(){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM articles");
			$query->execute();

			return $query->fetchALL();
		}
		public function fetch_data($articles_id){
			global $pdo;

			$query = $pdo->prepare("SELECT * FROM articles WHERE articles_id=?"); 
			$query->bindValue(1, $articles_id);
			$query->execute();

			return $query->fetch();
		}
	}
?>