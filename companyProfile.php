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
                <div id="leftBox"><div class="content"><h3>Details</h4><b>Comany Name: </b>JP Morgan Chase<br><b>Contact Email:</b> contactUs@jpmorgan.com<br><b>Sector: </b> Technology</br><b></b></div></div>
            <div id="rightBox"><h3>Company Background</h3><b>Established:</b> 2000<br><b>Headquaters: </b>New York City</div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Highest Rated Jobs</h3></div>
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
                    <div class="sectionHeader"><h3 style="margin: 0;">Newest Jobs</h3></div>
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
                <div id="companyQA"><h3 style="margin: 0; margin-bottom: 15px;">Q & A</h3>
                    <div class="question">
                    <b>What kind of enviromental standards does your company comply with?</b><br>
                        At JP Morgan we're strong advocates at looking after and caring for the enviromnent. So much so we've installed .....

                    </div>
                </div>
            </div>

            <hr>
        
            <div class="row row-no-padding">
                <div class="col-sm-6">
                    <div id="companyQA">
                        <h3 style="margin: 0; margin-bottom: 25px; display: inline-block;">Facebook</h3><span class="subheader"><a href="https://www.facebook.com/jpmorganchasecareers" target="_blank">J.P. Morgan and Chase</a></span>
                        <div class="fbMessage">
                        "At JPMorgan Chase & Co., we challenge ourselves daily to create a truly accessible and inclusive environment." Taskeen, Managing Director of Reference Data Strategy and Global Co-Chair of our Access Ability business resource group, recently shared her story on how caring for her son encouraged her to become an advocate for employees with disabilities and caregivers in the workplace. jpm.com/x/i/NFQoa2o
                        </div><div class="belowMessage">4th December 2015 at 12:32PM</div>
                        
                        <div class="fbMessage">
                            #‎GivingTuesday‬, a global day of giving, takes place on December 1. What are some of the ways you’ll give back this holiday season? jpm.com/x/i/NFQoCrU
                        </div><div class="belowMessage">3rd December 2015 at 10:28PM</div>
                    </div>
                </div>
                
                <div class="col-sm-6 nopadding">
                    <div id="companyQA">
                        <h3 style="margin: 0; margin-bottom: 25px; display: inline-block;">Twitter</h3><span class="subheader"><a href="https://twitter.com/jpmorgan" target="_blank">@JPMorgan</a></span>
                        <div class="twitterMessage">
                        In 1879, Thomas Edison first demonstrated his electric lightbulb to financial backers including JP Morgan. 
                        </div><div class="belowMessage">4th December 2015 at 8:42PM</div>
                        
                        <div class="twitterMessage">
                           New @jpmorgan report looks at Asian corporates to understand their appetite for M&A. http://jpm.com/x/j/NFMeBMl  
                        </div><div class="belowMessage">3rd December 2015 at 9:45AM</div>
                    </div>
                </div>
            </div>


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
