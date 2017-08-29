<?php 
	class paginaController extends controller{

		public function index($url){

			$dados = array();

			$p = new Paginas();
			$dados = $p->getPagina($url);

			$this->loadTemplate('pagina', $dados);
		}
	}
 ?>