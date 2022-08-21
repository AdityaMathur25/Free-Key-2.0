<?php
include("../assets/link.php");
include '../assets/nav.php';
// require('../database/db.php');
// include("../database/auth_session.php");

$db = $_POST['name'];
$keys = $_POST['numberr'];

function random_str(
    int $length = 64,
    string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

if (empty($db && $keys)) {
    echo "<script>location.href='../extra/success.php?message=Appname+or+version+cannot+be+empty&type=danger&tom=Sorry+!!!&link=../function/gen-key.php';</script>";
    // header('Location: ../extra/success.php?message=Appname+or+version+cannot+be+empty&type=danger&tom=Sorry+!!!&link=../function/create-app.php');
}
 else {
?>
    <main class="mt-5 pt-3 px-2">
        <div class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title cards">Card title</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text" id="div1" style="text-align:center;">


                    <?php
                    for ($i = 0; $i < $keys; $i++) {
                        // $b = random_str(10);
                        // echo "aditya $b <br>";
                        $a = random_str(12);
                        $ca = $db . "-" . $a;


                        $vb = "Active";
                        $sly = "UPDATE dataa SET ttl = ttl + 1 WHERE app = '" . $db . "'";
                        $c3 = mysqli_query($con, $sly);

                        $added_on = date("Y-m-d H:i:s");
                        $sql = "INSERT INTO $db (`keyy`, `create_at`) VALUES ('" . $ca . "', '$added_on')";
                        $oml = " INSERT INTO `checkk`(`keyy`,`username`,`exp`,`create_at`) VALUES ('" . $ca . "' , '" . $db . "' , '" . $vb . "' , '" . $added_on . "')";
                        //$spl = "insert into oasis (create_at) values ('".$added_on."')";
                        $rs = mysqli_query($con, $sql);
                        $ps = mysqli_query($con, $oml);
                        //$rp = mysqli_query($con, $spl);
                        $affectedRows = mysqli_affected_rows($con);

                        if ($affectedRows == 1) {
                            $successMsg = "Record has been saved successfully";
                        } else {
                            $successMsg = "Nothing Affected";
                        }
                        $b = "First visit Sucess";

                        $name = "OASIS";

                        echo $ca . "<br>";
                    } ?>
                    <button id="button1" onclick="CopyToClipboard('div1')" class="btn btn-primary stretch" style="width: 100%;">Copy all keys</button>
            </div>
        </div>
    </main>

    </p>
<?php

}
include '../assets/footer.php';
?>

    <script>
        function CopyToClipboard(containerid) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(containerid));
                range.select().createTextRange();
                document.execCommand("copy");
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(containerid));
                window.getSelection().addRange(range);
                document.execCommand("copy");
                alert("Text has been copied, now paste in the text-area")
            }
        }
    </script>

</body>
?>
<script>
        window.onload = function() {
            history.replaceState("", "", "../extra/success.php?message=Page+Refresh+Is+Not+Allowed&type=danger&tom=Sorry+🙇");
        }
    </script>