<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

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

        <title>Opportunities - Route21</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <link href="css/opport.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

        <!-- Page Content -->
        <div class="container">
            
            <div id="leftBar">
                <div class="companyImage"><img src="https://pbs.twimg.com/profile_images/461908736106168320/S9sGEWmY.png" class="companyLogo"></div>
                <div class="companyDetails">
                    <p class="companyDeets"><b>Company Name: </b>JP Morgan</p>
                    <p class="companyDeets"><b>Opportunity Title: </b>Senior Programmer</p> 
                    <p class="companyDeets"><b>Opportunity Type: </b>10+ Week Placement</p>
        <p class="companyDeets"><b>Starting Date: </b>June 2016</p>
        <p class="companyDeets"><b>Salary: </b>£19000</p>
<p class="companyDeets"><b>Skills required: </b>PHP, Unix, MySQL, HTML, CSS, Python</p>
<p class="companyDeets"><b>Sector: </b>Technology</p>
                </div>    
                <div id="companyShortDescri"><h4>Opportunity Description</h4><p>This job is well cool your friends will be jelly if you get it omg good luck :)</p></div>
            </div>
            
            <hr>

            <div id="mainContent">
                <div class="jobMainDescription"><h3>Opportunity  Description</h3><p>This will be a varied role working within the competence & Learning department of JP Morgan and will include a variety of tasks including:

    Daily maintenance of training tools and processes
    Liaising with training providers and academies Dealing with queries from internal customers
    Completing learning and competence analysis
    Course design and development
    Training provider selection process
    Involvement in Government funding project
    Data collection - Compilation of, and coordinating the data collection process. Producing weekly data analysis reports
    Liaising with external accountant
</p></div>
            </div>
            
            <hr>

            <div id="mainContent">
                <div class="jobMainDescription"><h3>Skills Required</h3><p>
    MUST be an undergraduate returning to full time education in September 2017
    MUST have the existing right to work in the UK
    Be studying towards a relevant, ideally Food related, degree
    Demonstrate a passion for product development and the Food or Health & Beauty industries
    Excellent attention to detail and general PC skills
    An ability to pick up skills and business information quickly and form successful working relationships.
    Demonstrate a strong interest in gaining Product Development experience with the world’s largest Entertainment company!

The role will suit an out-going student with good communication skills who is open to new learning experiences. The team is passionate and enthusiastic & there is lots of inter-country communication so a good command of the English language both written and orally is critical for success. English is the business language but not the first language of the majority of the team.

The successful candidate is likely to be entrepreneurial & have a strong creative flair. A flexible approach and the ability to adapt to changing priorities are key as each day is different. The department is busy and works quickly to tight deadlines so the ability to make decisions and work under pressure are important also.
</p></div>
            </div>

            <hr>
            
            <div id="mainContent">
                <div class="jobMainDescription">
                    <h3>Comments</h3>
                <div class="commentMain">"It's fantastic"</div>
                <div class="commentUser">Jerry</div>
                </div>
                <div class="postAComment"><textarea></textarea></div>
        
            </div>

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
