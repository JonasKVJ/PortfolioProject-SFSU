<html>

    <head>
        <title>
            Confirmation / Student Portfolio
        </title>
        <meta http-equiv="Content-Type"
              content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="custombox.min.css">-->
        <link rel="stylesheet" type="text/css" href="site.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

    <body>

        <!--Webpage design-->
        <div class="page-container">

            <!-- top navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                            <span class="icon-bar"></span>
                            <span class="icon-br"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Student Portfolio - CSC 412 - San Francisco State University</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row row-offcanvas row-offcanvas-left">

                    <!-- sidebar -->
                    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                        <ul class="nav">
                            <li class="active"><a href="home.html">Home</a></li>
                            <li><a href="current.html">Current</a></li>
                            <li><a href="demonstrations.html">Demonstrations</a></li>
                            <li><a href="about.html">About</a></li>              
                        </ul>
                    </div>

                    <!-- main area -->
                    <div class="col-xs-12 col-sm-9">
                        <h1>Confirmation</h1>

                    <?php echo ("User of name: " . $_POST["name"] . " visited this page."); ?><br>
                    User email address is: <?php echo $_POST["email"]; ?>

                    </div><!-- /.col-xs-12 main -->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.page-container-->
    </div>


</body>
</html>