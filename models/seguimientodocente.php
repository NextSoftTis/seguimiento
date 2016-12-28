<?php

class seguimientodocente_model
{
    private $db;
    private $arDocentes;
    private $arregloDocentesRoles;
    private $arregloMateria;
    private $arregloGrupo;
    private $arregloHorarioMateria;
    private $arregloCarrera;
    private $arregloDocente;
    private $arregloFacultad;
    private $arregloIdMateria;

    public function __construct()
    {
        $this->db = db::conexion();
        $this->arDocentes = array();
        $this->arregloDocentesRoles = array();

        $this->arregloMateria = array();
        $this->arregloGrupo = array();
        $this->arregloHorarioMateria = array();

        $this->arregloCarrera = array();

        $this->arregloDocente = array();
        $this->arregloFacultad = array();
        $this->arregloIdMateria = array();
    }

    function console_log($data)
    {
        echo '<script>';
        echo 'console.log(' . json_encode($data) . ')';
        echo '</script>';
    }

//    public function get_docentes()
//    {
//        $consulta = $this->db->query("select * from docente;");
//        //$ID_DOC = GET[];
//        // $consulta = $this->db->query("select * from DOCENTE where ID_DOCENTE=$ID_DOC");
//        while ($filas = $consulta->fetch_assoc()) {
//            $this->arDocentes[] = $filas;
//        }
//        return $this->arDocentes;
//    }
//
//    public function get_docente_rol()
//    {
//        $consulta_sql = "select * from docente d join rol r on d.ID_ROL=r.ID_ROL";
//        $consulta = $this->db->query($consulta_sql);
//        while ($filas = $consulta->fetch_assoc()) {
//            $this->arregloDocentesRoles[] = $filas;
//        }
//        return $this->arregloDocentesRoles;
//    }
//
//    public function get_materia()
//    {
//        $consulta = $this->db->query("select * from MATERIA;");
//        while ($filas = $consulta->fetch_assoc()) {
//            $this->arregloMateria[] = $filas;
//        }
//        return $this->arregloMateria;
//    }

//docente
    public function get_docente($ID_DOC)
    {
        $this->console_log($ID_DOC);
        $consulta_sql = "select * from DOCENTE where ID_DOCENTE=$ID_DOC";
        $consulta = $this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloDocente[] = $filas;
        }
        return $this->arregloDocente;

    }

    public function get_facultad()
    {
        $consulta_sql = "select * from FACULTAD";
        $consulta = $this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloFacultad[] = $filas;
        }
        return $this->arregloFacultad;
    }
    public function get_carrera()
    {
        $consulta_sql = "select * from CARRERA";
        $consulta = $this->db->query($consulta_sql);
        while ($filas = $consulta->fetch_assoc()) {
            $this->arregloCarrera[] = $filas;
        }
        return $this->arregloCarrera;
    }


//materia
public function get_materia()
{
    $consulta_sql = "select * from DOCENTE LEFT JOIN DOC_MATERIA ON DOC_MATERIA.ID_DOCENTE = DOCENTE.ID_DOCENTE LEFT JOIN MATERIA ON DOC_MATERIA.ID_MATERIA = MATERIA.ID_MATERIA";
    $consulta = $this->db->query($consulta_sql);
    while ($filas = $consulta->fetch_assoc()) {
        $this->arregloMateria[] = $filas;
    }
    return $this->arregloMateria;
}


//    public function get_materia()
//    {
//        $consulta_sql = "select * from MATERIA LEFT JOIN DOC_MATERIA ON DOC_MATERIA.ID_MATERIA = MATERIA.ID_MATERIA LEFT JOIN DOCENTE ON DOC_MATERIA.ID_DOCENTE = DOCENTE.ID_DOCENTE";
//        $consulta = $this->db->query($consulta_sql);
//        while ($filas = $consulta->fetch_assoc()) {
//            $this->arregloMateria[] = $filas;
//        }
//        return $this->arregloMateria;
//    }
//materia

//    public function get_grupo($ID_DOC)
//    {
//        $consulta_sql = "select * from GRUPO where ID_DOCENTE=$ID_DOC";
//        $consulta = $this->db->query($consulta_sql);
//        while ($filas = $consulta->fetch_assoc()) {
//            $this->arregloGrupo[] = $filas;
//        }
//        return $this->arregloGrupo;
//    }



////materia

//    public function get_materias($ID_DOC)
//    {
//        $consulta_sql1 = "select ID_MATERIA from doc_materia  where ID_DOCENTE=" . $ID_DOC;
//        $consulta1 = $this->db->query($consulta_sql1);
//        while ($filas1 = $consulta1->fetch_assoc()) {
//            $this->arregloIdMateria[] = $filas1;
//        }
//        $ids = $this->arregloIdMateria;
//
//        foreach ($ids as $id) {
//            $this->console_log($id);
//            $consulta_sql = "select * from materia  where ID_MATERIA=" . $id{"ID_MATERIA"};
//            $this->console_log($consulta_sql);
//            $consulta = $this->db->query($consulta_sql);
//            $this->console_log($consulta->fetch_assoc());
//            while ($filas = $consulta->fetch_assoc()) {
//                $this->arregloMateria[] = $filas;
//            }
//        }
//        return $this->arregloMateria;
//    }
}
?>
