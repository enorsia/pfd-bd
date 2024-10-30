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
                            href="<?php echo $base_url; ?>index.php">
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
                    <li class="nav-item level_1 has-cats">
                        <!-- <a class="nav-link level_link_1" href="#">
                            <span class="w-nav-title">Products</span>
                        </a> -->
                        <a class="nav-link level_link_1" href="#">
                            <span class="w-nav-title">Products</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                        <ul class="dropdown-menu level_2">
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/leather-jackets.php">Leather Jackets</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/leather-gloves.php">Leather Gloves</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/workwear.php">Workwear</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/towels.php">Towels & Bathrobes</a>
                            </li>
                            <li class="has-sub-cats">
                                <a class="dropdown-item level_link_3" href="#">
                                    Home Textiles
                                    <span class="w-nav-arrow"></span>
                                </a>
                                <ul class="dropdown-menu level_3">
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/bedding.php">
                                            Bedding
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/blanket.php">
                                            Blanket
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/curtains.php">
                                            Curtains
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/cushions.php">
                                            Cushions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/duvet-set.php">
                                            Dubet set
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/flannels.php">
                                            Flannels
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/home-textiles/quilts.php">
                                            Quilts
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="level_2">
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/knitwear.php">
                                    Knitwear
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/denim.php">Denim</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/non-denim.php">Non Denim</a>
                            </li>

                            <!-- <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/pu-jackets.php">Pu Jackets</a>
                            </li>
                             -->
                           
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/canvas-shoes.php">Canvas Shoes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/football.php">Sports Ball</a>
                            </li>
<!--                           
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/woven.php">Woven</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="<?php echo $base_url; ?>about-us.php">
                            <span class="w-nav-title">About US</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="<?php echo $base_url; ?>services.php">
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