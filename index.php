<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    /* David Kislyak
     * 1/6/20
     * 328/pp1/index.php
     * Pair Program 1
     */

    require('functions.php');

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    printArr($numbers);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <p>The largest number of [3, 2, 5, 7, 8, 21, 22, 144, 99, 88, 8] is: </p>
    <?php
        echo '<p>'.largest([3, 2, 5, 7, 8, 21, 22, 144, 99, 88, 8]).'</p>';
    ?>
    <p>The un dupefied array of [88, 21, 22, 144, 99, 88, 88] is: </p>
    <?php
        echo '<p>'.printArr(removeDups([88, 21, 22, 144, 99, 88, 88])).'</p>';
    ?>
</body>
</html>
