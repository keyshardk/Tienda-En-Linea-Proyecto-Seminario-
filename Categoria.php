<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muebleria Velasquez</title>
  <meta name="description" content="Fabrica de Muebles Velasquez">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <link href="Logo/LOGO.png" rel="shortcut icon" /><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="keywords" content="SoccerPlay" />
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>
    
    
     <?php
            session_start();
            error_reporting(E_ALL ^ E_NOTICE);
            error_reporting(0);
            $user = $_SESSION['Usuario'];

            if($user == null || $$user = '')
            {
              ?>
              <section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
         <ul class="top-hnt-right-content col-lg-6">
						<li class="button-log usernhy">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_transmitv_cart" type="submit" name="submit" >
									<a href="Carrito/viewCart.php">Mi Carrito</a>
									<span class="fa fa-shopping-cart"></span>
								</button>
							</form>
						</li>
					</ul>
<!--Formulario Inicio Sesion                    -->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Iniciar Sesion</h5>
							<div class="login-bghny p-md-5 p-4 mx-auto mw-100">
								<form action="Perfil/Inicio_Sesion.php" method="post">
									<div class="form-group">
										<p class="login-texthny mb-2">Correo</p>
										<input type="email" class="form-control" id="Correo"  name="Correo" placeholder="" required="">
									</div>
									<div class="form-group">
										<p class="login-texthny mb-2">Contraseña</p>
										<input type="password" class="form-control" id="Clave" name="Clave" placeholder="" required="">
                                      <a href="Perfil/Clave.php"><center><small  class="form-text text-muted">¿Olvidaste tu Constraseña?</small></center></a>  
									</div>
									<button type="submit" class="submit-login btn mb-4">Iniciar Sesion</button>
								</form>
                                <button type="submit" onclick="location.href='Perfil/Registrarse.php'" class="submit-login btn1 mb-4">Registrarse</button>
							</div>
						</div>
					</div>
				</div>
			</div>
            
          
    <nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.php">
						<center>Muebleria<span class="lohny"> Velasquez</span></center></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item" active>
								<a class="nav-link" href="Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
   <?php 
		$idProducto = $_GET["id"];
		$con= mysqli_connect('localhost','root','','mydb');
		$producto ="select  Nombre from tbl_categorias where estado = 'Activo' and  	Id_Categorias = '$idProducto'";
		$consulta = $con->query($producto);
		while ($row = mysqli_fetch_array($consulta)) {
				
				$categoria = $row["Nombre"];?>             
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center"><?php echo "".$categoria;?></h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Inicio</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active"><?php echo "".$categoria;?></li>
            </ol>
          </nav>
        </div>
      </div><?php } ?>
    </div>
    </div>
</section>

                <?php
            }
            else
            {
                ?>
                   <section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
         <ul class="top-hnt-right-content col-lg-6">
                        <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="Perfil/Perfil.php" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Mi Perfil
									<span class="fa fa-user-circle-o"></span>
								</button>
							</form>
						</li>
                          <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="Perfil/cerrrar_sesion.php" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Cerrar Sesion
									<span class="fa fa-power-off"></span>
								</button>
							</form>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_transmitv_cart" type="submit" name="submit" >
									<a href="Carrito/viewCart.php">Mi Carrito</a>
									<span class="fa fa-shopping-cart"></span>
								</button>
							</form>
						</li>
					</ul>
				</div>
			</div>
            
          
    <nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.php">
						<center>Muebleria<span class="lohny"> Velasquez</span></center></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
  	<?php 
		$idProducto = $_GET["id"];
		$con= mysqli_connect('localhost','root','','mydb');
		$producto ="select  Nombre from tbl_categorias where estado = 'Activo' and  	Id_Categorias = '$idProducto'";
		$consulta = $con->query($producto);
		while ($row = mysqli_fetch_array($consulta)) {
				
				$categoria = $row["Nombre"];?>        
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center"><?php echo "".$categoria;?></h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Inicio</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active"><?php echo "".$categoria;?></li>
            </ol>
          </nav>
        </div>
      </div>
  <?php } ?>
    </div>
    </div>
</section><?php  } ?>

    <section class="w3l-ecommerce-main">
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
		  <div class="ecom-products-grids row mt-lg-5 mt-3">
		  		<?php 
					$con = mysqli_connect('localhost','root','','mydb');
					$productos = "select T0.Id_Producto as idProducto, T0.Nombre, T1.Imagen1,T1.Imagen2, T1.Precio,T1.PrecioOferta, T1.Id_Detalle_Producto as Id
				  				  from tbl_encabezado_producto T0
				  				  INNER JOIN tbl_detalle_producto T1 on T0.Id_Producto =T1.Tbl_Encabezado_Producto_Id_Producto
				  				  INNER JOIN tbl_categorias T2 ON T1.Tbl_Categorias_Id_Categorias = T2.Id_Categorias
				  				  WHERE T0.Estado = 'Activo' and T2.Id_Categorias = '$idProducto'";
					$consulta = $con->query($productos);
					while ($row = mysqli_fetch_array($consulta)) {
						    $idproducto = $row["idProducto"];
						    $id = $row["Id"];
		   					$nombre  = $row["Nombre"];
		   					$imagen1 = $row["Imagen1"];
		   					$imagen2 = $row["Imagen2"];
		   					$precio  = $row["Precio"];
		   					$precioOferta = $row["PrecioOferta"]; ?>
					
					

				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2">
					   <div class="product-image2">
							<a href="Descripcion.php?id=<?php echo $idProd;?>">
								<center><img style="max-width: 220px;" class="pic-1 img-fluid" src="panel/imagenesProductos/<?php echo $imagen1;?>"></center>
								<center><img style="max-width: 220px;" class="pic-2 img-fluid" src="panel/imagenesProductos/<?php echo $imagen2;?>"></center>
							</a>
							<div class="transmitv single-item">
									<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
											<input type="hidden" name="amount" value="599.99">
											<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
											 <a disabled class="btn btn-success" href="Carrito/cartAction.php?action=addToCart&id=<?php echo $id ; ?>">Agregar a Carrito</a>
											</button>
										</form>
									</div>
						</div>
						<?php 
 							if(is_null($precioOferta)){
						?>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo "".$nombre;?></a></h3>
							<span class="price"><?php echo "Q. ".number_format($precio).".00";?></span>
						</div>
							<?php }else{?>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo "".$nombre;?></a></h3>
							<span class="price">
                                <del><?php echo "Q. ".number_format($precio).".00";?></del> <br>
                                <?php echo "Q. ".number_format($precioOferta).".00"  ?></span>
						</div>
					<?php  }?>
					</div>
				</div><?php  }?>
           </div>
		</div>
	</div>
