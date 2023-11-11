<?php
require_once "Conn.php";

class TimeSlot{
    private $id;
    private $startAt;
    private $type;
    private $teacherId;

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getStartAt(){
        return $this->startAt;
    }

    public function setStartAt(String $startAt){
        $this->startAt = $startAt;
    }

    public function getType(){
        return $this->type;
    }

    public function setType(String $type){
        $this->type = $type;
    }

    public function getTeacherId(){
        return $this->startAt;
    }

    public function setTeacherId(String $teacherId){
        $this->teacherId = $teacherId;
    }

    public function eliminar1(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "DELETE FROM timeslot WHERE id = ".$this->id;
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }

    public function eliminar2(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "DELETE FROM timeslot WHERE id = $id";
        $resultado = $conexion->exec($sql2);
        $conn->cerrar();
    
        return $resultado;
    }

    public function checkTimeSlotEsLibre(int $id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql2 = "SELECT * FROM Lesson WHERE TimeSlot_id = $id";
        $resultado = $conexion->query($sql2);
        $conn->cerrar();
    
        return $resultado;
    }
}