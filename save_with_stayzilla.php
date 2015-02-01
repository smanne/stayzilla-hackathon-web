
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
             

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
        <link href="bootstrap/css/custom-style.css" rel="stylesheet">
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" style="opacity: 0.8">
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
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="http://www.stayzilla.com/contactus">Contact Us</a></li>
                        <li><a href="http://www.stayzilla.com/aboutus">About Us</a></li>
                        <li><a href="save_with_stayzilla.php#devoloped_by">Devoloped By</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h2 style="text-align: center;font-family: sans-serif;font-weight: normal">Why depend on friends/relatives when you can get benefits of Stayzilla !!!</h2>
                <h3 style="text-align: center;font-family: sans-serif;font-weight: normal">Fill details below to know how</h3>
                <div class="portlet-body form">
                    <div class="col-md-12" style="text-align: center">
                        <ul class="filter-list">
                            <li class="headingTo">
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
        <div class="container" style="margin-bottom:30px">
            <div class="row">
                <div class="caption" style="color:#f93f81;font-size: 25px;text-align: center;margin-bottom: 10px">
                    Benifits of Using Stayzilla
                </div>
                <div class="col-md-12">
                    <div class="col-md-3 col-xs-12 box-description">
                        <div class="icon-header-logo" style="margin-top:10px">
                            <i class="fa fa-inr" style=""></i>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fa fa-check"></i><span>Very cost effective</span></li>
                            <li><i class="fa fa-check"></i><span>Don't depend on anyone</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12 box-description">
                        <div class="icon-header-logo" style="margin-top:10px">
                            <i class="fa fa-clock-o" style=""></i>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fa fa-check"></i><span>Saves a lot of time</span></li>
                            <li><i class="fa fa-check"></i><span>Suggests various events and economic mode of transportation</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12 box-description">
                        <div class="icon-header-logo" style="margin-top:10px">
                            <i class="fa fa-ambulance" style=""></i>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fa fa-check"></i><span>Covers your accidental damage </span></li>
                            <li><i class="fa fa-check"></i><span>Ensures your security</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12 box-description">
                        <div class="icon-header-logo" style="margin-top:10px">
                            <i class="fa fa-eye" style=""></i>
                        </div>
                        <ul class="feature-list">
                            <li><i class="fa fa-check"></i><span>Maintain your privacy</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="result" style="display:none;">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption" style="color:#f93f81;font-size: 25px;text-align: center;margin-bottom: 10px">
                                Here is your Deal!!
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
                                            <td class="align-vertical center-align">You need to travel <span id="user_distance">20Km</span></td>
                                            <td class="align-vertical center-align">You need to travel <span id="stayzilla_distance">10Km</span></td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-clock-o" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">You will spend <span id="user_duration"></span> travelling (One way)</td>
                                            <td class="align-vertical center-align">You will spend <span id="stayzilla_duration"></span> travelling (One way)</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><span><img src="bootstrap/images/cab-fare.png"></span></td>
                                            <td class="align-vertical center-align"><i class="fa fa-inr"></i> <span id="user_cabfare"></span> you need to spend behind cab</td>
                                            <td class="align-vertical center-align"><i class="fa fa-inr"></i> <span id="stayzilla_cabfare"></span>  you need to spend behind cab</td>
                                        </tr>
                                        <tr>
                                            <td class="center-align"><i class="fa fa-bed" style="border: 1px solid black;padding: 10px;border-radius: 23px;"></i></td>
                                            <td class="align-vertical center-align">Depends on your relative or family member</td>
                                            <td class="align-vertical center-align"><i class="fa fa-inr"></i> <span id="stayzilla_hotelFare"></span> you need to spend behind the hotel</td>
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
            <div class="row" style="margin-bottom:20px;color:#FF4081;">

                <div class="col-md-3" style="text-align: center">
                    <!--<input type="text" placeholder="Check out some interesting places near to your area?" style="width:100%;padding:10px">
                    --><h3 style="position:relative;top:-9px;font-size: 16px">Want more reason to chose us?</h3></div>
                <div class="col-md-7"> <input type="button" value="Search Nearby Attractions" class="btn searchBtn" id="search_nearby_button" style="width:100%;background: #fff"> 
                </div>
                <div class="col-md-2" style="text-align: center"><h3 style="position:relative;top:-9px;font-size: 16px">to your hotel.</h3></div>

            </div>
            <div class="row" id="nearby-results"></div>
        </div>
        <div class="container" id="no-result" style="display:none;">
            <div class="row">
                <div class="caption" style="color:#f93f81;font-size: 25px;text-align: center;margin-bottom: 10px">
                    Sorry we are unable to find best options for you at this time. Please visit us again.
                </div>
            </div>
            <div class="row">
                &nbsp;
            </div>
        </div>
        <br>
        <div class="jumbotron" style="background: #7e4b62;position: relative;margin-top: -30px;">
            <!-- Example row of columns -->
            <div class="row" style="text-align: center">
                <img src="bootstrap/images/Promo_page_2.png">
            </div>
        </div> <!-- /container -->


        <div class="container">
            <div class="row" id="devoloped_by">
                <div class="col-md-12" style="text-align: center">
                    <img src="bootstrap/images/bhat.png" style="width:90px;height:75px"><br>
                    <h3>The Black Hat</h3>
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="bootstrap/images/sandeep.png" alt="Sandeep image" style="width: 140px; height: 140px;">
                    <h2>Sandeep Manne</h2>
                    
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="bootstrap/images/swapnil.png" alt="Swapnil image" style="width: 140px; height: 140px;">
                    <h2>Swapnil Patil</h2>
                    
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="bootstrap/images/kiran.png" alt="Kiran image" style="width: 140px; height: 140px;">
                    <h2>Kiran Juikar</h2>
                    
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="bootstrap/images/abhilash.png" alt="Abhilash image" style="width: 140px; height: 140px;">
                    <h2>Abhilash Bhattacharya</h2>
                   
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                    <h2>Moinuddin Sheriff</h2>
                    
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <img class="img-circle" src="bootstrap/images/abhijith.png" alt="Abhijeeh image" style="width: 140px; height: 140px;">
                    <h2>Abhijeet Shekhar</h2>
                    
                </div>
            </div>

        </div>
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
            $("#location").geocomplete().bind("geocode:result", function (event, result) {
                var places = result.formatted_address.split(",");
                $("#user_destination").attr("placeholder", "Where you are going in " + places[0]);
                $("#user_source").attr("placeholder", "Where you friend/relatives in " + places[0]);
            });


            $("#location").blur(function () {

            });

            $("#user_source").geocomplete();
            $("#user_destination").geocomplete();

            $("#search_nearby_button").click(function(){
                window.open("https://www.google.com/maps/search/?q=Attractions%20loc:"+$("#user_destination").val(), '_blank');
            })
            
            $("#search_button").click(function(){
                $("#result").hide();
                $("#no-result").hide();
                $.getJSON("caluclate_saving.php?usersource="+$("#user_source").val()+"&destination="+$("#user_destination").val(), function(data){
                    console.log(data);
                    $("#user_distance").html(data.user.distance);
                    $("#stayzilla_distance").html(data.stayzilla.distance);
                    if (parseFloat(data.user.distance) < parseFloat(data.stayzilla.distance)) {
                        $("#no-result").show();
                    } else {
                        $("#result").show();    
                    }
                    $("#user_duration").html(data.user.duration);
                    $("#stayzilla_duration").html(data.stayzilla.duration);
                    $("#user_cabfare").html(data.user.cabFare);
                    $("#stayzilla_cabfare").html(data.stayzilla.cabFare);
                    $("#stayzilla_hotelFare").html(data.stayzilla.hotelFare);
                    
                })
            })
        </script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>
