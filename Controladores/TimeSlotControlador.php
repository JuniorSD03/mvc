<?php
require_once("Clases/TimeSlot.php");

class TimeSlotControlador{
    public function eliminarConPOO(int $id){
        $timeslot = new TimeSlot();
        $timeslot->setId($id);
        $resultado = $timeslot->eliminar1();
        if($resultado!=0){
            return "TimeSlot eliminado";
        }
    }

    public function eliminarSinPOO(int $id){
        $timeslot = new TimeSlot();
        $resultado = $timeslot->eliminar2($id);
        if($resultado!=0){
            return "TimeSlot eliminado";
        }
    }

    public function checkTSlibre($id){
        $timeslot = new TimeSlot();
        $resultado = $timeslot->checkTimeSlotEsLibre($id);
        
        $respuesta = true;
        $indice = 0;
        foreach($resultado as $ts){
             $indice++;
        }
        if($indice!=0){
            $respuesta = false;
        }
        return $respuesta;
    }
}