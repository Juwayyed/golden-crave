<?php
$PageTitle = "Product";
require "../includes/header.php";
?>

<?php
require "../config/config.php";
?>

<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $product = $connection->query("SELECT * FROM products WHERE id='$id'");
  $product->execute();
  $singleProduct = $product->fetch(PDO::FETCH_OBJ);
  if (!$singleProduct) {
    header("Location: " . APPURL . "error-404.php");
    exit;
  }
  $relatedProducts = $connection->query("SELECT * FROM products WHERE category='$singleProduct->category' AND id!='$singleProduct->id'");
  $relatedProducts->execute();
  $allRelatedProducts = $relatedProducts->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST['submit'])) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['user_id'];
    $insert_cart = $connection->prepare("INSERT INTO cart (image, name, description, price, product_id, quantity, user_id) VALUES (:image, :name, :description, :price, :product_id, :quantity, :user_id)");
    $insert_cart->execute([
      ":image" => $image,
      ":name" => $name,
      ":description" => $description,
      ":price" => $price,
      ":product_id" => $product_id,
      ":quantity" => $quantity,
      ":user_id" => $user_id,
    ]);
  }

  if (isset($_SESSION['user_id'])) {
    $validateCart = $connection->query("SELECT * FROM cart WHERE product_id='$id' AND user_id = '$_SESSION[user_id]'");
    $validateCart->execute();
    $rowCount = $validateCart->rowCount();
  }
} else {
  header("Location: " . APPURL . "error-404.php");
  exit;
}
?>

<section class="home-slider owl-carousel">
  <div
    class="slider-item"
    style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div
        class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Product Detail</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span>
            <span>Product Detail</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 ftco-animate">
        <a href="images/menu-2.jpg" class="image-popup"><img
            src="<?php echo APPURL; ?>/images/<?php echo $singleProduct->image; ?>"
            class="img-fluid"
            alt="Product Image" /></a>
      </div>
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h3><?php echo $singleProduct->name; ?></h3>
        <p class="price"><span>$<?php echo $singleProduct->price; ?></span></p>
        <p>
          <?php echo $singleProduct->description; ?>
        </p>

        <form method="POST" action="product-details.php?id=<?php echo $id ?>" />
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="form-group d-flex">
              <?php if (isset($_SESSION['user_id'])) : ?>
                <?php if ($rowCount == 0) : ?>
                  <div class="select-wrap">
                    <div class="icon">
                      <span class="ion-ios-arrow-down"></span>
                    </div>
                    <select name="" id="" class="form-control">
                      <option value="small">Small</option>
                      <option value="medium">Medium</option>
                      <option value="large">Large</option>
                      <option value="extra_large">Extra Large</option>
                    </select>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="w-100"></div>
          <form method="POST" action="product-details.php?id=<?php echo $id ?>" />
          <?php if (isset($_SESSION['user_id'])) : ?>
            <?php if ($rowCount == 0) : ?>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                  <button
                    type="button"
                    class="quantity-left-minus btn"
                    id="minus-btn"
                    data-type="minus"
                    data-field="">
                    <i class="icon-minus"></i>
                  </button>
                </span>

                <input
                  type="text"
                  id="quantity"
                  name="quantity"
                  class="form-control input-number"
                  value="1"
                  min="1"
                  max="100" />
                <span class="input-group-btn ml-2">
                  <button
                    type="button"
                    id="add-btn"
                    class="quantity-right-plus btn"
                    data-type="plus"
                    data-field="">
                    <i class="icon-plus"></i>
                  </button>
                </span>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <input name="image" value="<?php echo $singleProduct->image; ?>" type="hidden" />
        <input name="name" value="<?php echo $singleProduct->name; ?>" type="hidden" />
        <input name="description" value="<?php echo $singleProduct->description; ?>" type="hidden" />
        <input name="price" value="<?php echo $singleProduct->price; ?>" type="hidden" />
        <input name="product_id" value="<?php echo $singleProduct->id; ?>" type="hidden" />
        <?php if (isset($_SESSION['user_id'])) : ?>
          <?php if ($rowCount > 0) : ?>
            <button name="submit" type="submit" class="btn btn-primary py-3 px-5" disabled>Added to Cart</button>
          <?php else : ?>
            <button name="submit" type="submit" class="btn btn-primary py-3 px-5">Add to Cart</button>
          <?php endif; ?>
        <?php endif; ?>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Related products</h2>
        <p>
          Discover more delights, from savory bites to sweet treats, that
          perfectly complement your favorites and bring new flavors to every
          meal experience.
        </p>
      </div>
    </div>
    <div class="row">
      <?php foreach ($allRelatedProducts as $allRelatedProduct) : ?>
        <div class="col-md-3">
          <div class="menu-entry">
            <a
              href="<?php echo APPURL; ?>/products/product-details.php?id=<?php echo $allRelatedProduct->id; ?>"
              class="img"
              style="background-image: url(<?php echo APPURL; ?>/images/<?php echo $allRelatedProduct->image; ?>)"></a>
            <div class="text text-center pt-4">
              <h3><a href="<?php echo APPURL; ?>/products/product-details.php?id=<?php echo $allRelatedProduct->id; ?>"><?php echo $allRelatedProduct->name; ?></a></h3>
              <p>
                <?php echo $allRelatedProduct->description; ?>
              </p>
              <p class="price"><span>$<?php echo $allRelatedProduct->price; ?></span></p>
              <p>
                <a href="<?php echo APPURL; ?>/products/product-details.php?id=<?php echo $allRelatedProduct->id; ?>" class="btn btn-primary btn-outline-primary">Show</a>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
require "../includes/footer.php";
?>