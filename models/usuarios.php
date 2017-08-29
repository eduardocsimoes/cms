<?php 
	class Usuarios extends model{

		public function verificarLogin(){

			if(!isset($_SESSION['lgsystem']) || (isset($_SESSION['lgsystem']) && empty($_SESSION['lgsystem']))){
				header("Location: ".BASE_URL."painel/login");
				exit;
			}
		}

		public function logar($email, $senha){

			$retorno = '';

			$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->execute();

			if($sql->rowCount() > 0){
				$f = $sql->fetch();

				$_SESSION['lgsystem'] = $f['id'];

				header("Location: ".BASE_URL."painel");
			}else{
				$retorno = "E-mail e/ou Senha não conferem";
			}

			return $retorno;
		}
	}
 ?>