<?php

$sname= "sql6.freesqldatabase.com";

$unmae= "sql6503160";

$password = "erhjuqP4Jd";

$db_name = "sql6503160";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection UNSuccessful!";

}
