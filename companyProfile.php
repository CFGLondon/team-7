<?php 
   /* include 'connect.php';

    $id = intval($_GET['id'])); 

    if ($row) {
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


*/
?>

<script>
    console.log(<? echo json_encode($userid); ?>);
</script>


<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Company Profile - Route21</title>

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
                
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="profileBanner">
                <div class="profileImage"><img src="https://pbs.twimg.com/profile_images/461908736106168320/S9sGEWmY.png" class="img-circle img-responsive img-center" height="200px" width="200px"></div>
            </div>
            <!-- /.row -->

            <hr style="margin-top: -30px;">

            <div class="row">
                <div id="leftBox"><div class="content"><h3>Details</h4>Comany Name: <b>JP Morgan Chase</b><br><b>Contact Email:</b> contactUs@jpmorgan.com<br><b>Sector: </b> Technology</br><b></b></div></div>
                <div id="rightBox"><h3>Skills and Interests</h3>Interest(s): <b><br>Christ<br>barns</b><br>Hate(s)<br><b>Inns</b></div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Events Attended</h3></div>
                    <div class="eventContent">
                        <ul>
                            <div class="event">.</div>
                            <div class="event">.</div>
                            <div class="event">.</div>
                            <div class="event">.</div>
                            <div class="event">.</div>
                        </ul>
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
