<header class="header">
    <nav class="navbar navbar-expand-lg bg-white p-0">
        <div class="container-fluid">
            <style type="text/css">
                .navbar-nav .dropdown-menu {
                    position: static;
                    background: #ffffff;
                    color: #333333;
                    border: none;
                    border-radius: 0;
                    padding: 0;
                }

                .navbar-nav .dropdown-item {
                    display: flex;
                    justify-content: space-between;
                    line-height: 1.5em;
                    padding: 0.6em 20px;
                    font-family: 'Lexend Deca', sans-serif;
                    font-size: 16px;
                    background-color: #fff !important;
                    color: #333333 !important;
                }

                .dropdown-menu.level_2 {
                    min-width: 12rem;
                }

                .w-nav-arrow:before {
                    content: '\f105';
                    font-size: 1.4em;
                    vertical-align: top;
                    font-family: fontawesome;
                    font-weight: 400;
                }

                .has-sub-cats {
                    position: relative;
                }

                .has-sub-cats .w-nav-arrow {
                    display: block;
                }

                .dropdown-toggle::after {
                    display: none;
                }

                @media(min-width: 992px) {
                    .navbar-nav .dropdown-menu {
                        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1), 0 5px 10px rgba(0, 0, 0, 0.2);
                    }

                    .has-cats:hover .dropdown-menu.level_2 {
                        display: block;
                    }

                    .has-sub-cats:hover .dropdown-menu.level_3 {
                        display: block;
                    }

                    .has-sub-cats .dropdown-menu.level_3 {
                        left: 100%;
                        top: 0;
                    }
                }

                @media(max-width: 991px) {
                    .navbar-collapse {
                        max-height: calc(100vh - 70px);
                        overflow-y: auto;
                    }
                    .navbar-nav .dropdown-item {
                        justify-content: center;
                    }

                    .w-nav-arrow {
                        margin-left: 8px;
                    }

                    .w-nav-arrow:before {
                        content: '\f107';
                    }

                    .has-cats .w-nav-arrow {
                        display: block;
                    }

                    .w-nav-title:after {
                        display: none;
                    }

                    .level_link_1.s-active .w-nav-arrow,
                    .level_link_3.s-active .w-nav-arrow {
                        display: block;
                        transform: rotate(180deg);
                    }
                }
            </style>
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
                    <li class="nav-item level_1 has-cats">
                        <!-- <a class="nav-link level_link_1" href="#">
                            <span class="w-nav-title">Products</span>
                        </a> -->
                        <a class="nav-link level_link_1" href="#">
                            <span class="w-nav-title">Products</span>
                            <span class="w-nav-arrow"></span>
                        </a>
                        <ul class="dropdown-menu level_2">
                            <li class="level_2">
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/knitwear.php">
                                    Knitwear
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/leather-jackets.php">Leather Jackets</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/leather-gloves.php">Leather Gloves</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/workwear-towels.php">Workwear</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/workwear-towels.php">Towels</a>
                            </li>
                            <li class="has-sub-cats">
                                <a class="dropdown-item level_link_3" href="#">
                                    Home Textiles
                                    <span class="w-nav-arrow"></span>
                                </a>
                                <ul class="dropdown-menu level_3">
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Bedding
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Blanket
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Curtains
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Cushions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Dubet set
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Flannels
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo $base_url; ?>products/hometextiles.php">
                                            Quilts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/canvas-shoes.php">Canvas Shoes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/football.php">Sports Ball</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>products/denim.php">Denim</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item level_1">
                        <a class="nav-link level_link_1" href="#about_us">
                            <span class="w-nav-title">About US</span>
                            <span class="w-nav-arrow"></span>
                        </a>
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