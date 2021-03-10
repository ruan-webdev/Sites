<?php

require_once("conexao.php");

class contaClasse{
	
	//ATRIBUTOS
	public $id;
	public $nome;
	public $email;
    public $fone;
    public $mensagem;
	
	
	//MÉTODO LISTAR
	public function listar(){
		$query = "SELECT * FROM contato ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista;
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO contato (nome, email, fone, mensagem) VALUES ('" .$this->nome. "','" .$this->email. "', '" .$this->fone."', '" .$this->mensagem. "')";
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=contato");	
	}
	
	//MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE contato SET nome = '" .$this->nome. "',email = '" .$this->email."',fone = '" .$this->fone."',mensagem = '" .$this->mensagem."'  WHERE id = " .$this->id;
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=contato");	
	}
	
		//METDOSO CARREGAR
	
	public function carregar(){
	
		$query = "SELECT nome, email, fone, mensagem FROM contato WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		foreach($lista as $linha){
				$this->nome = $linha['nome'];
				$this->email = $linha['email'];
				$this->fone = $linha['fone'];
				$this->mensagem = $linha['mensagem'];
		}
	}
	
    //MÉTODO DELETAR
    public function deletar(){
        $query = "DELETE FROM contato WHERE (nome, email, fone, mensagem)";
    }
   
	
		
}
	





	


