<?php 
	class Paginas extends model{
		
		public function getPagina($url){

			$array = array();

			$sql = "SELECT titulo, corpo FROM paginas WHERE url = :url";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':url', $url);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function getPaginaById($id_pagina){

			$array = array();

			$sql = "SELECT titulo, url, corpo FROM paginas WHERE id = :id_pagina";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':id_pagina', $id_pagina);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetch();
			}

			return $array;
		}

		public function getPaginas(){

			$array = array();

			$sql = "SELECT id, url, titulo FROM paginas";
			$sql = $this->db->prepare($sql);
			$sql->execute();

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
			}

			return $array;
		}

		public function delete($id_pagina){

			$sql = "DELETE FROM paginas WHERE id = :id_pagina";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_pagina", $id_pagina);
			$sql->execute();
		}

		public function update($id_pagina, $titulo, $url, $corpo){

			$sql = "UPDATE paginas SET titulo = :titulo, url = :url, corpo = :corpo WHERE id = :id_pagina";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":id_pagina", $id_pagina);
			$sql->bindValue(":titulo", $titulo);
			$sql->bindValue(":url", $url);
			$sql->bindValue(":corpo", $corpo);
			$sql->execute();			
		}

		public function insert($titulo, $url, $corpo){

			$sql = "INSERT INTO paginas SET titulo = :titulo, url = :url, corpo = :corpo";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":titulo", $titulo);
			$sql->bindValue(":url", $url);
			$sql->bindValue(":corpo", $corpo);
			$sql->execute();	
		}
	}
 ?>