</section>

<section class="w3l-footer-22">
      <div class="footer-hny py-5">
          <div class="container py-lg-5">
              <div class="text-txt row">
                  <div class="left-side col-lg-4">
                      <br>
                      <br>
                      <br>
                      <h3><a class="logo-footer" href="index.php">
                          Muebleria<span class="lohny">&nbsp;  Velasquez</span></a></h3>
                      <ul class="social-footerhny mt-lg-5 mt-4">
                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-lg-8 pl-lg-5">
                      <div class="sub-columns">
                          <div class="sub-one-left">
                              <h6>Nuestros Links</h6>
                              <div class="footer-hny-ul">
                                  <ul>
                                      <li><a href="index.php">Inicio</a></li>
                                      <li><a href="Categoria.php?id=1">Comedores</a></li>
                                      <li><a href="Categoria.php?id=2">Salas</a></li>
                                      <li><a href="Contacto.php">Contacto</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="sub-two-right">
                              <h6>Direccion</h6>
                              <p class="mb-5">11 calle, Final lote 59 colonia los Pinos zona 17<br> Guatemala -- Guatemala</p>
                                <h6>Telefono</h6>
                              <p class="mb-5">+502 0000-0000</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </body>
  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<script src="assets/js/bootstrap.min.js"></script>
