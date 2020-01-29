
<div class="container">
	<h3>Editar </h3>

<?php 
$id = $_GET['id'];
$nomeAntigo = $_GET['nome'];
?>	
<form method="POST" action="<?php echo BASE_URL;?>contatos/editarContatos">
	<div class="form-group">
		<label for="nome">Novo nome: </label>
		<input type="text" class="form-control"  id="nome" placeholder="<?php echo "Nome atual : ".$nomeAntigo ?>" name="nome"/>
	</div>
	<input type="submit" value ="Editar" class="btn btn-primary"/>
	<input type="hidden" name="id" value="<?php echo $id?>"> 
	<a href="<?php echo BASE_URL;?>" class="btn btn-primary">Voltar</a>
</form>
</div>
