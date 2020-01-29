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

	public function delete(){
		if(!empty($_GET['id']) && isset($_GET[id])){
			$id = $_GET['id'];
			$contato = new Contatos();
			$contato->deletarContato($id);
			header("location:".BASE_URL);
		}
	}

	public function editar(){
		$dados = array();

		$this->loadTemplate('editar',$dados);

		
	}

	public function editarContatos(){

		if(!empty($_POST['nome']) && !empty($_POST['id'])){

			$nome = $_POST['nome'];
			$id = $_POST['id'];
			$contato = new Contatos();
			$contato->editarContato($nome,$id);
			header("location:".BASE_URL);
		
		} 

		
		
	}

	
}

?>