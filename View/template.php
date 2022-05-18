<?php

include_once 'view/modulo/head.php';
include_once 'view/modulo/header.php';
include_once 'view/modulo/menu.php';


  if (isset($_GET['ruta'])) { //si la variable ruta existe
    switch ($_GET['ruta']) {
      case 'usuario':
        include_once 'view/modulo/user.php';
        break;
        case 'erase':
          include_once 'view/modulo/erase.php';
          break;
      case 'matricula':
        include_once 'view/modulo/matricula.php';
        break;      
      case 'aprendiz':
        include_once 'view/modulo/aprendiz.php';
        break; 
      default:
         include_once 'view/modulo/presentacion.php';
         break;
        }
  }else{      
  include_once 'view/modulo/presentacion.php';  
  }

  include_once 'view/modulo/footer.php'; 
?>