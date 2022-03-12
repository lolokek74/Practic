<?php
function check($n) {
    for($x=2; $x<$n; $x++) {
        if($n %$x ==0) {
            return 0;
        }
    }
    return 1;
}
$a = check(1);
if ($a==0)
    echo 'Это не простое число'."\n";
else
    echo 'Это простое число'."\n";
?>