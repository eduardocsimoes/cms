<?php 
	class Menu extends model{

		public function getMenu($id_menu=0){

			$array = array();

			$sql = "SELECT * FROM menu";
			if($id_menu > 0){
				$sql .= " WHERE id = :id_menu";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(":id_menu", $id_menu);
				$sql->execute();
			}else{
				$sql = $this->db->prepare($sql);
				$sql->execute();
			}

			if($sql->rowCount() > 0){
				if($id_menu > 0){
					$array = $sql->fetch();	
				}else{
					$array = $sql->fetchAll();
				}
			}

			return $array;
		}

		public function delete($id_menu){

			$sql = "DELETE FROM menu WHERE id = :id_menu";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_menu", $id_menu);
			$sql->execute();
		}

		public function update($id_menu, $nome, $url){

			$sql = "UPDATE menu SET nome = :nome, url = :url WHERE id = :id_menu";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_menu", $id_menu);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":url", $url);
			$sql->execute();			
		}

		public function insert($nome, $url){

			$sql = "INSERT INTO menu SET nome = :nome, url = :url";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":url", $url);
			$sql->execute();			
		}
	}
 ?>