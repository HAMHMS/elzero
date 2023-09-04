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
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="faq.php">FAQ</a></li>
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
                  <li class="active">FAQ</li>
                </ol>
            </div>
        </div>
        
        <!-- End Breadcrumb -->
        
        <!-- Start FAQ Intro -->
        
        <section class="faq text-center">
            <div class="container">
                <h1>Frequently Asked Questions</h1>
                <hr>
                <p class="lead">Here You Will Find All Questions You Are Searching For And The Full Knowledgebase</p>
            </div>
        </section>
        
        <!-- End FAQ Intro -->
        
        <!-- Start FAQ Accordion -->
        
        <section class="faq-questions">
            <div class="container">
                <div class="panel-group" id="accordion" roles="tablist" aria-multiselectable="true">
                    
                    <!-- Start Question 1 -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-one">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-one" aria-expanded="true" arial-controls="collapse-one">
                                    #1 How To Use Bootstrap Version 3.0?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-one" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-one">
                            <div class="panel-body">
                                This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question 
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Question 1 -->
                    
                    <!-- Start Question 2 -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-two">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-two" aria-expanded="true" arial-controls="collapse-two">
                                    #2 How To Use Media Queries?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-two" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-two">
                            <div class="panel-body">
                                This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question 
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Question 2 -->
                    
                    <!-- Start Question 3 -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-three">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-three" aria-expanded="true" arial-controls="collapse-three">
                                    #3 How To Create Your Own Slider?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-three" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-three">
                            <div class="panel-body">
                                This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question 
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Question 3 -->
                    
                    <!-- Start Question 4 -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading" roles="tab" id="heading-four">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-four" aria-expanded="true" arial-controls="collapse-four">
                                    #4 How To Create Your Own Accordion?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-four" class="panel-collapse collapse" roles="tabpanel" aria-labelledby="heading-four">
                            <div class="panel-body">
                                This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question This Is Test Message Describe The Answer Of The First Question 
                            </div>
                        </div>
                    </div>
                    
                    <!-- End Question 4 -->
                    
                </div>
            </div>
        </section>
        
        <!-- End FAQ Accordion -->
        
<?php include 'tpls/footer.php'; ?>        
