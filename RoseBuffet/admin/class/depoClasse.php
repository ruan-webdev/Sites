<?php

require_once("conexao.php");

class DepoClasse{
	
	//ATRIBUTOS
	public $id;
	public $mensagem;
	public $nome;
	
	
	//METODO CONSTRUTOR
	
	public function __construct($id = false){
		if($id){
			$this->id = $id;
			$this->carregar();
		}
	}
	
	
	//MÉTODO LISTAR
	public function listar(){
		$query = "SELECT * FROM depoimento ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista;
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO depoimento (mensagem, nome) VALUES ('" .$this->mensagem. "', '" .$this->nome."')";
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=depoimento");	
	}
	
    //MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE depoimento SET mensagem = '".$this->mensagem."', nome = '" .$this->nome."' WHERE id = " .$this->id;
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=depoimento");	
	}
	
	
		//METDOSO CARREGAR
	
	public function carregar(){
	
		$query = "SELECT mensagem, nome FROM depoimento WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		foreach($lista as $linha){
			$this->mensagem = $linha['mensagem'];
			$this->nome = $linha['nome'];
		}
	}
	
		//METODO CARREGAR
	
	
	public function deletar(){
		$query = "DELETE FROM depoimento WHERE id = ".$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=depoimento");	
	}
	
		
}
	





	


