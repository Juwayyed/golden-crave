<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php
if (!isset($_SESSION['adminname'])) {
  header("location: " . ADMINURL . "admins/login-admins.php");
}
if (isset($_POST['submit'])) {
  if (empty($_POST['name']) or empty($_POST['price']) or empty($_POST['description']) or empty($_POST['category'])) {
    echo "<script>alert('Complete Required Information!');</script>";
  } else {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $dir = "images/" . basename($image);
    $insert = $connection->prepare("INSERT INTO products(name, price, description, category, image) VALUES (:name, :price, :description, :category, :image)");
    $insert->execute([
      ":name" => $name,
      ":price" => $price,
      ":description" => $description,
      ":category" => $category,
      ":image" => $image,
    ]);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
      header("location: show-products.php");
    }
  }
}
?>

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline">Create Product</h5>
        <form method="POST" action="create-products.php" enctype="multipart/form-data">
          <!-- Email input -->
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />

          </div>
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />

          </div>
          <div class="form-outline mb-4 mt-4">
            <input type="file" name="image" id="form2Example1" class="form-control" />

          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-outline mb-4 mt-4">

            <select name="category" class="form-select form-control" aria-label="Default select example">
              <option selected>Choose Category</option>
              <option value="Beverage">Beverage</option>
              <option value="Dishes">Dishes</option>
              <option value="Dessert">Dessert</option>
            </select>
          </div>

          <br>



          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


        </form>

      </div>
    </div>
  </div>
</div>
<?php require "../layouts/footer.php"; ?>