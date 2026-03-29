<?php 
$PageTitle = "Cart";
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
              <h1 class="mb-3 mt-5 bread">Cart</h1>
              <p class="breadcrumbs">
                <span class="mr-2"><a href="index.html">Home</a></span>
                <span>Cart</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td class="product-remove">
                      <a href="#"><span class="icon-close"></span></a>
                    </td>

                    <td class="image-prod">
                      <div
                        class="img"
                        style="background-image: url(images/menu-2.jpg)"
                      ></div>
                    </td>

                    <td class="product-name">
                      <h3>Chocolate Coffee</h3>
                      <p>
                        Chocolate Coffee, rich espresso blended with smooth
                        cocoa and milk, the perfect mix.
                      </p>
                    </td>

                    <td class="price">$5.90</td>

                    <td>
                      <div class="input-group mb-3">
                        <input
                          disabled
                          type="text"
                          name="quantity"
                          class="quantity form-control input-number"
                          value="1"
                          min="1"
                          max="100"
                        />
                      </div>
                    </td>

                    <td class="total">$5.90</td>
                  </tr>
                  <!-- END TR-->

                  <tr class="text-center">
                    <td class="product-remove">
                      <a href="#"><span class="icon-close"></span></a>
                    </td>

                    <td class="image-prod">
                      <div
                        class="img"
                        style="background-image: url(images/dish-2.jpg)"
                      ></div>
                    </td>

                    <td class="product-name">
                      <h3>Grilled Ribs Beef</h3>
                      <p>
                        Smoky and slow cooked with spices to deliver a savory
                        flavor
                      </p>
                    </td>

                    <td class="price">$29.00</td>

                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input
                          disabled
                          type="text"
                          name="quantity"
                          class="quantity form-control input-number"
                          value="1"
                          min="1"
                          max="100"
                        />
                      </div>
                    </td>

                    <td class="total">$29.00</td>
                  </tr>
                  <!-- END TR-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3>Cart Totals</h3>
              <p class="d-flex">
                <span>Subtotal</span>
                <span>$34.90</span>
              </p>
              <p class="d-flex">
                <span>Delivery</span>
                <span>$0.00</span>
              </p>
              <p class="d-flex">
                <span>Discount</span>
                <span>$3.00</span>
              </p>
              <hr />
              <p class="d-flex total-price">
                <span>Total</span>
                <span>$31.90</span>
              </p>
            </div>
            <p class="text-center">
              <a href="checkout.html" class="btn btn-primary py-3 px-4"
                >Proceed to Checkout</a
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
                style="background-image: url(images/menu-4.jpg)"
              ></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Caffè Macchiato</a></h3>
                <p>
                  A warm Caffè Macchiato, rich cocoa blended with creamy milk,
                  perfect for sweet moments.
                </p>
                <p class="price"><span warm Caffè Macchiatoan>$7.95</span></p>
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

    <?php 
require "../includes/footer.php";
?>