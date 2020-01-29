<?php 
class contatosController extends controller {

	public function index () {

	}

	public function add() {
		$dados = array();

		if(!empty($_GET['error'])){
			$dados['error'] = $_GET['error'];
		}

		$this->loadTemplate('add',$dados);
	}

	/*
	Action que salvar um novo contato no Banco de Dados 
	*/

	public function add_save (){
		
		
		if(!empty($_POST['nome']) && !empty($_POST['email']) ) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$contato = new Contatos();
			
			if($contato->inserir($nome, $email)){
				header("location:".BASE_URL);
			} else {
				header("location:".BASE_URL."/contatos/add?error=".$email);
			}
			
		}
		
	}

	/*
	Action que deleta um  contato no Banco de Dados 
	*/

	public function delete($id){
		
			$contato = new Contatos();
			$contato->deletarContato($id);
			header("location:".BASE_URL);
		
	}

	/*
	Action que carrega um formulário para editar um  contato no Banco de Dados 
	*/

	public function editar(){
		$dados = array();

		$this->loadTemplate('editar',$dados);

		
	}

	/*
	Action que edita um contato já existente no Banco de Dados 
	*/

	public function editarContatos(){

		if(!empty($_POST['nome']) && !empty($_POST['id'])){

			$nome = $_POST['nome'];
			$id = $_POST['id'];
			$contato = new Contatos();
			$contato->editarContato($nome,$id);
			
		
		} 
		header("location:".BASE_URL);

		
		
	}

	
}

?>