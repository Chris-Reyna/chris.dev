@extends('layouts.master')
@section('content')
    <body class="page-index">
        <div class="container" id="container">
        
            <div class="row top">
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <div class="name"><a href="{{{ action('HomeController@showIndex') }}}">Christopher Reyna</a></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <nav>
                        <ul class="list-inline" id="menu">
                            <li>
                                <a href="{{{ action('HomeController@showWork') }}}">work</a>
                            </li>
                            <li>
                                <a href="{{{ action('HomeController@showBlog') }}}">blog</a>
                            </li>
                            <li>
                                <a href="{{{ action('HomeController@showContact') }}}">contact</a>
                            </li>
                            <li class="last">
                                <a href="https://www.linkedin.com/in/christopherreyna/"><img class="social bis" src="img/icon/icon-linkedin.png" alt="Linkedin"></a>
                                <a href="https://twitter.com/creyna"><img class="social" src="img/icon/icon-twitter.png" alt="twitter"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row bottom">
                <div class="col-lg-8 col-md-8 col-sm-7 col-left">
                    <div>
                        <section>
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    
                                    <!--activity image-->
                                    <img class="img-responsive" src="img/image-home-2.jpg" alt="Project header">
                                    
                                    <!--activity title -->
                                    <h1>Website Developer</h1>
                                    <h1 class="spacer">___</h1>
                                    
                                    <!--activity descritpion-->
                                    <p class="work">Living in San Antonio Texas</p>
                                    <p>I am a Full Stack Web Developer looking to meet the needs of those who require an energetic, adaptable, and goal oriented programmer to achieve their business or private software/coding needs. I recently completed an 11 week Lamp +J stack bootcamp at Codeup. In 11 short weeks, I have created applications using Linux, Apache, MySQL, Laravel, PHP, HTML, Javascript, and JQuery.</p>
                                
                                </div>
                            </div>   
                        </section>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                    <div id="scroll-shadow"></div>
                    
                    <h1 class="visible-xs section-header">Last work</h1>
                    <h1 class="visible-xs text-center spacer">___</h1>
                    
                    <!--work choice-->
                    <div class="item-choice">
                        <a href="#" class="filter" data-filter="all">All</a> 
                        <a href="#" class="filter" data-filter="web-design"> Web Apps</a> 
                        <a href="#" class="filter" data-filter="print"> Websites</a> 
                       <!--  <a href="#" class="filter" data-filter="illustration">Illustration</a> -->
                        <hr>
                    </div>
                    
                    <section class="row" id="Grid">
                        <!--work 1-->
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 mix web-design">
                            <div class="panel panel-default item">
                                <div class="panel-heading">
                                    <a href="http://eatsafe-sa.com/">
                                    
                                        <!--work image-->
                                        <img class="img-responsive item-img" src="img/work/eatsafe420.png" alt="Work 1">
                                        
                                    </a>
                                </div>
                                <div class="panel-body">
                                
                                    <!--work title-->
                                    <a href="http://eatsafe-sa.com/"><h4 class="item-title">Eatsafe-SA</h4></a>
                                    
                                    <!--work category-->
                                    <p class="item-category">Web Application</p>
                                    
                                    <!--work short description-->
                                    <p class="item-description">Searchable map of the San Antonio area, providing actual city health inspection data to help you make more informed choices for your dining experience.</p>
                                    <hr>
                                    
                                    <!--work tags-->
                                    <p class="item-tags">
                                        <a href="#">Twitter Bootstrap</a> ,
                                        <a href="#">Google API</a> ,
                                        <a href="#">website</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 mix print">
                            <div class="panel panel-default item">
                                <div class="panel-heading">
                                    <a href="http://sacyo.dev/">
                                        <img class="img-responsive item-img" src="img/work/sacyo420.png" alt="Work 2">
                                    </a>    
                                </div>
                                <div class="panel-body">
                                    <a href="http://sacyo.dev/"><h4 class="item-title">St.Ann's CYO</h4></a>
                                    <p class="item-category">Websites</p>
                                    <p class="item-description">Custom website for a non-profit youth sports organization</p>
                                    <hr>
                                    <p class="item-tags">
                                        <a href="#">MySQL Database</a> ,
                                        <a href="#">PHP Laravel Project</a> ,
                                        <a href="#">website</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 mix web-design">
                            <div class="panel panel-default item">
                                <div class="panel-heading">
                                    <a href="project-example.html">
                                        <img class="img-responsive item-img" src="img/work/projet-example-3.png" alt="Work 3">
                                    </a>    
                                </div>
                                <div class="panel-body">
                                    <a href="project-example.html"><h4 class="item-title">Project Title</h4></a>
                                    <p class="item-category">Illustration</p>
                                    <p class="item-description">Iam virtutem ex consuetudine vitae sermonisque nostri nostri nostri</p>
                                    <hr>
                                    <p class="item-tags">
                                        <a href="#">illustration</a> ,
                                        <a href="#">graphic design</a> ,
                                        <a href="#">website</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6 mix print">
                            <div class="panel panel-default item">
                                <div class="panel-heading">
                                    <a href="project-example.html">
                                        <img class="img-responsive item-img" src="img/work/projet-example-4.png" alt="Work 4">
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <a href="project-example.html"><h4 class="item-title">Project Title</h4></a>
                                    <p class="item-category">Logotype</p>
                                    <p class="item-description">Iam virtutem ex consuetudine vitae sermonisque nostri nostri nostri</p>
                                    <hr>
                                    <p class="item-tags">
                                        <a href="#">illustration</a> ,
                                        <a href="#">graphic design</a> ,
                                        <a href="#">website</a>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </section>
                    <a class="btn btn-block scroll-top visible-xs">
                        <img src="img/icon/icon-chevron.png" alt="Scroll top">
                    </a>
                </div>
            </div>                        
        </div>  
                
        <script src="js/jquery.js"></script>
        
        <!-- FASTCLICK -->
        <script src="js/plugins/fastclick/fastclick.js"></script>
        <!-- SMOOTH SCROLL -->
        <script src="js/plugins/smooth-scroll/jquery.smooth-scroll.min.js"></script>
        <!-- MIXITUP -->
        <script src="js/plugins/mixitup/jquery.mixitup.min.js"></script>
        
        <script src="js/main.js"></script>
    </body>
@stop
