<?php
function reverse($a) {
    $n = strlen($a);
    if($n == 1)  {
        return $a;
    }
    else {
        $n--;
        return reverse(substr($a,1, $n)) . substr($a, 0, 1);
    }
}
print_r(reverse('8972')."\n");
?>
