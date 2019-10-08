<?php
include ("conexion.php");
ini_set('display_errors', '1');
//var_dump((int)($datos["calificacion"]))
?>

<!DOCTYPE html>
<html lang="en">
<?php include("assets/_head.php") ?>
<body>
    <?php include("assets/_nav.php") ?>

    <div class="container">
      <div class="row internas">
        <?php

            if (isset($_GET['id_post'])) {
            $post=$_GET['id_post'];
            $sql="SELECT * FROM posts inner join users on posts.id_users=users.id_users where id_posts= $post";
            $res=ejecutar($sql);
            $datos = mysqli_fetch_array($res);
        }
        ?>
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo($datos["titulo"])?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a>
                    </li>
                    <li class="active"><?php echo($datos["titulo"])?></li>
                </ol>
            </div>
        </div>
        <div class="row internas">
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <?php if($datos["img1"] != null) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <?php } ?>
                        <?php if($datos["img2"] != null) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <?php } ?>
                        <?php if($datos["img3"] != null) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <?php } ?>
                        <?php if($datos["img4"] != null) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <?php } ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="img/<?php echo($datos["foto_principal"])?>" alt="">
                        </div>
                        <?php if($datos["img1"] != null) { ?>
                        <div class="item">
                            <img  src="img/<?php echo($datos["img1"]); ?>" > 
                        </div> 
                        <?php } ?>
                        <?php if($datos["img2"] != null) { ?>
                        <div class="item">
                            <img  src="img/<?php echo($datos["img2"]); ?>" > 
                        </div> 
                        <?php } ?>
                        <?php if($datos["img3"] != null) { ?>
                        <div class="item">
                            <img  src="img/<?php echo($datos["img3"]); ?>" > 
                        </div> 
                        <?php } ?>
                        <?php if($datos["img4"] != null) { ?>
                        <div class="item">
                            <img  src="img/<?php echo($datos["img4"]); ?>" > 
                        </div> 
                        <?php } ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
     
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="col-md-4">
        <?php echo $datos["resena"]; ?>
        <?php
           if (isset($datos['doc'])) {
        ?>
            <a href="files/<?php echo ($datos["doc"]) ?>" class="doc-file"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Descargar adjunto</a>
        <?php
           }    
        ?>
        </div>

      </div>
        <hr>
         <?php include("assets/_footer.php") ?>
      </div>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    </body>
</html>