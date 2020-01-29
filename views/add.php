
<div class="container">
	<h3>Adicionar </h3>

<?php 
	if(isset($error) && !empty($error)){
		echo "<h2><span class='badge badge-warning'> Contato ".$error." já existe! Tente outro Email</span></h2>";
	}
?>	
<form method="POST" action="<?php echo BASE_URL;?>contatos/add_save">
	<div class="form-group">
		<label for="nome"> Nome: </label>
		<input type="text" class="form-control"  id="nome" placeholder="Digite seu nome completo" name="nome"/>
	</div>
	<div class="form-group">
		<label for="email">Email: </label>
		<input type="email" class="form-control" id="email" placeholder="Digite seu melhor e-mail" name="email"/>
	</div>	
	<input type="submit" value ="Adicionar" class="btn btn-primary"/>
	<a href="<?php echo BASE_URL;?>" class="btn btn-primary">Voltar</a>
</form>
</div>
