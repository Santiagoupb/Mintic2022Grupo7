<?php 
require '../Config/Connection.php';

class Producto {
protected $IdProducto;
protected $Nombre;
protected $Categoria;
protected $Descripcion;
protected $Cantidad;
protected $Descuento;
protected $Estado;
protected $Valor;
protected $NumeroRecibo;

protected function ComprarProducto(){

try {


include_once "../Config/Connection.php";

$guardarendb = new Connection();

  

    $query = "INSERT INTO Recibo (email_cliente,contrasena_cliente,nombre_cliente,cedula_cliente,edad_cliente,telefono_cliente,fecha_registro_cliente) VALUES (?,?,?,?,?,?,NOW())";
    
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



protected function ConsultarEstadoEnvio(){

    try {
    
    
    include_once "../Config/Connection.php";
    
    $insdb = new Connection();
    
     
    
        $query = "INSERT INTO instructor (ins_nombre,ins_titulo,ins_correo,ins_password,ins_estado,ins_fecha) VALUES (?,?,?,?,?,NOW())";
        $newpass = password_hash($this->Password,PASSWORD_DEFAULT,['cost'=>10]);
        $estado = 1;
      
        $insertar = $insdb->db->prepare($query);
        $insertar->bindParam(1,$this->Nombre);
        $insertar->bindParam(2,$this->Titulo);
        $insertar->bindParam(3,$this->Email);
        $insertar->bindParam(4,$newpass);
        $insertar->bindParam(5,$estado);
        
        $insertar->execute();

        $query = "INSERT INTO programa_has_Instructor ( instructor_id_instructor,programa_id_programa) VALUES (LAST_INSERT_ID(), '$this->Titulo' )";
        $ins = $insdb->db->prepare($query);
        $ins->execute();

        $objap = $insertar->fetchAll(PDO::FETCH_OBJ);
        foreach($objap as $instructor){}
         
        if ($instructor == true) {
        $instructor = "N";
        }
        return $instructor;
        


            
        
    
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