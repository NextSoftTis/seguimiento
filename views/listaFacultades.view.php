<?php include('views/global/header.view.php')?>


<div class="container nt-menu-titulo">
        <div class="row">

            <div class="col-sm-4">
                <img src="images/logo2.png" class="img-responsive">
            </div>

            <div class="col-sm-4">
                <h4 class="titulo"><strong>Sistema de Seguimiento y Nombramiento Docente</strong></h4>
            </div>

            <div class="col-sm-4">

                <form action="./espacioSecretaria.php" class="navbar-form navbar-right" >
                <p style="color: white">
                    <i class="fax" aria-hidden="true"></i>
                </p>
                <input type="submit" style="margin-top:15px" class="btn btn-success" name="" value="atras">
                </form>

            </div>

        </div>
    </div>

<style type="text/css">
.fax {
     height: 15px;
}
* {
    border: 0px;
    padding: 0px;
}

body {
    background-color: #F5F5F5; 
}

div.nt-menu-titulo {
    background-color: #3949AB;
    border-bottom: 1px solid #BDBDBD;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);
    width: 100%;
}

img {
    margin-left: 50px;
    width: 60px;
}

div.nt-menu-titulo div.row div.col-sm-4 h4.titulo {
    font-family: verdana, arial, helvetica, sans-serif;
    margin-top: 25px;
    text-align: center;
    color: white;
}
</style>

 <div class="container nt-plantel-doc ">
    <div class="container col-md-12 table table-hover">
    <table class="table table-hover" id="tablaDocente">
      <LEGEND> <strong>LISTA DE FACULTADES</strong></LEGEND>
        
      <tbody>
      <tr>
          <td><strong>CODIGO </strong></td>
          <td><strong>NOMBRE FACULTAD</strong></td>

      </tr>
        <?php foreach ($facultades as $facultad):?>

            <tr>
              <td class="idFacultad"><?php echo $facultad['ID_FACULTAD'] ?></td>
              <td><?php echo $facultad['NOMBRE_FACULTAD'] ?></td>
              <td><a href="modificarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" >modificar</a></td>
              <td><a href="eliminarDocente.php?id=<?php echo $docente['ID_DOCENTE'] ?>" class="eliminar">eliminar</a></td>
            </tr>
        <?php endforeach;?>
      </tbody>
      </table>
      </div>
      <br><br>
  </div>    
<div id='respuesta'></div>