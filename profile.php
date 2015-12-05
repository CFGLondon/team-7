<?php 
   include 'connect.php';

    $id = isset($_GET['id']) ? intval($_GET['id']) : $_SESSION['loggedinUser']; 
    $query = "SELECT * FROM user WHERE user_id = '" . $id . "'";
    $userrow = mysqli_query($conn, $query); //Execute query.

    
    if(mysqli_num_rows($userrow) > 0){
        $userid    = $userrow['user_id'];
        $firstName = $userrow['first_name'];
        $lastName     = $userrow['last_name'];
        $dob     = $userrow['date_of_birth'];
        $postcode  = $userrow['postcode'];
        $email = $userrow['email'];
        $type = $userrow['type'];
        $bio = $userrow['bio'];
        $dateJoined = $userrow['date_joined'];
        $phoneNo = $userrow['phone_number'];
        
        if ($userrow['bio']) {
            $bio = $userrow['bio'];
        }
        
    }

?>


<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Profile <?php print(isset($usersname) ? $usersname : 'Unknown'); ?> - Route21</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <link href="css/profile.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Start Bootstrap</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="profileBanner">
                <div class="profileImage"><img src="http://picturelava.com/wp-content/uploads/2015/08/Jesus-Christ-clarklover-10737807-363-391.jpg" class="img-circle img-responsive img-center" height="200px" width="200px"></div>
            </div>
            <!-- /.row -->

            <hr style="margin-top: -20px;">

            <div class="row">
                <div id="leftBox"><div class="content"><h3>Details</h4>Name: <b><?php echo($firstName); ?></b><br><b>Email:</b> <?php echo($email); ?><br><b>Age:</b> ???</br><b></b></div></div>
                <div id="rightBox"><h3>Skills and Interests</h3>Interest(s): <b><br>Christ<br>barns</b><br>Hate(s)<br><b>Inns</b></div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Events Attended</h3></div>
                    <div class="eventContent">
                        <div class="event">.</div>
                        <div class="event">.</div>
                        <div class="event">.</div>
                        <div class="event">.</div>
                        <div class="event">.</div>
                    </div>
                </div>
            </div>
            
             <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Work Experience</h3></div>
                    <div class="workContent">
                        <div class="leftWork">
                            <div class="jobTitle">Carpenter</div>
                            <div class="jobLength">December 1632 - January 1946</div>
                            <div class="jobDesc"><b>Job Description -</b> </div>
                        </div>
                        <div class="rightWork">
                            <div class="jobTitle">Housekeeper</div>
                            <div class="jobLength">June 1997 - September 2012</div>
                            <div class="jobDesc"><b>Job Description -</b></div>
                        </div>
                        <div class="leftWork">
                            <div class="jobTitle">Carpenter</div></div>
                        <div class="rightWork"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
