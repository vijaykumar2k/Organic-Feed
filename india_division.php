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
                <img src="img/slider13.jpg" class="img-fluid" alt="About Us Image">
                <div class="carousel-caption">
                    <h1 class="">Domestic Products</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <!-- <h2 class="text-center">Domestic Products</h2> -->

        <!-- Nav Tabs for Products -->
        <ul class="nav nav-tabs justify-content-center" id="productTabs" role="tablist"
            style="background-color:rgb(227, 223, 222)">
            <!-- 1 -->
            <li class="nav-item border border-light">
                <a class="nav-link active" id="organic-soyabean-meal-tab" data-toggle="tab" href="#proton-cattle-feed"
                    role="tab" aria-controls="organic-soyabean-meal" aria-selected="false" style="color: #292929;">
                    PROTON CATTLE FEED</a>
            </li>
            <!-- 2 -->
            <li class="nav-item border border-light">
                <a class="nav-link " id="proton-cattle-feed-tab" data-toggle="tab"
                    href="#doodh-mishri-compound-cattle-feed" role="tab" aria-controls="odh-mishri-compound-cattle-feed"
                    aria-selected="false" style="color: #292929;">DOODH MISHRI COMPOUND CATTLE FEED
                </a>
            </li>
            <!-- 3 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="organic-maize-pellets-tab" data-toggle="tab" href="#doodh-mishri-bypass-protein"
                    role="tab" aria-controls="organic-maize-pellets" aria-selected="false" style="color: #292929;">
                    DOODH MISHRI BYPASS PROTEIN </a>
            </li>
            <!-- 4 -->
            <li class="nav-item border border-light">
                <a class="nav-link" id="organic-canola-meal-tab" data-toggle="tab" href="#contract-manufacturing"
                    role="tab" aria-controls="organic-canola-meal" aria-selected="false"
                    style="color: #292929;">CONTRACT MANUFACTURING</a>
            </li>
        </ul>

        <!-- Wrapper for tab content -->
        <div class="tab-content-wrapper">
            <!-- Tab Content -->
            <div class="tab-content mt-4" id="productTabsContent">
                <!--------------------------------- product 1 ------------------------------------>
                <div class="tab-pane fade show active" id="proton-cattle-feed" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Cattle require different proportions of protein, fat, and fiber at various stages
                                    of development, such as for proper growth, bone strengthening, immunity development,
                                    and increasing milk production. Therefore, it is necessary to provide a balanced
                                    feed to ensure all these developmental needs are met.

                                </td>

                            </tr>



                            <tr>
                                <th scope="row"></th>
                                <td>Benefits:</td>
                                <td>• Improves milk production <br>
                                    • Increases fat and SNF.<br>
                                    • Provides a balanced diet for cattle with essential minerals like Calcium,
                                    Phosphorus, etc.<br>
                                    • Enhances digestibility.<br>
                                    • Boosts immunity against various diseases.<br>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Packing:</td>
                                <td>Packed in 50 kg HDPE bags.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>

                            </tr>
                            <tr style="background-color: rgb(190, 250, 242); ">
                                <th scope="row"></th>
                                <th>Specifications:</th>
                                <th> </th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Moisture, Percentage by Mass, Max</td>
                                <td>11.00%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Protein, (N x 6.25), Percentage by Mass, Min</td>
                                <td>24.00%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fat, Percentage by Mass, Max</td>
                                <td>4.00%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Crude Fiber, Percentage by Mass, Max</td>
                                <td>8.00%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Acid Insoluble Ash, Percentage by Mass, Max</td>
                                <td>2.50%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Calcium (as Ca), Percentage by Mass, Min</td>
                                <td>0.80%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Total Phosphorus, Percentage by Mass, Min</td>
                                <td>0.50%</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Available Phosphorus, Percentage by Mass, Min</td>
                                <td>0.25%</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Urea, Percentage by Mass, Max</td>
                                <td>1.00%</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Vitamin A, IU/kg, Min </td>
                                <td>7000</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Vitamin D3, IU/kg, Min </td>
                                <td>1200</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Vitamin E, IU/kg, Min </td>
                                <td>30</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Aflatoxin B1, PPB Max </td>
                                <td>20</td>
                            </tr>

                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal" class="carousel slide division-product-slider"
                            data-ride="carousel">
                            <ul class="carousel-indicators product-indicators">
                                <li data-target="#carouselSoyabeanMeal" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselSoyabeanMeal" data-slide-to="1"></li>
                                <li data-target="#carouselSoyabeanMeal" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/india/p1-1.jpg" 
                                        alt="PROTON CATTLE FEED 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/india/p1-2.jpg" 
                                        alt="PROTON CATTLE FEED 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/india/p1-3.jpg" 
                                        alt="PROTON CATTLE FEED 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselSoyabeanMeal" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselSoyabeanMeal" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 2 ------------------------------------>

                <div class="tab-pane fade" id="doodh-mishri-compound-cattle-feed" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the second product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> As a certified organic feed mill of India, we are dedicated to deliver the
                                    highest quality organic feed, crafted from premium organic ingredients. Our
                                    carefully developed system ensures that pesticides, antibiotics, preservatives,
                                    artificial hormones, and GMOs are completely eliminated throughout our organic
                                    sourcing and production processes.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Colour and Appearance</td>
                                <td>Offered in light brown pellets or mesh.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>HS Code</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Size</td>
                                <td>4mm, 6mm, 8mm, 10mm</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Load ability in 20ft</td>
                                <td>20 MT</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>Available in 25kg and 50kg PP bags, with custom packing options to meet your
                                    specific
                                    needs.</td>
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
                                <td>22% (min.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Fat</td>
                                <td>3% (min.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Moisture</td>
                                <td>10% (max.)</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Energy</td>
                                <td>2500 cal/kg</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>TDN</td>
                                <td>80-85%</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Starch</td>
                                <td>50-55%</td>
                            </tr>
                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="doodhmishricompoundcattlefeed" class="carousel slide division-product-slider"
                            data-ride="carousel">
                            <ul class="carousel-indicators product-indicators">
                                <li data-target="#doodhmishricompoundcattlefeed" data-slide-to="0" class="active"></li>
                                <li data-target="#doodhmishricompoundcattlefeed" data-slide-to="1"></li>
                                <li data-target="#doodhmishricompoundcattlefeed" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/india/p2-5.jpg" style="" alt=" DOODH MISHRI COMPOUND CATTLE FEED 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/india/p2-2.jpg" style=""
                                        alt="DOODH MISHRI COMPOUND CATTLE FEED 2">
                                </div>
                                <div class="carousel-item">
                                    <img class=" "src="img/india/p2-3.jpg" style=""
                                        alt="DOODH MISHRI COMPOUND CATTLE FEED 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#doodhmishricompoundcattlefeed" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#doodhmishricompoundcattlefeed" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--------------------------------- product 3 ------------------------------------>
                <div class="tab-pane fade  " id="doodh-mishri-bypass-protein" role="tabpanel">
                    <table class="table table-hover table-striped">
                        <!-- Table contents for the first product -->
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>Brief Description</td>
                                <td> Milk-producing animals possess four stomachs, with the Rumen being the primary site
                                    for digestion. While the Rumen's bacteria help break down feed and fodder, they also
                                    convert proteins from sources like soyabean, canola, guar, and cottonseed into
                                    ammonia. This ammonia is then turned into urea and excreted, leading to substantial
                                    protein loss.</td>
                            </tr>
                            <!-- Additional rows here -->
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>To maximize protein use from these feed ingredients, it's crucial to prevent protein
                                    breakdown. This can be accomplished through treatments that make proteins less
                                    degradable, thus enhancing amino acid availability for milk production.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td>Bypass Protein represents a breakthrough in feed technology that minimizes Rumen
                                    Degradable Protein (RDP), boosting the levels of Rumen Undegradable Protein (RUP)
                                    and optimizing amino acid availability for improved milk synthesis.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Quality</td>
                                <td>We supply advanced bypass proteins for ruminants, including both heat-treated and
                                    chemically-treated options. Our NON-GMO products feature at least 65% Rumen
                                    Undegradable Protein (RUP) and cut Rumen Degradable Protein (RDP) to just 35%.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Packing</td>
                                <td>HDPE bags or loose in containers.</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Benefits</td>
                                <td>Enhanced disease resistance. <br>
                                    Accelerated growth.<br>
                                    Higher milk yield.<br>
                                    Increased fat content in milk.<br>
                                    Improved Solids-Not-Fat (S.N.F.) levels.<br>
                                    Boosted overall milk production.<br>
                                    Provision of essential minerals.
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>Origin</td>
                                <td>India</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="doodhmishribypassprotein" class="carousel slide division-product-slider"
                            data-ride="carousel">
                            <ul class="carousel-indicators product-indicators">
                                <li data-target="#doodhmishribypassprotein" data-slide-to="0" class="active"></li>
                                <li data-target="#doodhmishribypassprotein" data-slide-to="1"></li>
                                <li data-target="#doodhmishribypassprotein" data-slide-to="2"></li>
                                <li data-target="#doodhmishribypassprotein" data-slide-to="3"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/india/p3-1.jpg" alt="DOODH MISHRI BYPASS PROTEIN 1">
                                </div>
                                <div class="carousel-item">
                                <img src="img/india/p3-4.jpg" alt="SDOODH MISHRI BYPASS PROTEIN 2">
                                </div>
                                <div class="carousel-item">
                                <img src="img/india/p3-2.jpg" alt="SDOODH MISHRI BYPASS PROTEIN 2">
                                </div>
                                <div class="carousel-item">
                                <img src="img/india/p3-5.jpg" alt="SDOODH MISHRI BYPASS PROTEIN 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#doodhmishribypassprotein" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#doodhmishribypassprotein" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--------------------------------- product 4 ------------------------------------>

                <div class="tab-pane fade  " id="contract-manufacturing" role="tabpanel">
                    <table class=" table">
                        <!-- Table contents for the first product -->
                        <p><b>If you are looking for a processing solution for your dairy feed, we are here to help
                                you.</b></p>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td><b></b></td>
                                <td><b>What we do: </b> With over two decades of experience serving both domestic and
                                    international buyers,
                                    we understand our customer's needs and provide technical, packaging, and marketing
                                    consultation as required. Our manufacturing process emphasizes strict quality
                                    assurance and thorough documentation, including back-source records and lab reports.
                                    Our skilled workforce, trained to meet ISO standards, is a key asset in ensuring the
                                    timely delivery of high-quality finished products.</td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <th colspan="3"><br>Benefits of making us your Contract Manufacturer: </th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <!-- <th scope="row"></th> -->
                                <td></td>
                                <td><b><br>Comprehensive In-House Services:</b> We manage R&D, manufacturing, labelling,
                                    packing, and dispatch all within our facility. <br><b>
                                        Custom Solutions:</b> Tailored product and packaging options to fit your
                                    specific requirements.<br><b>
                                        Quality Assurance:</b> Rigorous checks to ensure your product consistently meets
                                    all standards.<br><b>
                                        ISO and FSSAI Compliance:</b> Adherence to the highest industry standards for
                                    quality and safety.<br><b>
                                        BIS TYPE I & II Standards:</b> Compliance with regulatory benchmarks for
                                    compounded cattle feed manufacturing.<br><b>
                                        Advanced In-House Laboratory:</b> Skilled technicians conduct thorough physical,
                                    microbiological, and chemical testing.<br><b>
                                        Cost Efficiency:</b> Competitive pricing without compromising quality.<br><b>
                                        On-Time Delivery:</b> Reliable scheduling and punctual delivery to meet your
                                    deadlines.<br><b>
                                        Professional and Ethical Standards: </b>Transparent and fair trade
                                    practices.<br><b>
                                        Swift Responses:</b> Efficient handling of orders and inquiries.<br><b>
                                        Free Technical Consultation:</b> Expert advice to optimize your product.<br><b>
                                        Support in Packaging, Marketing, and Distribution:</b> Assistance in enhancing
                                    your product’s marketability.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th colspan="3"><br>What can we offer as your Contract Manufacturer?<br></th>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <td><b><br>Compounded Cattle Feed:<br></b> Produced according to BIS Type-I & II
                                    standards.<br><b>
                                        Bypass Protein:</b> Available in Guar and RSM-based formulations.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th colspan="3"><br>FOR INQUIRIES & CONTRACT MANUFACTURING:<br></th>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <th></th>
                                <td><b>Call:</b> +91 9785101111/ 8440893228<br><b>
                                <p> <strong>Email:</strong> <a href="mailto:info@srcf.org.in" target="_blank">info@srcf.org.in</a>
                                </p>
                                </td>
                            </tr>




                        </tbody>
                    </table>
                    <!-- <div class="d-flex justify-content-center">

                        <div id="contractmanufacturing" class="carousel slide division-product-slider"
                            data-ride="carousel">
                            <ul class="carousel-indicators product-indicators">
                                <li data-target="#contractmanufacturing" data-slide-to="0" class="active"></li>
                                <li data-target="#contractmanufacturing" data-slide-to="1"></li>
                                <li data-target="#contractmanufacturing" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/soyabean1.jpg" style="width: 100%; height: 100%; object-fit: cover;"
                                        alt="Soyabean Image 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/soyabean1.jpg" style="width: 100%; height: 100%; object-fit: cover;"
                                        alt="Soyabean Image 2">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#contractmanufacturing" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#contractmanufacturing" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div> -->
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