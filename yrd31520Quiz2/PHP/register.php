<?php
$data = array($_POST["firstname"], $_POST["lastname"], $_POST["email"]);
setcookie("userdata", serialize($data));
?>