
<?php include 'vistas/encabezado.php' ?>
<body>


<header>
  <figure class="logo pull-right">
    <img src="img/inpet.png" alt="INPET" class="img-responsive">
  </figure>
  <nav class="pull-left">
    <ul>
      <a class="selector" id="select" href="index.php"><i class="fa fa-bars" aria-hidden="true"></i> INICIO</a>
      <a class="selector" href="vistas/nosotros.php"><i class="fa fa-users" aria-hidden="true"></i> NOSOTROS</a>
      <a class="selector" href="vistas/servicios.php"><i class="fa fa-folder" aria-hidden="true"></i> SERVICIOS</a>
      <a class="selector" href="vistas/contacto.php"><i class="fa fa-tty" aria-hidden="true"></i> CONTACTO</a>
    </ul>
  </nav>
   <div class="menu-op">
      <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>
</header>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">

  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Envios y Fletes </h1>        
            <!-- <h3>Get start your next awesome project</h3> -->
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Reparación y mantenimiento de  artículos para el hogar</h1>        
            <!-- <h3>Get start your next awesome project</h3> -->
        </hgroup>       
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Servicios en instalaciones</h1>        
            <!-- <h3>Get start your next awesome project</h3> -->
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  </div> 
</div>


<section class="sesion1">
  <h1 class="text-center mt">Transporte Maritimo</h1>
  <hr> <br><br>
  <div class="container"> <br><br>
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="icono">
              <i class="fa fa-podcast fa-5x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center text-muted text-tit">¿Necesitas ayuda con el envío?</h3> <br>
            <p class="text-muted text-contenido text-contenido-new">
            <i class="fa fa-caret-right" aria-hidden="true"></i> Te guiamos en el proceso de importación/exportación <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Te ayudamos a conseguir ese negocio en el extranjero <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Analizamos si es viable importar/exportar tus productos</p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="icono">
              <i class="fa fa-globe fa-5x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center text-muted text-tit">¿Usé la mejor ruta para importar / exportar?</h3> <br>
            <p class="text-muted text-contenido text-contenido-new">
              <i class="fa fa-caret-right" aria-hidden="true"></i> Te asesoramos analizando la mejor ruta para disminuir costos <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Con nuestra tecnología te damos claridad y certeza en todo el proceso <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Tenemos experiencia y procesos bien definidos que hacen eficiente nuestra operación
            </p>
          </div>
          <div class="col-sm-4 col-md-4">
            <div class="icono">
              <i class="fa fa-ship fa-5x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center text-muted text-tit">
            ¿Puedo asegurar mi mercancía? 
            ¿Es mejor aéreo o marítimo?</h3> <br>
            <p class="text-muted text-contenido text-contenido-new">
              <i class="fa fa-caret-right" aria-hidden="true"></i> Nosotros armamos tus envíos y aseguramos tu mercancía <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Coordinamos tus embarques en origen y destino <br><br>
            <i class="fa fa-caret-right" aria-hidden="true"></i> Ofrecemos servicio puerta – puerta. Nosotros nos encargamos de toda la planeación
            </p>
          </div>
        </div>
      </div>
</section>


<section class="sesion2">
  <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 text-right col-md-offset-2">
            <img src="img/mundo.png" class="img-responsive img-contenido">
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <h1 class="mt2 text-cont-h1" style="color: #fff;">Surtido y armado de pedidos</h1>
            <p class="text-contenido" style="color: #fff;">Como parte del servicio integral nuestro personal esta preparado para surtir y armar pedidos con estrictas reglas de calidad, tomando en cuenta procesos impuestos por el cliente.
            Por medio de órdenes de compra se hará el surtido de sus pedidos y se empacara listo para enviarse a donde se requiera.</p>
          </div>
        </div>
      </div>
     <p class="boton">
        <a href="vistas/contacto.php"><button type="button" class="btn btn-default">CONTACTANOS</button></a>
     </p>
</section>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'vistas/pie.php' ?>

<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sendCORREO.js"></script>
<script src="js/botonarriba.js"></script>

</body>
</html>
