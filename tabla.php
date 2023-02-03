<?php
include_once "./conexion.php";
class tabla extends conexion{
    public $tipo;
    public $nombre;
    public $apellido;
    public $email;
    public $pas;
public function create(){
    $this->conectar();
    $add = mysqli_preapare($this->con,"INSERT INTO userList(tipo,nombre,apellido,email,pas) VALUES(?,?,?,?,?)");
    $add->bind_param("sssss",$this->tipo,$this->nombre,$this->apellido,$this->email,$this->pas);
    $add->execute();
    $bool=$pre->get_result();

}
}