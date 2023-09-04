<?php
include 'tpls/head.php';
include 'tpls/navbar.php';
?>

        <!-- Start Carousel -->
<?php
include 'admin/functions/connect.php';
$read = "SELECT * FROM slider";
$query = $conn -> query($read);
if ($query->num_rows > 0) {
?>
        <div id="myslide" class="carousel slide hidden-xs" data-ride="carousel">

          <ol class="carousel-indicators">
<?php
foreach ($query as $index => $row) {
$active = ($index == 0) ? 'active' : '';    
?>   
         <li data-target="#myslide" data-slide-to="<?= $index ?>" class="<?= $active ?>"></li>

<?php } ?>
          </ol>
        
          <div class="carousel-inner">
           <?php 
            $query->data_seek(0); 
            foreach($query as $index => $row){
            $active = ($index == 0) ? 'active' : '';    
           ?> 
            <div class="item <?= $active ?>">
              <img src="admin/images/<?= $row['image'] ?>" width="1920" height="600" alt="Pic 1">
              <div class="carousel-caption hidden-xs">
                <h2 class="h1"><?= $row['title'] ?></h2>
                <p class="lead"><?= $row['name'] ?></p>
              </div>
            </div>
           <?php } ?>
          </div>
        
          <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          
          <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          
        </div>
<?php } ?>
        <!-- End Carousel -->
        
        <!-- Start Section About -->
        
        <section class="about text-center wow bounceIn" data-wow-duration="2s" data-wow-offset="300">
            <div class="container">
                <h1>Meet Our New Template <span>Elzero Inc.</span></h1>
                <p class="lead">Hello Let Me Introduce Our Template Elzero Inc. Created With All The Love With <strong>Bootstrap</strong> 3.2.0</p>               
            </div>
        </section>
        
        <!-- End Section About -->
        
        <!-- Start Section Features -->
        
        <section class="features text-center">
            <div class="container">
                <h2 class="h1">Our Features</h2>
                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        
                        <div class="feat wow bounceInLeft" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-ok"></span>
                            <h4>100% Responsive</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        
                        <div class="feat wow bounceInDown" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <h4>Retina Ready</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        
                        <div class="feat wow bounceInUp" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-eye-open"></span>
                            <h4>Awesome Display</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        
                        <div class="feat wow bounceInRight" data-wow-duration="1s" data-wow-offset="200">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <h4>Well Documented</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        
        <!-- End Section Features -->
        
        <!-- Start Testimonials Section -->
        
        <section class="testimonials text-center wow flipInY" data-wow-duration="1s" data-wow-offset="200">
            
            <!-- Start Container -->
            
            <div class="container">
                
                <h2 class="h1">What Our Clients Say</h2>
                 
                <!-- Start Testimonials Carousel -->
                
                <div id="carousel_testimonials" class="carousel slide" data-ride="carousel">
                    
                  <div class="carousel-inner">
                    
                    <div class="item active">
                         <p class="lead">Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                         <span>Osama Elzero</span>
                    </div>
                    
                    <div class="item">
                         <p class="lead">Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                         <span>Hassan Zohdy</span>
                    </div>
                    
                    <div class="item">
                         <p class="lead">Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                         <span>Hind Ragab</span>
                    </div>
                    
                    <div class="item">
                         <p class="lead">Transition animations not supported in Internet Explorer 8 & 9 Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                         <span>Zahra Ahmed</span>
                    </div>
                    
                  </div>
                  
                  <ol class="carousel-indicators">
                    <li data-target="#carousel_testimonials" data-slide-to="0" class="active">
                        <img src="images/avatar_01.jpg" width="74" height="74" alt="Osama" />
                    </li>
                    <li data-target="#carousel_testimonials" data-slide-to="1">
                        <img src="images/avatar_02.jpg" width="74" height="74" alt="Hassan" />
                    </li>
                    <li data-target="#carousel_testimonials" data-slide-to="2">
                        <img src="images/avatar_03.jpg" width="74" height="74" alt="Hind" />
                    </li>
                    <li data-target="#carousel_testimonials" data-slide-to="3">
                        <img src="images/avatar_04.jpg" width="74" height="74" alt="Zahra" />
                    </li>
                  </ol>
                  
                </div>
        
                <!-- End Testimonials Carousel -->
           
            </div>
            
            <!-- End Container -->
            
        </section>
        
        <!-- End Testimonials Section -->
    
        <!-- Start Section Price Table -->
        
        <section class="price_table text-center">
            <div class="container">
                
                <h2 class="h1">Our Amazing Prices</h2>
                
                <div class="row">
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-primary">Hosting</h2>
                            <p class="center-block">$40</p>
                            <ul class="list-unstyled">
                                <li>Space: 30GB</li>
                                <li>Emails: 20</li>
                                <li>Ips: 2 IP</li>
                                <li>Databases: 10</li>
                                <li>Ftp Accounts: 5</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-success">Vps</h2>
                            <p class="center-block">$50</p>
                            <ul class="list-unstyled">
                                <li>Space: 50GB</li>
                                <li>Emails: 40</li>
                                <li>Ips: 5 IP</li>
                                <li>Databases: 20</li>
                                <li>Ftp Accounts: 10</li>
                            </ul>
                            <a href="#" class="btn btn-success">Order Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-info">Dedicated</h2>
                            <p class="center-block">$70</p>
                            <ul class="list-unstyled">
                                <li>Space: 80GB</li>
                                <li>Emails: 40</li>
                                <li>Ips: 8 IP</li>
                                <li>Databases: 30</li>
                                <li>Ftp Accounts: 20</li>
                            </ul>
                            <a href="#" class="btn btn-info">Order Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                        <div class="price_box wow fadeInDown" data-wow-duration="2s" data-wow-offset="400">
                            <h2 class="text-danger">Cloud</h2>
                            <p class="center-block">$90</p>
                            <ul class="list-unstyled">
                                <li>Space: 90GB</li>
                                <li>Emails: 50</li>
                                <li>Ips: 10 IP</li>
                                <li>Databases: 50</li>
                                <li>Ftp Accounts: 50</li>
                            </ul>
                            <a href="#" class="btn btn-danger">Order Now</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </section>
        
        <!-- End Section Price Table -->
        
        <!-- Start Section Our Team -->
        
        <section class="our_team text-center">
            <div class="team">
                <div class="container">
                    <h2 class="h1">Meet Our Awesome Team</h2>
                    <div class="row">
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="1s" data-wow-offset="400">
                                <img class="img-circle" src="images/chris.jpg" width="200" height="200" alt="Chris Coyier" />
                                <h3>Chris Coyier</h3>
                                <p>This Is Chris Coyier The Founder Of The Amazing Website Css-Tricks</p>
                                <i class="fa fa-google-plus fa-lg"></i>
                                <i class="fa fa-facebook fa-lg"></i>
                                <i class="fa fa-twitter fa-lg"></i>
                                <i class="fa fa-youtube fa-lg"></i>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="1s" data-wow-offset="400">
                                <img class="img-circle" src="images/leah.jpg" width="200" height="200" alt="Leah Culver" />
                                <h3>Leah Culver</h3>
                                <p>This Is Amazing Hacker Woman With A Much Knowledge In Hacking Systems</p>
                                <i class="fa fa-google-plus fa-lg"></i>
                                <i class="fa fa-facebook fa-lg"></i>
                                <i class="fa fa-twitter fa-lg"></i>
                                <i class="fa fa-youtube fa-lg"></i>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="1s" data-wow-offset="400">
                                <img class="img-circle" src="images/steve.jpg" width="200" height="200" alt="Steve Jobs" />
                                <h3>Steve Jobs</h3>
                                <p>This Is The Man Who Change The World With His Apple Products</p>
                                <i class="fa fa-google-plus fa-lg"></i>
                                <i class="fa fa-facebook fa-lg"></i>
                                <i class="fa fa-twitter fa-lg"></i>
                                <i class="fa fa-youtube fa-lg"></i>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="person wow pulse" data-wow-duration="1s" data-wow-offset="400">
                                <img class="img-circle" src="images/marissa.jpg" width="200" height="200" alt="Marissa Mayer" />
                                <h3>Marissa Mayer</h3>
                                <p>This Is Amazing Hacker Woman With A Much Knowledge In Hacking Systems</p>
                                <i class="fa fa-google-plus fa-lg"></i>
                                <i class="fa fa-facebook fa-lg"></i>
                                <i class="fa fa-twitter fa-lg"></i>
                                <i class="fa fa-youtube fa-lg"></i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Section Our Team -->
        
        <!-- Start Section Subscribe -->
        
        <section class="subscribe text-center wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
            <div class="container">
                <h2 class="h1">Keep In Touch</h2>
                <p class="lead">Sign Up For Newsletter Dont Worry About Spam We Hate It Too.</p>
                <form class="form-inline">
                    <input class="form-control input-lg" type="text" placeholder="Write Your Email">
                    <button class="btn btn-danger btn-lg"><i class="fa fa-edit fa-lg"></i> Subscribe</button>
                </form>
            </div>
        </section>
        
        <!-- End Section Subscribe -->
        
        <!-- Start Section Stats -->
        
        <section class="statistics text-center">
            <div class="data">
                <div class="container">
                    <h2 class="h1">Our Main Statistics</h2>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-users fa-5x"></i>
                                <p>9,550</p>
                                <span>Satisfied Users</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-comments fa-5x"></i>
                                <p>25,600</p>
                                <span>Posted Comments</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-suitcase fa-5x"></i>
                                <p>3,260</p>
                                <span>Projects Done</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <i class="fa fa-support fa-5x"></i>
                                <p>95,350</p>
                                <span>Tickets Archieved</span>
                            </div>
                        </div>
                        
                    </div>
                </div>  
            </div>
        </section>
        
        <!-- End Section Stats -->
        
        <!-- Start Section Our Skills -->
        
        <section class="our-skills">
            <div class="container">
                <h2 class="text-center h1">Our Skills</h2>
                <div class="row">
                    
                    <!-- Start Progress Skills -->
                    
                    <div class="col-md-5">
                        <div class="skills-progress">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    Html5 / Css3
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    PHP / MySQL
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    Javascript / jQuery
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                    Wordpress
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Progress Skills -->
                    
                    <!-- Start Team Info -->
                    
                    <div class="col-md-6 col-md-offset-1">
                        <div class="skills-info">
                            <h3>About The Team</h3>
                            <p class="lead">We Are Specialised Desiging And Programming Team Passionate About Web Design And Creatin Digital Ideas We Will Transfer Your Idea To A Digital Dream And Make Your Wish Come True</p>
                            <button type="button" class="btn btn-primary">Talk With A Professional</button>
                        </div>
                    </div>
                    
                    <!-- End Team Info -->
                    
                </div>
            </div>
        </section>
        
        <!-- End Section Our Skills -->
        
        <!-- Start Section Contact Us -->
        
        <section class="contact-us text-center">
            <div class="fields">
                <div class="container">
                    <div class="row">
                        <i class="fa fa-headphones fa-5x"></i>
                        <h2 class="h1">Tell Us What You Fell</h2>
                        <p class="lead">Feel Free To Contact Us Anytime</p>
                        
                        <!-- Start Contact Form -->
                        
                        <form role="form">
                            <div class="col-md-6 wow bounceInLeft" data-wow-duration="1s" data-wow-offset="400">
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Cell Phone">
                                </div>
                            </div>
                            <div class="col-md-6 wow bounceInRight" data-wow-duration="1s" data-wow-offset="400">
                                <div class="form-group">
                                    <textarea class="form-control input-lg" placeholder="Your Message"></textarea>
                                </div>
                                <button type="button" class="btn btn-danger btn-lg btn-block">Contact Us</button>
                            </div>
                        </form>
                        
                        <!-- End Contact Form -->
                    
                    </div>
                </div>
            </div>
        </section>
        
        <!-- End Section Contact Us -->
        
        <!-- Start Section Our Clients -->
        
        <div class="our-clients">
            <div class="container">
                <div class="row">
                    <ul class="list-unstyled">
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/bbc.png" width="126" height="28" alt="BBC" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay=".5s" />
                        </li>
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/cnn.png" width="126" height="28" alt="CNN" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="1s" />
                        </li>
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/forbes.png" width="126" height="28" alt="Forbes" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="1.5s" />
                        </li>
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/wired.png" width="126" height="28" alt="Wired" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="2s" />
                        </li>
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/wsj.png" width="126" height="28" alt="WSJ" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="2.5s" />
                        </li>
                        <li class="col-md-2 col-xs-4">
                            <img class="img-responsive center-block wow bounceIn" src="images/our-clients/techradar.png" width="126" height="28" alt="Tech Radar" data-wow-duration=".5s" data-wow-offset="200" data-wow-delay="3s" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- End Section Our Clients -->

<?php include 'tpls/footer.php';?>
        
     