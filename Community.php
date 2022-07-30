<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="icon" href="images/logo.ico">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/my.css" />
    <title>FreeKey 2.0</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#"> 🔑 FreeKey 2.0</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Contact Support</a>
                        </li>
                        <li><a class="dropdown-item" style="border:3px red solid;" href="logout.php">Log Out</a></li>
                        <li class="dropdown-item">
                            <label for="border2">
                                <input checked="false" type="checkbox" id="border2" />
                                Default Mode
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="Dashboard.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-columns-gap"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-layers"></i></span>
                            <span>Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="Community.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-people"></i></span>
                            <span>Community</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Resources
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-box-arrow-down"></i></span>
                            <span>Downloads</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-code-square"></i></span>
                            <span>Documentation</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- <div class="row p-2">
                <div class="col-8">
                    <a href="application.php" style="text-decoration: none; color: white;">
                        <div class="card bg-primary text-white h-100">
                            <div class="card-body py-5 fs-1 fw-bold fst-italic font-monospace font-italic">Create Application</div>
                    </a>
                    <div class="card-footer d-flex">
                        More Details
                        <span class="ms-auto">
                            <a style="color: white;text-decoration: none;" href="#">
                                <i class="bi bi-chevron-right"></i></a>
                        </span>
                    </div>
                </div>


            </div> -->
    <main class="mt-5 pt-3 px-2">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>

        <button type="button" class="btn btn-link">Link</button>
    </main>

    <!-- <div class="d-flex justify-content-center">
                
                <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Twitter</a>
                <a class="btn btn-primary" style="background-color: #5661F5;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Discord</a>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" style="background-color: #5661F5;" href="#!" role="button"><i class="bi bi-twitter me-2"></i>Discord</a>
            </div>
            <div class="d-flex justify-content-center">
                
            </div> -->
    </div>
    </main>

    </div>
    <footer class="footer ">
        <!-- Grid container -->
        <div class="container p-2 pb-0 ">
            <!-- Section: Social media -->
            <section class="mb-2">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1
        href=" #!" role="button"><i class="bi bi-facebook"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="bi bi-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="bi bi-youtube"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="bi bi-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="bi bi-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="leftt text-center " style="background-color: rgb(33, 37, 41);">
            © 2022 Copyright:
            <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
        </div>
        <!-- Copyright -->
    </footer>
    </div>
    </div>
    </div>
    </div>


    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/my.js"></script>

</body>

</html>