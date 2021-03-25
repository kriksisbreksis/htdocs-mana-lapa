<?php
$login = $_POST['login'];
include("db.php");
$sql = "SELECT * FROM users where login = '$login' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fech_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $sname = $row['sname'];
            $login = $row['login'];
            $pass = $row['password'];
        echo "$id" . " " . "$name" . " " . "$sname" . " " . "$login" . " " .$pass. "<br>";
        }
    }

 $conn->close ();
