<?php
$PageTitle = "Booking";
require "../includes/header.php";
?>

<?php require "../config/config.php"; ?>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['first_name']) or empty($_POST['last_name']) or empty($_POST['date']) or empty($_POST['time']) or empty($_POST['phone']) or empty($_POST['message'])) {
        echo "<script>alert('Complete Required Information!');</script>";
    } else {
        $user_id = $_SESSION['user_id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        //("n/j/Y") -> Gets date without the leading zeroes (ex: 3/2/2026) instead of (03/02/2026)
        if ($date > date("n/j/Y")) {
            $insert = $connection->prepare("INSERT INTO bookings (user_id, first_name, last_name, date, time, phone, message) VALUES (:user_id, :first_name, :last_name, :date, :time, :phone, :message)");

            $insert->execute([
                ":user_id" => $user_id,
                ":first_name" => $first_name,
                ":last_name" => $last_name,
                ":date" => $date,
                ":time" => $time,
                ":phone" => $phone,
                ":message" => $message
            ]);

            echo "<script>alert('Table booked successfully!');</script>";
        } else {
            header("location: " . APPURL . "");
        }
    }
}
