<?php
class Query extends Conexion
{

    private $con, $pdo;

    public function __construct()
    {
        $this->con = new Conexion();
        $this->pdo = $this->con->conectar();
    }
    //RECUPERAR UN SOLO REGISTRO
    public function select($sql)
    {
        $resul = $this->pdo->prepare($sql);
        $resul->execute();
        return $resul->fetch(PDO::FETCH_ASSOC);
    }
    //RECUPERAR TODOS LOS REGISTRO
    public function selectAll($sql)
    {
        // echo $sql;
        $resul = $this->pdo->prepare($sql);
        $resul->execute();
        return $resul->fetchAll(PDO::FETCH_ASSOC);
    }
    //REGISTRAR
    public function insert($sql, $array)
    {
        $resul = $this->pdo->prepare($sql);
        $data = $resul->execute($array);
        if ($data) {
            $res = $this-> pdo -> lastInsertId();
        }else{
            $res = 0;
        }
        return $res;
    }
    //MODIFICAR, ELIMINAR
    public function save($sql, $array)
    {
        $resul = $this->pdo->prepare($sql);
        $data = $resul->execute($array);
        if ($data) {
            $res = 1 ;
        }else{
            $res = 0;
        }
        return $res;
    }
}

?>