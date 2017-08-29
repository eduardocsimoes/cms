<h1>Editar Pagina</h1>
<form method="POST">
	URL da Pagina:<br>
	<input type="text" name="url" value="<?php echo $pagina['url']; ?>"><br><br>

	Titulo do Pagina:<br>
	<input type="text" name="titulo" value="<?php echo $pagina['titulo']; ?>"><br><br>

	Corpo da Pagina:<br>
	<textarea name="corpo" id="corpo"><?php echo $pagina['corpo']; ?></textarea><br><br>

	<input type="submit" value="Salvar">
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>