<?php session_start();


if (isset($_SESSION['usuario'])) {
    require_once("db/db.php");
//Llamada al modelo
    require_once("models/seguimientodocente.php");
    //cargado el modelo
    $seguimientoDocente = new seguimientodocente_model();
    //$seguimientoFacultad=new seguimientofacultad_model();

    $ID_DOC = $_GET['ID_DOCENTE'];
    echo $ID_DOC;
    $arregloDocentes = $seguimientoDocente->get_docente($ID_DOC);
    $arregloFacultad = $seguimientoDocente->get_facultad();
    $arregloCarrera = $seguimientoDocente->get_carrera();

    $arregloMateria = $seguimientoDocente->get_materia();
    //$arregloGrupo = $seguimientoDocente->get_grupo();





    //$arregloDocentesRoles = $seguimientoDocente->get_docente_rol();

//    $arregloMateria = $seguimientoDocente->get_materias($ID_DOC);
//    $arregloGrupo = $seguimientoDocente->get_grupo();
//    $arregloHorarioMateria = $seguimientoDocente->get_horario_materia();
//    $arregloFacultad = $seguimientoDocente->get_facultad();
//    $arregloCarrera = $seguimientoDocente->get_carrera();


//Llamada a la vista
    require_once("views/rptSegumientoDocente.view.php");


} else {
    header('Location: login.php');
} ?>

<!--if (isset($_SESSION['usuario'])){-->
<!--    require 'views/seguimiento.view.php';-->
<!--} else {-->
<!--    header('Location: login.php');-->
<!--}-->

