<?php 
session_start();
if (isset($_SESSION['prn_no'])) 
{   
    $prn = $_SESSION['prn_no'];
    include 'db_connect.php';
    $email = $_REQUEST['email'];

    $sql = "UPDATE studentdb SET studemail='$email' WHERE prnno='$prn'";

    if ($conn->query($sql) === TRUE) 
    {
        header("Location: myinfo.php?errorsuccess=Email Address updated Successfully.");
        exit();
    } else {
        header("Location: myinfo.php?errorfail=Something went wrong to updating record : $conn->error");
        exit();
    }
}
else
{
    header("Location: index.php");
    exit();
}
?>