<!-- Banner start -->
<div class="banner banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height item-bg active">
                <img class="d-block w-100 h-100" src="<?= $web_template ?>img/banner/img-4.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                        <div class="text-c">
                            <h3>Traveling Home</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?= $web_template ?>img/banner/img-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                        <div class="text-r">
                            <h3>Find Your Dream Property</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?= $web_template ?>img/banner/img-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-r">
                    <div class="carousel-content container">
                        <div class="text-l">
                            <h3>Find Your Amazing Home</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                <li data-target="#bannerCarousole" data-slide-to="0" class="active"></li>
                <li data-target="#bannerCarousole" data-slide-to="1"></li>
                <li data-target="#bannerCarousole" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div class="container search-options-btn-area">
        <a class="search-options-btn d-lg-none d-xl-none">
            <div class="search-options">Search Options</div>
            <div class="icon"><i class="fa fa-chevron-up"></i></div>
        </a>
    </div>
    <!-- Search Section start -->
    <div class="search-section ss-2" id="search-style-2">
        <div class="container">
            <div class="search-section-area ssa2">
                <div class="search-area-inner">
                    <div class="search-contents">
                        <form method="GET">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="form-area">
                                            <option>Form Area</option>
                                            <option>800</option>
                                            <option>1000</option>
                                            <option>1200</option>
                                            <option>1400</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="any-status">
                                            <option>Any Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                    <div class="form-group">
                                        <button class="search-button">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Search Section start -->
<!-- Search Section end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area-8">
    <div class="container">
        <div class="main-title mt2 text-center">
            <h1>Featured Properties</h1>
        </div>
        <div class="row filter-portfolio">
            <div class="cars">
                <?php
                foreach ($Records as $record) {
                    echo '
                     <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="' . $web_template . 'img/properties/properties-6.jpg"
                                 alt="properties">
                            <div class="tag-2">For Rent</div>
                            <div class="plan-price"><sup>Rs</sup>' . $record['Rent'] . '<span>/Day</span></div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="' . $path . 'web/detail/' . $record['UID'] . '">' . ucwords($record['Title']) . '</a>
                            </h3>
                            <div class="location">
                                <a href="' . $web_template . 'properties-details.html">
                                    <i class="fa fa-map-marker"></i> ' . $record['Address'] . '
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-area"></i> ' . $record['AreaSq'] . ' sq ft
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i> ' . $record['Bed'] . ' Beds
                                </li>
                                <li>
                                    <i class="flaticon-bathroom"></i>' . $record['Bath'] . ' Baths
                                </li>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
                    
                    ';
                }


                ?>

            </div>
        </div>
    </div>
</div>

<div class="our-team content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Team</h1>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel"
                 data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="row team-2">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad clip-home">
                            <div class="photo">
                                <img src="<?= $web_template ?>img/avatar/avatar-10.jpg" alt="avatar-10"
                                     class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad bg align-self-center">
                            <div class="detail">
                                <h4>
                                    <a href="agent-detail.html">Syeda Khadija tul kubra</a>
                                </h4>
                                <h5>Office Manager</h5>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <i class="flaticon-pin"></i><a>44 New Design Street,</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-mail"></i><a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-phone"></i><a href="tel:+554XX-634-7071"> +55
                                                4XX-634-7071</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="row team-2">
                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-pad">
                            <div class="photo">
                                <img src="<?= $web_template ?>img/avatar/avatar-9.jpg" alt="avatar-9" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-pad bg align-self-center">
                            <div class="detail">
                                <h4>
                                    <a href="<?= $web_template ?>agent-detail.html">Aelaf Jamshaid</a>
                                </h4>
                                <h5>Creative Director</h5>
                                <div class="contact">
                                    <ul>
                                        <li>
                                            <i class="flaticon-pin"></i><a>44 New Design Street,</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-mail"></i><a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                        </li>
                                        <li>
                                            <i class="flaticon-phone"></i><a href="tel:+554XX-634-7071"> +55
                                                4XX-634-7071</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="social-list clearfix">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our team end -->

<!-- Testimonial start -->
<div class="testimonial testimonial-2 content-area-5 bg-grea-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Testimonial</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Slick slider area start -->
                <div class="slick-slider-area">
                    <div class="row slick-carousel"
                         data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                        <?php
                        foreach ($Reviews as $review) {
                            echo '
                         <div class="slick-slide-item">
                            <div class="testimonial-info-box">
                                <div class="profile-user">
                                    <div class="avatar">';
                            if ($review['Image'] > 0) {
                                echo ' <img src="' . $path . 'home/load_image/' . $review['Image'] . '" alt="testimonial-2">';
                            } else {
                                echo ' <img src="' . $template . 'no_image.jpg" alt="testimonial-2">';
                            }
                            echo '
                                    </div>
                                </div>
                                <h5>
                                    <a href="#">' . ucwords($review['Name']) . '</a>
                                </h5>
                                <h6>' . ucwords($review['Designation']) . '</h6>
                                <p><i class="fa fa-quote-left"></i> ' . substr($review['Description'], 0, 300) . '<i class="fa fa-quote-right"></i></p>
                            </div>
                        </div>
                        
                        ';
                        }
                        ?>

                        <!--                        <div class="slick-slide-item">-->
                        <!--                            <div class="testimonial-info-box">-->
                        <!--                                <div class="profile-user">-->
                        <!--                                    <div class="avatar">-->
                        <!--                                        <img src="-->
                        <? //= $web_template ?><!--img/avatar/avatar-2.jpg" alt="testimonial-2">-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                                <h5>-->
                        <!--                                    <a href="#">Auro Navanth</a>-->
                        <!--                                </h5>-->
                        <!--                                <h6>Office Manager, New York</h6>-->
                        <!--                                <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and-->
                        <!--                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever-->
                        <!--                                    since the 1500s, when an unknown <i class="fa fa-quote-right"></i></p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->
