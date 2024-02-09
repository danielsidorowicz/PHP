<?php
session_start();
//print_r($_POST); // $_GET
$_POST["planet"] = "EARTH";
sleep(2);
echo json_encode($_POST);
