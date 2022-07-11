<?php

$sname= "sql6.freemysqlhosting.net";

$unmae= "sql6505555";

$password = "I7SMU86LLv";

$db_name = "sql6505555";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection UNSuccessful!";

}
