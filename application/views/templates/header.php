<html>
    <head>
        <base href="<?php echo base_url(); ?>">
        <title></title>
        <!-- Favicons -->
        <link href="<?php echo base_url(); ?>/assets/img/favicon.png" rel="icon">
        <link href="<?php echo base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugin/DataTables/datatables.min.css"/>

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">

        <style>
            .btn-purple {
                background-color: #6190E8;
            }

            .text-purple {
                color: #6190E8;
            }

            .bg-purple {
                background-color: #6190E8;
            }

            #site-content {
                height: 100%;
                padding-top: 82px;
                /*background: #fafbfc;*/
            }
        </style>
    </head>
    <body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="<?php echo base_url(); ?>" class="text-dark">MidnightInkWriters</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <?php if (!$this->ion_auth->logged_in()) { ?>
                <ul>
                    <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Pay</a></li>
                    <li><a class="nav-link scrollto" href="#services">Fanbase Boost</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Local Listing SEO</a></li>
                    <li class="dropdown"><a href="#"><span>Publishing</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Bookstore Placement</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                            <li><a href="#">Deep Drop Down 1</a></li>
                            <li><a href="#">Deep Drop Down 2</a></li>
                            <li><a href="#">Deep Drop Down 3</a></li>
                            <li><a href="#">Deep Drop Down 4</a></li>
                            <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                        <li><a href="auth/login">Login</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            <?php } else { ?>
                <ul>
                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                        <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="dropdown"><a href=""><span>Authors</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="authors/index"><i class="bi bi-list">List of Authors </i></a></li>
                                <li><a href=""><i class="bi bi-lock">Locked Authors </i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="services/index"><i class="bi bi-list">List of Services </i></a></li>
                                <li><a href="services/addNewView"><i class="bi bi-plus">Add Services </i></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                            <li><a href="#">My Info</a></li>
                            <li><a href="auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <?php if ($this->ion_auth->in_group(array('author'))) { ?>
                        <li><a class="nav-link scrollto active" href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="services/index"><i class="bi bi-list">List of Services </i></a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                            <li><a href="#">My Info</a></li>
                            <li><a href="auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            <?php } ?>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->