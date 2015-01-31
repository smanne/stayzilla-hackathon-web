
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Jumbotron Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link href="bootstrap/css/custom-style.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="bootstrap/images/stayzilla_web.png" class="logo-stayzilla">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 style="text-align: center;font-family: sans-serif;font-weight: normal">Please do fill your requirement</h1>
                <div class="portlet-body form">
                    <div class="col-md-12" style="text-align: center">

                        <ul class="filter-list">
                            <li class="queryTextBoxSec">
                                <input type="text" id="autocomplete_poi" placeholder="Where do you want to stay?" class="searchQuery textBoxBig fadeIn" autocomplete="off">
                                <span class="locationIcon"><i class="sp_icon sp_map_marker"></i></span>
                            </li>
                            <li class="stayDetailsSec ">
                                <input type="text"  placeholder="Planning to stay at" id="checkin" autocomplete="off" class="">
                                <span class="calendarIcon"><i class="sp_icon sp_calendar"></i></span>
                            </li>
                            <li class="purposeVisit">
                                <input type="text"  placeholder="Purpose Of Visit" id="checkout" autocomplete="off" class="">
                                <span class="calendarIconTwo"><i class=""></i></span>
                            </li>
                            <li class="pull-left">
                                <input type="button" value="SEARCH" class="btn searchBtn" id="search_button">
                            </li>
                        </ul>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row" style="text-align: center">
                
                <img src="bootstrap/images/Promo_page.png">
            </div>

            <hr>
            
                    <footer>
                        <p>&copy; Company 2014</p>
                    </footer>
                
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>
