<?php 
session_start();
if (isset($_SESSION['prn_no'])) 
{  
    include 'db_connect.php';
    $someID = $_SESSION['prn_no'];
    $sql1 = "SELECT * FROM LibraryDetails WHERE prnno = $someID ORDER BY dateissued DESC;";
    $result = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-STYLE-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fee.css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Title-->
    <title>Library Details | SBGI Student</title>
</head>
<body>
    <?php include "header.php"; ?>
    <!--Main Body-->
    <div class="student-profile py-1 vh-100">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm mt-2">
                        <div class="card-header bg-transparent text-center">
                            <h3><?php echo $_SESSION['name'];?></h3>
                        </div>
                        <div class="card-body">
                            <?php 
                            $sql1 = "SELECT * FROM studentdb WHERE prnno = $someID;";
                            $result1 = mysqli_query($conn, $sql1);
                            $row1 = mysqli_fetch_assoc($result1);
                            $_SESSION['prn_no']=$row1['prnno'];
                            $_SESSION['branch'] = $row1['studbranch'];
                            $_SESSION['class'] = $row1['studclass'];
                            $_SESSION['phone'] = $row1['studphone'];
                            ?>
                            <p class="mb-0"><strong class="pr-1">PRN No - </strong><?php echo $_SESSION['prn_no'];?></p>
                            <p class="mb-0"><strong class="pr-1">Branch - </strong><?php echo $_SESSION['branch'];?></p>
                            <p class="mb-0"><strong class="pr-1">Class - </strong><?php echo $_SESSION['class'];?></p>
                            <p class="mb-0"><strong class="pr-1">Phone - </strong><?php echo $_SESSION['phone'];?></p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8 mt-2">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="pr-1"></i>Book Transactions</h3>
                        </div>
                        <div class="card-body pt-0"> 
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">BOOK ID</th>
                                    <th scope="col">BOOK NAME</th>
                                    <th scope="col">BOOK ISSUED DATE</th>
                                    <th scope="col">BOOK RETURNED DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        echo '<tr>';
                                        echo '<td>'.$row['bookissuedid'].'</td>';
                                        echo '<td>'.$row['bookissuedname'].'</td>';
                                        echo '<td>'.$row['dateissued'].'</td>';
                                        echo '<td>'.$row['datereturned'].'</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Main body end-->
    <?php include "footer.php"; ?>
</body>
</html>
<?php 
}     
else
{
    header("Location: index.php");
    exit();
}
?>
