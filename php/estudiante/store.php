<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startups_errors', 1);
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $idCurso = $_REQUEST['idCurso'];
    
    echo "store";
    $registro = $object->insertar($nombre,$apellido,$idCurso);

     header('location: index.php');
?>