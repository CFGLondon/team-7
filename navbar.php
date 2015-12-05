   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php  if (basename($_SERVER['PHP_SELF']) == "homepage.php") { echo '<li class="active">'; } else { echo '<li>';} ?>
    <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/homepage.php">Homepage</a></li>
                
                    <?php  if (basename($_SERVER['PHP_SELF']) == "search.php") { echo '<li class="active">'; } else { echo '<li>';} ?>
                    <li><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/search.php">Search for Jobs</a></li>
                
                    <?php  if (basename($_SERVER['PHP_SELF']) == "faq.php") { echo '<li class="active">'; } else { echo '<li>';} ?>
                    <li><a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/faq.php">FAQ</a></li>
                </ul>

            <?php
            echo basename($_SERVER['PHP_SELF']);
            
                session_start();
                include 'connect.php';

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
                                        New here ? <a href="http://ec2-54-78-185-241.eu-west-1.compute.amazonaws.com/team7/register.php"><b>Join Us</b></a>
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
                        <p>
                        <?php     
                            $query = "SELECT * FROM user WHERE user_id = " . $_SESSION['loggedinUser'];
                            $userrow = mysqli_query($conn, $query); //Execute query.

                            while ($row = $userrow->fetch_assoc()) {
                                echo "<a href='profile.php?id=" . $row['user_id'] . "'>" . $row['first_name'] . "</a>";
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