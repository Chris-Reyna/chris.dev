@extends('layouts.master')
@section('content')
    <body class="page-contact">
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
                            <li class="active">
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
                    <section>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
                                
                                <!--input contact-->
                                <h1>Contact</h1>
                                <h1 class="spacer">___</h1>
                                <p>Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existim.</p>
                                <hr>
                                <div class="panel panel-default contact btn-footer">
                                    <div class="panel-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="contactEmail">Email address</label>
                                                <input type="email" class="form-control" id="contactEmail">
                                            </div>
                                            <div class="form-group">
                                                <label for="contactMessage">Message</label>
                                                <textarea class="form-control" rows="10" id="contactMessage"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">
                                        <a class="btn btn-grey btn-lg btn-block">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-right">
                <div id="scroll-shadow"></div>
                    <section>
                        <div class="row">
                            <div class="col-lg-12">
                            
                                <!--panel contact-->
                                <div class="panel panel-default item">
                                    <div class="panel-heading">
                                        <a href="#">
                                            
                                            <!--your image-->    
                                            <img class="img-responsive item-img" src="img/contact/avatar-contact.jpg" alt="Avatar">
                                            
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                    
                                        <!--your name-->
                                        <a href="#"><h4 class="item-title">Eldun malosanu</h4></a>
                                        
                                        <!--your profession / where you live-->
                                        <p class="item-category">Freelance web designer, in Los Angeles</p>
                                        
                                        <!--your descritpion / why should we contact you-->
                                        <p class="item-description">Iam virtutem ex consuetudine vitae sermonisque nostri nostri nostri, quicquid increpuisset, ad salutis suae dispendium existim.</p>
                                        <hr>
                                        
                                        <!--social networks-->
                                        <div class="item-social text-center">
                                            <a href="#"><img class="social" src="img/icon/icon-facebook.png" alt="Facebook"></a>
                                            <a href="#"><img class="social bis" src="img/icon/icon-twitter.png" alt="Twitter"></a>
                                            <a href="#"><img class="social" src="img/icon/icon-google.png" alt="Google plus"></a>
                                            <a href="#"><img class="social bis" src="img/icon/icon-linkedin.png" alt="Linkedin"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
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