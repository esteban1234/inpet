<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<header>
  <figure class="logo">
    <img src="../img/nokin.png" class="img-responsive" alt="">
  </figure>
  <!-- <div class="tch">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">PENDIENTE</span><br>
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">Lunes a Viernes de 9am a 6pm</span><br>
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
    </span>
            <span style="color: #65BFB4; font-size: 17px;">info@nokinservicios.com</span><br>
  </div> -->

  <div class="menu">
    <ul>
      <a class="marca" href="../index.php">INICIO</a>
      <a class="marca" href="nosotros.php">NOSOTROS</a>
      <a class="marca" href="servicios.php">SERVICIOS</a>
      <a class="marca select" href="contacto.php">CONTACTO</a>
    </ul>
    <div class="menu-openclose">
      <i class="fa fa-bars fa-3x open" aria-hidden="true"></i>
      <i class="fa fa-times fa-3x close oculto" style="color:green" aria-hidden="true"></i>
    </div>
  </div>
</header>


<div class="formulario">
<p class="tituloc">Escribenos tus comentario, dudas o preguntas, estamos para servirte.</p>
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
                    <button style="margin-top: 5%;" class="btn btn-danger pull-right"  onclick="sendCORREO()">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>


<div class="contenmapadatos">
	<div class="mapa pull-left">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1761279345737!2d-99.1698545856453!3d19.404794586900103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff14d36033b5%3A0xcb28ed4fedb63aa2!2sTuxpan+39%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1499986079064" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="datos pull-right">

	<div class=" col-md-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-envelope-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Correo</h4>
                    <p style="text-align: center;">info@nokinservicios.com</p>

                </div>
            </div>
        </div>



        <div class=" col-md-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Teléfono</h4>
                    <p style="text-align: center;">Pendiente</p>

                </div>
            </div>
        </div>



        <div class=" col-md-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-clock-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Horario</h4>
                    <p style="text-align: center;">Lunes a Viernes de 9am a 6pm</p>

                </div>
            </div>
        </div>

        <div class=" col-md-6">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-map-marker"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">Dirección</h4>
                    <p style="text-align: center;">C. Tuxpan # 39 int. 703-a entre Q.Roo y Tehuantepec, Col. Roma Sur. Deleg. Cuauhtémoc, CD Mx. C.P. 06760.</p>

                </div>
            </div>
        </div>
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
