<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="View/css/login.css">
  <link rel="stylesheet" href="View/css/sweetalert2.min.css">
  <script src = "View/js/sweetalert2.all.min.js"></script>
  <title>login</title>
</head>
<body>
<div id="login-button">
    <img src="View/img/cabbalo.jpg">
    </img>
  </div>
  <div id="container">
    <h1>Log In</h1>
    <span class="close-btn">
      <img src="View/img/cabbalo.jpg"></img>
    </span>
    
    <form method="post">
      <input type="text" name="textUser" placeholder="User">
      <input type="password" name="pass" placeholder="Password">
      <input type="submit" value="Log in">
  </form>
    <?php
      if (isset($_POST['textUser'])){
        $user = $_POST['textUser'];
        $pass = $_POST['pass'];

        try {

          $objController = new UserController();
          $objController -> getVerifyPass($user, $pass);
          
        } catch (Exception $e) {
          
        }

      }
    ?>
  </div>
  
  <!-- Forgotten Password Container -->
  <div id="forgotten-container">
     <h1>Forgotten</h1>
    <span class="close-btn">
      <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
    </span>
  
    <form>
      <input type="email" name="email" placeholder="E-mail">
      <a href="#" class="orange-btn">Get new password</a>
  </form>
</div>
  <script src = "View/js/jquery-3.6.0.min.js"></script>

  <script src = "View/js/login.js"></script>
  
</body>
</html>