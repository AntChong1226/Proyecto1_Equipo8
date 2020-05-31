<?php
$s = intval($_POST['TipoDeUsuario']);
var_dump($s);
if ($s == 1) {
  session_name("ALUMNO");
  session_id(12345);
  session_start();
  echo  '<!DOCTYPE html>
    <html lang="es" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Registro de Usuario  |  Cafetería Coyote</title>
      </head>
      <body>
        <h1><b><u>Hola Usuario Nuevo!</u></b></h1> <br>
        <p>Por favor llena <mark>todos</mark> los campos que se te solicitan</p>
        <form action="Proyecto.php" method="post">
          <input type="text" name="nombre" placeholder="Nombre" required><br>
          Grupo: <select name="grupo">
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
          </select>
          <fieldset>
            <span>USUARIO</span><br>
            <input type="number" name="numeroCuenta" placeholder="Número de Cuenta" required><br>
            <span>El Número de Cuenta será lo que coloques dentro del campo de Usuario</span><br>
            <span>CONTRASEÑA:</span><br>
            <input type="password" name="contrasenia" placeholder="Contraseña" required><br>
            <input type="submit" name="crear" placeholder="Crear">
          </fieldset>
        </form
      </body>
    </html>';
}elseif ($s == 2) {
  session_name("PoF");
  session_id(12345);
  session_start();
  echo  '<!DOCTYPE html>
    <html lang="es" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Registro de Usuario  |  Cafetería Coyote</title>
      </head>
      <body>
        <h1><b><u>Hola Usuario Nuevo!</u></b></h1>
        <p>Por favor llena <mark>todos</mark> los campos que se te solicitan</p>
        <form action="Proyecto.php" method="post">
          <input type="text" name="nombre" placeholder="Nombre"><br>
          Colegio: <select name="colegio">
            <option value="1">Física</option>
            <option value="2">Informática</option>
            <option value="3">Matemáticas</option>
            <option value="4">Biología</option>
            <option value="5">Educación Física</option>
            <option value="6">Morfología, Fisiología y Salud</option>
            <option value="7">Orientación Educativa</option>
            <option value="8">Psicologia e Higiene Mental</option>
            <option value="9">Química</option>
            <option value="10">Ciencias Sociales</option>
            <option value="11">Geografía</option>
            <option value="12">Historia</option>
            <option value="13">Alemán</option>
            <option value="14">Artes Plásticas</option>
            <option value="15">Danza</option>
            <option value="16">Dibujo y Modelado</option>
            <option value="17">Filosofía</option>
            <option value="18">Francés</option>
            <option value="19">Inglés</option>
            <option value="20">Italiano</option>
            <option value="21">Letras Clásicas</option>
            <option value="22">Literatura</option>
            <option value="23">Música</option>
            <option value="24">Teatro</option>
          </select><br>
          <fieldset>
            <span>USUARIO</span><br>
            <input type="text" name="RFC" placeholder="RFC"><br>
            <span>El RFC será lo que coloques dentro del campo de Usuario</span><br>
            <span>CONTRASEÑA</span><br>
            <input type="password" name="contrasenia" placeholder="Contraseña"><br>
            <input type="submit" name="crear" placeholder="Crear">
          </fieldset>
        </form>
      </body>
    </html>';
}elseif ($s == 3) {
  session_name("TRABAJADOR");
  session_id(12345);
  session_start();
  echo  '<!DOCTYPE html>
    <html lang="es" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Registro de Usuario  |  Cafetería Coyote</title>
      </head>
      <body>
        <h1><b><u>Hola Usuario Nuevo!</u></b></h1>
        <p>Por favor llena <mark>todos</mark> los campos que se te solicitan</p>
        <form action="Proyecto.php" method="post">
          <input type="text" name="nombre" placeholder="Nombre"><br>
          <fieldset>
            <span>USUARIO</span><br>
            <input type="number" name="numTrab" placeholder="Número de trabajador"><br>
            <span>El Número de trabajador será lo que coloques dentro del campo de Usuario</span><br>
            <span>CONTRASEÑA</span><br>
            <input type="password" name="contrasenia" placeholder="Contraseña"><br>
            <input type="submit" name="crear" placeholder="Crear">
          </fieldset>
      </form>
      </body>
    </html>';
}
?>
