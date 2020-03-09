 <?php

    class DAOLogin
    {
        public function Login($user, $pass)
        {
            $conexion = new Conexion();
            $usuario = $user;
            $password = $pass;
            $sql = "SELECT * FROM usuario WHERE USU_CODIGO='$usuario' AND USU_CLAVE = '$password'";
            $conexion->buscar_query($sql);
            $validar = $conexion->ObtenerFilasAfectadas();
            if ($validar > 0) {
                return 1;
            } else {
                $sql = "SELECT * FROM usuario WHERE USU_CODIGO='$usuario'";
                $conexion->buscar_query($sql);
                $validar = $conexion->ObtenerFilasAfectadas();
                if ($validar > 0) {
                    return 2;
                } else {
                    return 3;
                }
            }
        }

        public function Dusuarios($user)
        {
            $conexion = new Conexion();
            $sql = "SELECT * FROM usuario WHERE USU_CODIGO='$user'";
            $conexion->buscar_query($sql);
            $resultdf = $conexion->obtenerResult();
            return $resultdf;
        }
    }

    ?>

