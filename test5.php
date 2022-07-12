<?php
    $a = 10;
    if($a === 10) {
        echo "10です"."<br />";
    }elseif($a === 5) {
        echo "5です"."<br />";
    }

    $b = ($a > 5) ? "TRUEです" : "FALSEです";
    echo $b."<br />";

    switch($a) {
        case 5:
            echo 5;
            break;
        case 10:
            echo 10;
            break;
        default:
            echo "default";
            break;
    }

    $c = 1;
    do {
        echo "<br />";
        echo "実行";
        echo "<br />";
        $c ++;
    }while($c > 2);

    $shiki = array(
        "spring" => "春", "summer" => "夏", "autumn" => "秋", "winter" => "冬"
    );
    foreach($shiki as $key => $name) {
        echo $key."=".$name."<br />";
    }

    $color = array("red", "blue", "green", "yellow");
    foreach($color as $value) {
        echo $value."<br />";
    }
?>