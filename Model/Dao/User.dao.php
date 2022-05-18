<?php
        //require_once "../model/Conexion.php";
        //require_once "../Dto/User.dto.php";
    class UserModel{

        private $code;
        private $user;
        private $password;
        private $name;
        private $lastName;

        public function __construct($objDtoUser)
        {  
         $this-> code =    $objDtoUser-> getCode();
         $this-> user =    $objDtoUser-> getUser();
         $this-> password= $objDtoUser-> getPassword();
         $this-> name=     $objDtoUser-> getName();
         $this-> lastName= $objDtoUser-> getLastName();
        }

        public function getQueryLogin()
        {
            $sql = "SELECT * FROM USER WHERE USER = ? AND PASSWORD = ?";

            try {
                $objCon = new Conexion();

                $stmt = $objCon -> getConnect() -> prepare($sql);
                $stmt -> bindParam(1, $this->user, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this->password, PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;
                
                
            } catch (exception $e) {
                echo "error al consultar usarios".$e -> getMessage();
            }
            return $result;
        }
        public function mldInsertUser(){
            $sql = "CALL spInsertUser (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConnect() -> prepare($sql);
                $stmt -> bindParam(1, $this-> name,      PDO::PARAM_STR);
                $stmt -> bindParam(2, $this-> lastName,  PDO::PARAM_STR);
                $stmt -> bindParam(3, $this-> user,      PDO::PARAM_STR);
                $stmt -> bindParam(4, $this-> password,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
                
                } catch (PDOException $e) {
                echo "Error al insertar usuarios" . $e -> getMessage();
            }
            return $estado;
        }
        public function mldSearchAllUser(){
            $sql = "CALL spSearchAllUser()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConnect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao" . $e -> getMessage();
            } //end try-catch
            return $respon;
        }//end searchalluser

        public function mlderaseUser(){
            $respon = false;
            $sql = "CALL spDeleteUser(?)";
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConnect() -> prepare($sql);
                $stmt -> bindParam(1, $this->code, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao" . $e -> getMessage();
            } //end try-catch
            return $respon;
        }
        public function mldUpdateUsuario(){
            $sql = "CALL spUpdateUser (?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConnect() -> prepare($sql);
                $stmt -> bindParam(1, $this-> code,      PDO::PARAM_INT);
                $stmt -> bindParam(2, $this-> name,      PDO::PARAM_STR);
                $stmt -> bindParam(3, $this-> lastName,  PDO::PARAM_STR);
                $stmt -> bindParam(4, $this-> user,      PDO::PARAM_STR);
                $stmt -> bindParam(5, $this-> password,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
                
                } catch (PDOException $e) {
                echo "Error al modificar" . $e -> getMessage();
            }
        }
    }
        

?>
