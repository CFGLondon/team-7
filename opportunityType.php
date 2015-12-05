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

        <title>Opportunity  Type - Route21</title>

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

            <div class="titleBanner">
                <h1>Software Developer</h1>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="companyQA"><h3 style="margin: 0; margin-bottom: 15px;">Key Skills</h3>
                    <div class="question">
                    <b>Companies will ask for a large variety of skills from you. However these will be common and key ones in an application -</b><br>
                        <ul>
                            <li>Coding Language Knowledge - HTML, CSS, PHP, Unix, Java, JavaScript, SQL and C# and Phython</li>
                            <li>Knowledge on how Networks operate, TCP/IP Networks</li>
                            <li>Experience on differeny Operating Systems</li>
                        </ul>

                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="titleBanner">
                <h1>Infrastructure Manager</h1>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="companyQA"><h3 style="margin: 0; margin-bottom: 15px;">Key Skills</h3>
                    <div class="question">
                    <b>Companies will ask for a large variety of skills from you. However these will be common and key ones in an application -</b><br>
                        <ul>
                            <li>Experience in Line Management</li>
                            <li>Meeting deadlines and task specifications</li>
                            <li>Knowledge of configuring and designing firewalls, routeres and other network devices.</li>
                        </ul>

                    </div>
                </div>
            </div>
            
            <hr>
            
            <div class="titleBanner">
                <h1>Database Developer</h1>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div id="companyQA"><h3 style="margin: 0; margin-bottom: 15px;">Key Skills</h3>
                    <div class="question">
                    <b>Companies will ask for a large variety of skills from you. However these will be common and key ones in an application -</b><br>
                        <ul>
                            <li>Oracle Skills</li>
                            <li>Skills in SQL</li>
                            <li>Experience in databases funtion and how they perform</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
