<a href="<?php echo BASE_URL;?>contatos/add" class="btn btn-success">Adicionar </a>

<h4>Pagina home teste</h4>
	<table class="table">	
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			<tr/>
		</thead>
		<?php
			foreach($lista as $item): ?>
			<tr>
				<td><?php echo $item['id'] ?> </td>
				<td><?php echo $item['nome'] ?> </td>
				<td><?php echo $item['email'] ?> </td>
				<td>
					<a href="<?php echo BASE_URL."contatos/editar?id=".$item['id']."&nome=".$item['nome'];?>" class="btn btn-info">    Editar</a> 
					<a href="<?php echo BASE_URL; ?>contatos/delete/<?php echo $item['id']; ?>"class="btn btn-danger">  Excluir </a>
				</td>

			<tr/>	
			<?php endforeach;  ?>
	</table>

