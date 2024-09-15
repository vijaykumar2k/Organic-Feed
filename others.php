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
                <img src="img/slider4.jpg" class="img-fluid" alt="About Us Image">
                <div class="carousel-caption">
                    <h1 class="display-2">Other Products</h1>
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
            <!-- <li class="nav-item border border-light">
                <a class="nav-link active" id="organic-soyabean-meal-tab" data-toggle="tab" href="#proton-cattle-feed"
                    role="tab" aria-controls="organic-soyabean-meal" aria-selected="false" style="color: #292929;">
                    PROTON CATTLE FEED</a>
            </li> -->
            <!-- 2 -->
            
        </ul>

        <!-- Wrapper for tab content -->
        <div class="tab-content-wrapper">
            <!-- Tab Content -->
            <div class="tab-content mt-4" id="productTabsContent">
                <!--------------------------------- product 1 ------------------------------------>
                <!-- <div class="tab-pane fade show active" id="proton-cattle-feed" role="tabpanel">
                    <table class="table table-hover table-striped">
                        
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

                            
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        <div id="carouselSoyabeanMeal" class="carousel slide" data-ride="carousel"
                            style="width: 20%; height: 130px; object-fit: cover;">
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
                </div> -->
                <!--------------------------------- product 2 ------------------------------------>

                
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