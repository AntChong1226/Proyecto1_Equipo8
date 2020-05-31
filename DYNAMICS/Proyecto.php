<?php
session_name("USUARIO");
session_id(12345);
session_start();
echo'<!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Inicio de Pedido|Cafetería Coyote-SPCC</title>
    </head>
    <body>
      <header>
        <section>
          <div class="p6logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Escudo_enp_6.svg/1200px-Escudo_enp_6.svg.png" alt="Logo prepa 6" width="150px">
          </div>
          <div class="ENP6">
            <span>ENP 6</span>
          </div>
          <div class="AntonioCaso">
            <span>ANTONIO CASO</span>
          </div>
          <div class="SPCC">
            <div class="spcctext">
              <span>SPCC</span>
            </div>
            <div class="que">
              <span>¿Qué soy?</span>
            </div>
          </div>
        </section>
      </header>
      <section>
        <div class="inicioSesion">
          <span>Inicio de Sesión</span>
          <form class="iniciodesesion" action="../DYNAMICS/pedido.php" method="post">
            <input type="text" name="nombreU" placeholder="Usuario"> <br>
            <input type="password" name="contraseniaU" placeholder="Contraseña"> <br>
            <input type="submit" name="enviar" placeholder="Iniciar Pedido">
          </form>
        </div>
      </section>
      <footer>
        <section>
          <div class="titulofooter">
            <h4><u>Footer</u></h4>
          </div>
          <div class="contacto">
            <a href="../TEMPLATES/Contacto.html">Página de Contacto</a>
          </div>
          <div class="direccion">
            <img src="https://static.vecteezy.com/system/resources/previews/000/552/663/non_2x/geo-location-pin-vector-icon.jpg" alt="Pint Logo" width="20px">
            <p><a href="https://www.google.com.mx/maps/place/Escuela+Nacional+Preparatoria+N%C2%B0+6+%22Antonio+Caso%22+UNAM/@19.3521753,-99.1561553,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ffcf9cc30dbd:0xf8b434a6ebcd6c83!8m2!3d19.3521753!4d-99.1561553"><u>Corina 3, Del Carmen, Coyoacán, 04100 Ciudad de México, CDMX</u></a></p>
          </div>
          <div class="legal">
            <p>Copyright (c) 2020 Copyright Holder All Rights Reserved.</p>
          </div>
          <div class="autores">
            <p>Diego Vapnik, Montze Baez, Aranxta Junco, Diego Muriel.</p>
          </div>
        </section>
      </footer>
    </body>
  </html>';
?>
