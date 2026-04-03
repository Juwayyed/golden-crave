<?php
$PageTitle = "Menu";
require "./includes/header.php";
?>

<section class="home-slider owl-carousel">
  <div
    class="slider-item"
    style="background-image: url(images/bg_3.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div
        class="row slider-text justify-content-center align-items-center">
        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Our Menu</h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="index.html">Home</a></span>
            <span>Menu</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-intro">
  <div class="container-wrap">
    <div class="wrap d-md-flex align-items-xl-end">
      <div class="info">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">
              <h3>+39 300 0000 000</h3>
              <p>Call us and we would be more than happy to help you!</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-my_location"></span></div>
            <div class="text">
              <h3>8 via Fornace</h3>
              <p>Fiorenzuola d'Arda, Piacenza, Italia</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-clock-o"></span></div>
            <div class="text">
              <h3>Open Monday-Friday</h3>
              <p>8:00am - 9:00pm</p>
            </div>
          </div>
        </div>
      </div>
      <div class="book p-4">
        <h3>Book a Table</h3>
        <form action="#" class="appointment-form">
          <div class="d-md-flex">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="First Name" />
            </div>
            <div class="form-group ml-md-4">
              <input
                type="text"
                class="form-control"
                placeholder="Last Name" />
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon">
                  <span class="ion-md-calendar"></span>
                </div>
                <input
                  type="text"
                  class="form-control appointment_date"
                  placeholder="Date" />
              </div>
            </div>
            <div class="form-group ml-md-4">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input
                  type="text"
                  class="form-control appointment_time"
                  placeholder="Time" />
              </div>
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" placeholder="Phone" />
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <textarea
                name=""
                id=""
                cols="30"
                rows="2"
                class="form-control"
                placeholder="Message"></textarea>
            </div>
            <div class="form-group ml-md-4">
              <input
                type="submit"
                value="Appointment"
                class="btn btn-white py-3 px-4" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="mb-5 heading-pricing ftco-animate">Dishes</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-1.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Beef Steak</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>
                Carefully grilled and served with a touch of herbs and lemon
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-2.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Grilled Rack of Ribs</span></h3>
              <span class="price">$29.00</span>
            </div>
            <div class="d-block">
              <p>
                Smoky and slow cooked with spices to deliver a savory flavor
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-3.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Filet Mignon</span></h3>
              <span class="price">$24.00</span>
            </div>
            <div class="d-block">
              <p>
                Tender and juicy, cooked to perfection with an elegant taste
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-4.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Chicken Curry</span></h3>
              <span class="price">$26.80</span>
            </div>
            <div class="d-block">
              <p>
                Simmered with spices and herbs to create an aromatic dish
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-5.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Sea Trout</span></h3>
              <span class="price">$49.91</span>
            </div>
            <div class="d-block">
              <p>
                Freshly grilled and seasoned to bring out its delicate
                flavors
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-6.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Roasted Beef</span></h3>
              <span class="price">$34.95</span>
            </div>
            <div class="d-block">
              <p>Cooked to perfection and seasoned with herbs</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-7.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Butter Fried Chicken</span></h3>
              <span class="price">$28.45</span>
            </div>
            <div class="d-block">
              <p>Golden and crispy, cooked with rich butter and spices</p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/dish-8.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Chiken Filet</span></h3>
              <span class="price">$32.60</span>
            </div>
            <div class="d-block">
              <p>Tender chicken filet, perfectly grilled and seasoned</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-1.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Orange Juice</span></h3>
              <span class="price">$2.90</span>
            </div>
            <div class="d-block">
              <p>
                Bright and zesty, served chilled to refresh and energize you
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-2.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Pineapple Juice</span></h3>
              <span class="price">$3.30</span>
            </div>
            <div class="d-block">
              <p>
                Both sweet and tropical, prepared to refresh your taste buds
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-3.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Soda Drinks</span></h3>
              <span class="price">$2.50</span>
            </div>
            <div class="d-block">
              <p>
                Fizzy and refreshing to quench your thirst with a lively
                sparkle
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-4.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Lemon Juice</span></h3>
              <span class="price">$2.00</span>
            </div>
            <div class="d-block">
              <p>
                Freshly squeezed and served chilled to quench your thirst
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-5.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Pomegranate Smoothie</span></h3>
              <span class="price">$4.90</span>
            </div>
            <div class="d-block">
              <p>
                Blended smoothly with care to perfection and served chilled
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-6.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Mojito</span></h3>
              <span class="price">$5.70</span>
            </div>
            <div class="d-block">
              <p>
                Mixed with mint and lime to awaken your senses with every
                sip
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-7.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Apple Juice</span></h3>
              <span class="price">$4.50</span>
            </div>
            <div class="d-block">
              <p>
                Crisp and refreshing, pressed to perfection and served
                chilled
              </p>
            </div>
          </div>
        </div>
        <div class="pricing-entry d-flex ftco-animate">
          <div
            class="img"
            style="background-image: url(images/drink-8.jpg)"></div>
          <div class="desc pl-3">
            <div class="d-flex text align-items-center">
              <h3><span>Avocado Smoothie</span></h3>
              <span class="price">$4.80</span>
            </div>
            <div class="d-block">
              <p>
                Both velvety and nourishing, freshly blended and served cold
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-menu mb-5 pb-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Products</h2>
        <p>
          Beyond the doors of our café, a variety of products awaits,
          crafted with care to bring flavor, freshness, and joy to every
          customer who walks in.
        </p>
      </div>
    </div>
    <div class="row d-md-flex">
      <div class="col-lg-12 ftco-animate p-md-5">
        <div class="row">
          <div class="col-md-12 nav-link-wrap mb-5">
            <div
              class="nav ftco-animate nav-pills justify-content-center"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical">
              <a
                class="nav-link active"
                id="v-pills-2-tab"
                data-toggle="pill"
                href="#v-pills-2"
                role="tab"
                aria-controls="v-pills-2"
                aria-selected="false">Drinks</a>

              <a
                class="nav-link"
                id="v-pills-3-tab"
                data-toggle="pill"
                href="#v-pills-3"
                role="tab"
                aria-controls="v-pills-3"
                aria-selected="false">Desserts</a>
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">
            <div class="tab-content ftco-animate" id="v-pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="v-pills-2"
                role="tabpanel"
                aria-labelledby="v-pills-2-tab">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-1.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Orange Juice</a></h3>
                        <p>
                          Bright and zesty, served chilled to refresh and
                          energize your day with every sip.
                        </p>
                        <p class="price"><span>$2.90</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-2.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Pineapple Juice</a></h3>
                        <p>
                          Sweet and tropical, to refresh your taste buds and
                          bring a burst of sunny flavor
                        </p>
                        <p class="price"><span>$3.30</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-3.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Soda Drinks</a></h3>
                        <p>
                          Fizzy and refreshing, served to quench your thirst
                          and add a lively sparkle to every meal
                        </p>
                        <p class="price"><span>$2.50</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-4.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Lemon Juice</a></h3>
                        <p>
                          Freshly squeezed, served chilled to refresh your
                          senses and quench your thirst
                        </p>
                        <p class="price"><span>$2.00</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-5.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Pomegranate Smoothie</a></h3>
                        <p>
                          Smooth and refreshing, blended to perfection and
                          served chilled
                        </p>
                        <p class="price"><span>$4.90</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/drink-6.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Mojito</a></h3>
                        <p>
                          Cool and refreshing, mixed with mint and lime to
                          awaken your senses with every sip
                        </p>
                        <p class="price"><span>$5.70</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="v-pills-3"
                role="tabpanel"
                aria-labelledby="v-pills-3-tab">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-1.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Hot Caramel Cake</a></h3>
                        <p>
                          Soft and rich, baked to perfection and drizzled
                          with caramel for a delightful treat.
                        </p>
                        <p class="price"><span>$7.40</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-2.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Pancakes</a></h3>
                        <p>
                          Fluffy freshly-made pancakes topped with
                          strawberries, berries, and golden honey.
                        </p>
                        <p class="price"><span>$3.90</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-3.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Fruit Tart</a></h3>
                        <p>
                          Crisp and colorful, filled with cream and topped
                          with juicy fruits for a delightful bite
                        </p>
                        <p class="price"><span>$9.90</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-4.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Blueberry Cheesecake</a></h3>
                        <p>
                          smooth and rich, topped with sweet berries to
                          create a perfectly balanced dessert
                        </p>
                        <p class="price"><span>$6.30</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-5.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Banana Split Dessert</a></h3>
                        <p>
                          Drizzled with chocolate sauce and topped with
                          whipped cream and a cherry
                        </p>
                        <p class="price"><span>$5.75</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <div class="menu-wrap">
                      <a
                        href="#"
                        class="menu-img img mb-4"
                        style="background-image: url(images/dessert-6.jpg)"></a>
                      <div class="text">
                        <h3><a href="#">Swiss Roll Cakes</a></h3>
                        <p>
                          Light and fluffy, filled with cream and rolled to
                          create a sweet memory
                        </p>
                        <p class="price"><span>$4.95</span></p>
                        <p>
                          <a
                            href="#"
                            class="btn btn-primary btn-outline-primary">Add to cart</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require "./includes/footer.php";
?>