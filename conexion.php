<!DOCTYPE html>
<html lang="en">
<head>
    <title>Conexion</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        class conexion extends PDO
        {
            private $tipo_de_base="mysql";
            private $host="localhost";
            private $nombre_de_base="appweb";
            private $usuario="root";
            private $contrasena="";

            public function __construct()
            {
                try
                {
                    parent::__construct($this->tipo_de_base.":host=".$this->host.";dbname=".$this->nombre_de_la_base,$this->usuario,$this->contrasena);
                }  
                catch (PDOException $e)
                {
                    echo "ha surgido un error y no se puede conectar a la B.D. Detalle: ".$e->getMessage();

                }
            }
        }
    ?>
</body>
</html>