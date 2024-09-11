<?php
require_once ("model/conexion.php");
class LoginController
{
    public function login()
    {

        $con = new Conexion();
        if (!empty($_POST["doLogin"])) {

            $usuario = $_POST["LoginName"];
            $password = $_POST["LoginClave"];
            if (empty($usuario) and empty($password)) { ?>
                <div class='alert alert-danger'>los campos están vacíos</div>
                <div><?= $usuario ?></div>
                <div><?= $password ?></div>
            <?php
            } else {
                

                $sql = $con->conexion()->query("select * from user where user_name ='$usuario' and user_pass='$password'");
                if ($data = $sql->fetch_object()) {

                    header("Location:view/inicio.php");
                    
                } else {?>
                   <div class='alert alert-danger' role='alert'>usuario y/o contraseña no coinciden</div>
                <?php }
            }
            
        }

    }
}
