<!DOCTYPE html>
<html lang="en">
<head>
  <title>Velasquez Bike</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
        /* BARRA DE NAVEGACION */
    .topnav {
				overflow: hidden;
				background-color: #333;
				}

				.topnav a {
				float: left;
				display: block;
				color: #f2f2f2;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				font-size: 17px;
				}

				.active {
				background-color: #4CAF50;
				color: white;
				}

				.topnav .icon {
				display: none;
				}

				.dropdown {
				float: left;
				overflow: hidden;
				}

				.dropdown .dropbtn {
				font-size: 17px;    
				border: none;
				outline: none;
				color: white;
				padding: 14px 16px;
				background-color: inherit;
				font-family: inherit;
				margin: 0;
				}

				.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
				}

				.dropdown-content a {
				float: none;
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
				}

				.topnav a:hover, .dropdown:hover .dropbtn {
				background-color: #555;
				color: white;
				}

				.dropdown-content a:hover {
				background-color:ye;
				color: white;
				}

				.dropdown:hover .dropdown-content {
				display: block;
				}

			@media screen and (max-width: 1200px) {
				.topnav a:not(:nth-child(-n+3)), .dropdown .dropbtn {
          /*:nth-child(-n+2): los 2 primeros elementos
          https://developer.mozilla.org/es/docs/Web/CSS/:nth-child
          */
					display: none;
				}
				.topnav a.icon {
					float: right;
					display: block;
				}
				}
 
				@media screen and (max-width: 1200px) {
				.topnav.responsive {position: relative;}
				.topnav.responsive .icon {
					position: absolute;
					right: 0;
					top: 0;
				}
        .active{
          /*background-color: blue;*/
          
        }
				.topnav.responsive a {
					float: none;
					display: block;
					text-align: left;
				}
				.topnav.responsive .dropdown {float: none;}
				.topnav.responsive .dropdown-content {position: relative;}
				.topnav.responsive .dropdown .dropbtn {
					display: block;
					width: 100%;
					text-align: left;
				}
				}
</style>


<body class="container">
    <header>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="imagenes/banner1.PNG" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagenes/banner2.PNG" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagenes/banner3.PNG" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

        <div class="topnav" id="myTopnav" style="margin-top: 10px;">
            <a href="#" class="">Inicio</a>
            <a href="listaProductos.php">Administración de Productos</a>

            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </header>
    
    <main style="margin-top: 70px;" >
             <div class="" style="margin-top: 20px;">
                <form action="registrarProductos.php" method="POST">
                    <h1 style="text-align: center;" >Administración De Productos</h1>
                    
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" name="producto">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Marca" name="marca">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Precio" name="valor">
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        
                        <div class="col">
                            <textarea class="form-control" rows="2" placeholder="Descripción del Producto" name="descripcion"></textarea>
                        </div>
                    </div>
                    
                    <div class="row mt-3">

                    </div>
                    <button type="submit" class="btn btn-info" name="botonEnvio">Registrar</button>

                </form>
            </div>       
    </main>
    



  
    <footer style="margin-top: 200px;" >  

        <div class="w3-bar w3-black w3-hide-small" >
            <a href="#" class="w3-bar-item w3-button"> Redes Sociales</a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-youtube"></i></a>
            <a href="#" class="w3-bar-item w3-button"><i class="fa fa-whatsapp"></i></a>
        </div>   
       
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
