<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-default" style="background-color:#ededed;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold " href="#"><img src="resources/SBGI_LOGO.jpg"> SBGI Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="bi bi-arrow-down-circle-fill fa-7x"></i></span>
            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item my-1 mx-1">
                    <a href="home.php"><button class="btn btn-sm btn-outline-success" type="button">Home</button></a>
                    </li>
                    <li class="nav-item my-1 mx-1">
                    <a href="myinfo.php"><button class="btn btn-sm btn-outline-success" type="button">My Profile</button></a>
                    </li>
                    <!-- <li class="nav-item my-1 mx-1">
                    <a href="attendence.php"><button class="btn btn-sm btn-outline-success" type="button">Your Attendence</button></a>
                    </li> -->
                    <li class="nav-item my-1 mx-1">
                    <a href="feedetails.php"><button class="btn btn-sm btn-outline-success" type="button">Fee Details</button></a>
                    </li>
                    <li class="nav-item my-1 mx-1">
                    <a href="librarydetails.php"><button class="btn btn-sm btn-outline-success" type="button">Library Details</button></a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn-sm btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                    </button>
                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-center" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <div class="profile d-none d-lg-block">
                    <img  src="resources/Def_Profile.png">
                </div>
            </div>
        </div>
    </nav>
    <!--NAVBAR-->