<?php  

session_start();
include "conexion.php";
		$idusuario=$_SESSION['usuario'][0]['id'];
    $nivelp=$_SESSION['nivelp'][0]['nivelp'];
     setlocale(LC_ALL,"es_MX.UTF-8");
           $fecha= date('Y-m-d');

    $sql="select count(*) as cont from padron where fecha='$fecha' and encargadoRM_idencargadoRM=$idusuario;";
       $query = $con->query($sql);
        $r=$query->fetch_array();
        $encontrado=$r["cont"];



		if(($idusuario!='') && ($nivelp==3) && ($encontrado>=1)){
		?>
    <?php
      	} 

		else{
		    print "<script>alert('Acceso restringido y/o ha registrado los acuses'); window.location='index.php';</script>";
	
		}

    
		?>

 
	
<!DOCTYPE html>
<html>
<head>
  <title> DESCARGAR PADRÓN ELECTORAL  </title>
  <link rel="icon"   type ="image/PNG" href="img/INE2.PNG">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
  .letra{
    font-size: 18px;
    text-align: left;
  }
  .let{
    font-size: 30px;
    font: italic; 
  }
  </style>
<body>

<?php include "menue.php";
$bandera=false;?> 
<div class="container">
  <h3 align="center" class="let"> </h3><br><br>
    <!-- BUSCADOR-->
 
      
        <form method="get" action="">
         <div class="form-group" style="width: 100%;">

                  <label>*</label> <label for="nombre">DESCARGUE EL PADRÓN</label>
                  <a class="form-control" href="padron/padron_2019_10_06.rar" download>
                  <CENTER><img  src="img/dowload.png" alt="descargar" width="30" height="30" ></CENTER>
                  </a>
        </div>
                 
        </form>
              
 
                  	
      </div>
  
      

  <br>   
  
  <?php include "piepagina.php"; ?>
  
  
</body>
</html>