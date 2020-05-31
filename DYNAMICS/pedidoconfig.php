<?php
$p = $_POST['enviar'];
$op1 = $_POST['opcion1'];
$op2 = $_POST['opcion2'];
$op3 = $_POST['opcion3'];
$op4 = $_POST['opcion4'];
$op5 = $_POST['opcion5'];
if ($p == "Continuar") {
  echo '<!DOCTYPE html>
  <html lang="es" dir="ltr"><!--Esta página debe de estar en u PHP con Echos-->
    <head>
      <meta charset="utf-8">
      <title>Configuración del Pedido  |  Cafetería Coyote</title>
    </head>
    <body>
      <header>
        <section>
          <div class="nav">
            <!--Aquí va el Nav-->
          </div>
          <div class="titulo">
            <h1>Configura tu pedido</h1>
          </div>
        </section>
      </header>
      <section>
        <div class="pedido">
          <form action="confirmacion.php" method="post"><!--Colocar página a enviar info-->
            Forma de Entrega:
            <select name="metodo" required>
              <option value="cafe">Recoger en la cafetería Coyote</option>
              <option value="salon">Entregar en una ubicación específica</option>
            </select><br>
            Lugar de Entrega:
            <select name="lugar" required>
              <option value="Cafetería">Cafetería Coyote</option>
              <optgroup label="salón">
              <optgroup label="Cuarto">
                <option value="1">401</option>
                <option value="2">402</option>
                <option value="3">403</option>
                <option value="4">404</option>
                <option value="5">405</option>
                <option value="6">406</option>
                <option value="7">407</option>
                <option value="8">408</option>
                <option value="9">409</option>
                <option value="10">410</option>
                <option value="11">411</option>
                <option value="12">412</option>
                <option value="13">413</option>
                <option value="14">414</option>
                <option value="15">415</option>
                <option value="16">416</option>
                <option value="17">417</option>
                <option value="18">451</option>
                <option value="19">452</option>
                <option value="20">453</option>
                <option value="21">454</option>
                <option value="22">455</option>
                <option value="23">456</option>
                <option value="24">457</option>
                <option value="25">458</option>
                <option value="26">459</option>
                <option value="27">460</option>
                <option value="28">461</option>
                <option value="29">462</option>
                <option value="30">463</option>
                <option value="31">464</option>
                <option value="32">465</option>
                <option value="33">466</option>
              </optgroup>
              <optgroup label="Quinto">
                <option value="34">501</option>
                <option value="35">502</option>
                <option value="36">503</option>
                <option value="37">504</option>
                <option value="38">505</option>
                <option value="39">506</option>
                <option value="40">507</option>
                <option value="41">508</option>
                <option value="42">509</option>
                <option value="43">510</option>
                <option value="44">511</option>
                <option value="45">512</option>
                <option value="46">513</option>
                <option value="47">514</option>
                <option value="48">515</option>
                <option value="49">516</option>
                <option value="50">517</option>
                <option value="51">518</option>
                <option value="52">551</option>
                <option value="53">552</option>
                <option value="54">553</option>
                <option value="55">554</option>
                <option value="56">555</option>
                <option value="57">556</option>
                <option value="58">557</option>
                <option value="59">558</option>
                <option value="60">559</option>
                <option value="61">560</option>
                <option value="62">561</option>
                <option value="63">562</option>
                <option value="64">563</option>
                <option value="65">564</option>
              </optgroup>
              <optgroup label="Sexto">
                <option value="66">601</option>
                <option value="67">602</option>
                <option value="68">603</option>
                <option value="69">604</option>
                <option value="70">605</option>
                <option value="71">606</option>
                <option value="72">607</option>
                <option value="73">608</option>
                <option value="74">609</option>
                <option value="75">610</option>
                <option value="76">611</option>
                <option value="77">612</option>
                <option value="78">613</option>
                <option value="79">614</option>
                <option value="80">615</option>
                <option value="81">616</option>
                <option value="82">617</option>
                <option value="83">618</option>
                <option value="84">619</option>
                <option value="85">651</option>
                <option value="86">652</option>
                <option value="87">653</option>
                <option value="88">654</option>
                <option value="89">655</option>
                <option value="90">656</option>
                <option value="91">657</option>
                <option value="92">658</option>
                <option value="93">659</option>
                <option value="94">660</option>
                <option value="95">661</option>
                <option value="96">662</option>
                <option value="97">663</option>
                <option value="98">664</option>
              </optgroup>
                <option value="auditorio">Auditorio</option>
                <option value="P4">Patio de Cuartos</option>
                <option value="P5">Patio de Quintos</option>
                <option value="P6">Patio de Sextos</option>
                <option value="mediateca">Mediateca</option>
                <option value="pulpo">Pulpo</option>
                <option value="pimponeras">Pimponeras</option>
                <option value="bajo-la-biblioteca">Bajo la Biblioteca</option>
                <option value="canchas5">Canchas de Quintos</option>
                <option value="Mcanchas">Multi-canchas</option>
              </optgroup>
            </select>
            <h2>Confirmación del Pedido</h2>
            <p>Marque la comida que está seguro conformará su pedido</p><!--O podemos intentar solo meter esta parte en PHP, pero creo sería mejor todo-->
            <input type="checkbox" name="op1" checked>'.$op1.'<br><!--Aquí colocaremos las variables de acuerdo  las opciones del cliente-->
            <input type="checkbox" name="op2" checked>'.$op2.'<br>
            <input type="checkbox" name="op3" checked>'.$op3.'<br>
            <input type="checkbox" name="op4" checked>'.$op4.'<br>
            <input type="checkbox" name="op5" checked>'.$op5.'<br>
            <input type="submit" name="eNviar" placeholder="Generar Pedido" value="1">
          </form>
        </div>
      </section>
      <footer>
        <section>
          <div class="titulofooter">
            <h4><u>Footer</u></h4>
          </div>
          <div class="contacto">
            <a href="Contacto.html">Página de Contacto</a>
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
}

?>
