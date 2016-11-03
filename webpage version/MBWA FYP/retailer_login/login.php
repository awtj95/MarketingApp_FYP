<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta name = "viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="../frameworks/css/bootstrap.min.css" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <link href="../frameworks/css/market_website.css" rel="stylesheet" />
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
                <div class="col-sm-12 jumbotron">
                    <div class="form" align="center">
                        <form class="login-form">
                            <input type="text" placeholder="username" name="uname" required/><br>
                            <input type="password" placeholder="password" name="psw" required/>
                            <p class="text-center"><a href="retailer_main_page.php" class="btn btn-default" role="button">Login</a></p>
                            <p class="text-center">Don't have an account? <a href="../retailerform.php" class="btn btn-default" role="button">Register here.</a></p>
                        </form>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright  2016 Sam Fah Enterprise (M) Sdn Bhd (368258-H). All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- jQuery - required for Bootstrap's Javascript plugins) -->
        <script src="../frameworks/js/jquery.min.js"></script>
        <!-- All Bootstrap plug-ins file-->
        <script src="../frameworks/js/bootstrap.min.js"></script>
    </body>
</html>