<?php
    function multiple($a,$b){
        $sum = $a * $b;
        print($sum);
    }
    multiple(10,20);

    function add($a,$b,$c,$d){
        return array($a,$b,$c,$d);
    }
    // [$a,$b] = add(100,200);
    // print($Sum = " . ($a+$b));
    // $sum = add(100,200);
    // print("Sum = " . $sum[0]+$sum[1]);
    list($a,$b,$c,$d) = add(100,200,300,400);
    print($d . ($a+$b+$c));
?>