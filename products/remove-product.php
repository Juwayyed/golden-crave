<?php
$PageTitle = "Remove Product";
require "../includes/header.php";
?>

<?php
require "../config/config.php";
?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: " . APPURL);
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $delete = $connection->prepare("DELETE FROM cart WHERE id = :id AND user_id = :user_id");
    $delete->execute([
        ':id' => $id,
        ':user_id' => $user_id
    ]);

    header("Location: " . APPURL . "cart.php");
    exit;
}
?>

<?php
require "../includes/footer.php";
?>