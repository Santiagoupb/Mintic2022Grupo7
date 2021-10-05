<?php

include_once '../Models/Cliente.php';
class ClienteControllers extends Cliente{ // debe heredar del objeto que esta controlando datos 
    
    //validar datos del login
    public function ValidarDatosLogin($Email,$Password){ //1 se reciben dos parametros email y password

      
        
        $this->Email    =$Email; //2 se usa eñ $this para asignarle al objeto as variables que se filtraron y validaron en el ISSET
        $this->Password =$Password;
        $ClienteCont = $this-> ConsultarCliente(); // 3 es un metodo de cliente se encuentra en cliente.php y devuelve un resultado
   
       
       
        if ($ClienteCont =='YES') { // se realiza un condicional que valide el return del metodo de la clase cliente y en una variable de session se guarda el error para ser mostrado al sweetalert
        $_SESSION['error'] = 'Usuario no existe';
        $this->PaginaPrincial(); //redirige a 
    }else{

if (password_verify($this->Password,$ClienteCont->contrasena_cliente)) { // este metodo nos ayuda a comparar la clave con la contraseña ngresada si es exitoso sigue el proceso
$_SESSION['Id']     = $ClienteCont->idcliente;//la variables de session pueden alamacenar multiple datos en este caso se le asigna datos del usuario para poderlos usar en la interfaz
$_SESSION['Email']  = $ClienteCont->email_cliente;
$_SESSION['Nombre'] = $ClienteCont->nombre_cliente; // se deben colocar como en la base de datos

unset($_SESSION['error']);
// $this-> PaginaPrincial();   mm
echo $_SESSION['Id'] ;

}else{

$_SESSION['error']= 'La Contraseña es incorrecta';
echo  "mal";

}

         }   

    } 
    
    
    
    
    //registro clientes
    public function ValidarDatos($Email,$Password,$Nombre,$cedula,$edad,$telefono){

        $this->Email    =$Email;
        $this->Password =$Password;
        $this->Nombre   =$Nombre;
        $this->Cedula    =$cedula;
        $this->Edad      =$edad ;  
        $this->Telefono =$telefono;

//validar datos
        // var_dump($Email);
        var_dump($Password);
        // var_dump($Nombre);
        // var_dump($cedula); //vardump se usa para saber que devuelve un arreglo o consulta es muy util
        // var_dump($edad);
        // var_dump($telefono);
     
        $cliente =$this-> GuardarCliente();
        
        // if ($cliente =='N') {
        //     $_SESSION['error'] = 'Un error ha ocurrido en su registro intentelo mas tarde';
        //     $this->Redirectlog();
        // }else{
        //     $_SESSION['exito'] = ' Registro exitoso';
        //     $this->Redirectlog();
        // }
        
        }


        public function LogOut(){ //con este se sale de sesion cuando el usuario da clic

  
            unset($_SESSION['Email']);
            session_destroy();
            
            header("location: ../");
        
        
        
        
        
        } 


        public function CerrarSesion(){

  
            unset($_SESSION['Email']);
            session_destroy();
            
            header("location: ../");
        
        
        
        
        
        } 


        public function PaginaPrincial(){ // las vistas se manejan desde el controlador para evitar intrusos

            header("location:../index.php");
            
                }



}






if(isset($_POST['trigger']) && $_POST['trigger'] == 'registro'){ //se recibe la llave de la vista regitro del hidden input y se valida que si esta correctos los datos se envie a la clase controler a uno de sus metodos 

   
    if (isset($_POST['Email'])&&isset($_POST['Password'])&&isset($_POST['Nombre'])&&isset($_POST['Cedula'])&&isset($_POST['Telefono'])&&isset($_POST['Edad'])) {
    $instanceap = new ClienteControllers();
   
   $ValidarEmail = $_POST['Email'];
   $ValidarPassword=$_POST['Password'];
   $ValidarNombre=$_POST['Nombre'];   //aqui se validan los datos esta en proceso
   $ValidarCedula=$_POST['Cedula'];
   $ValidarTelefono=$_POST['Telefono'];
   $ValidarEdad=$_POST['Edad'];

   
    $instanceap->ValidarDatos($_POST['Email'], $_POST['Password'],$_POST['Nombre'],$_POST['Cedula'],$_POST['Telefono'],$_POST['Edad']);
  
  
  // validar datos es un metodo de la clase clientecontrollers lo que hace es asignarlos a las propiedades de cliente
  
  
  
  
  
    // $instanceap->Redirectlog();

}else{ 

   echo "salio mal!!";
}



}

//login

if(isset($_POST['trigger']) && $_POST['trigger'] == 'login'){ //isset se usa para saber si existe lo que ponemos en la variable post que esta ne la vista login
    if (isset($_POST['Email'])&&isset($_POST['Password'])) {
    $instanceap = new ClienteControllers();
    $instanceap->ValidarDatosLogin($_POST['Email'], $_POST['Password']);
 }else{ 
   echo "salio mal!!";  
   
}
}



?>