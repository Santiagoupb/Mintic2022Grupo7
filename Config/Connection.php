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






































/*


class Conexion{ // el nombre de la clase conexion para acceder desde cualquier parte de la aplicacion
private $host;
private $user;
private $password;
private $db;
private $charset;

public function connect(){

$this -> host = 'localhost';
$this -> user = 'root';
$this -> password ='';
$this -> db = 'teen';
$this -> charset ='utf8mb4';

try {// prueba la conexion a la base de datos
  
  $conecthis = 
  "mysql:host=".$this->host.";
           db=".$this->db.";
      charset=".$this->charset;
  $conpdo = new PDO($conecthis,$this -> user,$this -> password);
  $conpdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $conpdo;
} catch (PDOException $e) {
  echo "Connection failed".$e->getMessage();
}
}
}

// public function __construct(){

// $conectDB = "mysql:host=".,$this->host.";dbnames=".$this->db.";charset=utf8" ;

// try {
//   $this->conect = new PDO($conectDB,$this->user,$this->password);
//   $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//   echo "conexion exitosa";
// } catch (Exception $e) {
   
// $this->conect = 'error de conexión';
// echo"Error".$e->getMessage();

// }




// new mysqli($host,$user,$password,$db) or die(mysqli_error($mysqli))
// if(isset($conect)){ 

// echo "hola";

// }


*/
?>