<h1>Menus</h1>
<a href="<?php echo BASE_URL ?>painel/menus_add">Adicionar Menu</a><br><br>
<table border="0" width="100%">
	<tr>
		<th align="left">ID</th>
		<th align="left">Nome</th>
		<th align="left">Url</th>
		<th align="left">Ações</th>
	</tr>
	
	<?php foreach($menus as $menu){ ?>
		<tr>
			<td><?php echo $menu['id']; ?></td>
			<td><?php echo $menu['nome']; ?></td>
			<td><?php echo $menu['url']; ?></td>
			<td>
				<a href="<?php echo BASE_URL ?>painel/menus_edit/<?php echo $menu['id']; ?>">Editar</a> - <a href="<?php echo BASE_URL ?>painel/menus_del/<?php echo $menu['id']; ?>">Excluir</a>
			</td>
		</tr>
	<?php } ?>
</table>