<?php 
session_start();
if (isset($_SESSION['prn_no']) && isset($_SESSION['username'])) 
{  
    include "db_connect.php";

    $someID = $_SESSION['prn_no'];
    $sql = "SELECT * FROM studentdb WHERE prnno = $someID;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) 
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['studname'];
        $_SESSION['prn_no'] = $row['prnno'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-STYLE-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home | SBGI_Student_Info</title>
</head>
<body>
<?php include "header.php"; ?>
    <div class="container card mt-2 shadow-sm">
        <h2 class="text-center m-1 fw-bold">Hello, <?php echo $_SESSION['name']; ?></h2>
    </div>
    <img src="resources/logIN_nav_logo.png" id="loginnav">

    <div class="container card shadow-sm mt-2 vh-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="resources/6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-dark bg-dark bg-opacity-50">
                    <h5 class="text-light fw-bold">WELCOME TO SBGI PORTAL</h5>
                    <p class="text-light">BE AN INDUSTRY-READY PROFESSIONAL.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                    <h5 class="text-light fw-bold">WELCOME TO SBGI PORTAL</h5>
                    <p class="text-light">BE AN INDUSTRY-READY PROFESSIONAL.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/8.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                    <h5 class="text-light fw-bold">WELCOME TO SBGI PORTAL</h5>
                    <p class="text-light">BE AN INDUSTRY-READY PROFESSIONAL.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/9.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                    <h5 class="text-light fw-bold">WELCOME TO SBGI PORTAL</h5>
                    <p class="text-light">BE AN INDUSTRY-READY PROFESSIONAL.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="resources/10.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50">
                    <h5 class="text-light fw-bold">WELCOME TO SBGI PORTAL</h5>
                    <p class="text-light">BE AN INDUSTRY-READY PROFESSIONAL.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

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