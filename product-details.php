<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Albos Roxas/E-commerce Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/3fdaed0c83.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Ubuntu+Condensed&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/acc.png" width="125px">
            </div>
            <?php include "menu.php" ?>
        </div>
    </div>

    <!--single product details----->

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" width="100%" class="small-img">
                    </div>
                </div>

            </div>
            <div class="col-2">
                <p>Home / Tshirt</p>
                <h1>Pink LongSleeve By Albos Rojas/Shop</h1>
                <h4>Php850.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXl</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="cart.html" class="btn">Add To Cart</a>

                <h3>Product Details <i class=" fa fa-indent"></i></h3>
                <br>
                <p>100% original
                    Asian size
                    Please refer to the size table
                    Thickness : Thin
                    Material ingredients : cotton
                    Sleeves long :long-sleeved
                    Item No. : 11092
                    Version of the type : Slim fit
                    Collar type : Pointed collar (regular)
                    Brand : none
                    Material : cotton</p>

            </div>
        </div>
    </div>

    <!--title------>
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>

    </div>



    <!--product------>
    <div class="small-container">

        <div class="row">
            <div class="col-4">
                <img src="images/product-1.jpg">
                <h4>Pink LongSleeve</h4>
                <div class="rating">
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star-o"></i>
                </div>
                <p>Php650.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>RedT-Shirt</h4>
                <div class="rating">
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star-half-o"></i>
                    <i class=" fa fa-star-o"></i>
                </div>
                <p>Php750.00</p>

            </div>

            <div class="col-4">
                <img src="images/product-3.jpg">
                <h4>White Polo Shirtt</h4>
                <div class="rating">
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star-half-o"></i>
                </div>
                <p>Php550.00</p>

            </div>
            <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>Dark Pink T-Shirt</h4>
                <div class="rating">
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star"></i>
                    <i class=" fa fa-star-half-o"></i>
                </div>
                <p>Php500.00</p>

            </div>
        </div>
    </div>


    <!--- footer ----->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3> Download Our App</h3>
                    <p>Download App for android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="images/app-googleplay.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/ha.png">
                    <p>Wear Clothes That Matter.</p>
                </div>
                <div class="footer-col-3">
                    <h3> USeful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3> Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>

        </div>

        <hr>
        <p class="Copyright">Copyright 2023 - Albos/Rojas Shop</p>
    </div>
    </div>

    <!--js for toggle menu-------->

    <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px"
        }
    }
    </script>

    <!---js product gallery---->
    <script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function() {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function() {
        ProductImg.src = SmallImg[3].src;
    }
    </script>



</body>

</html>