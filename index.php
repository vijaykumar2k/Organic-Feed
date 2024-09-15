<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRCF</title>
    <link rel="icon" href="img/logo1.png" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="style.css" rel="stylesheet">
    <style>
    .fixed-size {
        width: 100%;
        /* Ensure image takes full width of container */
        /* max-width: 100%; */
        /* Prevents overflow */
        /* height: 500px; */
        /* Set a fixed height for the images */
        /* object-fit: cover; */
        /* Cover ensures the image fits within the set size */
        /* object-position: center; */
        /* Centers the image within its container */
    }
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php  include ('header.php'); ?>


    <!--- Image Slider -->
    <div id="slides" class="carousel slide top-slider" data-ride="carousel" data-interval="5000" data-aos="fade-up"
        data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
            <li data-target="#slides" data-slide-to="4"></li>
            <li data-target="#slides" data-slide-to="5"></li>
            <li data-target="#slides" data-slide-to="6"></li>
            <li data-target="#slides" data-slide-to="7"></li>
        </ul>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="image fixed-size" src="img/slider15.jpg">

            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider10.jpg">
            </div>
            
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider13.jpg">
            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider11.jpg">
            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider12.jpg">
            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider7.jpg">
            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider16.jpg">
            </div>
            <div class="carousel-item">
                <img class="image fixed-size" src="img/slider5.jpg">
            </div>
        </div>

        <!-- Controls for Previous and Next -->
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--- Jumbotron -->
    <div class="container-fluid" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="">We supply Safe & Clean Agricultural Products to the world (our top priority is to give
                    our customer high agricultural products with reasonable price).</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a onclick="window.location='#footer'"><button type="button" class="btn btn-outline-secondary
			btn-lg">Contact</button></a>
            </div>
        </div>
    </div>

    <!---About Section -->
    <div class="container-fluid padding" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="row welcome text-center">
            <div class="col-12 ">
                <h1 class="">About Us.</h1>
            </div>
            <hr>
            <div class="col-12 ">
                <p class=" text-justify normal-text ">Founded in 1987 and headquartered in Jaipur, Rajasthan, India, SHREE RAM
                    CATTLE FEED INDUSTRIES specialised in the manufacturing and trading of a diverse range of Non-GMO
                    products, including De-oiled Rice Bran Meal, Yellow Maize, Barley,
                    Soyabean Meal, Rapeseed Meal, and Spices. The Organization also provides Certified Organic products
                    such as Organic Soyabean Meal, Organic Barley, and Organic Maize. With a strong market presence,
                    SHREE RAM CATTLE FEED INDUSTRIES serves
                    clients across Vietnam, Myanmar, Bangladesh and Sri Lanka.</p>
                <br>
                <a href="about.php" class="btn btn-primary ">KNOW MORE</a>
            </div>
        </div>
    </div>

    <!--- Our divisions -->

    <div class="container-fluid padding pl-2" style="background-color: rgb(243, 223, 247); " data-aos="fade-up"
        data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <h1 style=" text-align: center;">Our Divisions</h1>
        <div class="row text-center padding">

            <br>
            <div class="col-md-12 col-lg-6 ">
                <div class="division-left">
                    <!-- <i class="fas fa-code"></i> -->
                    <h3>INTERNATIONAL DIVISION</h3>
                    <p class="text-justify ">Shree Ram Cattle Feed Industries operates globally, serving regions like
                        Bangladesh, Vietnam, Myanmar, and Sri Lanka. We prioritize excellence,
                        ethics, and professionalism, fostering long-term relationships
                        through experienced leadership and a skilled team. Our unwavering dedication to quality and
                        integrity drives our success and ensures we consistently meet the highest standards.</p>
                    <br>
                    <a href="international_division.php" class="btn btn-primary float-left">KNOW MORE</a>
                </div>
            </div>
            
            <div class="col-md-12 col-lg-6  ">
                


                <div class="division-right">
                    <h3>INDIA DIVISION</h3>
                    <p class="text-justify pl-3">For over two decades, Shree Ram Cattle Feed has been a trusted provider
                        of premium Compound Cattle Feed and By-Pass Protein in India. Our brands, 'Proton' and 'Doodh
                        Mishri,' are known for quality and reliability. Strong relationships
                        with milk producers and gaushalas, along with continuous innovation, have cemented our
                        leadership in the cattle feed industry.</p>
                    <br>
                    <a href="india_division.php" class="btn btn-primary float-left">KNOW MORE</a>
                </div>
            </div>
        </div>

    </div>
    <br>
    <hr class="my-4">

    <!--- product slider  --->
    <div class="products-section" data-interval="2000" data-aos="fade-up" data-aos-offset="200" data-aos-delay="65" data-aos-duration="1000">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="">Products</h1>
            </div>
        </div>
        </div>
        <div class="products-section" data-interval="2000" data-aos="fade-up" data-aos-offset="200" data-aos-delay="65" data-aos-duration="1000">
        <div id="productSlides" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators product-indicators" >
                <li data-target="#productSlides" data-slide-to="0" class="active"></li>
                <li data-target="#productSlides" data-slide-to="1"></li>
                <li data-target="#productSlides" data-slide-to="2"></li>
            </ul>

            <!-- Carousel Inner -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Product Slide 1 -->
                    <div class="container-fluid padding">
                        <div class="row padding">
                            <div class="col-md-12 col-lg-6">
                                <div class="division-left">
                                    <h2>
                                        Proton <br>Cattle <br>Feed
                                    </h2>
                                    <p>Cattle require specific proportions of protein, fat, and fiber at different
                                        stages of their development to support growth, bone strength, immunity, and milk
                                        production. Therefore, providing them with a balanced feed is essential to meet
                                        these nutritional needs and ensure their overall health and productivity.</p>

                                    <div class=" d-flex justify-content-center">
                                        <a href="india_division.php" class="btn btn-primary">KNOW MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-division-img">
                                    <img src="img/india/p1-3.jpg" class="img-fluid">
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <!-- Product Slide 2 -->
                    <div class="container-fluid padding">
                        <div class="row padding">
                            <div class="col-md-12 col-lg-6">
                                <div class="division-left">
                                    <h2>
                                        Indian<br>Soyabean <br> Meal
                                    </h2>
                                    <p>We offer premium-quality Organic Soyabean Meal, made from organically grown
                                        soyabean seeds. With its high protein and fat content, Organic Soyabean Meal is a
                                        vital ingredient in formulating organic compound feed.</p>
                                    <div class=" d-flex justify-content-center">
                                        <a href="feed_ingredients.php" class="btn btn-primary">KNOW MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-division-img">
                                <img src="img/feed/p1-1.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Slide 3 -->
                <div class="carousel-item">
                    <div class="container-fluid padding">
                        <div class="row padding">
                            <div class="col-md-10 col-lg-6">
                                <div class="division-left">
                                    <h2>
                                        Doodh Mishri <br>Compound Feed
                                    </h2>
                                    <p>As a certified organic feed mill of India, we are dedicated to delivering the
                                        highest quality organic feed, crafted from premium organic ingredients. Our
                                        carefully developed system ensures that pesticides, antibiotics, preservatives,
                                        artificial hormones, and GMOs are completely eliminated throughout our organic
                                        sourcing and production processes.</p>
                                    <div class=" d-flex justify-content-center">
                                        <a href="india_division.php" class="btn btn-primary">KNOW MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-division-img">
                                <img src="img/india/p2-1.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls for Previous and Next -->
            <a class="carousel-control-prev" href="#productSlides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productSlides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <hr class="my-4">


    


    <!--- Affiliations -->
    <div class="container-fluid padding" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="affiliations-section row welcome text-center">
            <div class="col-12">
                <h1 class="">Affiliations </h1>
            </div>
        </div>


        <!--- Cards -->
        
            <div class="row padding  justify-content-center">
                <div class="col-md-4 ">
                    <div class="card">
                        <img class="card-img-top" src="img/certifict1.jpg">
                        <!-- <div class="card-body">
                        <h4 class="card-title">Phil Ho</h4>
                        <p class="card-text">Phil is an developer with over 5 years of web development experience.</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/certifict2.jpg">
                        <!-- <div class="card-body">
                        <h4 class="card-title">Phil Ho</h4>
                        <p class="card-text">Phil is an developer with over 5 years of web development experience.</p>
                        <a href="#" class="btn btn-outline-secondary">See Profile</a>
                    </div> -->
                    </div>
                </div>
            </div>
            <div class="row padding  justify-content-center">
                <a href="affiliation.php" class="btn btn-primary float-left">KNOW MORE</a>
            </div>
            <hr class="my-4">
        

    </div>

    <!--- philosophy -->
    <div class="container-fluid padding" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
        data-aos-duration="1000">
        <div class="row px-5  text-center">
            <div class="col-md-12 col-lg-6">
                <h2>Our Philosophy</h2>
                <!-- <p>We know that greatness in a disruptive era requires bold ambition, curious talent and a culture that believes we're smarter together.</p> -->
                <p style="">Our business philosophy emphasizes sustainable farming, innovation, and
                    ethical practices to deliver high-quality products that aid farmers, protect the environment, and
                    advance global food security. We are committed to achieving these goals in a cost-effective manner,
                    ensuring both value and sustainability.
                </p>

            </div>
            <div class="col-lg-6 h-50 d-inline-block philosophy-div">
                <img src="img/philosophy.jpg" class="img-fluid rounded " >
            </div>
        </div>
        <hr class="my-4">
    </div>


    <!--- Connect -->
    <!-- footer  -->
    <!-- <div id="footer"></div> -->
    <?php include('footer.php')?>