<!doctype html>
<html lang="es" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
</head>
<body>

<link href="/css/registro.css" rel="stylesheet"
type="text/css">

<h2>--------Comentario--------</h2>

<p>Por favor llena los campos que se te piden :)</p>

<form action="/formulario" method="post">

<div>
<label for="name">Nombre:</label>
<input type="text" id="name" />



<label for="apPaterno">Apellido Paterno:</label>
<input type="text" id="apPAterno"/>


<label for="apMaterno">Apellido Materno:</label>
<input type="text" id="apMaterno"/>
</div>


<div>
<label for="phone">Telefono:</label>
<input type="phone" id="phone"/>

<label for="comentario">comentario:</label>
<input type="textarea" id="msg"/>


<label for="mail">E-mail:</label>
<input type="email" id="correo" />
</div>

<div class="button">

<button type="submit">ACEPTAR ENVIAR DATOS</button>
</div>

</form>

<a href="https://www.unam.mx/">UNAM</a>
<a href="www.fca.unam.mx/">FCA</a>
</body>

</html>
