<?php 


// conexion a base de datos 
class Connection{

  public $databaseHelpdesk;

public function __construct(){

try {
 $this-> databaseHelpdesk = new PDO('mysql:
 host=localhost;
 dbname=helpdesk',
 'root'
 ,'');
  
} catch (PDOexception $e) {
  echo "Error:" . $e->getMessage();
}
}

public function CloseConnection(){  //no permiten los servidores tener conexiones abiertas
$this->databaseHelpdesk = null;
}

}









?>
