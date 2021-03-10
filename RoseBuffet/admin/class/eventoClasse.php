<?php

require_once("conexao.php");

class eventoClasse{
	
	//ATRIBUTOS
	public $id;
	public $img;
	public $titulo;
	public $texto;
	
	
	//METODO CONSTRUTOR
	
	public function __construct($id = false){
		if($id){
			$this->id = $id;
			$this->carregar();
		}
	}
	
	
	//MÉTODO LISTAR
	public function listar(){
		$query = "SELECT * FROM evento ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista;
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO evento (img, titulo, texto) VALUES ('" .$this->img. "','" .$this->titulo."','" .$this->texto."')";
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=evento");	
	}
	
    //MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE evento SET img = '".$this->img."', titulo = '".$this->titulo."', texto = '".$this->texto. "' WHERE id = " .$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=evento");	
		
		
	}
	
	
		//METOdO CARREGAR
	
	public function carregar(){
		$query = "SELECT img, titulo, texto FROM evento WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->fetchAll();
		foreach($lista as $linha){
		$this->img = $linha['img'];
				$this->img = $linha['titulo'];
				$this->img = $linha['texto'];
	
		}
	}
	
		//METODO Deletar
	
	
	public function deletar(){
		$query = "DELETE FROM evento WHERE id = ".$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=evento");	
	}
	
		
}
	





	


