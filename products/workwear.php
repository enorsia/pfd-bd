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

    <section class="products_bg knitwear_bg">
      <div class="products_text">
        <div class="products_title">
          <h1>Workwear Towels</h1>
          <!-- <h6>Woven to Workwear Towels</h6> -->
        </div>
        <div class="products_arrow">
          <a href="#product_id">
            <i class="fa-solid fa-angle-down"></i>
          </a>
        </div>
      </div>
    </section>

    <section class="products_img" id="product_id">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="img_container">
              <div class="big">
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/1.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/1.jpeg" />
                </a>
              </div>

              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/2.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/2.jpeg" />
                </a>
              </div>
              <div class="big">
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/3.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/3.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/4.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/4.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/5.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/5.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/6.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/6.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/7.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/7.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/8.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/8.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/9.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/9.jpeg" />
                </a>
              </div>
              <div>
                <a href="<?php echo $base_url; ?>assets/images/products/workwear/10.jpeg" data-fancybox="gallery" data-caption="">
                  <img src="<?php echo $base_url; ?>assets/images/products/workwear/10.jpeg" />
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