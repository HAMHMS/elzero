<?php
include 'tpls/head.php';
include 'tpls/navbar.php';
?>

        <!-- Start Section Tool Box -->
        
        <section class="option-box">
            <div class="color-option">
                <h4>Color Option</h4>
                <ul class="list-unstyled">
                    <li data-value="css/default_theme.css"></li>
                    <li data-value="css/purple_theme.css"></li>
                    <li data-value="css/blue_theme.css"></li>
                    <li data-value="css/yellow_theme.css"></li>
                </ul>
            </div>
            <i class="fa fa-gear fa-3x gear-check"></i>
        </section>
        
        <!-- End Section Tool Box -->
    
        <!-- Start Our Navbar -->
    
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ournavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand wobble-horizontal" href="index.php">Elzero <span>Inc.</span></a>
            </div>
            <div class="collapse navbar-collapse" id="ournavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Desktop</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Web Hosting</a></li>
                  </ul>
                </li>
                <li><a href="#">Map</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div> <!-- End Of The Container -->
        </nav>
        
        <!-- End Our Navbar -->
        
        <!-- Start Breadcrumb -->
        
        <div class="breadcrumb-holder">
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">About Us</li>
                </ol>
            </div>
        </div>
        
        <!-- End Breadcrumb -->
        
        <!-- Start About Us Intro -->
        
        <section class="about-us text-center">
            <div class="container">
                <h1>About Us</h1>
                <hr>
                <p class="lead">We Create Your Digital Dreams Just Think And Tell Us What You Need <br> Or Leave The Inspiration To Us And Just Watch, Just Believe In Our Professionals</p>
                <img class="img-thumbnail" src="images/company_team.jpg" alt="Company Team">
            </div>
        </section>
        
        <!-- End About Us Intro -->
        
        <!-- Start About Features -->
        
        <section class="about-features text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-code fa-5x"></i>
                        <h3>We Love Code</h3>
                        <p>We Create Your Digital Dreams Just Think And Tell Us What You Need Or Leave The Inspiration To Us And Just Watch, Just Believe In Our Professionals</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-child fa-5x"></i>
                        <h3>We Are Happy</h3>
                        <p>We Create Your Digital Dreams Just Think And Tell Us What You Need Or Leave The Inspiration To Us And Just Watch, Just Believe In Our Professionals</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-group fa-5x"></i>
                        <h3>We Are Social</h3>
                        <p>We Create Your Digital Dreams Just Think And Tell Us What You Need Or Leave The Inspiration To Us And Just Watch, Just Believe In Our Professionals</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End About Features -->
        
        <!-- Start About CEO -->
        
        <section class="about-ceo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <img class="img-responsive" src="images/ceo.png" alt="CEO">
                    </div>
                    <div class="col-sm-7">
                        <h2 class="h1">We Are Happy To Help You</h2>
                        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End ABout CEO -->
        
<?php include 'tpls/footer.php'; ?>