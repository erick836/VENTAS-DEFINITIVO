<!DOCTYPE html>
    <head>
	 <link rel="stylesheet" type="text/css" href="estilos.css" />
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <title>VENTAS</title>
	</head>
	<body>
	  
	    <div align="center" id="VENTAS">
		  <h1>VENTAS</h1>
	    </div>
		<div>
		   <div align="right">
			   <button type="button" class="btn btn-light">
				   <a href="datos.php">FINALIZAR COMPRA</a>
			   </button> 
		   </div>
		   <div class="text-white">
		   <?php
				if(isset($_GET['producto']))
				{
				   include('Conexion.php');
				   $con=new Conexion();
				   $producto=$_GET['producto'];
				   $precio=$_GET['precio'];				   
				   $query="INSERT INTO `carrito`(`producto`, `precio`) VALUES ('$producto','$precio');";
				   $consulta=$con->query($query);
				   $con->close();				  
				?>	
				  <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					  <div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  CARRITO
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						   <?php
							 $con=new Conexion();
						     $query="SELECT * FROM `carrito` WHERE 1;";
							 $pro=$con->query($query);
							 $con->close();	
							 $total=0;
							 while($row=mysqli_fetch_assoc($pro))
							 {							   							   
							   echo "
								  <p>".$row['producto']." --- ".$row['precio']."</p>								  
							   ";
							   $total=($total+$row['precio']);
							   ?>
							     <div class="dropdown-divider"></div>								 
							   <?php							     
							 } 
							 ?>
							   <p>TOTAL=<?php echo $total; ?> </p>
							   <div class="dropdown-divider"></div>
							 <?php
						   ?> 	
						</div>
					  </div>  
				  </div>
				<?php
				}       
           ?>
		</div>      
    </div>		
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" align="center">         
          <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="imagenes/Spider-Man.png" class="d-block w-25">
			   <div class="text-black">
			         <h5>
					    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Spidey">
						  SPIDER-MAN
						  Q600					 
						</button>
						<div class="modal fade" id="Spidey" tabindex="-1" role="dialog" aria-labelledby="Spidey" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="Spidey">SPIDER-MAN</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								Es un videojuego de accion y aventuras con un estilo jugable de mundo abierto, que permite al jugador desplazarse de un lugar a otro con total libertad de movimientos y que tiene por escenario donde de desarrolla la historia, la ciudad de Nueva York.
							  </div>							  
							</div>
						  </div>
						</div>  
				     </h5>	 
			   </div>		  
               <button type="button" class="btn btn-light">
			     <p><a href="?producto=SPIDER&precio=600">COMPRAR</a></p>
			   </button>  
             </div>
             <div class="carousel-item">
               <img src="imagenes/God.jpg" class="d-block w-25">
			   <div class="text-black">
			         <h5>
					    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#God">
						  GOD OF WAR
						  Q250
						</button>
						<div class="modal fade" id="God" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">GOD OF WAR</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								Es un videojuego de accion-aventura desarrollado por SCE Santa Monica Studio y publicado por Sony Interactive Entertainment. Su lanzamiento se produjo el 20 de abril de 2018, en exclusiva para la consola PlayStation 4.​
							  </div>							  
							</div>
						  </div>
						</div>  
				     </h5>
			   </div>		  
                 <button type="button" class="btn btn-light">
			     <p><a href="?producto=GOD&precio=250">COMPRAR</a></p>
			   </button>  
             </div>
          <div class="carousel-item">
            <img src="imagenes/Red.jpg" class="d-block w-25">
			<div class="text-black">
			         <h5>
					    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Red">
						  RED DEAD REDEMPTION 2
						  Q450
						</button>
						<div class="modal fade" id="Red" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">RED DEAD REDEMPTION 2</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								Es un videojuego de accion-aventura western, en un mundo abierto y en perspectiva de primera y tercera persona, ​ con componentes para un jugador y multijugador.​ Fue desarrollado por Rockstar Studios. Es la precuela de Red Dead Redemption y el tercer juego de la saga Red Dead.
							  </div>							  
							</div>
						  </div>
						</div>  
				     </h5>
			   </div>		  
             <button type="button" class="btn btn-light">
			     <p><a href="?producto=RED&precio=450">COMPRAR</a></p>
			 </button>  
          </div>
		  <div class="carousel-item">
            <img src="imagenes/Rock.jpg" class="d-block w-25">
			<div class="text-black">
			         <h5>
					    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Rock">
						  ROCKET LEAGUE
						  Q150
						</button>
						<div class="modal fade" id="Rock" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">ROCKET LEAGUE</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								Es un videojuego que combina el futbol con los vehículos. Fue desarrollado por Psyonix y lanzado el 7 de julio del 2015. Se encuentra disponible en español, tiene modos de juego cooperativo, de un jugador y en línea. Está disponible para PC, PlayStation 4, Xbox One y Nintendo Switch.
							  </div>							  
							</div>
						  </div>
						</div>  
				     </h5>
			   </div>		  
             <button type="button" class="btn btn-light">
			     <p><a href="?producto=ROCKET&precio=150">COMPRAR</a></p>
			   </button>  
          </div>
		  <div class="carousel-item">
            <img src="imagenes/Mine.png" class="d-block w-25">
			<div class="text-black">
			         <h5>
					    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Mine">
						  MINECRAFT
						  Q250
						</button>
						<div class="modal fade" id="Mine" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenterTitle">MINECRAFT</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
								Es un videojuego de construcción, de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson, ​ y posteriormente desarrollado por su empresa, Mojang AB.
							  </div>							  
							</div>
						  </div>
						</div>  
				     </h5>
			   </div>		  
             <button type="button" class="btn btn-light">
			     <p><a href="?producto=MINE&precio=250">COMPRAR</a></p>
			 </button>  
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