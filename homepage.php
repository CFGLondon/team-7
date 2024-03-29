<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <title>Home | Route21</title>

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="js/jquery.js"></script>
    <script src="js/nav.js"></script>
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


            <div class="col-sm-3 well">
                <!-- Start of most recent oppotunities box -->
                <h1 style="font-size: 20px;text-align:center;">Most Recent Opportunities:</h1>
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
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Amazon</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Infrastructure Manager</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">J.P. Morgan</a>
                            </td>
                            <td>
                               <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Programmer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">IBM</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Developer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Google</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Software Developer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Mitsubishi</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <!-- End most recent opportunities -->
                <hr>
                <!-- Start Most Popular Opportunities -->
                <h1 style="font-size: 20px;text-align:center;">Most Popular:</h1>
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
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">J.P. Morgan</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Experience Week</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Google</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Infrastructure Manager</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">IBM</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Developer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Amazon</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Database Developer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Mitsubishi</a>
                            </td>
                            <td>
                                <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Most Popular Opportunities -->
            
            
            <!-- Start recommended jobs -->
            <div class="col-sm-8 well" style="margin-left:5%">
                <h1 style="text-align:center;">Recommended for you:</h1>
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
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">IBM</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a></td>
                            <td>London</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">J.P. Morgan</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Programmer</a></td>
                            <td>London</td>
                            <td>Work on important programming tasks and manage teams of programmers.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">J.P. Morgan</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Experience Week in Industry</a></td>
                            <td>London</td>
                            <td>Aimed at younger people, this experience will give you insight in working in the industry.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Google</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Software Developer</a></td>
                            <td>London</td>
                            <td>Manage software development teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Amazon</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Infrastructure Manager</a></td>
                            <td>New York</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Mitsubishi</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a></td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">IBM</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Developer</a></td>
                            <td>London</td>
                            <td>Role invoves the development of software and management of teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Google</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Infrastructure Manager</a></td>
                            <td>London</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Amazon</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Database Developer</a></td>
                            <td>New York</td>
                            <td>Create and manage databases.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Mitsubishi</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a></td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">IBM</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Senior Developer</a></td>
                            <td>London</td>
                            <td>Role invoves the development of software and management of teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Google</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Infrastructure Manager</a></td>
                            <td>London</td>
                            <td>Manage infrastructure teams.</td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Amazon</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Database Developer</a></td>
                            <td>New York</td>
                            <td>Create and manage databases.</a></td>
                        </tr>
                        <tr>
                            <td><b><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/companyProfile.php">Mitsubishi</a>
                </b>
                            </td>
                            <td><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/opportunities.php">Software Developer</a></td>
                            <td>Cairo</td>
                            <td>Role invoves the development of software.</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <!-- Start recommended jobs -->
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $("#table1").dataTable();
        })
    </script>
</body>

</html>
