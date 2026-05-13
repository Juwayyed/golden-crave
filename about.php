<?php
$PageTitle = "About Us";
require "./includes/header.php";
?>

<?php
require "./config/config.php";
?>

<?php
$testimonials = $connection->query("SELECT * FROM testimonials Limit 5");
$testimonials->execute();
$allTestimonials = $testimonials->fetchAll(PDO::FETCH_OBJ);
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
          <h1 class="mb-3 mt-5 bread"><?php echo $PageTitle; ?></h1>
          <p class="breadcrumbs">
            <span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span>
            <span><?php echo $PageTitle; ?></span>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-about d-md-flex" style="background-image: url(<?php echo PRODUCTIMAGE; ?>bg_4.jpg)">
  <div
    class="one-half img"
    style="background-image: url(<?php echo PRODUCTIMAGE; ?>about.jpg)"></div>
  <div class="one-half ftco-animate">
    <div class="overlap">
      <div class="heading-section ftco-animate">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Story</h2>
      </div>
      <div>
        <p>
          Our journey began with a simple idea: to create a place where
          people can enjoy great food and feel at home. What started as a
          passion for coffee and flavors slowly turned into a space filled
          with warm moments, shared laughter, and unforgettable tastes. Day
          by day, we crafted every detail with care, from our burgers and
          seafood to our desserts and drinks, making sure each visit tells a
          story worth remembering and brings people back for more.
        </p>
      </div>
    </div>
  </div>
</section>

<section
  class="ftco-section img"
  id="ftco-testimony"
  style="background-image: url(<?php echo PRODUCTIMAGE; ?>bg_1.jpg)"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Customers Says</h2>
        <p>
          From first visits to lasting memories, our guests share stories of
          great flavors, warm service, and moments of joy that keep them
          coming back again and again.
        </p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row d-flex no-gutters">

      <?php foreach ($allTestimonials as $testimonials) : ?>
        <div class="col-lg align-self-sm-end">
          <div class="testimony">
            <blockquote>
              <p>
                &ldquo;<?php echo $testimonials->quote; ?>&rdquo;
              </p>
            </blockquote>
            <div class="author d-flex mt-4">
              <div class="image mr-3 align-self-center">
                <img src="<?php echo PRODUCTIMAGE . $testimonials->image; ?>" alt="client photo" />
              </div>
              <div class="name align-self-center">
                <?php echo $testimonials->client; ?>
                <span class="position"><?php echo $testimonials->job; ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<section class="ftco-section" style="background-image: url(<?php echo PRODUCTIMAGE; ?>bg_4.jpg)">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 pr-md-5">
        <div class="heading-section text-md-right ftco-animate">
          <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Menu</h2>
          <p class="mb-4">
            From juicy burgers and fresh seafood to tender lamb ribs and
            fluffy pancakes, our menu brings together rich flavors from
            every corner. Indulge in strawberry cake, crafted with care, and
            enjoy our selection of coffee, cappuccino, iced coffee, and hot
            chocolate, all made to complement every moment.
          </p>
          <p>
            <a
              href="menu.php"
              class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a>
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo PRODUCTIMAGE; ?>menu-1.jpg)"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo PRODUCTIMAGE; ?>menu-2.jpg)"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo PRODUCTIMAGE; ?>menu-3.jpg)"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a
                href="#"
                class="img"
                style="background-image: url(<?php echo PRODUCTIMAGE; ?>menu-4.jpg)"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="ftco-counter ftco-bg-dark img"
  id="section-counter"
  style="background-image: url(<?php echo PRODUCTIMAGE; ?>bg_2.jpg)"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div
            class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon">
                  <span class="flaticon-coffee-cup"></span>
                </div>
                <strong class="number" data-number="100">0</strong>
                <span>Coffee Branches</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon">
                  <span class="flaticon-coffee-cup"></span>
                </div>
                <strong class="number" data-number="85">0</strong>
                <span>Number of Awards</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon">
                  <span class="flaticon-coffee-cup"></span>
                </div>
                <strong class="number" data-number="10567">0</strong>
                <span>Happy Customer</span>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon">
                  <span class="flaticon-coffee-cup"></span>
                </div>
                <strong class="number" data-number="900">0</strong>
                <span>Staff</span>
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