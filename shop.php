
<!DOCTYPE html>
<html lang="en">

<!-- header and links -->
<?php include 'sections/header.php'; ?>

<body>

    <!-- Top navigation bar -->
    <?php include 'sections/top-navigation-bar.php'; ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg/bg-1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Products</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.php">Home</a></span> 
                        <span>Products</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <div class="row d-flex justify-content-center py-5">
                        <div class="col-md-10 text-center heading-section ftco-animate">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-9">
                                    <form method="post" class="subscribe-form">
                                        <div class="form-group d-flex">
                                            <input type="text" name="search-product" class="form-control" placeholder="Search product here">
                                            <input type="submit" name="search" value="Search" class="submit px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="product-details.php" class="img-prod">
                            <img class="img-fluid" src="images/products/product-1.jpg" alt="image Not Available">
                        </a>
                        <div class="text py-3 px-3">
                            <h3>
                                <a href="product-details.php">RED REV Super Limiter Cut</a>
                            </h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">
                                        <span class="price-sale">PHP 1,231.25</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area justify-content-center d-flex">
                                <a href="shop.php" class="add-to-cart">
                                    <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include 'sections/footer.php'; ?>
    <!-- loader -->
    <?php include 'sections/loader.php'; ?>
    <!-- scripts -->
    <?php include 'sections/scripts.php'; ?>

</body>
</html>