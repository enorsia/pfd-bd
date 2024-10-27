<header class="header">
    <nav class="navbar navbar-expand-lg bg-white p-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $base_url; ?>index.php"><img src="<?php echo $base_url; ?>assets/images/pk-logo.png" alt="logo" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item level_1">
                        <a
                            class="nav-link level_link_1 active"
                            aria-current="page"
                            href="./index.php">
                            <span class="w-nav-title">Home</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                    </li>
                    <!--<li class="nav-item level_1">
                <a class="nav-link level_link_1" href="#">
                  <span class="w-nav-title">Global</span>
                  <span class="w-nav-arrow"></span>
                </a>
              </li>-->
                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="#about_us">
                            <span class="w-nav-title">About US</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item level_1 dropdown">
                        <a class="nav-link level_link_1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="w-nav-title">Products</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>products/knitwear.php">KNITWEAR</a></li>
                            <li><a class="dropdown-item" href="../products/leather-jackets.php">LEATHER JACKETS</a></li>
                            <li><a class="dropdown-item" href="../products/leather-gloves.php">LEATHER GLOVES</a></li>
                            <li><a class="dropdown-item" href="../products/workwear-towels.php">WORKWEAR- TOWELS</a></li>
                            <li><a class="dropdown-item" href="./products/hometextiles.php">HOMETEXTILES</a></li>
                            <li><a class="dropdown-item" href="./products/canvas-shoes.php">CANVAS SHOES</a></li>
                            <li><a class="dropdown-item" href="./products/football.php">FOOTBALL</a></li>
                            <li><a class="dropdown-item" href="./products/denim.php">DENIM</a></li>
                        </ul>
                    </li>
                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="./services.php">
                            <span class="w-nav-title">Services</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                    </li>

                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="#contact">
                            <span class="w-nav-title">Contact</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <!-- <div class="socials-list">
            <a href="#" title="LinkedIn" aria-label="LinkedIn">
              <img src="assets/images/linkedin.png" alt="linkedin">
            </a>
          </div> -->
            </div>
        </div>
    </nav>
</header>