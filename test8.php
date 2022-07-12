<?php
// $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
// $blog = htmlspecialchars($_POST["blog"], ENT_QUOTES);
// echo "お名前は".$name."で、ブログ名は".$blog."です";

$name = $_POST["name"];
$blog = $_POST["blog"];
echo "お名前は".$name."で、ブログ名は".$blog."です";

?>