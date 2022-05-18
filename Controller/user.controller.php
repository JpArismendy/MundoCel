<?php
   // require_once("../Model/Dao/User.dao.php");
    //require_once("../Model/Dto/User.dto.php");
    class UserController{
    public function getVerifyPass($user, $password){
        try{
        $objDtoUser = new User();
        $objDtoUser -> setUser("$user");
        $objDtoUser -> setPassword($password);

  
        $objDaoUser = new UserModel($objDtoUser);

        
        if (gettype($objDaoUser -> getQueryLogin() -> fetch()) == 'boolean'){
        echo "

        <script>
        Swal.fire({
            imageUrl: 'https://dibujoskawaii.net/wp-content/uploads/2018/05/caritas-png-kawaii-1.png',
            imageWidth: 150,
            icon: 'error',
            title: 'Oops...',
            text: 'Usuario y/o contraseña incorrectos :(',
            
          })
        </script>

        ";
        } else{
            $_SESSION['login'] = true;
            header('location:index.php');
        }
         


        } catch(Exception $e){
            echo "error al crear el controller"; 
        } 
    }


    public function setInsertUser($name, $lastname, $user, $password){
        
        try {
            $objDtoUser = new User();
            $objDtoUser -> setName      ($name); 
            $objDtoUser -> setLastName  ($lastname); 
            $objDtoUser -> setUser      ($user); 
            $objDtoUser -> setPassword  ($password);

            $objDaoUser = new UserModel($objDtoUser);
            if  ($objDaoUser -> mldInsertUser()){
                echo "<script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Registro guardado satisfactoriamente',
                    showConfirmButton: false,
                    timer: 1500
                  })
                </script>";
            }

            

        } catch (PDOException $e) {
            echo "error en el controlador de insercion".$e->getMesagge;
        }

    } // Fin de la clase de insercion
    public function getSearchAllUser(){
        $respon = false;
        try {
            $objDtoUser = new User();
            $objDaoUser = new UserModel($objDtoUser);
            $respon = $objDaoUser -> mldSearchAllUser() -> fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the controller of show all" . $e -> getMessage();
        }
        return $respon;
    }//fin de mostrar todo
    
    public function setUpdateUser($code, $name, $lastname, $user, $password){

        try {
            $objDtoUser = new User();
            $objDtoUser -> setCode      ($code); 
            $objDtoUser -> setName      ($name); 
            $objDtoUser -> setLastName  ($lastname); 
            $objDtoUser -> setUser      ($user); 
            $objDtoUser -> setPassword  ($password);

            $objDaoUser = new UserModel($objDtoUser);
            if ($objDaoUser -> mldUpdateUsuario()) {
                echo "
                    <script>
                    Swal.fire(
                        'Actualizado',
                        'El registro ha sido actualizado',
                        'success'
                        )
                    </script>";
                include_once 'view/modulo/user.php';
            }

    } catch(PDOException $e){
        echo 'error al modificar' . $e -> getMessage();
    }
    
    }//fin
}
        

    //$objcontroller = new UserController();
    //$objcontroller -> getVerifyPass('lol', 'Samuel');
?>  

