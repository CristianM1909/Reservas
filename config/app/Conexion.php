<?php
class Conexion{
    private $conect;
    public function __construct(){
        $pdo = "mysql:host=" . HOST . ";dbname=" . DATABASE . ";" . CHARSET;
        try {
            $this->conect = new PDO($pdo, USER, PASS);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'CONECTAMOS PAPA LINDO'; //PARA MOSTRAR SI HAY CONEXION
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage(); //PARA MOSTRAR SI NO SE CONECTO A LA BASE DE DATOS
            //throw $th;
        }

}
public function conectar(){
    return $this->conect;
}
}


?>