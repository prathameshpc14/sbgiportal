<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- Container wrapper -->
<div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand fw-bold mt-1" href="#"><img src="resources/SBGI_LOGO.jpg"> SBGI Portal</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></i></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse text-center" id="navbarText">

        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fw-bold" href="home.php">Home</button></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link fw-bold" href="myinfo.php">My Profile</button></a>
            </li>

            <li class="nav-item">
                <a class="nav-link fw-bold" href="feedetails.php">Fee Details</button></a>
            </li>

            <li class="nav-item">
                <a class="nav-link fw-bold" href="librarydetails.php">Library Details</button></a>
            </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex text-center">
            
            <div class="dropdown mx-0 ">

                <button class="btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['name']; ?>
                </button>
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                </ul>

            </div>

        </div>

    </div>
    <!-- Collapsible wrapper -->

</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->
