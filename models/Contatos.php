<?php 

class Contatos extends model {


	public function getAll(){
		$array = array();
		$sql = "SELECT * FROM contatos";
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){
			$array = $sql->fetchAll();
		} 

		return $array;
	}

	public function inserir($nome,$email){

		if(!$this->emailExists($email)){
			$sql = $this->db->prepare("INSERT INTO contatos (nome,email) VALUES (:nome,:email)");
			$sql->bindValue(':nome',$nome);
			$sql->bindValue(':email',$email);
			$sql->execute();
			return true;
		} else {
			return false;
		}
		
	}

	private function emailExists($email){
		$sql ="SELECT * FROM contatos WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){
			return true;
		} else {
			return false;
		}
	}

	public function deletarContato($id){
		$sql = $this->db->prepare("DELETE FROM contatos WHERE id=:id");
		$sql->bindValue(':id',$id);
		$sql->execute();

		return true;
	}

	public function editarContato($nome, $id){
		if(!empty($nome)){
			$sql = $this->db->prepare("UPDATE contatos SET nome = :nome WHERE id = :id ");
			$sql->bindValue(':nome',$nome);
			$sql->bindValue(':id',$id);
			$sql->execute();
			if($sql->rowCount() >0){
				return true;
			} else {
				return false;
			}

			} else {
				return false;
			}

		
	}

}


?>