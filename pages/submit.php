<?php
   $data_file = fopen("example.txt","w"); or die()
$name = $_POST["name"];
$name = $_POST["email"];
$name = $_POST["tel"];
$name = $_POST["comment"];
$text_to_write = $name . "" . $email . "" . $tel . "" . $comment

fwrite($data_file , $text_to_write);
fclose($data_file);

?>