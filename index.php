<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Title-->
    <title>SBGI Portal | Login</title>
</head>
<body>
    <img src="resources/logIN_nav_logo.png" id="loginnav">
    <!--Login page-->
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-75">
                <div class="divider d-flex align-items-center mt-0">
                    <p class="text-center fs-5 fw-bold ">SBGI Portal Login</p>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="resources/index_home.jpg"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="login.php" method="post">
                        <div class=" d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-10 mb-0 mt-2">
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                            </p>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3">Username - </label>
                            <input type="text" name="uname" id="form3Example3" class="form-control form-control-lg"placeholder="Enter a valid user name"  required />
                        </div>
                        <!-- password input -->
                        <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4">Password - </label>
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password"  required />
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- forgot pass 
                            <a href="#!" class="text-body">Forgot password?</a>
                            -->
                        </div>
                        <!-- Login button -->
                        <div class="text-center text-lg-start mt-2 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
