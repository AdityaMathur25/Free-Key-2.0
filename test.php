<?php
//error_reporting(E_ERROR | E_PARSE);
$fp = fopen("exclude/adi.php","wb");

?>
<html>

<body>

    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>

</body>

</html>