<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .vcenter {
            display: inline-block;
            vertical-align: middle;
            float: none;
        }
        
        body {
            padding: 50px;
        }
        
        #login-dp {
            min-width: 250px;
            padding: 14px 14px 0;
            overflow: hidden;
            background-color: rgba(255, 255, 255, .8);
        }
        
        #login-dp .help-block {
            font-size: 12px
        }
        
        #login-dp .bottom {
            background-color: rgba(255, 255, 255, .8);
            border-top: 1px solid #ddd;
            clear: both;
            padding: 14px;
        }
        
        #login-dp .social-buttons {
            margin: 12px 0
        }
        
        #login-dp .social-buttons a {
            width: 49%;
        }
        
        #login-dp .form-group {
            margin-bottom: 10px;
        }
        
        .btn-fb {
            color: #fff;
            background-color: #3b5998;
        }
        
        .btn-fb:hover {
            color: #fff;
            background-color: #496ebc
        }
        
        .btn-tw {
            color: #fff;
            background-color: #55acee;
        }
        
        .btn-tw:hover {
            color: #fff;
            background-color: #59b5fa;
        }
        
        @media(max-width:768px) {
            #login-dp {
                background-color: inherit;
                color: #fff;
            }
            #login-dp .bottom {
                background-color: inherit;
                border-top: 0 none;
            }
        }
        
        #search {
            width: 300px;
            height: 50px;
            margin: auto;
        }
        
        .navbar-brand-centered {
            position: absolute;
            left: 50%;
            display: block;
            text-align: center;
        }
        
        #searchBtn {
            position: relative;
            left: 310px;
            top: -55px;
        }
        
        .table-hover tbody tr:hover td,
        .table-hover tbody tr:hover th {
            background-color: #eeeeea;
        }

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <title>Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#login-nav').submit(function(event) {
                var formData = {
                    'email': $('#exampleInputEmail2').val(),
                    'password': $('#exampleInputPassword2').val()
                };

                $.ajax({
                    type: 'POST',
                    url: 'php/login.php',
                    data: formData,
                    dataType: 'json',
                    encode: true,
                    error: function(request, status, error) {
                        console.log(request.responseText);
                    },
                    success: function(data) {
                        if (data.error) {
                            console.log(data.error);
                        } else {
                            window.location.replace("homepage.php");
                        }
                    }
                })

                event.preventDefault();
            });
        });

    </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/homepage.html">Homepage</a></li>
                    <li><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/search.php">Search for Jobs</a></li>
                </ul>
                
                <?php
                    session_start();
                
                    if (!isset($_SESSION['loggedinUser'])) {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p class="navbar-text">Already have an account?</p>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="text-align:center;">Login via</div>
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        <div style="text-align:center;">or</div>
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <div class="help-block text-right"><a href="">Forget your password?</a></div>

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <div style="text-align:center;margin-left:auto;margin-right:auto;">
                                                        <input type="checkbox"> keep me logged-in</div>

                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <?php
                    } else {
                ?>
                
               <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p>Welcome back, 
                        
                        <?php     
                            echo $_SESSION['loggedinUser'];
                            $query = "SELECT * FROM user WHERE user_id = " . $_SESSION['loggedinUser'];
                            $userrow = mysqli_query($conn, $query); //Execute query.
                            $row = $userrow->fetch_assoc();

                            if(mysqli_num_rows($userrow) > 0){
                                echo "<a href='profile.php?id=" . $row['user_id'] . "'>" . $row['first_name'] . "</a>!";
                            }
                        ?></p>
                    </li>
                </ul>
                
                <?php } ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<h1 class="tagline">Route 21</h1>-->
                </div>
            </div>
        </div>
    </header>


    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">


            <div class="col-sm-3 well">

                <h1 style="font-size: 20px;text-align:center;">Most Recent Jobs:</h1>
                <table id="table2" class="table table-list-search table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Employer</th>
                            <th>Opportunity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.phphttp://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">GWR</a>
                            </td>
                            <td>
                                Train Driver
                            </td>
                        </tr>

                    </tbody>
                </table>
                <hr>
                <h1 style="font-size: 20px;text-align:center;">Most Popular Jobs:</h1>
                <p style="text-align:center;">In the last 24 hours</p>
                <table id="table2" class="table table-list-search table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Employer</th>
                            <th>Opportunity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">JPM</a>
                            </td>
                            <td>
                                Banker
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">JPM</a>
                            </td>
                            <td>
                                Banker
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">JPM</a>
                            </td>
                            <td>
                                Banker
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">JPM</a>
                            </td>
                            <td>
                                Banker
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">JPM</a>
                            </td>
                            <td>
                                Banker
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>

            <div class="col-sm-8 well" style="margin-left:5%">
                <h1 style="text-align:center;">Your recommended jobs:</h1>
                <table id="table1" class="table table-list-search table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Employer</th>
                            <th>Opportunity</th>
                            <th>Location</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">IBM</a>
                </b>
                            </td>
                            <td>Senior Developer</td>
                            <td>London</td>
                            <td>You will develop software and do software devloping things :DD</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Googles</a>
                </b>
                            </td>
                            <td>The big manr</td>
                            <td>London</td>
                            <td>You will be the big player of the game and do many things like eat and play golf</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Chip Consumer</td>
                            <td>New York</td>
                            <td>its getting too tired to be funny now :/</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Help</td>
                            <td>Cairo</td>
                            <td>I honestly have run out of ideas</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">IBM</a>
                </b>
                            </td>
                            <td>Senior Developer</td>
                            <td>London</td>
                            <td>You will develop software and do software devloping things :DD</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Google</a>
                </b>
                            </td>
                            <td>The big manr</td>
                            <td>London</td>
                            <td>You will be the big player of the game and do many things like eat and play golf</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Chip Consumer</td>
                            <td>New York</td>
                            <td>its getting too tired to be funny now :/</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Help</td>
                            <td>Cairo</td>
                            <td>I honestly have run out of ideas</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">IBM</a>
                </b>
                            </td>
                            <td>Senior Developer</td>
                            <td>London</td>
                            <td>You will develop software and do software devloping things :DD</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Google</a>
                </b>
                            </td>
                            <td>The big manr</td>
                            <td>London</td>
                            <td>You will be the big player of the game and do many things like eat and play golf</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Chip Consumer</td>
                            <td>New York</td>
                            <td>its getting too tired to be funny now :/</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Help</td>
                            <td>Cairo</td>
                            <td>I honestly have run out of ideas</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>


    </div>


    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $("#table1").dataTable();
        })

    </script>
</body>

</html>
