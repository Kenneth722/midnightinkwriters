    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            
            <div class="row">
                <?php if (!$this->ion_auth->logged_in()) { ?>
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h3 class="text-purple"><strong>It's always midnight somewhere.</strong></h3>
                <h1 class="text-dark">MidnightInkWriters</h1>
                <p class="">With our combined 21 years experience in this industry we are able to help thousands of writers publish their story since 2000. We are not a publishing house, instead we are group of liaisons who will bridge towards achieving yours dream of becoming an author with all our contacts in the publishing, marketing, and bookselling world the fastest and cheapest way possible.</p>
                <div class="d-flex">
                    <div cass="form-group" style="margin-right: 5px">
                        <a href="#packages" class="btn btn-purple btn-lg text-white scrollto">View Packages</a>
                    </div>
                    <div class="form-group">
                        <a href="subscription" class="btn btn-purple btn-lg text-white">Subscribe</a>
                    </div>
                    <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                </div>
                </div>
                <?php } else { ?>
                    <?php if ($this->ion_auth->in_group(array('author'))) { ?>
                        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                            <div class="card bg-purple text-white">
                                <div class="card-body">
                                    <div class="form-group">
                                        <center>
                                            <label class="form-label h3">My Total Services : <?php echo $service_count; ?></label><br>
                                            <center><a href="" class="btn btn-light">View My Service List</a></center>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/homepagebook.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <!-- <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                <div class="icon-box">
                <div class="icon"><i class="bi bi-clipboard-data"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>
            </div>

        </div>
        </section> -->
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <!-- <section id="about" class="about">
        <div class="container">

            <div class="row">
            <div class="col-lg-6">
                <img src="assets/img/about.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>
                <ul>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda</li>
                </ul>
                <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
            </div>

        </div>
        </section> -->
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
        <div class="container">

            <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
            </div>

            </div>

        </div>
        </section> --><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
            <span>Services</span>
            <h2>Services</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Sed ut perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">Dele cardo</a></h4>
                <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Divera don</a></h4>
                <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

            </div>

        </div>
        </section> --><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
            <span>Portfolio</span>
            <h2>Portfolio</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

            </div>

        </div>
        </section> --><!-- End Portfolio Section -->

    </main><!-- End #main -->