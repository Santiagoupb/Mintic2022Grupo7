<?php 
require '../Config/Connection.php';

class Soporte{
protected $Id;
protected $Nombre;
protected $Email;
protected $Password;



protected function GuardarTecnico(){

try {


include_once "../Config/Connection.php";

$guardarendb = new Connection();

  

$newpass = password_hash("12345",PASSWORD_DEFAULT,['cost'=>10]);
$query = "INSERT INTO Soporte (nombre_soporte,email_soporte,contrasena_soporte) VALUES (?,?,?)";
    $nombre_tecnico = "sari";
    $correo_tecnico = "saris@gmail.com";
  echo $newpass;
    $insertar = $guardarendb->databaseHelpdesk->prepare($query);
    $insertar->bindParam(1,$nombre_tecnico);
    $insertar->bindParam(2,$correo_tecnico);
    $insertar->bindParam(3,$newpass);

    
  
    $insertar->execute();
    
       
  
          
            
            
      

         


} catch (exception $e) {
    throw $e;
}
    


}




    
    
    protected function ConsultarTecnico(){
        
        try{
        
        include_once "../Config/Connection.php";
    
        $consultardb = new Connection();
        
        $query = "SELECT * FROM Soporte WHERE email_soporte ='$this->Email'";
        $consulta = $consultardb->databaseHelpdesk->prepare($query);
        $consulta->execute();



        $objap = $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach($objap as $tecnico){}
         
        if (empty($tecnico)) {
        $tecnico = "YES";
        }
        return $tecnico;
        
     
    
    
    } catch (exception $e) {
            throw $e;
        }
            
        }




}


?>
