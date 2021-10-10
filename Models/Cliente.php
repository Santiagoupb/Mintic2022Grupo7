<?php 
require '../Config/Connection.php';

class Cliente {
protected $Id;
protected $Email;
protected $Password;
protected $Nombre;
protected $Cedula;
protected $Edad;
protected $Telefono;
protected $Registro;


protected function GuardarCliente(){

try {


include_once "../Config/Connection.php";

$guardarendb = new Connection();

  

    $query = "INSERT INTO Cliente (email_cliente,contrasena_cliente,nombre_cliente,cedula_cliente,edad_cliente,telefono_cliente,fecha_registro_cliente) VALUES (?,?,?,?,?,?,NOW())";
    
    $newpass = password_hash($this->Password,PASSWORD_DEFAULT,['cost'=>10]);
  echo $newpass;
    $insertar = $guardarendb->databaseHelpdesk->prepare($query);
    $insertar->bindParam(1,$this->Email);
    $insertar->bindParam(2,$newpass);
    $insertar->bindParam(3,$this->Nombre);
    $insertar->bindParam(4,$this->Cedula);
    $insertar->bindParam(5,$this->Edad);
    $insertar->bindParam(6,$this->Telefono);
    
  
    $insertar->execute();
    
       
  
          
            
            
      

         


} catch (exception $e) {
    throw $e;
}
    


}



    
    protected function ConsultarCliente(){
        
        try{
        
        include_once "../Config/Connection.php";
    
        $consultardb = new Connection();
        
        $query = "SELECT * FROM Cliente WHERE email_cliente ='$this->Email'";
        $consulta = $consultardb->databaseHelpdesk->prepare($query);
        $consulta->execute();



        $objap = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach($objap as $cliente){}
         
        if (empty($cliente)) {
        $cliente = "YES";
        }
        return $cliente;
        
     
    
    
    } catch (exception $e) {
            throw $e;
        }
            
        }




}


?>
