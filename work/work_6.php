<?php
function array_sort($a) {
    for($x=0;$x< count($a);++$x) {
        $min = $x;
        for($y=$x+1;$y< count($a);++$y) {
            if($a[$y] < $a[$min] ) {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }
    return $a;
}
$a = array(33,22,11,55,'wm-school');
print_r(array_sort($a));
?>