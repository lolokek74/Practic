<?php
function check($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo check('salo')."<br>";
echo check('xolox');
?>