<?php

//Essa deve ser SEMPRE a primeira linha de código do site.
header('Content-Type: text/html; charset=utf-8');





$db = array(
    "hostname" => "localhost",
    "database" =>"vitugo",
    "username" =>"root",
    "password" =>""
);
$conn = new mysqli($db["hostname"], $db["username"], $db["password"], $db["database"]);
