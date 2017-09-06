<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>


<header>
  <figure class="logo pull-right">
    <img src="../img/inpet.png" alt="INPET" class="img-responsive">
  </figure>
  <nav class="pull-left">
    <ul>
      <a class="selector" href="../index.php"><i class="fa fa-bars" aria-hidden="true"></i> INICIO</a>
      <a class="selector" href="nosotros.php"><i class="fa fa-users" aria-hidden="true"></i> NOSOTROS</a>
      <a class="selector" href="servicios.php"><i class="fa fa-folder" aria-hidden="true"></i> SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php"><i class="fa fa-tty" aria-hidden="true"></i> CONTACTO</a>
    </ul>
  </nav>
</header>

<section class="sesion2">
  <h1 class="text-center" style="color: #fff;">CONTACTO</h1>
</section>


<div class="contenmapadatos">
	<div class="mapa pull-left">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4472945889315!2d-93.17907048569235!3d16.754407488460817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d977e5d03%3A0xf949657d7faf26d0!2sAgua+592%2C+La+Gloria%2C+29054+La+Gloria%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1504716325392" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="datos pull-right">

	<div class=" col-md-6">
            <div class="box">
                <div class="box-icon icono">
                    <span class="fa fa-4x fa-envelope-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Correo</h4>
                    <p style="text-align: center;">info@inpet.com.mx</p>

                </div>
            </div>
        </div>



        <div class=" col-md-6">
            <div class="box">
                <div class="box-icon icono">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Teléfono</h4>
                    <p style="text-align: center;">Pendiente</p>

                </div>
            </div>
        </div>



        <div class=" col-md-6" style="padding-top: 7%;">
            <div class="box">
                <div class="box-icon icono">
                    <span class="fa fa-4x fa-clock-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Horario</h4>
                    <p style="text-align: center;">Lunes a Viernes de 9 am a 6 pm</p>

                </div>
            </div>
        </div> 

        <div class=" col-md-6" style="padding-top: 7%;">
            <div class="box">
                <div class="box-icon icono">
                    <span class="fa fa-4x fa-map-marker"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Dirección</h4>
                    <p style="text-align: center;">C. Agua #592 por C. Las Flores Sur y C. Rosario Sabinal. Col La Gloria, Tuxtla Gutiérrez, Chiapas. C.P. 29038</p>

                </div>
            </div>
        </div>
	</div>
</div>

<div class="formulario">
<p class="tituloc text-center">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
    <div class="container">
    <form class="well col-sm-12 col-md-12" onSubmit="return false">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <label>Nombre Completo</label>
                <input id="txtNOMBRE" class="form-control" placeholder="Escribe tu nombre completo" type="text"> <br>
                <label>Teléfono</label>
                <input id="txtTELEFONO" class="form-control" placeholder="Escribe tu teléfono completo" type="text"> <br>
                <label>Correo</label>
                <input id="txtCORREO" class="form-control" placeholder="Escribe tu correo" type="text">
            </div>

            <div class="col-sm-8 col-md-8">
                <div class="form-group">
                    <label>Comentario</label>
                    <textarea id="txtCOMENTARIO" class="col-sm-3 col-md-3 form-control"  name="message" rows="8" placeholder="Escribe tu comentario"></textarea>
                    <div id="_AJAX_PRE_"></div>
                    <button style="margin-top: 5%;" class="btn btn-default pull-right"  onclick="sendCORREO()">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>
