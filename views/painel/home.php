<h1>Páginas</h1>
<a href="<?php BASE_URL ?>painel/pagina_add">Adicionar Pagina</a>
<table border="0" width="100%">
	<tr>
		<th align="left">ID</th>
		<th align="left">Url</th>
		<th align="left">Titulo</th>
		<th align="left">Ações</th>
	</tr>
	
	<?php foreach($paginas as $pagina){ ?>
		<tr>
			<td><?php echo $pagina['id']; ?></td>
			<td><?php echo $pagina['url']; ?></td>
			<td><?php echo $pagina['titulo']; ?></td>
			<td>
				<a href="<?php BASE_URL ?>painel/pagina_edit/<?php echo $pagina['id']; ?>">Editar</a> - <a href="<?php BASE_URL ?>painel/pagina_del/<?php echo $pagina['id']; ?>">Excluir</a>
			</td>
		</tr>
	<?php } ?>
</table>