<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Triangulo</title>

<style>

.form input
{
  width: 90px;
}

.form
{
  width: 400px;
  border-style: solid;
  border-color: rgb(82,82,82);
  border-width: 1px;
  padding: 10px;
}

.resultados
{
  width: 400px;
  border-style: solid;
  border-color: rgb(82,82,82);
  border-width: 1px;
  padding: 10px;
  float: left;
}

</style>



  </head>
  <body>


<div class="form">
<form action="triangulo.php" method="post">
<table>
<tr>
<td>Insira a Altura (px*10):</td><td><input type="number" name="altura" min='1' ></input></td>
</tr>
<tr>
<td>Insira a Base (px*10):</td><td><input type="number" name="base" min='1' ></input><td>
<input type="submit" name="enviar" value="Calcular">
</tr>
</table>
</form>
</div>
<?php

$base_form = $_POST["base"] *10;
$altura_form = $_POST['altura']*10;

function hipotenusa($base,$altura)
{
  $hipotenusa = sqrt(($base*$base)+($altura*$altura));
  echo $hipotenusa;
}



 ?>


<hr />

<?php
echo 'Altura: '.number_format($altura_form).'px<br />';
echo 'Base: '.number_format($base_form).'px<br />';
echo 'Hipotenusa:'.round((sqrt(($base_form*$base_form)+($altura_form*$altura_form))),2).'px<br />';
echo 'Angulos:'.' 90° / sup:'.round((rad2deg(atan(($base_form/$altura_form)))),2).'° / inf:'.round(((90)-(rad2deg(atan(($base_form/$altura_form))))),2).'° <br /> ';
echo 'Area:'.number_format((($base_form*$altura_form)/2)).'px²<br />';



 ?>


<hr />



<style media="screen">
.baseEaltura
{
  width: <?php echo ($base_form) ?>px;
  height: <?php echo ($altura_form) ?>px;
  margin-top: <?php echo ($altura_form*0.10) ?>px;
  margin-left: <?php echo ($base_form*0.10) ?>px;
  border-left-style: solid;
  border-left-color: rgb(82,82,82);
  border-left-width: 1px;

  border-bottom-style: solid;
  border-bottom-color: rgb(82,82,82);
  border-bottom-width: 1px;


  background-color: yellow;

  position: absolute;

}

.printar_base
{
  width: <?php echo ($base_form*1.20) ?>px;
  height: <?php echo ($altura_form*1.20) ?>px;
  display: inline-block;
}

.printar_altura
{
  width: <?php echo ($base_form*1.20) ?>px;
  height: <?php echo ($altura_form*1.20) ?>px;
  display: inline-block;
}

.printar_hipotenusa
{
  width: <?php echo ($base_form) ?>px;
  height: <?php echo ($altura_form) ?>px;
  display: inline-block;
  z-index: 999;
  transform: skew(<?php echo rad2deg(atan(($base_form/$altura_form))) ?>deg);
  position: relative;
  margin-left: <?php echo ($base_form/2) ?>px;
  border-left-style: solid;
  border-left-color: rgb(82,82,82);
  border-left-width: 1px;
  background-color: white;
}

  .color > div{
    width: 0px;
    height: 0px;
    border-left: 400px solid transparent;
    border-bottom: 400px solid black;
}


  /* <?php echo (sqrt(($base_form*$base_form)+($altura_form*$altura_form))) ?> */


</style>


<div class="printar_base">
<div class="printar_altura">
<div class="baseEaltura"><div class="printar_hipotenusa"></div></div>
</div>
</div>


<hr />
















  </body>
</html>
