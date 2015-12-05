<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#logForm').submit(function(event) {
            var formData = {
                'email' : $('.logEmail').val(),
                'password' : $('.logUserPass').val()
            };

            $.ajax({
                type        : 'POST',
                url         : 'php/login.php',
                data        : formData,
                dataType    : 'json',
                encode      : true,
                error		: function(request, status, error) { console.log(request.responseText); },
                success		: function(data) {
                    if (data.error) {
                        console.log(data.error);
                    } else {
                        window.location.replace("google.co.uk");
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

    <div class="container">
        <div class="row">
            <div class="col-sm-12 cont">
                <div id="login">
                    <div id="header">Log in</div>

                    <div class="loginForm">
                        <form id="logForm" action="php/login.php" method="POST"> 
                            <input type="email" name="email" placeholder="Email" class="logEmail textField" required/> 
                            <input type="password" name="password" placeholder="Password" class="logUserPass textField" required/> 

                            <input type="submit" class="btn btn-info" value="Log In" id="submit"/>		 			
                        </form>
                        <div class="forgotPass"><a>Forgotten your password?</a></div>
                    </div>
                </div>
            
                <div id="info">
                    <div id="header">Did you know?</div>
                    <div class="content">
                        <?php 
                        $items = Array("If you require CV advice, our representatives are available in the 'Ask 4 Advice' section.", "The possibilites are endless, regardless of GCSE and A-Level results. Find out more on our FAQ page!", "We have over 110 employers on the site. Click <a href='google.co.uk'>here</a> to find out more." ); 
                        echo $items[array_rand($items)];
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
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
