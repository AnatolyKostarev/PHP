<?php

    if ($_POST['firstNext']) {
            header("Location: http://localhost/anatoly/PHP/Tasks/Task_7.2/templates/pageSecond.php");
            exit;
    } elseif ($_POST['secondNext']) {
            header("Location: http://localhost/anatoly/PHP/Tasks/Task_7.2/templates/pageThree.php");
            exit;
    } elseif ($_POST['thirdNext']) {
            header("Location: http://localhost/anatoly/PHP/Tasks/Task_7.2/templates/result.php");
            exit;
    } elseif ($_POST['repeat']) {
            header("Location: http://localhost/anatoly/PHP/Tasks/Task_7.2/templates/pageFirst.php");
            exit;
    }
    
?>