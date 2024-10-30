<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Enorsia PFD Pvt. Ltd. &#8211; Crafting Excellence, &#8211; Building Trust
  </title>

  <?php include('../partials/styles.php') ?>


</head>

<body>
  <?php include('../partials/header.php') ?>

  <main class="main">

    <section class="products_bg towels_bg" style="background-image: url(../assets/images/background/towels.jpg);">
      <div class="products_text">
        <div class="products_title">
          <h1>TOWELS & BATHROBES</h1>
          <h6>SOLID TO DIGITAL PRINTED</h6>
        </div>
        <div class="products_arrow">
          <a href="#product_id">
            <i class="fa-solid fa-angle-down"></i>
          </a>
        </div>
      </div>
    </section>



    <?php include('../partials/related-product.php') ?>

  </main>

  <?php include('../partials/footer.php') ?>

  <?php include('../partials/script.php') ?>
</body>

</html>