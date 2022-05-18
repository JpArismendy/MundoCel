<?php
    session_start();    
    class Template{
        public function getIntro(){

            if (isset($_SESSION['login']) and $_SESSION['login']== true){
//              echo "<script>Alert('ghghh')</script>"  ;
              require_once "view/template.php";
            }else{
                require_once "view/modulo/login.php";
            }
           
        }
    }

?>
