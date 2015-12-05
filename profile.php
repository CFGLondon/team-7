<?php 
   session_start();
   include 'connect.php';

    $id = isset($_GET['id']) ? intval($_GET['id']) : (isset($_SESSION['loggedinUser']) ? $_SESSION['loggedinUser'] : 1); 
    $query = "SELECT * FROM user WHERE user_id = " . $id;
    $userrow = mysqli_query($conn, $query); //Execute query.
    $row = $userrow->fetch_assoc();

    if(mysqli_num_rows($userrow) > 0){
        $userid    = $row['user_id'];
        $firstName = $row['first_name'];
        $lastName     = $row['last_name'];
        $dob     = $row['date_of_birth'];
        $postcode  = $row['postcode'];
        $email = $row['email'];
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

        <title><?php print(isset($firstName) ? $firstName . ' ' . $lastName : 'Unknown'); ?>'s Profile | Route21</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <link href="css/profile.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        
        <script src="js/nav.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php include 'navbar.php'; ?>

        <!-- Page Content -->
        <div class="container">

            <div class="profileBanner">
                <div class="profileImage"><img src="http://picturelava.com/wp-content/uploads/2015/08/Jesus-Christ-clarklover-10737807-363-391.jpg" class="img-circle img-responsive img-center" height="200px" width="200px"></div>
            </div>
            <!-- /.row -->

            <hr style="margin-top: -20px;">

            <div class="row">
                <div id="leftBox"><div class="content"><h3>Details</h4><b>Name: </b><?php echo($firstName . ' ' . $lastName); ?><br><b>Email:</b> <?php echo($email); ?><br><b>Age:</b> ???</br><b></b></div></div>
            
                <div id="rightBox"><h3>Skills and Interests</h3>
                    <?php
                        $query = "SELECT * FROM interest WHERE user_id = " . $id;
                        $userrow = mysqli_query($conn, $query); //Execute query.

                        while ($row = $userrow->fetch_assoc()) {
                            echo $row['description'] . '<br>';
                        }
						echo "<form method = \"get\">
							<input type = \"text\" name = \"desc\" value = \"New Skill/Interest\">
							<select name = \"type\"><option value = \"Skill\">Skill</option><option value = \"Interest\">Interest</option></select>
							<input type = \"submit\" name = \"sub\">
							</form>";
                    ?>
					<?php
						$type = $_GET["type"];
						$description = $_GET["desc"];
							
						$query = "INSERT INTO interest VALUES ($id, '$type', '$description')";
						mysqli_query($conn, $query);
					?>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Events Attended</h3></div>
                    <div class="eventContent">
                        <?php
                            $query = "SELECT * FROM user_events WHERE user_id = " . $id;
                            $userrow = mysqli_query($conn, $query); //Execute query.

                            while ($row = $userrow->fetch_assoc()) {
                                $query = "SELECT * FROM events WHERE event_id = " . $row['event_id'];
                                $eventRow = mysqli_query($conn, $query); //Execute query
                           
                                while ($row = $eventRow->fetch_assoc()) {
                                    echo '<div class="event"><div class="caption">' . $row['name'] . '</div></div>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            
             <hr>

            <div class="row">
                <div id="sectionBody">
                    <div class="sectionHeader"><h3 style="margin: 0;">Work Experience</h3></div>
                    <div class="workContent">
                        
                        <?php
                            $query = "SELECT * FROM user_opportunity_association WHERE user_id = " . $id;
                            $userrow = mysqli_query($conn, $query); //Execute query.

                            while ($row = $userrow->fetch_assoc()) {
                                $query = "SELECT * FROM opportunities WHERE opportunity_id = " . $row['opportunity_id'];
                                $eventRow = mysqli_query($conn, $query); //Execute query
                           
                                while ($row = $eventRow->fetch_assoc()) {
                                //for(int i= 1; i >2; i++) { 
                                    echo '<div class="leftWork"><div class="jobTitle">'.$row['name'].'</div><div class="jobLength">'.$row['type'].' - '.$row['location'] .'</div><div class="jobDesc"><b>Job Description -</b> '.$row['about'].' </div></div>';
                    /*echo '<div class="rightWork"><div class="jobTitle"> '.$row['name'].' </div><div class="jobLength">'.$row['type'].' - '.$row['location'] .'</div><div class="jobDesc"><b>Job Description -</b> '.$row['about'].' </div></div>';
                                }*/
                                }
                            }
                        ?>
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
