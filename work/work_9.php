<?php
if(!isset ($_POST['submit'])){
?>
<form method="post" action="work_9.php">
<p>Введите значения длины и ширины прямоугольника.</p>
<p>Длина:  <input type="text" name="length"/>
Ширина:  <input type="text" name="width"/></p>
<input type="submit" name="submit" value="Выполнить" />
</form>
<?php
} else {
$l = $_POST['length'];
$w = $_POST['width'];
function result($l, $w){
  $area = $l * $w;
  return $area;
}
echo "Площадь прямоугольника длиной $l и шириной $w равна " . result($l, $w). ".";
}
?>
