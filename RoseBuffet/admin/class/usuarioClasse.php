<?php

require_once("conexao.php");

class usuarioClasse{
	
	//ATRIBUTOS
	public $id;
	public $nome;
	public $email;
	public $senha;
	
	
	//METODO CONSTRUTOR
	
	public function __construct($id = false){
		if($id){
			$this->id = $id;
			$this->carregar();
		}
	}
	
	
	//MÉTODO LISTAR
	public function listar(){
		$query = "SELECT * FROM usuario ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista;
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO usuario (nome, email, senha) VALUES ('" .$this->nome. "', '" .$this->email."', '" .$this->senha."')";
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=usuario");	
	}
	
    //MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE usuario SET nome = '" .$this->nome. "',email = '" .$this->email."',senha = '" .$this->senha."' WHERE id = " .$this->id;
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=usuario");	
	}
	
	
		//METDOSO CARREGAR
	
	public function carregar(){
	
		$query = "SELECT nome, email, senha FROM usuario WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		foreach($lista as $linha){
				$this->nome = $linha['nome'];
				$this->email = $linha['email'];
				$this->senha = $linha['senha'];
		}
	}
	
		//METODO CARREGAR
	
	
	public function deletar(){
		$query = "DELETE FROM usuario WHERE id = ".$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=usuario");	
	}
	
		
}
	





	


