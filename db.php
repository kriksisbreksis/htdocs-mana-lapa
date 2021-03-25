<?php

$mysqli = mysqli_connect("sql308.epizy.com", "epiz_27489245", "WbdBfe8dealWH");
mysqli_select_db($mysqli, "epiz_27489245_projekts");
$mysqli->query("set character_set_client='utf8'");
$mysqli->query("set character_set_results='utf8'");
$mysqli->query("set collation_connection='utf81_general_ci'");
$mysqli->query("SET NAMES utf8");
