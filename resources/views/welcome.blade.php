<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ticket</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/venobox/venobox.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        
    </head>
    <body>            
        <header id="header">
            <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                
                @if (Route::has('login'))
                    
                        @auth
                             
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            
                        @else
                        <li class="menu-active"><a href="#intro">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#speakers">Upcoming Event</a></li>
                        <li><a href="#venue">Venue</a></li>
                        <li><a href="#hotels">Features</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#supporters">Business</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="buy-tickets"><a href="{{ route('login') }}">Login</a></li>
                             

                            @if (Route::has('register'))
                                <!-- <li class="buy-tickets"><a href="#buy-tickets">Get Start</a></li> -->
                            @endif
                        @endauth
                  
                @endif
                 </ul>
            </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->

        <!--==========================
            Intro Section
        ============================-->
        <section id="intro">
            <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">Ticket <span>Business</span> </h1>
            <p class="mb-4 pb-0">Ticket sale & resale Event</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
            <a href="#about" class="about-btn scrollto">About The Event</a>
            </div>
        </section>

        <main id="main">

            <!--==========================
            About Section
            ============================-->
            <section id="about">
            <div class="container">
                <div class="row">
                <div class="col-lg-6">
                    <h2>Event information</h2>
                    <p>
                The new event is engraved. There is also a possibility. Depending on the results of your audition, 
                the results may vary. Ability to achieve as soon as possible.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p>Downtown Conference Center, <br> New York</p>
                </div>
                <div class="col-lg-3">
                   
                    <p>For almost two decades, our cloud-based, user-friendly ticketing system, 
                    unbeatable customer service, and innovative digital marketing team yield higher ticket sales, 
                    happier audiences, and a healthier bottom line.</p>
                </div>
                </div>
            </div>
            </section>

            <!--==========================
            Speakers Section
            ============================-->

           


            <section id="speakers" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                <h2>Upcoming Events</h2>
                <p>Here are some of upcoming events</p>
                </div>

                <div class="row">
                @foreach($data as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker">
                        <img src="{{ str_replace("'", "", $row->img) }}" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">{{ str_replace("'", "", $row->name) }}</a></h3>
                            <p>{{ str_replace("'", "", $row->date) }}</p>
                            <div class="social">
                            <!-- <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a> -->
                            <p>{{ str_replace("'", "", $row->address) }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach    
                </div>
            </div>

            </section>

           

            <!--==========================
            Venue Section
            ============================-->
            <section id="venue" class="wow fadeInUp">

            <div class="container-fluid">

                <div class="section-header">
                <h2>Event Venue</h2>
                <p>Event venue location info and gallery</p>
                </div>

                <div class="row no-gutters">
                <div class="col-lg-6 venue-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                    <div class="col-11 col-lg-8">
                        <h3>Downtown Conference Center, New York</h3>
                        <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>

            <div class="container-fluid venue-gallery-container">
                <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="venue-gallery">
                    <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                        <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
                    </a>
                    </div>
                </div>

                </div>
            </div>

            </section>

            <!--==========================
            Hotels Section
            ============================-->
            <section id="hotels" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                <h2>Features</h2>
                <p>Her are some features ticket</p>
                </div>

                <div class="row">
                @foreach($features as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="hotel">
                        <div class="hotel-img">
                            <img src="{{ str_replace("'", "", $row->img) }}" alt="Hotel 1" class="img-fluid">
                        </div>
                        <h3><a href="#">{{ str_replace("'", "", $row->name) }}</a></h3>
                        <!-- <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div> -->
                         <p>{{ str_replace("'", "", $row->address) }}</p>
                        </div>
                    </div>

                @endforeach    

                </div>
            </div>

            </section>

            <!--==========================
            Gallery Section
            ============================-->
            <section id="gallery" class="wow fadeInUp">

            <div class="container">
                <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
                </div>
            </div>
            <?php $i = 1 ?>             
            <div class="owl-carousel gallery-carousel">
<!--                 
                <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
                <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
                <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
                <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
                <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
                <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
                <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
                <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a> -->
                @foreach($gallery as $row)
                <a href="img/gallery/{{$i}}.jpg" class="venobox" data-gall="gallery-carousel"><img src="{{ str_replace("'", "", $row->img) }}" alt=""></a>
                <?php $i++; ?>
                @endforeach

            </div>

            </section>

            <!--==========================
            Sponsors Section
            ============================-->
            <section id="supporters" class="section-with-bg wow fadeInUp">

            <div class="container">
                <div class="section-header">
                <h2>Business Ticket Sites</h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/1.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/2.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/3.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/4.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/5.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/6.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/7.png" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                    <img src="img/supporters/8.png" class="img-fluid" alt="">
                    </div>
                </div>

                </div>

            </div>

            </section>

            <!--==========================
            F.A.Q Section
            ============================-->
            <section id="faq" class="wow fadeInUp">

            <div class="container">

                <div class="section-header">
                <h2>F.A.Q </h2>
                </div>

                <div class="row justify-content-center">
                <div class="col-lg-9">
                    <ul id="faq-list">

                        <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">How We Use Your Information & Why<i class="fa fa-minus-circle"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <p>
                            We collect and use your information for lots of reasons such as helping you get into the shows you love, sharing news, for marketing and as otherwise required by law.
                            </p>
                        </div>
                        </li>
            
                        <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">What Information We Have & Where We Get It <i class="fa fa-minus-circle"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                            We collect and store different types of information about you when you create an account, buy tickets, contact us, and use our websites, apps and social media.
                            </p>
                        </div>
                        </li>
            
                        <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Who We Share Your Data With & Why <i class="fa fa-minus-circle"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                            We may share your information with the event providers as well as other third parties associated with the service provided.

                            </p>
                        </div>
                        </li>
            
                        <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Your Choices & Rights <i class="fa fa-minus-circle"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                            Among other rights, you can choose whether to receive marketing from us. You also have the right to access the information we have about you.

                            </p>
                        </div>
                        </li>
            
                        <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Looking After Your Information <i class="fa fa-minus-circle"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                            We take steps to try to make sure your information is protected and to delete it securely when we no longer need it.

                            </p>
                        </div>
                        </li>
            
                        <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Contact Us <i class="fa fa-minus-circle"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                            If you have any questions or feedback about this notice, or how we handle your information, <br> get in touch with us.

                            </p>
                        </div>
                        </li>
            
                    </ul>
                </div>
                </div>

            </div>

            </section>

            <!--==========================
            Subscribe Section
            ============================-->
            <section id="subscribe">
            <div class="container wow fadeInUp">
                <div class="section-header">
                <h2>Newsletter</h2>
                <p>I never accepted because of the softness of the consequences.</p>
                </div>

                <form method="POST" action="{{ route('subscribe')}}">
                @csrf
                <div class="form-row justify-content-center">
                    <div class="col-auto">
                    <input type="email" class="form-control" placeholder="Enter your Email" id="email" required >
                    <div class="validation"></div>
                    </div>
                    <div class="col-auto">
                    <button type="submit">Subscribe</button>
                    </div>
                </div>
                </form>

            </div>
            </section>

            

            <!--==========================
            Contact Section
            ============================-->
            <section id="contact" class="section-bg wow fadeInUp">

            <div class="container">

                <div class="section-header">
                <h2>Contact Us</h2>
                <p>There is nothing that they may be discomfort is bound by the duties.</p>
                </div>

                <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>40 Sutton Pl Apt 9J <br> New York, NY 10022-2306</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+1 860 9661693</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">tktundrgrnd@gmail.com</a></p>
                    </div>
                </div>

                </div>

                <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                    <form action="{{ route('contact')}} " method="post" role="form" class="contactForm">
                    @csrf
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
            </section><!-- #contact -->

        </main>


        <!--==========================
            Footer
        ============================-->
        <footer id="footer">
            <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="img/logo.png" alt="TheEvenet">
                    <p>Remember the last time you cheered so hard you lost your voice? 
                    Stood speechless after witnessing greatness? Or saw your favorite band play a triple encore? 
                    We do. And it's why we do what we do. From technology to marketing, no matter what your role is here at Ticketmaster,
                     you're helping fans have the time of their lives – while you do too.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Event Links</h4>
                    <ul>
                    <li><i class="fa fa-angle-right"></i> <a href="#intro">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#about">Event Info</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#venue">Venue</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#hotels">Features</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#gallery">Gallery</a></li>

                    </ul>

                </div>
       

                <div class="col-lg-3 col-md-6 footer-links">
               
                    <h4>Helpful Links</h4>
                    <ul>
                    <li><i class="fa fa-angle-right"></i> <a href="#faq">Privacy policy</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#supporters">Business</a></li>
                    <li><i class="fa fa-angle-right"></i> <a href="#contact">Contact Me</a></li>
                     
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                    40 Sutton Pl Apt 9J <br>
                    New York, NY 10022-2306<br>
                    United States <br>
                    <strong>Phone:</strong> +1 860 9661 693<br>
                    <strong>Email:</strong> tktundrgrnd@gmail.com<br>
                    </p>

                    <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                </div>
            </div>
            </div>

            <div class="container">
            <div class="copyright">
                &copy; Copyright  2019 <a href="{{ route('login') }}"><strong> Ticketdatamasters.com </strong></a>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
                -->
                Owner <a href="{{ route('login') }} ">Josh Fischler</a>
            </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/venobox/venobox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
  </body>
</html>
