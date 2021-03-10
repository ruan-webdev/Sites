<?php




class Conexao{
	
	//METODO
	public static function ligarConexao(){
		
		//$conn = new PDO("mysql:dbname=beleza;host:localhost", "root", "");
		
		$conn = new PDO(DRIVE . ':dbname=' . BANCO . ';host:' . HOST, USUARIO, SENHA);


		
		return $conn;
		
	}
	
	
}



