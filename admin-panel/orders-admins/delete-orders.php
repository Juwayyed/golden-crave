<?php
require "../layouts/header.php";
?>

<?php
require "../../config/config.php";
?>

<?php

if (!isset($_SESSION['adminname'])) {
    header("location: " . ADMINURL . "admins/login-admins.php");
}

if (!isset($_SESSION['user_id'])) {
    header("Location: " . APPURL);
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $connection->query("DELETE FROM orders WHERE id = '$id'");
    $delete->execute();

    header("Location: show-orders.php");
    exit;
}
?>

<?php
require "../layouts/footer.php";
?>