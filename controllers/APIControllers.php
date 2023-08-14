<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIControllers{
    public static function index(){
        $servicios = Servicio::all();
        echo json_encode($servicios);
        
    }

    public static function guardar(){
        
        //Guarda la cita y devuelve el id
        $cita= new Cita($_POST);
        $resultado=$cita->guardar();

        $id=$resultado['id'];

        //Guarda la cita y los servicios
        $idServicios=explode(",", $_POST['servicios']);//Para separar el arreglo de servicios
        
        //Guarda e l id de los servicios
        foreach($idServicios as $idServicio){
            $args=[
                'servicioId'=>$idServicio,
                'citaId'=>$id
            ];

            $citaservicio= new CitaServicio($args);
            $citaservicio->guardar();
        }

        //Genera una respuesta
        $respuesta=[
            'resultado'=>$resultado
        ];

        echo json_encode($respuesta);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id=$_POST['id'];
            $cita=Cita::find($id);
            $cita->eliminar();
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
}