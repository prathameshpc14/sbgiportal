<?php

$sname= "sql6.freemysqlhosting.net";

$unmae= "sql6500396";

$password = "zCWNFBbJnG";

$db_name = "sql6500396";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection UNSuccessful!";

}