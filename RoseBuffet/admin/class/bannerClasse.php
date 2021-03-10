<?php

require_once("conexao.php");

class bannerClasse{
	
	//ATRIBUTOS
	public $id;
	public $img;
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
		$query = "SELECT * FROM banner ORDER BY id";
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->	fetchAll();
		return $lista; 
	}
	
	//MÉTODO INSERIR
	public function inserir(){
		$query = "INSERT INTO banner (img, linkUrl) VALUES ('" .$this->img. "','" .$this->linkUrl."')";
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=banner");	
	}
	
    //MÉTODO ATUALIZAR
   
	public function atualizar(){
		$query = "UPDATE banner SET img = '".$this->img."', linkUrl = '".$this->linkUrl."' WHERE id = " .$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=banner");	
		
		
	}
	
	
		//METOdO CARREGAR
	
	public function carregar(){
		$query = "SELECT img, linkUrl FROM banner WHERE id = ".$this->id;
		
		$conn = Conexao::ligarConexao();
		$resultado = $conn->query($query);
		$lista = $resultado->fetchAll();
		foreach($lista as $linha){
		$this->img = $linha['img'];
		$this->linkUrl = $linha['linkUrl'];
		}
	}
	
		//METODO Deletar
	
	
	public function deletar(){
		$query = "DELETE FROM banner WHERE id = ".$this->id;
		$conn = Conexao::ligarConexao();
		$conn->exec($query);
		
		header("Location:index.php?p=banner");	
	}
	
		
}
	





	


