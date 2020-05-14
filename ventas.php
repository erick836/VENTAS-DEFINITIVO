<!DOCTYPE html>
    <head>
	 <link rel="stylesheet" type="text/css" href="Estilos.css" />
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <title>VENTAS</title>
	</head>
	<body>
	  
	    <div align="center" id="VENTAS">
		  <h1>VENTAS</h1>
	    </div>
		<div align="right">
            <a href="index.html">SALIR</a>
        </div>
		<?php
            if(isset($_GET['producto']))
            {
                include('Conexion.php');
                $con = new Conexion();
                $producto=$_GET['producto'];
                $precio=$_GET['precio'];

                $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
                $consulta=$con->query($query);
                $con->close();
                ?>
                  <table align="center" border=1>
                    <tr>
                        <td>
                            <p>Producto</p>
                        </td>
                        <td>
                            <p>Precio</p>
                        </td>
                    </tr>
                    <?php 
                         $con = new Conexion();
                         $query="SELECT * FROM `carrito` WHERE 1;";
                         $pro=$con->query($query);
                         $con->close();
                        
                         while($row=mysqli_fetch_assoc($pro))
                         {
                            echo 
							"
                                <tr>
                                    <td>
                                        <p>".$row['producto']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['precio']."</p>
                                    </td>
                                </tr>
                            ";
                         }
                    ?>
                  </table>
                <?php                   
            }
        ?>
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" align="center">         
          <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="imagenes/Spider-Man.png" class="d-block w-25">
               <div class="text-white">
                 <h5>SPIDER-MAN</h5>
                 <p>Q600</p>
				 <p><a href="?producto=SPIDEY&precio=600">COMPRAR</a></p>
               </div>
             </div>
             <div class="carousel-item">
               <img src="imagenes/God.jpg" class="d-block w-25">
                 <div class="text-white">
                   <h5>GOD OF WAR</h5>
				   <p>Q250</p>
                   <p><a href="?producto=GOD&precio=250">COMPRAR</a></p>
                 </div>
             </div>
          <div class="carousel-item">
            <img src="imagenes/Red.jpg" class="d-block w-25">
            <div class="text-white">
              <h5>RED DEAD REDEMPTION</h5>
              <p>Q450</p>
			  <p><a href="?producto=RED&precio=450">COMPRAR</a></p>
            </div>
          </div>
		  <div class="carousel-item">
            <img src="imagenes/Rock.jpg" class="d-block w-25">
            <div class="text-white">
              <h5>ROCKET LEAGUE</h5>
              <p>Q150</p>
			  <p><a href="?producto=ROCKET&precio=150">COMPRAR</a></p>
            </div>
          </div>
		  <div class="carousel-item">
            <img src="imagenes/Mine.png" class="d-block w-25">
            <div class="text-white">
              <h5>MINECRAFT</h5>
              <p>Q250</p>
			  <p><a href="?producto=MINE&precio=250">COMPRAR</a></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>