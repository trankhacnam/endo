<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>endo.vn</title>
<!--
Ocean Theme
http://www.templatemo.com/tm-484-ocean
-->

    <!-- load stylesheets -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"><!-- Google web font "Open Sans", https://www.google.com/fonts/specimen/Open+Sans -->
    <link rel="stylesheet" href="{{ asset('endo/font-awesome-4.5.0/css/font-awesome.min.css') }}"> <!-- Font Awesome, https://fortawesome.github.io/Font-Awesome/ -->
    <link rel="stylesheet" href="{{ asset('endo/css/bootstrap.min.css') }}">                       <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('endo/css/templatemo-style.css') }}">                    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->


</head>

    <body>

        <div class="container-fluid">
            
            <div class="row"> 

                <section class="tm-section-intro">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-wrapper-center">
                            <img src="{{ asset('endo/img/logo.png') }}" alt="" class="img-fluid" style="max-width: 200px;">
                            <h1 class="tm-section-intro-title">ENDO QA</h1>
                            <p class="tm-section-intro-text">We put your mind at ease throughout the production of your goods
                            </p>
                            <a href="#tm-section-2" class="tm-btn-white-big">Explore</a>
                        </div>            
                    </div>
                </section>    

            </div>

            <div class="row" id="tm-section-2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <section>
                        <div id="tmCarousel3" class="carousel slide tm-carousel" data-ride="carousel" style="margin: unset; max-width: unset;"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->

                         

                            <div class="carousel-inner" role="listbox">       
                               <div class="carousel-item active" style="font-display: center;">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">Hello to all people</h2>
                                            <p class="tm-carousel-item-text">We follow up with QA and merchandising, shipment, logistics, etc, based on customer’s requirements. <br>
                                            WE ARE more than happy to further discuss with you via video call to understand each other. 
                                            ANY TIME 24/7 is convenient !

                                        </div>
                                    </div>                               
                                </div>
                            </div>
                        </div>                    
                    </section>
                </div>
            </div> <!-- row -->
            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-right">
                    
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-2-col-img" style="margin: auto;">                    
                        <h2 class="tm-2-col-text-title" >ENDO INTRODUCTION</h2>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 tm-2-col-text">  
                        <section>
                            <div id="tmCarousel" class="carousel slide tm-carousel" data-ride="carousel" style="margin: unset; max-width: unset;"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->

                                <ol class="carousel-indicators">
                                    <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                                    <li data-target="#tmCarousel" data-slide-to="2" class=""></li>
                                    <li data-target="#tmCarousel" data-slide-to="3" class=""></li>
                                    <li data-target="#tmCarousel" data-slide-to="4" class=""></li>
                                    <li data-target="#tmCarousel" data-slide-to="5" class=""></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                
                                    <div class="carousel-item active">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/2.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/3.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/4.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/5.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/6.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                </div>
                            </div>                    
                        </section>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 tm-2-col-img" style="margin: auto;">                    
                    </div> --}}
                </section>

            </div> <!-- row -->

            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-left" style="margin-top: 40px;">
             {{--        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1 col-xl-1 tm-2-col-img" style="margin: auto;">                    
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-2-col-img" style="margin: auto;">                    
                        <h2 class="tm-2-col-text-title" >ENDO Services</h2>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 tm-2-col-text"> 
                        <section>
                            <div id="tmCarousel2" class="carousel slide tm-carousel" data-ride="carousel" style="margin: unset; max-width: unset;"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->

                                <ol class="carousel-indicators">
                                    <li data-target="#tmCarousel2" data-slide-to="0" class="active"></li>
                                    <li data-target="#tmCarousel2" data-slide-to="1" class=""></li>
                                    <li data-target="#tmCarousel2" data-slide-to="2" class=""></li>
                                    <li data-target="#tmCarousel2" data-slide-to="3" class=""></li>
                                    <li data-target="#tmCarousel2" data-slide-to="4" class=""></li>
                                    <li data-target="#tmCarousel2" data-slide-to="5" class=""></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">
                                
                                    <div class="carousel-item active">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.3.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.4.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.1.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.6.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.2.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>

                                    <div class="carousel-item ">
                                        <div class="carousel-content">
                                            <div>
                                                <img src="{{ asset('endo/img/1.5.png') }}" alt="Image" class="img-fluid">
                                            </div>
                                        </div>                               
                                    </div>
                                </div>
                            </div>                    
                        </section>
                    </div>
                    
                </section>

            </div> <!-- row -->

            <!-- About -->
{{--             <div class="row tm-section tm-blue-bg-row">
                
                <section>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                            <h2 class="tm-section-title">(13)About our company</h2>
                            <p class="tm-section-subtitle">
                            (14)Phasellus lacinia feugiat accumsan. Nulla tempor vel est sit amet tincidunt. 
                            Nullam eget lectus ut felis aliquam.
                            </p>   
                            <div>(question-2) từ 15 đến 22 tính thế nào? có giữ lại phần này không hay đổi thành cái khác? giữ lại thì sửa text hoặc nói xem muốn giữ như nào. còn sửa thì cũng nói rõ ra cho tao</div> 
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            
                            <div class="tm-icon-text-boxes-container">
                                
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-icon-text-box">
                                        <i class="fa fa-5x fa-mixcloud"></i>
                                        <h3 class="tm-icon-text-box-title">(15)Vestinbulum ornare</h3>
                                        <p class="tm-icon-text-box-description">(16)Nullam eget lectus ut felis aliquam laoreet eget eu dui. Curabitur in imperdiet.</p>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-icon-text-box">
                                        <i class="fa fa-5x fa-line-chart"></i>
                                        <h3 class="tm-icon-text-box-title">(17)Vestinbulum ornare</h3>
                                        <p class="tm-icon-text-box-description">(18)Nullam eget lectus ut felis aliquam laoreet eget eu dui. Curabitur in imperdiet.</p>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-icon-text-box">
                                        <i class="fa fa-5x fa-group"></i>
                                        <h3 class="tm-icon-text-box-title">(19)Vestinbulum ornare</h3>
                                        <p class="tm-icon-text-box-description">(20)Nullam eget lectus ut felis aliquam laoreet eget eu dui. Curabitur in imperdiet.</p>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                    <div class="tm-icon-text-box">
                                        <i class="fa fa-5x fa-globe"></i>
                                        <h3 class="tm-icon-text-box-title">(21)Vestinbulum ornare</h3>
                                        <p class="tm-icon-text-box-description">(22)Nullam eget lectus ut felis aliquam laoreet eget eu dui. Curabitur in imperdiet.</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                </section>

            </div> --}}
             <!-- row -->

            <div class="row tm-section">
                
                <section class="tm-section-contact">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-xs-center">
                        
                        <h2 class="tm-section-title">CONTACT US</h2>
                        <p class="tm-section-subtitle">Get In Touch With Us NOW</p>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                        @if(Session::has('success'))

                            <div class="alert alert-success">

                                {{Session::get('success')}}

                            </div>

                        @endif
                        <form action="{{ route('contact.sendmail') }}" method="post" class="tm-contact-form"> 
                            @csrf                               
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name"  required/>
                            </div>
                            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email"  required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject"  required/>
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                            </div>
                        
                            <button type="submit" class="btn tm-bordered-btn pull-xs-right">Submit</button>                          
                        </form> 
                    </div> <!-- col -->
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 tm-contact-right">
                        <img src="{{ asset('endo/img/logo.png') }}" alt="" class="img-fluid" style="max-width: 17%;">
                        <h3 class="tm-contact-title">Our Address</h3>
                        <p class="tm-contact-info"><i class="fa fa-home" aria-hidden="true"></i> Head office: No. 91 Trinh Cong Son Street, Nhat Tan Ward, Tay Ho District, Hanoi City, Viet Nam <br>
                        <i class="fa fa-home" aria-hidden="true"></i> Branch office: Room 515, TNG Village, No. 206 Minh Cau Street, Thai Nguyen City, Thai Nguyen Province, Viet Nam

                        </p>
                        <p class="tm-contact-info"> 
                          <i class="fa fa-envelope" aria-hidden="true"> Email: <a href="mailto:dfeldman@endo.vn"></i> dfeldman@endo.vn</a><br>
                            
                        </p>
                        <p class="tm-contact-info">
                           <i class="fa fa-phone-square" aria-hidden="true"></i> Phone: <a href="tel:0100100110"> (+84) 913 514 232</a>
                        </p>
                     {{--    <div class="tm-social-icons-container">
                            (29)<a href="#" class="tm-social-icon-link"><i class="fa fa-facebook tm-social-icon"></i></a>
                            (30)<a href="#" class="tm-social-icon-link"><i class="fa fa-google-plus tm-social-icon"></i></a>
                            (31)<a href="#" class="tm-social-icon-link"><i class="fa fa-twitter tm-social-icon"></i></a>
                            (32)<a href="#" class="tm-social-icon-link"><i class="fa fa-behance tm-social-icon"></i></a>
                            (33)<a href="#" class="tm-social-icon-link"><i class="fa fa-linkedin tm-social-icon"></i></a>
                        </div> --}}
                    </div>

                </section>

            </div>

{{--             <div class="row">                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                    
                    <hr>
                </div>
            </div>
 --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-copyright-text">Copyright &copy; endo.vn</p>
                </div>
            </div>
            
        </div> <!-- container-fluid -->   
        <style type="text/css">
            body {
                font-family: "Times New Roman", Times, serif;
            }
        </style>
        <!-- load JS files -->
        <script src="{{ asset('endo/js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery, https://jquery.com/download/ -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="{{ asset('endo/js/bootstrap.min.js') }}"></script>                 <!-- Bootstrap, http://v4-alpha.getbootstrap.com/ -->
        <script src="{{ asset('endo/js/jquery.touchSwipe.min.js') }}"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        
        <script>     
       
            $(document).ready(function(){

                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                }); 
                
                /* Enable swiping for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });              
                           
            });

        </script>         
        {{-- <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script> --}}
    

</body>
</html>