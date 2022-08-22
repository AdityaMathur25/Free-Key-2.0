<?php
include("../database/auth_session.php");
require('../database/db.php');
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "adityama_demo1");
//$tab_query = "SELECT * FROM dataa ";
$tab_menu = '';
$tab_content = '';
$i = 0;
$product_query = "SELECT app FROM dataa ";
$product_result = mysqli_query($connect, $product_query);
while ($sub_row = mysqli_fetch_array($product_result)) {
    $tab_content .= '

  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22208%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20208%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_182bcb35538%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_182bcb35538%22%3E%3Crect%20width%3D%22208%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2266.93124771118164%22%20y%3D%22117.54000034332276%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text"> ' . $sub_row["app"] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
  ';
}
$tab_content .= '<div style="clear:both"></div></div>';
$i++;
//  if ($i == ) {
//   # code...
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="icon" href="../images/logo.ico">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>FreeKey 2.0</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="../Pages/Dashboard.php"> 🔑 FreeKey 2.0</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="../Pages/profile.php">Profile Settings</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Contact Support</a>
                        </li>
                        <li><a class="dropdown-item" style="border:3px red solid;" href="../Pages/logout.php">Log Out</a></li>
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
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="../Pages/Dashboard.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-columns-gap"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-1">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <a href="../Pages/application.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-layers"></i></span>
                            <span>Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/profile.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Pages/Community.php" class="nav-link px-3">
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
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row p-2">
                <?php echo $tab_content; ?>

            </div>
            <!-- End of .container -->
        </div>
        <!-- <div class="container my-5"> -->

        <footer class="bg-light text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Social media -->
                <section class="mb-4">
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
            <div class="text-center p-3" style="background-color: rgb(33, 37, 41);">
                © 2022 Copyright:
                <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
                <!-- </div> -->
                <!-- Copyright -->
        </footer>
        </div>
        </div>
        </div>
        </div>

    </main>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/my.js"></script>
    <script src="../js/pg_redirect.js"></script>


</body>

</html>