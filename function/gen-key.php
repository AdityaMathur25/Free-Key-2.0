<?php
include '../assets/nav.php'
?>
<link rel="stylesheet" href="../css/my.css" />
<link rel="stylesheet" href="../css/formq.css" />
<link rel="stylesheet" href="../css/jp.css" />
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center text-uppercase">
                <h4>Generate Key</h4>
            </div>
            <div class="form-body ">
                <div class="row">
                    <div class="form-holderr">
                        <div class="form-content formb ">
                            <div class="form-items">
                                <form class="requires-validation" method="post" action="appcreate.php " novalidate>
                                    <div class="col-md-12">
                                        <input class="form-controll" type="text" name="name" placeholder="Enter The Application Name" style="border: 3px solid #0d6efd;" required>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-controll" type="text" name="ver" placeholder="Enter The Application Version" style="border: 3px solid #0d6efd;" required>
                                    </div>
                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary stretch" style="width: 100%;">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../assets/footer.php'
?>