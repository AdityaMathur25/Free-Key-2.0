<?php
include("database/auth_session.php");
require('database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="images/logo.ico">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>FreeKey 2.0</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"> 🔑 FreeKey 2.0</a>
        <!-- <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
               <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form> -->
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-1"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-columns-gap"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-1"><hr class="dropdown-divider bg-light" /></li>
            <!-- <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
            <li>
              <a href="#" class="nav-link px-3">
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
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-people"></i></span>
                <span>Community</span>
              </a>
            </li>
            <li class="my-1"><hr class="dropdown-divider bg-light" /></li>
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
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-5">
              <div class="card-body py-5">Total Applications <?php echo "88" ?> 
              </div>
              
              <div class="card-footer d-flex">
                Manage Applications
                <span class="ms-auto">
                <a
            style="color: white;text-decoration: none;"href="#">
                  <i class="bi bi-chevron-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Total Users</div>
              <div class="card-footer d-flex">
              Manage Users
                <span class="ms-auto">
                <a
            style="color: white;text-decoration: none;"href="#">
                  <i class="bi bi-chevron-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Generate Keys</div>
              <div class="card-footer d-flex">
              More Details
                <span class="ms-auto">
                <a
            style="color: white;text-decoration: none;"href="#">
                  <i class="bi bi-chevron-right"></i></a>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
            <div class="card-body">
            <br>
                 Last Login : 192.168.0.1<br>
                 last location : india

            </div>
              <div class="card-footer d-flex">
              More Details
                <span class="ms-auto">
                <a
            style="color: white;text-decoration: none;"href="#">
                  <i class="bi bi-chevron-right"></i></a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
              📊 Application Information
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>APP NAME</th>
                        <th>VERSION</th>
                        <th>Total User</th>
                        <th>Current User</th>
                        <th>Key Details</th>
                        <th>HWID</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>

                    </thead>
                    <tbody>
                    <?php

// include("auth_session.php");
// require('db.php');// Using database connection file here
$sql = "SELECT * FROM `dataa` where user = '".$_SESSION['username']."' ";
$records = mysqli_query($con,$sql); // fetch data from database
while($data = mysqli_fetch_array($records))
 
{
?>

                    <tr class="active-row" align = "left">
    <td><?php echo $data['app']; ?></td> 
    <td><?php echo $data['veri']; ?></td> 
    <td><?php  $man = $data['app']; $cnt = mysqli_query($con,"SELECT id FROM $man  ORDER BY id DESC  LIMIT 1;"); while($doh = mysqli_fetch_array($cnt)) echo $doh['id'] ;?></td>
    <td><?php  $man = $data['app']; $cnt = mysqli_num_rows(mysqli_query($con,"SELECT * FROM $man;")); echo $cnt?></td>
    <td><a href="current.php?app=<?php echo $data['app']; ?>">View</a></td>
    <td><?php echo $data['hwid']; ?></td> 
    <td><a href="edit.php?id=<?php echo $data['id']; ?>&pname=<?php echo $data['app']; ?>&veri=<?php echo $data['veri']; ?>&updatep=<?php echo $data['links']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>&app=<?php echo $data['app']; ?>">Delete</a></td>
  </tr>	
  
<?php

}
?>
                    </tbody>
                    <!-- <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot> -->
                  </table>
                </div>
                <!-- Remove the container if you want to extend the Footer to full width. -->

</div>
<!-- End of .container -->
              </div>
              <div class="container my-5">

<footer class="bg-light text-center text-white">
<!-- Grid container -->
<div class="container p-4 pb-0">
  <!-- Section: Social media -->
  <section class="mb-4">
    <!-- Facebook -->
    <a
      class="btn btn-primary btn-floating m-1
      href="#!"
      role="button"
      ><i class="bi bi-facebook"></i
    ></a>

    <!-- Twitter -->
    <a
      class="btn btn-primary btn-floating m-1"
      style="background-color: #55acee;"
      href="#!"
      role="button"
      ><i class="bi bi-twitter"></i
    ></a>

    <!-- Google -->
    <a
      class="btn btn-primary btn-floating m-1"
      style="background-color: #dd4b39;"
      href="#!"
      role="button"
      ><i class="bi bi-youtube"></i
    ></a>

    <!-- Instagram -->
    <a
      class="btn btn-primary btn-floating m-1"
      style="background-color: #ac2bac;"
      href="#!"
      role="button"
      ><i class="bi bi-instagram"></i
    ></a>

    <!-- Linkedin -->
    <a
      class="btn btn-primary btn-floating m-1"
      style="background-color: #0082ca;"
      href="#!"
      role="button"
      ><i class="bi bi-linkedin"></i
    ></a>
    <!-- Github -->
    <a
      class="btn btn-primary btn-floating m-1"
      style="background-color: #333333;"
      href="#!"
      role="button"
      ><i class="bi bi-github"></i
    ></a>
  </section>
  <!-- Section: Social media -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgb(33, 37, 41);">
  © 2022 Copyright:
  <a class="text-white" href="#" style="text-decoration: none;">🔑 FREEKEY 2.0</a>
</div>
<!-- Copyright -->
</footer>
            </div>
          </div>
        </div>
      </div>
      
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
    

  </body>

  
</html>
