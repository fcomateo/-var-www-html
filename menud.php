<?php include "conexion.php";?><head>
<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/menuestilo.css">-->
</head>

<style>
.dropdown a{color:#FFFFFF;}
.navbar li:hover { background:#FFFFFF;}
.blanco{color:#ffffff !important;}
.blanco:hover{color:#b22c91 !important;}
 </style>
<nav class="navbar navbar-default navbar-static-top">
      <div class="container" style="padding:0; margin:0; width:100%; background:#b22c91;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        </div>
<div id="navbar" class="navbar-collapse collapse" >
  
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
                </ul>


         <ul class="nav navbar-nav">
          <li> <CENTER><a href="https://www.ine.mx/"> <img src="img/INE.png" style="max-width:70%;width:auto;height:50PX;"> </a></CENTER> </li>

            </ul>



          <ul class="nav navbar-nav">
            <li class="dropdown" style="font-size:13px;">
            <a href="#" class="dropdown-toggle blanco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">   <span class="glyphicon glyphicon-refresh"> </span>&nbsp;ACTUALIZAR CAMPAÑA <span class="caret"> </span></a>  
              <ul class="dropdown-menu" >
                 <li><a href="neleccion.php"> Nueva Campaña </a></li>
                 
          </li>
          </ul>

                </ul>

             <!--<ul class="nav navbar-nav">
            <li class="dropdown" style="font-size:13px;">
            <a href="#" class="dropdown-toggle blanco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">   <span class="glyphicon glyphicon-eye-close"> </span>&nbsp;ACOMULADOS <span class="caret"> </span></a>  
              <ul class="dropdown-menu" >
                 <li><a href="acomulados.php">Acomulados </a></li>
                 
          </li>
          </ul>

                </ul>-->

            <ul class="nav navbar-nav">
            <li class="dropdown" style="font-size:13px;">
            <a href="#" class="dropdown-toggle blanco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">   <span class="glyphicon glyphicon-check"> </span>&nbsp;REPORTES <span class="caret"> </span></a>  
              <ul class="dropdown-menu" >
                 <li><a href="siirfesemanalF.php"> SIIRFE Semanal  </a></li>
                 <li><a href="dpadron.php"> Descarga del Padrón </a></li>
                 
          </li>
          </ul>

                </ul>

            <ul class="nav navbar-nav">
            <li class="dropdown" style="font-size:13px;">
            <a href="#" class="dropdown-toggle blanco" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">   <span class="glyphicon glyphicon-folder-open"> </span>&nbsp; CATALOGOS AUXILIARES <span class="caret"> </span></a>  
              <ul class="dropdown-menu" >
                 <li><a href="usuarios.php"> Personal </a></li>
                 <li><a href="usuarios2.php"> Asignar  Personal-Distritos </a></li>
                 <li><a href="distritos.php"> Distritos </a></li>
                 <li><a href="Modulosl.php"> Módulos </a></li>
                 <li><a href="remesas.php"> Remesas </a></li>
                 <li><a href="incidenciasl.php"> Incidencias </a></li>
                 <li><a href="grado.php"> Grado de Estudios </a></li>
                                  
          </li>
          </ul>
                </ul>



         <ul class="nav navbar-nav">
            <li class="dropdown" style="font-size:13px;">
            <li style="font-size:13px;"><a href="cerrar_sesion.php" class="blanco"><span class="glyphicon glyphicon-log-out"> </span>&nbsp;CERRAR SESIÓN</a></li>
    
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
          </ul>
                </ul>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- ventana de login -->

<div style="border:1px solid #000000; width:auto; background:#b22c91; color:#FFFFFF; padding:10px; position:absolute;">
Bienvenido: <?php  $id=$_SESSION['grado_idgrado'][0]['grado_idgrado'];
$sql="select * from  grado where idgrado=$id";
          $query = $con->query($sql);
          $r=$query->fetch_array();
        echo $grado=$r["grado"];



  ?> . <?php print $_SESSION['nombre'][0]['nombre']; ?> <?php print $_SESSION['apaterno'][0]['apaterno']; ?> <?php print $_SESSION['amaterno'][0]['amaterno']; ?>

</div>
<br /><br /><br />