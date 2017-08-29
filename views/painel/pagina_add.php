<h1>Adicionar Pagina</h1>
<form method="POST">
	URL da Pagina:<br>
	<input type="text" name="url"><br><br>

	<input type="checkbox" name="add_menu" value="sim" checked="checked">
	Criar Menu Automaticamente<br><br>

	Titulo do Pagina:<br>
	<input type="text" name="titulo"><br><br>

	Corpo da Pagina:<br>
	<textarea name="corpo" id="corpo"></textarea><br><br>

	<input type="submit" value="Salvar">
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	window.onload = function(){
		CKEDITOR.replace("corpo");
	}
</script>