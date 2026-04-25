<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php
if (!isset($_SESSION['adminname'])) {
    header("location: " . ADMINURL . "admins/login-admins.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['submit'])) {
        if (empty($_POST['status'])) {
            echo "<script>alert('Complete Required Information!');</script>";
        } else {
            $status = $_POST['status'];

            $update = $connection->prepare("UPDATE orders SET status = :status WHERE id='$id'");
            $update->execute([
                ":status" => $status,
            ]);

            header("location: show-orders.php");
        }
    }
}
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Update Status</h5>
                <form method="POST" action="change-status.php?id=<?php echo $id; ?>">
                    <div class="form-outline mb-4 mt-4">
                        <select name="status" class="form-select  form-control" aria-label="Default select example">
                            <option selected>Set Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "../layouts/footer.php"; ?>