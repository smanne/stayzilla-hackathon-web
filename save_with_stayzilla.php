
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <link rel="stylesheet" href="bootstrap/font-awesome-4.3.0/css/font-awesome.min.css"
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
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h2 style="text-align: center;font-family: sans-serif;font-weight: normal">Why stay with Friends/Relatives when you can get benifit with stayzilla</h2>
                <h3 style="text-align: center;font-family: sans-serif;font-weight: normal">Please fill in following details</h3>
                <div class="portlet-body form">
                    <div class="col-md-12" style="text-align: center">

                        <ul class="filter-list">
                            <li class="queryTextBoxSec">
                                <input type="text" id="location" placeholder="Which city are you going?" class="searchQuery textBoxBig fadeIn">
                                <span class="locationIcon"><i class="sp_icon sp_map_marker"></i></span>
                            </li>
                            <li class="stayDetailsSec ">
                                <input type="text"  placeholder="Where does you friend/relatives reside?" id="user_source" class="">
                            </li>
                            <li class="purposeVisit">
                                <input type="text"  placeholder="Which place are you going for? " id="user_destination" class="">
                            </li>
                            <li class="pull-left">
                                <input type="button" value="Show my benefits" class="btn searchBtn" id="search_button">
                            </li>
                        </ul>
                        <!-- END FORM-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="result" style="display:;">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption" style="color:#f93f81;font-size: 19px;text-align: center;margin-bottom: 10px">
                                Benifits of Stayzilla
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive">
                                <table class="table table-condensed table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Features</th>
                                            <th style="text-align: center">If you go with your choice</th>
                                            <th style="text-align: center">If you go with Stayzilla</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-map-marker" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">20km you need to travel</td>
                                            <td class="align-vertical center-align">10km you need to travel</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-clock-o" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">You spend 2 hours</td>
                                            <td class="align-vertical center-align">You spend 1 hour</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><span><img src="bootstrap/images/cab-fare.png"></span></td>
                                            <td class="align-vertical center-align">100 <i class="fa fa-inr"></i> you need to spend behind cab</td>
                                            <td class="align-vertical center-align">50 <i class="fa fa-inr"></i> you need to spend behind cab</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-hospital-o" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">Depends on your relative or family member</td>
                                            <td class="align-vertical center-align">486 <i class="fa fa-inr"></i> you need to spend behind the hotel</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-ambulance" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">Doesn't guarantee about the insurance</td>
                                            <td class="align-vertical center-align">Insurance is provided (if applied)</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-eye" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">Privacy can't be ensured</td>
                                            <td class="align-vertical center-align">Privacy is ensured</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="jumbotron" style="background: #7e4b62;position: relative;margin-top: -30px;">
            <!-- Example row of columns -->
            <div class="row" style="text-align: center">
                <img src="bootstrap/images/Promo_page.png">
            </div>
        </div> <!-- /container -->
        
        <hr>
        <div class="container">

            <footer>
                <p style="text-align: center">&copy; Stayzilla 2015</p>
            </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/jquery.geocomplete.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script>
            $("#location").geocomplete().bind("geocode:result", function(event, result){
                var places = result.formatted_address.split(",");
                $("#user_destination").attr("placeholder", "Where you are going in "+places[0]);
                $("#user_source").attr("placeholder", "Where you friend/relatives in "+places[0]);
          });

            
            $("#location").blur(function(){
                
            });

            $("#user_source").geocomplete();
            $("#user_destination").geocomplete();
        </script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>
