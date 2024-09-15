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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="style.css" rel="stylesheet">
    <style>
    .table-hover tbody tr:hover {
        background-color: rgb(209, 207, 207);
        /* Your custom color */
        color: white;
        /* Optional: change text color on hover */
    }

    /* Ensure smooth height transition */
    .tab-content-wrapper {
        transition: height 0.5s ease;
        overflow: hidden;
    }
    </style>
</head>

<body>

    <!-- Navigation -->
    <?php include('header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img src="img/slider12.jpg" class="img-fluid" alt="About Us Image">
                <div class="carousel-caption">
                    <h1 class="">Feed Ingredients</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <!-- <h2 class="text-center">Domestic Products</h2> -->

        <!-- Nav Tabs for Products -->
        <ul class="nav nav-tabs justify-content-center" id="feed_ingredients" role="tablist"
            style="background-color:rgb(227, 223, 222)">
            <!-- 1 -->
            <li class="nav-item border border-light">
                <a class="nav-link active" id="indian-soyabeen-meal-tab" data-toggle="tab" href="#indian-soyabeen-meal"
                    role="tab" aria-controls="indian-soyabeen-meal" aria-selected="false" style="color: #292929;">
                    INDIAN SOYABEEN MEAL</a>
            </li>
            <!-- 2 -->
            <li class="nav-item border border-light">
                <a class="nav-link " id="rice-tab" data-toggle="tab" href="#rice" role="tab" aria-controls="rice"
                    aria-selected="false" style="color: #292929;">RICE
                </a>
            </li>
            <!-- 3 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="deoiled-rice-bran-meal-tab" data-toggle="tab" href="#deoiled-rice-bran-meal"
                    role="tab" aria-controls="deoiled-rice-bran-meal" aria-selected="false"
                    style="color: #292929;">DEOILED RICE BRAN MEAL </a>
            </li>
            <!-- 4 -->

            <li class="nav-item border border-light">
                <a class="nav-link" id="indian-rapessed-meal-tab" data-toggle="tab" href="#indian-rapessed-meal"
                    role="tab" aria-controls="indian-rapessed-meal" aria-selected="false" style="color: #292929;">INDIAN
                    RAPESSED MEAL</a>
            </li>
            <!-- 5 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="maizeg-tab" data-toggle="tab" href="#maizeg" role="tab" aria-controls="maizeg"
                    aria-selected="false" style="color: #292929;">MAIZE</a>
            </li>
            <!-- 6 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="barley-tab" data-toggle="tab" href="#barley" role="tab" aria-controls="barley"
                    aria-selected="false" style="color: #292929;">BARLAY</a>
            </li>
            <!-- 7 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="guar-meal-tab" data-toggle="tab" href="#guar-meal" role="tab"
                    aria-controls="guar-meal" aria-selected="false" style="color: #292929;">GUAR MEAL</a>
            </li>
        </ul>

        <!-- Wrapper for tab content -->
        <div class="tab-content-wrapper">
            <!-- Tab Content -->
            <div class="tab-content mt-4" id="productTabsContent">
                <!--------------------------------- product 1 ------------------------------------>
                <div class="tab-pane fade show active" id="indian-soyabeen-meal" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Soyabean meal, a flour-like by-product from grinding soyabeans post-oil extraction,
                                    is a
                                    crucial protein source for the diets of a range of animals, including pigs,
                                    chickens,
                                    cattle, horses, sheep, and fish.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Yellow to yellow-brown.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>23040090</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>19MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg PP Bags / Jumbo Bags.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Protein</td>
                                <td>47% (min)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Fat</td>
                                <td>1.5% (min.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>12% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Fiber: </td>
                                <td>6% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Sand/Silica: </td>
                                <td>2.5% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Urease Activity: </td>
                                <td>0.30 mg/ng (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin: </td>
                                <td> &lt;50 ppb</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal1" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal1" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal1" data-slide-to="2"></li>
                        <li data-target="#carouselSoyabeanMeal1" data-slide-to="3"></li>
                    </ul>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <img src="img/feed/p1-4.jpg" 
                                        alt="INDIAN SOYABEEN MEAL 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p1-5.jpg" 
                                        alt="INDIAN SOYABEEN MEAL 3">
                                </div>
                                
                                <div class="carousel-item ">
                                    <img src="img/feed/p1-3.jpg" 
                                        alt="INDIAN SOYABEEN MEAL1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p1-1.jpg" 
                                        alt="INDIAN SOYABEEN MEAL 2">
                                </div>
                                
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal1" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal1" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 2 ------------------------------------>

                <div class="tab-pane fade" id="rice" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Paddy is a widely cultivated grain in India and is processed into rice through
                                    methods such as boiling, steaming, milling, and sorting. It is rich in nutrients,
                                    starch with a slow ruminal degradation rate, and crude protein. While rice is
                                    commonly used in the food industry, its applications have increasingly extended to
                                    livestock feed and aquaculture.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>It is usually light yellow to whitish in color and has the appearance of small
                                    transparent granules.</td>
                            </tr>



                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>26MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>About 50kgs PP Bags / Jumbo bags.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <th colspan="3"><br>5% Raw Broken Rice: 10063090: </th>
                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Broken: </td>
                                <td>5% (2/3 basis)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>14% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>DD</td>
                                <td>2% (min.)</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Chalky: </td>
                                <td>6% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>AGL: </td>
                                <td>5.6 to 5.7 mm</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th colspan="3"><br>100% Raw Broken Rice: 10064000: </th>
                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Broken: </td>
                                <td>1.5 mm 15% max, Above 1.5 mm 80% min</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>14% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Full-Grain</td>
                                <td>5% (min.)</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Chalky: </td>
                                <td>7% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Foreign Matter: </td>
                                <td>0.25% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Whiteness Kett: </td>
                                <td>40 degrees Min</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Milling Degree: </td>
                                <td>Well milled, Sortexed</td>
                            </tr>

                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal2" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal2" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal2" data-slide-to="2"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p2-1.jpg"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p2-2.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p2-3.jpg"
                                        alt="Soyabean Image 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal2" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal2" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--------------------------------- product 3 ------------------------------------>

                <div class="tab-pane fade  " id="deoiled-rice-bran-meal" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Rice Bran, a by-product of rice milling, is valued for its stability, free from
                                    rancidity issues. It is rich in essential amino acids such as methionine, cystine,
                                    and lysine, and contains high levels of phosphorus. Its low fiber content and
                                    sufficient metabolizable energy make it highly desirable for both poultry and cattle
                                    feed.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Pale yellow to light brown, coarse powder.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>23069090</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>26-28MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg PP Bags .</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Protein</td>
                                <td>17% (min)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>12% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Fiber: </td>
                                <td>16% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Sand/Silica: </td>
                                <td>5% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin: </td>
                                <td> &lt;50 ppb</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal3" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal3" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal3" data-slide-to="2"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p3-1.jpg"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p3-2.jpg" 
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p3-3.jpg" 
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal3" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal3" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 4 ------------------------------------>

                <div class="tab-pane fade  " id="indian-rapessed-meal" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> This product features a superior amino acid profile that significantly boosts its
                                    nutritive value. Its rich lysine and methionine content makes it especially
                                    advantageous for non-ruminant poultry feed.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Brown granules.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>23064900</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>22-23MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg PP Bags / Bulk.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Crude Protein</td>
                                <td>37% (min)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Oil</td>
                                <td>1% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>10% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fiber: </td>
                                <td>12% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Sand/Silica: </td>
                                <td>2.5% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin: </td>
                                <td> &lt;50 ppb</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal4" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal4" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal4" data-slide-to="2"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p4-1.jpg"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p4-2.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p4-3.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal4" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal4" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 5 ------------------------------------>

                <div class="tab-pane fade  " id="maizeg" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Maize grain is a vital feed component and a primary energy source in livestock
                                    diets. Additionally, it is increasingly used as a feedstock for ethanol fuel
                                    production.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Yellow kernels</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>10059000</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>23-25MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg Jute Bags / Bulk .</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>14% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Admixture: </td>
                                <td>2% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Discolor: </td>
                                <td>2% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Weevils: </td>
                                <td>2% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin: </td>
                                <td> &lt;20 ppb</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal5" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal5" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal5" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal5" data-slide-to="2"></li>
                        <li data-target="#carouselSoyabeanMeal5" data-slide-to="3"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p5-1.jpg" 
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p5-4.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p5-3.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p5-2.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal5" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal5" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 6 ------------------------------------>

                <div class="tab-pane fade  " id="barley" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Barley is a significant cereal grain grown in temperate regions around the globe.
                                    It has three main uses: as livestock feed, a key raw material for alcohol and starch
                                    production, and as an ingredient in food.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Brown grains.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>10039000</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>19-21 MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg Jute Bags / Bulk .</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>12% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Test Weight </td>
                                <td>62.50 kg/hl</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Foreign Material: </td>
                                <td>2% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Damaged Grains: </td>
                                <td>4% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Wild Oats: </td>
                                <td>&lt;1 (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin: </td>
                                <td> &lt;20 ppb</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal6" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal6" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal6" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal6" data-slide-to="2"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p6-1.jpg"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p6-2.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p6-3.jpg"
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal6" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal6" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 7 ------------------------------------>

                <div class="tab-pane fade  " id="guar-meal" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> In guar gum production, the germ and husks are separated through grinding and dry
                                    heating to produce guar "splits." The by-product, known as guar meal, which
                                    comprises the germs and husks, serves as a protein-rich feed material.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Guar Churi: </td>
                                <td>Yellowish powder</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Guar Korma: </td>
                                <td>Yellowish granules</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td>13023210</td>
                            </tr>


                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>20MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Approximately 50kg PP Bags / Jumbo Bags.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th colspan="3"><br>Guar Meal Churi: </th>
                            </tr>
                            <tr >
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Crude Protein</td>
                                <td>38% (min)</td>
                            </tr>
                            
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>8% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fat</td>
                                <td>3% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fiber: </td>
                                <td>0.12% </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Sand/Silica: </td>
                                <td>1% (max)</td>
                            </tr>
                            
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th colspan="3"><br>Guar Meal Korma: </th>
                            </tr>
                            <tr >
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Crude Protein</td>
                                <td>48-50% </td>
                            </tr>
                            
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>10% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fat</td>
                                <td>3% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fiber: </td>
                                <td>7-15% </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Sand/Silica: </td>
                                <td>1% (max)</td>
                            </tr>
                            
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th colspan="3"><br>Guar Meal Korma (Roasted): </th>
                            </tr>
                            <tr >
                                <th scope="row"></th>
                                <th>Parameter</th>
                                <th>Guaranteed Analysis</th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Crude Protein</td>
                                <td>55% (min)</td>
                            </tr>
                            
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>8-12% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fat</td>
                                <td>6-7% (max)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fiber: </td>
                                <td>10% </td>
                            </tr>
                            
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal7" class="carousel slide division-product-slider" data-ride="carousel">
                        <ul class="carousel-indicators product-indicators" >
                        <li data-target="#carouselSoyabeanMeal7" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSoyabeanMeal7" data-slide-to="1"></li>
                        <li data-target="#carouselSoyabeanMeal7" data-slide-to="2"></li>
                    </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/feed/p7-1.jpg"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p7-2.jpg" style="width: 100%; height: 100%; object-fit: cover;"
                                        alt="Soyabean Image 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/feed/p7-3.jpg" style="width: 100%; height: 100%; object-fit: cover;"
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal7" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal7" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Add more tab panes as needed -->

            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include('footer-non-animated.php'); ?>

    <!-- jQuery for dynamic height adjustment -->
    <script>
    $(document).ready(function() {
        // Function to adjust height dynamically
        function adjustTabHeight() {
            // Get the height of the active tab content
            var activeTabHeight = $('.tab-pane.active').outerHeight(true); // true includes margin/padding

            // Set the parent container's height to match
            $('.tab-content').css('height', activeTabHeight + 'px');
        }

        // Call the function on tab show event
        $('a[data-toggle="tab"]').on('shown.bs.tab', function() {
            adjustTabHeight();
        });

        // Call the function on page load to adjust initial height
        adjustTabHeight();
    });
    </script>


</body>

</html>