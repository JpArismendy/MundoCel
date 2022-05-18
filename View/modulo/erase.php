    <?php
    eraseUser();
        function eraseUser(){
        try {
            $objDtoUser = new User();
            $objDtoUser -> setCode($_GET['codigo']);
            $objDaoUser = new UserModel($objDtoUser);
            if ($objDaoUser -> mlderaseUser() == true){
            echo "<script>
            Swal.fire(
                'Borrado!',
                'El registro ha sido borrado :)',
                'success'
                )
                </script>";
                include_once 'view/modulo/user.php';

                    }
                } catch (PDOException $e) {
                        echo "error en el borrado" . $e -> getMessage();
                }
            }
    ?>        