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
</head>

<body>

    <!-- Navigation -->
    <?php include('header.php'); ?>
    <!-- About Us Image and Title -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img src="img/slider11.jpg" class="img-fluid" alt="About Us Image">
                <div class="carousel-caption">
                    <br>

                    <br>
                    <h1 class="display-2">International Division</h1>

                </div>
                <!-- <h1 class="display-4 mt-3">About Us</h1> -->
            </div>
        </div>
    </div>



    <!-- sub-divisions -->
    <div class="container-fluid my-5" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <!-- <h2 class="text-center">Board of Directors</h2> -->
        <div class="row justify-content-center">
            <!-- <div class="col-md-4">
                <div class="card">
                    <a href="#">
                        <img class="card-img-top" src="sub/subdivision1.jpg" alt="Director 1">
                    </a>
                    <div class="card-body">
                        <a href="organic_products.php" class="link-background">
                            <h2 class="card-title">Organic Products</h2>
                        </a>
                    </div>

                </div>
            </div> -->
            <div class="col-md-4">
                <div class="card">
                    <a href="feed_ingredients.php">
                        <img class="card-img-top" src="img/i-p1.jpg" alt="Director 1">
                    </a>
                    <div class="card-body">
                        <a href="feed_ingredients.php" class="link-background">
                            <h2 class="card-title">Feed Ingredients</h2>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="others.php">
                        <img class="card-img-top" src="img/i-p2.jpg" alt="Director 1">
                    </a>
                    <div class="card-body">
                        <a href="others.php" class="link-background">
                            <h2 class="card-title">Other</h2>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!--- Connect -->
  <?php include('footer.php'); ?>