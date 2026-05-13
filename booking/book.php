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

        $input_date = strtotime($date);
        $current_date = strtotime(date("Y-m-d"));

        if ($input_date >= $current_date) {
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
            header("location: " . APPURL . "");
            exit;
        } else {
            //header("location: " . APPURL . "");
            echo "<script>alert('Please choose a valid future date!');</script>";
        }
    }
}
?>

<section class="home-slider owl-carousel">
    <div
        class="slider-item"
        style="background-image: url(<?php echo PRODUCTIMAGE; ?>bg_3.jpg)"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div
                class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Return To</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span>
                        <span>Menu</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require "../includes/footer.php";
?>