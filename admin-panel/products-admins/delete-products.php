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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $select = $connection->query("SELECT * FROM products WHERE id = '$id'");
    $select->execute();

    $image = $select->fetch(PDO::FETCH_OBJ);
    unlink("images/" . $image->image . "");

    $delete = $connection->query("DELETE FROM products WHERE id = '$id'");
    $delete->execute();

    header("Location: show-products.php");
    exit;
}
?>

<?php
require "../layouts/footer.php";
?>