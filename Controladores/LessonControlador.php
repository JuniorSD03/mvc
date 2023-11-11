<?php
require_once("Clases/Lesson.php");
require_once("Controladores/TimeSlotControlador.php");

class LessonControlador{
    public function guardar(int $ts_id, int $student_id){
        $tsc = new TimeSlotControlador();
        if($tsc->checkTSlibre($ts_id)){
            $lesson = new Lesson();
            $number = rand(1,100);
            $resultado = $lesson->guardar($number, $student_id, $ts_id);
            if($resultado!=0){
                return "Lesson creada";
            }
        }else{
            return "TimeSlot ocupado";
        }
    }
}
