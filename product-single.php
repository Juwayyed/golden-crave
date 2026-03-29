<?php 
$PageTitle = "Product";
require "../includes/header.php";
?>

    <section class="home-slider owl-carousel">
      <div
        class="slider-item"
        style="background-image: url(images/bg_3.jpg)"
        data-stellar-background-ratio="0.5"
      >
        <div class="overlay"></div>
        <div class="container">
          <div
            class="row slider-text justify-content-center align-items-center"
          >
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Product Detail</h1>
              <p class="breadcrumbs">
                <span class="mr-2"><a href="index.html">Home</a></span>
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
            <a href="images/menu-2.jpg" class="image-popup"
              ><img
                src="images/menu-2.jpg"
                class="img-fluid"
                alt="Colorlib Template"
            /></a>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>Chocolate Coffee</h3>
            <p class="price"><span>$5.90</span></p>
            <p>
              A rich chocolate coffee blends smooth cocoa with bold espresso to
              create a perfectly balanced drink. It is a delightful experience,
              where sweet and bitter notes come together in every warm and
              comforting sip.
            </p>
            <p>
              Crafted with carefully selected cocoa and freshly brewed espresso,
              this chocolate coffee offers a deep and layered flavor that
              unfolds with every sip. The smooth texture and balanced sweetness
              create a comforting sensation, while the rich aroma fills the air
              with warmth. Perfect for those who seek both indulgence and
              energy, it turns every moment into a cozy and satisfying
              experience worth enjoying again.
            </p>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="form-group d-flex">
                  <div class="select-wrap">
                    <div class="icon">
                      <span class="ion-ios-arrow-down"></span>
                    </div>
                    <select name="" id="" class="form-control">
                      <option value="">Small</option>
                      <option value="">Medium</option>
                      <option value="">Large</option>
                      <option value="">Extra Large</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                  <button
                    type="button"
                    class="quantity-left-minus btn"
                    data-type="minus"
                    data-field=""
                  >
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
                  max="100"
                />
                <span class="input-group-btn ml-2">
                  <button
                    type="button"
                    class="quantity-right-plus btn"
                    data-type="plus"
                    data-field=""
                  >
                    <i class="icon-plus"></i>
                  </button>
                </span>
              </div>
            </div>
            <p>
              <a href="cart.html" class="btn btn-primary py-3 px-5"
                >Add to Cart</a
              >
            </p>
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
          <div class="col-md-3">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(images/menu-1.jpg)"
              ></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Capuccino</a></h3>
                <p>
                  A rich cappuccino with velvety foam, meticulously brewed
                  espresso and creamy milk.
                </p>
                <p class="price"><span>$3.40</span></p>
                <p>
                  <a href="#" class="btn btn-primary btn-outline-primary"
                    >Add to Cart</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(images/menu-2.jpg)"
              ></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Chocolate Coffee</a></h3>
                <p>
                  Chocolate Coffee, rich espresso blended with smooth cocoa and
                  milk, the perfect mix.
                </p>
                <p class="price"><span>$5.90</span></p>
                <p>
                  <a href="#" class="btn btn-primary btn-outline-primary"
                    >Add to Cart</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(images/menu-3.jpg)"
              ></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Iced Coffee</a></h3>
                <p>
                  A refreshing iced coffee, chilled espresso mixed with milk and
                  ice, perfect to energize your day.
                </p>
                <p class="price"><span>$6.70</span></p>
                <p>
                  <a href="#" class="btn btn-primary btn-outline-primary"
                    >Add to Cart</a
                  >
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(images/menu-4.jpg)"
              ></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Caffè Macchiato</a></h3>
                <p>
                  A warm Caffè Macchiato, rich cocoa blended with creamy milk,
                  perfect for sweet moments.
                </p>
                <p class="price"><span>$7.95</span></p>
                <p>
                  <a href="#" class="btn btn-primary btn-outline-primary"
                    >Add to Cart</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function () {
        var quantitiy = 0;
        $(".quantity-right-plus").click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          $("#quantity").val(quantity + 1);

          // Increment
        });

        $(".quantity-left-minus").click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          // Increment
          if (quantity > 0) {
            $("#quantity").val(quantity - 1);
          }
        });
      });
    </script>
  
<?php 
require "../includes/footer.php";
?>
