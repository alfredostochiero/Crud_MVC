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
			<tr/>	
			<?php endforeach;  ?>
	</table>

