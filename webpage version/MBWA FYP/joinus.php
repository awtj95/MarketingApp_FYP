<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Join Us</title>
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
                    <h3 class="title">WHAT IS IT?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 jumbotron">
                    <p class="text-center">The Samfah Marketing gathers the most enthusiastic marketers to inform, educate, share experience and offer the best deals for marketiong products, services and events.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title">WHO IS IT FOR?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 jumbotron">
                    <p class="text-center">This application is open to anyone who wants to gain the maximum out of their marketing or shopping experience. If your company is our member, all your employee can freely benefit from special offers.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="title">HOW CAN YOU JOIN US?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 jumbotron">
                    <p class="text-center">Click the register button on below and fill out the registeration form. If you are register a retailer account, we respond your request as soon as possible. If end user account, you can start your shopping now!!! </p>
                    <p class="text-center"><a href="retailerform.php" class="btn btn-default" role="button">Sign up</a><strong>  Retailer account</strong></p>
                    <p class="text-center">Or</p>
                    <p class="text-center"><a href="userform.php" class="btn btn-default" role="button">Sign up</a><strong>  End User account</strong></p>  
                </div>
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