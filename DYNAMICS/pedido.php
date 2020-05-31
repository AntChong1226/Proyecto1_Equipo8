<?php
$user = $_POST['nombreU'];
$paswd = $_POST['contraseniaU'];
if ($user == 1 && $paswd == "crash26") {
  echo  '<!DOCTYPE html>
    <html lang="es" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Pedido|Cafetería Coyote</title>
      </head>
      <body>
        <section>
          <div class="navigation">

          </div>
        </section>
        <section>
          <div class="menu">
            <div class="titulo">
              <p>Hola '.$user.'<br>¿Tienes hambre?</p>
            </div>
            <div class="maxalimentos">
              <p>Ordene de 1 a 5 alimentos</p>
            </div>
            <div class="Alimentos">
              <div class="container">
                <div class="img" >
                  <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRl3WDCaDpf6C1ld3h9_R3LBpssi5bWDcvMihz_v172FEf5GtrY&usqp=CAU" title="bebidasFrias" alt="Bebidas Frías" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Bebidas Frías</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="img" >
                  <img class="img" src="https://publimetro.pe/resizer/dKODf0m7u70R0Sfo6GfWTgWz9kU=/980x528/smart/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/VESFBH37GBBSVF7SNI2WAE5UTM.jpg" title="Ensalada" alt="Ensalada" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Ensaladas</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="img" >
                  <img class="img" src="https://laroussecocina.mx/wp-content/uploads/2018/12/sandwich-de-queso-mossarella.jpg" title="Sandwich" alt="Sandwich" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Sandich</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="img" >
                  <img class="img" src="https://www.yucatanencorto.com/noticias/wp-content/uploads/2018/02/CAFF.jpeg" title="Bebidascalientes" alt="Bebidas Calientes" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Bebidas Calientes</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="img">
                  <img class="img" src="https://www.alfa-editores.com.mx/wp-content/uploads/2019/08/2-Encuentran-c%C3%B3mo-desarrollar-papas-fritas-bajas-en-grasa.jpg" title="Papas" alt="Papas" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Papas</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="img" >
                  <img class="img" src="https://s3.amazonaws.com/azapflores/0/_dulces-globos-a-domicilio-azap-dot-com-1200px-1200px-2_2.jpg" title="Dulces" alt="Dulces" width="300px">
                  <div class="ul-comida">
                    <ul>
                      <li>Dulces</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="formpedido">
              <form class="pedido" action="../DYNAMICS/pedidoconfig.php" method="post">
                <table>
                  <tr>
                    <td>Orden:</td>
                    <td><select class="op5" name="opcion5">
                      <option value="nada">^-----.-----^</option>
                      <optgroup label="Bebidas-Frías">
                        <option value="Maletada">Maletada</option>
                        <option value="Demás-bebidas-frías">Demás bebidas frías</option>
                      </optgroup>
                      <optgroup label="Ensaladas">
                        <option value="Ensalada-rusa">Ensalada Rusa</option>
                        <option value="Ensalada-de-pollo">Ensalada de Pollo</option>
                        <option value="Demas-ensaladas">Demás Ensaladas</option>
                      </optgroup>
                      <optgroup label="Sandwiches">
                        <option value="JyQ">Jamón y queso</option>
                        <option value="SQ">Solo con Queso</option>
                        <option value="Demas-sandwiches">Demás Sndwiches</option>
                      </optgroup>
                      <optgroup label="Bebidas-Calientes">
                        <option value="Cafe">Café</option>
                        <option value="Té">Tés</option>
                        <option value="Demas-bebidas-calientes">Demas Bebidas Calientes</option>
                      </optgroup>
                      <optgroup label="Papas">
                        <option value="Sabritas">Sabritas</option>
                        <option value="Chetos">Chetos</option>
                        <option value="Doritos">Doritos</option>
                        <option value="Demas-papas">Demás Papaas</option>
                      </optgroup>
                      <optgroup label="Dulces">
                        <option value="Chocolate">Chocolate</option>
                        <option value="Chicles">Chicles</option>
                        <option value="demas-dulces">Demás Dulces</option>
                      </optgroup>
                    </select></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><select class="op2" name="opcion2">
                      <option value="nada">^-----.-----^</option>
                      <optgroup label="Bebidas-Frías">
                        <option value="Maletada">Maletada</option>
                        <option value="Demás-bebidas-frías">Demás bebidas frías</option>
                      </optgroup>
                      <optgroup label="Ensaladas">
                        <option value="Ensalada-rusa">Ensalada Rusa</option>
                        <option value="Ensalada-de-pollo">Ensalada de Pollo</option>
                        <option value="Demas-ensaladas">Demás Ensaladas</option>
                      </optgroup>
                      <optgroup label="Sandwiches">
                        <option value="JyQ">Jamón y queso</option>
                        <option value="SQ">Solo con Queso</option>
                        <option value="Demas-sandwiches">Demás Sndwiches</option>
                      </optgroup>
                      <optgroup label="Bebidas-Calientes">
                        <option value="Cafe">Café</option>
                        <option value="Té">Tés</option>
                        <option value="Demas-bebidas-calientes">Demas Bebidas Calientes</option>
                      </optgroup>
                      <optgroup label="Papas">
                        <option value="Sabritas">Sabritas</option>
                        <option value="Chetos">Chetos</option>
                        <option value="Doritos">Doritos</option>
                        <option value="Demas-papas">Demás Papaas</option>
                      </optgroup>
                      <optgroup label="Dulces">
                        <option value="Chocolate">Chocolate</option>
                        <option value="Chicles">Chicles</option>
                        <option value="demas-dulces">Demás Dulces</option>
                      </optgroup>
                    </select></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><select class="op3" name="opcion3">
                      <option value="nada">^-----.-----^</option>
                      <optgroup label="Bebidas-Frías">
                        <option value="Maletada">Maletada</option>
                        <option value="Demás-bebidas-frías">Demás bebidas frías</option>
                      </optgroup>
                      <optgroup label="Ensaladas">
                        <option value="Ensalada-rusa">Ensalada Rusa</option>
                        <option value="Ensalada-de-pollo">Ensalada de Pollo</option>
                        <option value="Demas-ensaladas">Demás Ensaladas</option>
                      </optgroup>
                      <optgroup label="Sandwiches">
                        <option value="JyQ">Jamón y queso</option>
                        <option value="SQ">Solo con Queso</option>
                        <option value="Demas-sandwiches">Demás Sndwiches</option>
                      </optgroup>
                      <optgroup label="Bebidas-Calientes">
                        <option value="Cafe">Café</option>
                        <option value="Té">Tés</option>
                        <option value="Demas-bebidas-calientes">Demas Bebidas Calientes</option>
                      </optgroup>
                      <optgroup label="Papas">
                        <option value="Sabritas">Sabritas</option>
                        <option value="Chetos">Chetos</option>
                        <option value="Doritos">Doritos</option>
                        <option value="Demas-papas">Demás Papaas</option>
                      </optgroup>
                      <optgroup label="Dulces">
                        <option value="Chocolate">Chocolate</option>
                        <option value="Chicles">Chicles</option>
                        <option value="demas-dulces">Demás Dulces</option>
                      </optgroup>
                    </select></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><select class="op4" name="opcion4">
                      <option value="nada">^-----.-----^</option>
                      <optgroup label="Bebidas-Frías">
                        <option value="Maletada">Maletada</option>
                        <option value="Demás-bebidas-frías">Demás bebidas frías</option>
                      </optgroup>
                      <optgroup label="Ensaladas">
                        <option value="Ensalada-rusa">Ensalada Rusa</option>
                        <option value="Ensalada-de-pollo">Ensalada de Pollo</option>
                        <option value="Demas-ensaladas">Demás Ensaladas</option>
                      </optgroup>
                      <optgroup label="Sandwiches">
                        <option value="JyQ">Jamón y queso</option>
                        <option value="SQ">Solo con Queso</option>
                        <option value="Demas-sandwiches">Demás Sndwiches</option>
                      </optgroup>
                      <optgroup label="Bebidas-Calientes">
                        <option value="Cafe">Café</option>
                        <option value="Té">Tés</option>
                        <option value="Demas-bebidas-calientes">Demas Bebidas Calientes</option>
                      </optgroup>
                      <optgroup label="Papas">
                        <option value="Sabritas">Sabritas</option>
                        <option value="Chetos">Chetos</option>
                        <option value="Doritos">Doritos</option>
                        <option value="Demas-papas">Demás Papaas</option>
                      </optgroup>
                      <optgroup label="Dulces">
                        <option value="Chocolate">Chocolate</option>
                        <option value="Chicles">Chicles</option>
                        <option value="demas-dulces">Demás Dulces</option>
                      </optgroup>
                    </select></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>
                      <select class="op1" name="opcion1">
                        <option value="nada">^-----.-----^</option>
                        <optgroup label="Bebidas-Frías">
                          <option value="Maletada">Maletada</option>
                          <option value="Demás-bebidas-frías">Demás bebidas frías</option>
                        </optgroup>
                        <optgroup label="Ensaladas">
                          <option value="Ensalada-rusa">Ensalada Rusa</option>
                          <option value="Ensalada-de-pollo">Ensalada de Pollo</option>
                          <option value="Demas-ensaladas">Demás Ensaladas</option>
                        </optgroup>
                        <optgroup label="Sandwiches">
                          <option value="JyQ">Jamón y queso</option>
                          <option value="SQ">Solo con Queso</option>
                          <option value="Demas-sandwiches">Demás Sndwiches</option>
                        </optgroup>
                        <optgroup label="Bebidas-Calientes">
                          <option value="Cafe">Café</option>
                          <option value="Té">Tés</option>
                          <option value="Demas-bebidas-calientes">Demas Bebidas Calientes</option>
                        </optgroup>
                        <optgroup label="Papas">
                          <option value="Sabritas">Sabritas</option>
                          <option value="Chetos">Chetos</option>
                          <option value="Doritos">Doritos</option>
                          <option value="Demas-papas">Demás Papaas</option>
                        </optgroup>
                        <optgroup label="Dulces">
                          <option value="Chocolate">Chocolate</option>
                          <option value="Chicles">Chicles</option>
                          <option value="demas-dulces">Demás Dulces</option>
                        </optgroup>
                      </select>
                  </td>
                  </tr>
                </table>
                <input type="submit" name="enviar" value="Continuar">
              </form>
            </div>
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
}else {
  echo "Nombre de Usuaario y/o contraseña incorectos, <a href='Proyecto.php'>intente de nuevo</a> o cree se cuenta <a href='../TEMPLATES/usuarionuevo.html'>aquí!</a> ";
}

?>
