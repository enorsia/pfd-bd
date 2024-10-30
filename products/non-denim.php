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

    <section class="products_bg non_denim_bg" style="background-image: url(../assets/images/background/non-denim.png);">
      <div class="products_text">
        <div class="products_title">
          <h1>NON-DENIM</h1>
          <h6>VERSATILE TO VIBRANT FASHION</h6>
        </div>
        <div class="products_arrow">
          <a class="product_body_id" href="#product_id">
            <i class="fa-solid fa-angle-down"></i>
          </a>
        </div>
      </div>
    </section>

    <section class="products_img " id="product_id">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="img_container">

              <div class="big">
                <a href="<?php echo $base_url; ?>assets/images/products/denim/1.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/denim/1.jpeg" />
                </a>
              </div>

              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/denim/2.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                  <img src="<?php echo $base_url; ?>assets/images/products/denim/2.jpeg" />
                </a>
              </div>
              <div class="big">
                <a href="<?php echo $base_url; ?>assets/images/products/denim/3.jpeg" data-fancybox="gallery" data-caption="Caption #2">
                  <img src="<?php echo $base_url; ?>assets/images/products/denim/3.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/denim/4.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                  <img src="<?php echo $base_url; ?>assets/images/products/denim/4.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/denim/5.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                  <img src="<?php echo $base_url; ?>assets/images/products/denim/5.jpeg" />
                </a>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include('../partials/related-product.php') ?>

  </main>

  <?php include('../partials/footer.php') ?>

  <?php include('../partials/script.php') ?>
</body>

</html>