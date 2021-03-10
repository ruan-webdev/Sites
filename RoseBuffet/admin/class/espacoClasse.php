<?php

require_once("global.php");

class espacoClasse{
	
	//ATRIBUTOS
	public $id;
	public $img;
	public $titulo;
	public $texto;
	public $linkUrl;
	
	
	//METODO CONSTRUTOR
	
	public function __construct($id = false){
		if($id){
			$this->id = $id;
			$this->carregar();
		}
	}
	
	
	//MÉTODO LISTAR
	public function listar(){
		$query = "SELECT * FROM destaque ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista;
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO destaque (img, titulo, texto, linkUrl) VALUES ('" .$this->img. "', '" .$this->titulo."','" .$this->texto."','" .$this->linkUrl."')";
		
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=destaque");	
	}
	
    //MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE destaque SET img = '".$this->img."', titulo = '" .$this->titulo."', texto = '".$this->texto."', linkUrl = '".$this->linkUrl."' WHERE id = " .$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=destaque");	
		
		
	}
	
	
		//METOdO CARREGAR
	
	public function carregar(){
		$query = "SELECT img, titulo, texto, linkUrl FROM destaque WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->fetchAll();
		foreach($lista as $linha){
		$this->img = $linha['img'];
		$this->titulo = $linha['titulo'];
		$this->texto = $linha['texto'];
		$this->linkUrl = $linha['linkUrl'];
		}
	}
	
		//METODO Deletar
	
	
	public function deletar(){
		$query = "DELETE FROM destaque WHERE id = ".$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=destaque");	
	}
	
		
}
	





	


