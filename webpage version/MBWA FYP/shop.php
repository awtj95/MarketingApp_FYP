<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Available Shops</title>
        <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="frameworks/css/bootstrap.min.css" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <link href="frameworks/css/market_website.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9" id="banner">
                    <h1>Welcome to Samfah Marketing</h1>
                </div>
                <?php
                    include("nav.php");
                ?>
            </div>
            <div class="row">
                <?php
                    include("header.php");
                ?>
                <div> 
                    <form class="navbar-form navbar-right" role="search"> 
                        <div class="form-group"> 
                            <input type="text" class="form-control" placeholder="Search" /> 
                        </div> 
                        <button type="submit" class="btn btn-default">Go</button> 
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1 align="center">Available Shops</h1>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/UQ.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/takiong.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/loccitane.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/aldo.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/CottonOn.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/Nicole.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/Clarks.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/RichardIrish.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="empty.php"><img src="image/G11.jpg" alt="product" id="product" class="img-thumbnail" height="250" width="250" /></a>
                    </div>
                </div>
                <a href="empty.php"><h3 align="right"><u>Other -></u></h3></a>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright  2016 Sam Fah Enterprise (M) Sdn Bhd (368258-H). All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- jQuery - required for Bootstrap's Javascript plugins) -->
        <script src="frameworks/js/jquery.min.js"></script>
        <!-- All Bootstrap plug-ins file-->
        <script src="frameworks/js/bootstrap.min.js"></script>
    </body>
</html>