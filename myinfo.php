<?php 
session_start();
if (isset($_SESSION['prn_no'])) 
{  
    include 'db_connect.php';
    $someID = $_SESSION['prn_no'];
    $sql = "SELECT * FROM studentdb WHERE prnno = $someID;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) 
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['prn_no']=$row['prnno'];
        $_SESSION['name'] = $row['studname'];
        $_SESSION['branch'] = $row['studbranch'];
        $_SESSION['class'] = $row['studclass'];
        $_SESSION['phone'] = $row['studphone'];
        $_SESSION['dob'] = $row['studdob'];
        $_SESSION['year'] = $row['studadmyear'];
        $_SESSION['email'] = $row['studemail'];
        $_SESSION['type'] = $row['studadmtype'];
        $_SESSION['roll'] = $row['studrollno'];
        $_SESSION['regdate'] = $row['regdate'];
        $_SESSION['gen'] = $row['gen'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-STYLE-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/demo.cs" />
    <link rel="stylesheet" href="css/myinfo.css">
    <!--BOOTSTRAP-->
    <link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <style>
        #Barcode
        {
            font-family: 'Libre Barcode 39';font-size: 35px;
            text-align: center;
        }
    </style>
    <!--Title-->
    <title>Home | SBGI_Student_Info</title>
</head>
<body>
    <?php include "header.php"; ?>
    <!--Main Body-->
    <!-- Student Profile -->
    
    <?php if (isset($_GET['errorsuccess'])) { ?>
        <div class="container">
			<div class="alert alert-success alert-dismissible fade show m-2 mx-2 my-2 text-center" role="alert">
		        <strong>SUCCESS - </strong><?php echo $_GET['errorsuccess']; ?>
			    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
    <?php } ?>
    
    <?php if (isset($_GET['errorfail'])) { ?>
        <div class="container">
			<div class="alert alert-success alert-dismissible fade show m-2 mx-2 my-2 text-center" role="alert">
		        <strong>Failed - </strong><?php echo $_GET['errorfail']; ?>
			    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
    <?php } ?>

    <div class="student-profile py-1">
        <div class="container mt-0">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm mt-4">
                        <div class="card-header bg-transparent text-center">
                            <img class="profile_img" src="resources/Def_Profile.png" alt="student dp">
                            <h3><?php echo $_SESSION['name'];?></h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-0"><strong class="pr-1">PRN No - </strong><?php echo $_SESSION['prn_no'];?></p>
                            <p class="mb-0"><strong class="pr-1">Branch - </strong><?php echo $_SESSION['branch'];?></p>
                            <p class="mb-0"><strong class="pr-1">Class - </strong><?php echo $_SESSION['class'];?></p>
                            <p class="mb-0"><strong class="pr-1">Email - </strong><?php echo $_SESSION['email'];?></p>
                            <p class="mb-0"><strong class="pr-1">Phone - </strong><?php echo $_SESSION['phone'];?></p>
                            <p id="Barcode"><?php echo $_SESSION['prn_no'];?></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="mb-0"><i class="pr-1"></i>General Information</h3>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Date of Birth</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['dob'];?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Roll No</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['roll'];?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Academic Year	</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['year'];?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Gender</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['gen'];?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Addmission Type</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['type'];?></td>
                                </tr>
                                <tr>
                                    <th width="30%">Registration Date</th>
                                    <td width="2%">-</td>
                                    <td><?php echo $_SESSION['regdate'];?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card shadow-sm mt-4">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Student Services</h3>
                    </div>
                    <div class="card-body pt-0 mx-auto">
                        <p>

                            <button type="button" class="btn btn-sm btn-primary btn-block mx-1 my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Change Email
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Type new email address here</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="updateemail.php" method="post">
                                        <div class="mb-3">
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>

                            <button type="button" class="btn btn-sm btn-primary btn-block mx-1 my-1" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Change Phone
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Type new Phone Number here</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="updatephone.php" method="post">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </p>
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
}
else
{
    header("Location: index.php");
    exit();
}
?>