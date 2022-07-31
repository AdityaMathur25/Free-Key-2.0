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
            <div class="noisy">
                <ul class="navbar-nav">
                    <li class=" nav-item dropdown dropdown">
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
                        <a href="application.php" class="nav-link px-3 ">
                            <span class="me-2"><i class="bi bi-layers"></i></span>
                            <span>Application</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="Community.php" class="nav-link px-3 ">
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
    <main class="mt-5 pt-3 px-2">
        <div class="info">
            <h6 class="">General Information</h6>
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="row">
                        <div class="col-xl-2 col-lg-12 col-md-4">
                            <div class="upload mt-4 pr-md-4">

                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Profile Picture</p>
                                <div class="dropify-wrapper disabled has-preview">
                                    <div class="dropify-message"><span class="file-icon"></span>
                                        <p>Click to Upload or Drag n Drop</p>
                                        <p class="dropify-error">Ooops, something wrong appended.</p>
                                    </div>
                                    <div class="dropify-loader" style="display: none;"></div>
                                    <div class="dropify-errors-container">
                                        <ul></ul>
                                    </div><input type="file" id="input-file-max-fs" class="dropify" data-default-file="../assets/img/profile-16.jpg" data-max-file-size="2M" disabled="">
                                    <div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="../assets/img/profile-16.jpg"></span>
                                        <div class="dropify-infos">
                                            <div class="dropify-infos-inner">
                                                <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner">profile-16.jpg</span></p>
                                                <p class="dropify-infos-message">Upload or Drag n Drop</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>

                                <form method="POST" action="">
                                    <input type="text" name="linkphoto" id="linkphoto" class="bgchange form-control mb-4" value="../assets/img/profile-16.jpg">
                                    <button name="update_profile_photo" class="btn btn-primary">Update profile photo</button>
                                </form>
                                <p>Upload the image on https://postimages.org/ and select 'direct link' (<a href="https://prnt.sc/v48rei" target="_blank">https://prnt.sc/v48rei</a>)</p>
                            </div>

                        </div>






                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                            <div class="form">
                                <div class="row">
                                    <div class="col-sm-6">





                                        <div class="form-group">
                                            <label for="fullName">Username</label>
                                            <input type="text" class="form-control mb-4" value="lodulalit" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label for="profession">Email</label>
                                            <input type="text" class="form-control mb-4" value="nishuproduction9@gmail.com" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <label for="profession">API Key</label>



                                            <input type="text" class="form-control mb-4" value="You can't get the API key without a premium subscription!" disabled="">
                                            <form method="POST" action="">
                                                <button name="create_api_key" class="btn btn-primary">Generate new API key</button>
                                            </form>
                                            <br>









                                            <form method="POST">
                                                <button class="btn btn-primary mb-2 mr-2" name="twofactor_option"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-unlock">
                                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                        <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                                    </svg>
                                                    Enable two-factor authentication (2FA)
                                                </button>
                                            </form>
                                            <br>
                                            <form method="POST" action="">
                                                <button name="hiddencommunityprofile" class="btn btn-success mb-2">Hide my profile in the community</button>
                                            </form>






                                            <br>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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