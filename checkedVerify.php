<?php
// Скрипт для задачи 1, который возвращает первоначальную страницу, если не отмечен Subscribe
if (isset($_POST['cSubscribe']))
{
    echo "<h2>Thank you for subscribing!</h2>";
} 
else 
{
    header("Location: ".$_SERVER['HTTP_REFERER']); 
    exit;
}
?>






