<?php
    print date("Y")."<br/>";

    function addNum($a, $b) {
        $add = $a + $b;
        return $add;
    }
    $total = addNum(2, 3);
    echo $total."<br/>";

    function getMenu(&$a) {
        $a = "Coffee";
    }
    $b = "Tea";
    echo $b."<br/>";
    getMenu($b);
    echo $b."<br/>";

    function plus($c, $d) {
        $add = $c + $d;
        return $add;
    }
    $e = 10;
    $f = 20;
    $result = plus($e, $f);
    echo $result."<br/>";

    function getDrink($b, $a = "Drink") {
        echo $a."<br/>";
        echo $b;
    }
    getDrink("Alcohol");
?>

