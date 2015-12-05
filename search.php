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
    <title>Search</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
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
            <div class="col-sm-12 well">
                <h1 style="text-align:center;">Jobs:</h1>

                <div style="text-align:center;">
                    <h5>Show me:</h5>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Full-time Jobs</label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="">Part-Time Jobs</label>
					<label class="checkbox-inline">
						<input type = "checkbox" value = "">Internships</label>
					<label class="checkbox-inline">
						<input type = "checkbox" value = "">Education</label>
					<label class="checkbox-inline">
                        <input type="checkbox" value="">Events</label>
                </div>



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
                            <td>Software Developer</td>
                            <td>London</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">J.P. Morgan</a>
                </b>
                            </td>
                            <td>Senior Programmer</td>
                            <td>London</td>
                            <td>Work on important programming tasks and manage teams of programmers.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">J.P. Morgan</a>
                </b>
                            </td>
                            <td>Experience Week in Industry</td></td>
                            <td>London</td>
                            <td>Aimed at younger people, this experience will give you insight in working in the industry.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Google</a>
                </b>
                            </td>
                            <td>Senior Software Developer</td>
                            <td>London</td>
                            <td>Manage software development teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Infrastructure Manager</td>
                            <td>New York</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Software Developer</td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">IBM</a>
                </b>
                            </td>
                            <td>Senior Developer</td>
                            <td>London</td>
                            <td>Role invoves the development of software and management of teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Google</a>
                </b>
                            </td>
                            <td>Infrastructure Manager</td>
                            <td>London</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Database Developer</td>
                            <td>New York</td>
                            <td>Create and manage databases.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Software Developer</td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">IBM</a>
                </b>
                            </td>
                            <td>Senior Developer</td>
                            <td>London</td>
                            <td>Role invoves the development of software and management of teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Google</a>
                </b>
                            </td>
                            <td>Infrastructure Manager</td>
                            <td>London</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Amazon</a>
                </b>
                            </td>
                            <td>Database Developer</td>
                            <td>New York</td>
                            <td>Create and manage databases.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Mitsubishi</a>
                </b>
                            </td>
                            <td>Software Developer</td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
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
