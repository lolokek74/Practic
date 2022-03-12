<?php
function check($a) {
    for ($i = 0; $i < strlen($a); $i++) {
        if (ord($a[$i]) >= ord('A') &&
            ord($a[$i]) <= ord('Z')) {
            return 'буквы в строке в не
нижнем регистре';
        }
    }
    return 'буквы в строке в
нижнем регистре';
}
echo(check('underground'));
?>
