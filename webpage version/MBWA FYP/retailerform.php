<?php
	$dbServer = 'localhost';
	$dbUserName = 'root';
	$dbPassword = '';
	$dbName = 'samfah';

	// Connect to server.
	$dbConnection = @mysql_connect($dbServer,$dbUserName,$dbPassword);
		if($dbConnection === FALSE){
			echo "<p>Unable to connect to the database server.<br /> Error Code ". mysql_errno().":". mysql_error()."</p>";
		}else {
            
	}

	// Select database.
	if(mysql_select_db($dbName, $dbConnection) === FALSE){
			echo "<p>The database is not created.</p>";
		}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Retailer Registration Form</title>
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
    <body style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9" id="banner">
                    <h1><font color="black">Welcome to Samfah Marketing</font></h1>
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
            <?php
                if(isset($_POST['BSubmit']))	
                {
                    $Fullname= $_POST['fullname']; 
                    $Email= $_POST['email']; 
                    $Password= $_POST['password'];
                    $Businessname= $_POST['businessname']; 
                    $Contact= $_POST['contact']; 
                    $Description= $_POST['description'];

                    echo"<br><br>";

                    //insert the data into stock_item table
                    $sql = "INSERT INTO retailer_list (name, email, password, company, contact, description)
                    VALUES ('$Fullname', '$Email', '$Password', '$Businessname', '$Contact', '$Description')";

                    $sqlResult = @mysql_query($sql, $dbConnection);
                    if ($sqlResult === TRUE) {
                        ?>
                            <script type="text/javascript">
                                alert("Submmision Successful");
                                window.location.href = "retailersuccess.php";
                            </script>
                        <?php
                    } else {
                        echo "<p>Unable to insert data. Error Code ". mysql_errno($dbConnection).":". mysql_error($dbConnection)."</p>";
                    }
                }
            ?> 
            <form action="retailerform.php" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <fieldset>
                            <legend id="rrf">RETAILER REGISTRATION FORM</legend>
                                <p><label for="type">Title*</label>
                                    <select name="type" id="type">
                                        <option value="none">Please select</option>
                                        <option value="MR">Mr</option>
                                        <option value="MRS">Mrs</option>
                                        <option value="MS">Ms</option>
                                        <option value="MISS">Miss</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="fullname">Full Name*</label>
                                    <input type="text" name="fullname" id="fullname" maxlength="50" size="15" placeholder="Full Name" required="required" />
                                </p>
                                <p>
                                    <label for="email">Email*</label>
                                    <input type="email" name="email" id="email" placeholder="name@domain.com" required="required"/>
                                </p>
                                <p>
                                    <label for="password">Password*</label>
                                    <input type="password" name="password" id="password" placeholder="password" required="required"/>
                                </p>
                                <p>
                                    <label for="businessname">Business Name*</label>
                                    <input type="text" name="businessname" id="businessname" maxlength="100" size="15" placeholder="Business Name" required="required"/>
                                </p>
                                <p>
                                    <label for="contact">Contact Number*</label>
                                    <input type="tel" name="contact" id="contact" placeholder="###-########" required="required"/>
                                </p>
                                <p>	
                                    <label>Description</label><br />
                                    <textarea name="description" rows="8" cols="50" placeholder="Descript your shop and the address" required="required"></textarea>
                                </p>
                        </fieldset>
                        <font color="black">
                            <a href="joinus.php"><input type="button" value="Back"></a>
                            <input type="reset" value="Reset" />
                            <input type="submit" name="BSubmit" value="Submit" />
                        </font>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <font color="black"><p>Copyright  2016 Sam Fah Enterprise (M) Sdn Bhd (368258-H). All rights reserved.</p></font>
                </div>
            </div>
        </div>
        <!-- jQuery - required for Bootstrap's Javascript plugins) -->
        <script src="frameworks/js/jquery.min.js"></script>
        <!-- All Bootstrap plug-ins file-->
        <script src="frameworks/js/bootstrap.min.js"></script>
    </body>
</html>