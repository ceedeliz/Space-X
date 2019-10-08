<?php
ini_set('display_errors', '1');
//var_dump((int)($datos["calificacion"]))
?>

<!DOCTYPE html>
<html lang="en">

<?php include("assets/_head.php"); ?>
  <body>

    <!-- Navigation -->
<?php include("assets/_nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <br>
        <br>
        <br>
        <br>
      <!--
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Portafolio
                    <small>Nuestros proyectos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a>
                    </li>
                    <li class="active">Nuestros proyectos</li>
                </ol>
            </div>
        </div>
-->
        <!-- /.row -->

        <!-- Project One -->
        <div class="row" >
         
   <table id="sortable-theme-bootstrap" class="showcase themes sortable-theme-bootstrap"><tr><td>
        <div class="showcase-inner">
            <h1>Buscar</h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

            <table id="themeTable" class="sortable-theme-bootstrap" data-sortable>
                <thead>
                    <tr>
                        <th data-sortable="false">Nombre de misión</th>
                        <th data-sortable="false">Imagen</th>
                        <th data-sorted="true" data-sorted-direction="descending">Número de vuelo</th>
                        <th >Fecha de lanzamiento</th>
                        <th>Estado del lanzamiento</th>
                        <th>Vuelo número</th>
                    </tr>
                </thead>
                <tbody id="respawn">

                </tbody>
            </table>

        </div>
    </td></tr></table>
         </div>

        <hr>
        


        <hr>

        <!-- Footer -->
<?php include("assets/_footer.php") ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
