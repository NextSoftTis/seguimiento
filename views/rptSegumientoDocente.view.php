<?php include("views/global/header.view.php") ?>

<?php include('views/global/title.view.php') ?>


    <div class="main">
        <div class="container">


            <script src="estilos/js/jQuery.print.js"></script>

            <button type="button" onclick="$.print('#contenido');" class="btn btn-primary">imprimir</button>
            <div id="contenido">
                <div class="row">
                    <div class="col-md-3 text-left">
                        <h5>UNIVERSIDAD MAYOR DE SAN SIMÓN</h5>
                        <h4>VICERECTORADO</h4>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>SEGUIMIENTO ACADEMICO DOCENTE </h3>  <!--&nbsp;I-2015-->
                    </div>
                    <div class="col-md-3 text-right">
                        <h4> D.P.A.- D.I.S.U.</h4>
                        <h6>Periodo Académico</h6>
                    </div>
                </div>
                <div class="row">
                    <table class="table ">
                        <tbody>
                        <?php
                        foreach ($arregloDocentes as $Docente){?>

                        <tr>
                            <td rowspan="2" width="10%"><h6>DOCENTE</h6></td>
                            <td class="text-center"><h6><?=$Docente['NOMBRE_DOC']?></h6></td>
                            <td class="text-center"><h6><?=$Docente['APELLPATERNO_DOC']?></h6></td>
                            <td class="text-center"><h6><?=$Docente['APELLMATERNO_DOC']?></h6></td>
                            <td class="text-center"><h6></h6></td>
                            <td rowspan="2"><h6><b>CI</b></h6></td>
                            <td><h6><?=$Docente['CI_DOCENTE']?> <?= $Docente['CIEXPEDIDO_DOC']?></h6></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td class="text-center"><h6><b>NOMBRE(S)</b></h6></td>
                            <td class="text-center"><h6><b>AP. PATERNO</b></h6></td>
                            <td class="text-center"><h6><b>AP. MATERNO</b></h6></td>
                            <td class="text-center"><h6><b>AP. ESPOSO</b></h6></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th width="30%">FACULTAD</th>
                            <th></th>
                            <th width="10%">CARRERA</th>
                            <th></th>
                            <th width="20%">DEPARTAMENTO</th>
                            <th></th>
                            <th width="30%">MATERIAS</th>
                            <th width="20%">SIGLA</th>
                            <th width="10%">H.Teor.</th>
                            <th width="10%">H.Prac.</th>
                            <th width="5%">Anual</th>
                            <th width="5%">Semestral</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.-</td>
                            <td width="30%" height="5"><h6>CIENCIAS Y TECNOLOGIA</h6></td>
                            <td>1.-</td>
                            <td width="10%" height="5"><h6>INF-SIS</h6></td>
                            <td>1.-</td>
                            <td width="20%" height="2"><h6>INFORMATICA-SISTEMAS</h6></td>
                            <td>1.-</td>
                            <td width="30%" height="2"><h6>MATEMATICA COMPUTACIONAL II</h6></td>
                            <th width="20%" height="2"><h6>2008214</h6>
                            </td>
                            <th width="5%" height="2"><h6>0</h6>
                            </td>
                            <th width="5%" height="2"><h6>0</h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        <tr>
                            <td>2.-</td>
                            <td width="30%" height="5"><h6>CIENCIAS Y TECNOLOGIA</h6></td>
                            <td>2.-</td>
                            <td width="10%" height="5"><h6>INF-SIS</h6></td>
                            <td>2.-</td>
                            <td width="20%" height="2"><h6>INFORMATICA-SISTEMAS</h6></td>
                            <td>2.-</td>
                            <td width="40%" height="2"><h6>BASE DE DATOS DISTRIBUIDAS</h6></td>
                            <td width="20%" height="2"><h6>155555</h6></td>
                            <th width="5%" height="2"><h6>0</h6>
                            </td>
                            <th width="5%" height="2"><h6>0</h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox" checked></td>
                        </tr>
                        <tr>
                            <td>3.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>3.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>3.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>3.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>4.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>4.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>4.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>4.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>5.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>5.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>5.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>5.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>6.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>6.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>6.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>6.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>7.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>7.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>7.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>7.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>8.-</td>
                            <td width="30%"><h6></h6></td>
                            <td>8.-</td>
                            <td width="10%"><h6></h6></td>
                            <td>8.-</td>
                            <td width="20%"><h6></h6></td>
                            <td>8.-</td>
                            <td width="40%"><h6></h6></td>
                            <td><h6></h6></td>
                            <th width="5%"><h6></h6>
                            </td>
                            <th width="5%"><h6></h6>
                            </td>
                            <td><input type="checkbox"></td>
                            <td><input type="checkbox"></td>
                        </tr>
                        </tbody>

                    </table>

                </div>


                <div class="row">
                    <table>
                        <tbody>
                        <tr>
                            <td width="21%"><b>CATEGORIA DOCENTE</b></td>
                            <td>A(Catedrático)</td>
                            <td width="3%"><input type="checkbox"></td>
                            <td>B(Adjunto)</td>
                            <td width="3%"><input type="checkbox"></td>
                            <td>C(Asistente)</td>
                            <td width="3%"><input type="checkbox"></td>
                            <td>Auxiliar Docencia</td>
                            <td width="3%"><input type="checkbox"></td>
                            <td>Otro cargo UMSS</td>
                            <td>___________</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th rowspan="2" class="text-center" width="3%">HORAS</th>
                            <th colspan="5" class="text-center" width="10%">LUNES</th>
                            <th colspan="5" class="text-center" width="10%">MARTES</th>
                            <th colspan="5" class="text-center" width="10%">MIERCOLES</th>
                            <th colspan="5" class="text-center" width="10%">JUEVES</th>
                            <th colspan="5" class="text-center" width="10%">VIERNES</th>
                            <th colspan="5" class="text-center" width="10%">SÁBADO</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                            <td class="text-center" width="3%">Materia</td>
                            <td class="text-center" width="3%">GR</td>
                            <td class="text-center" width="3%">TP</td>
                            <td class="text-center" width="3%">AL</td>
                            <td class="text-center" width="3%">AU</td>
                        </tr>
                        <tr>
                            <td>06:45-07:30</td>
                            <?php for ($i=0;$i<30;$i++){ ?>
                                <td class="text-center" width="3%"></td>
                            <?php } ?>

                        </tr>
                        <tr>
                            <td>07:30-08:15</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>08:15-09:00</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>09:00-09:45</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>09:45-10:30</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>10:30-11:15</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>11:15-12:00</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>12:00-12:45</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>12:45-13:30</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>13:30-14:15</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>14:15-15:00</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>15:00-15:45</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>15:45-16:30</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>16:30-17:15</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>17:15-18:00</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>18:00-18:45</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>18:45-19:30</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>19:30-20:15</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>20:15-21:00</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        <tr>
                            <td>21:00-21:45</td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                            <td class="text-center" width="3%"></td>
                        </tr>
                        </tbody>

                    </table>
                </div>

                <div class="row">
                    <table>
                      <tbody>
                        <tr>
                            <td width="3%">Hrs. Teoria</td>
                            <td width="3%">Hrs. Práctica</td>
                            <td width="3%">Hrs. Producción</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="3%">RESUMEN</td>
                         </tr>
                        <tr>
                            <td width="3%">Hrs. de Investigación</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="3%">Hrs. de Servicio Acad.</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="10%">TOTAL HORAS/SEMANA TRABAJADAS</td>
                        </tr>
                        <tr>
                            <td width="3%">Hrs. Extensión</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="3%">Hrs. de Producc. Acad.</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="10%">TOTAL HORAS/MES TRABAJADAS</td>
                        </tr>
                        <tr>
                            <td width="3%">Hrs. Servicio</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="3%">Hrs.Administ.Acad.</td>
                            <td width="3%">R.C.F.Nº</td>
                            <td width="10%">TOTAL HORAS AUTORIZADAS</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="10%">TIEMPO PARCIAL</td>
                        </tr>
                        <tr>
                            <td>Observaciones</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="10%">DEDICACION EXCLUSIVA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    <h1>&nbsp;</h1>

                </div>

                <div>
                    <table>

                        <tbody>
                            <tr>

                                <td class="text-center" width="300px"><hr/>Firma del Docente</td>
                                <td width="10px"></td>
                                <td class="text-center" width="300px"><hr/>Firma del Jefe de Dpto. o Carrera</td>
                                <td width="10px"></td>
                                <td class="text-center" width="300px"><hr/>Firma Director Académicoa</td>
                                <td width="10px"></td>
                                <td class="text-center" width="300px"><hr/>Firma Decano</td>
                                <td width="10px"></td>
                                <td class="text-center" width="300px"><hr/>Vo.Bo.Dpto.Personal</td>

                            </tr>
                        </tbody>
                    </table>
                </div>


<!--                <td rowspan="2" width="10%"><h6>FACULTAD</h6></td>-->
<!---->
<!--                <ul>-->
<!--                    --><?php
//                    foreach ($arregloDocente as $Docente) { ?>
<!--                        <li> --><?//= $Docente['NOMBRE_DOC'] ?><!--</li>-->
<!--                        <li> --><?//= $Docente['APELLPATERNO_DOC'] ?><!--</li>-->
<!---->
<!--                    --><?php //} ?>
<!--                </ul>-->
<!--                <ul>-->
<!--                    --><?php
//                    foreach ($arregloMateria as $Materia) { ?>
<!--                        <li> --><?//= $Materia['NOM_MATE'] ?><!--</li>-->
<!--                        <li> --><?//= $Materia['APELLPA_DOC'] ?><!--</li>-->
<!---->
<!--                    --><?php //} ?>
<!--                </ul>-->
<!---->
<!---->
<!--                <ul>-->
<!--                    --><?php
//                    foreach ($arregloHorario as $Horario) { ?>
<!--                        <li> --><?//= $Horario['NOMBRE_DOC'] ?><!--</li>-->
<!--                        <li> --><?//= $horario['APELLPA_DOC'] ?><!--</li>-->
<!---->
<!--                    --><?php //} ?>
                </ul>

            </div>
        </div>
    </div>

<?php include('views/global/footer.view.php') ?>