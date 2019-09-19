<?php get_header(); ?>

        <!--loader-->
        <div class="page-loader">
            <div class="loader"> 
                <span class="dot dot_1"></span> 
                <span class="dot dot_2"></span> 
                <span class="dot dot_3"></span> 
                <span class="dot dot_4"></span> 
            </div>
        </div>
        <!--loader-->         
        <!--Header-->
        <header id="header">
            <div id="main-navigation" class="noborder">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll"> 
                                    <a href="#" class="navbar-brand logo"><img class="img-responsive" alt="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/amv-logo.png"></a> 
                                </div>
                                <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="fixed-collapse-navbar"> 
                                    <a href="#" class="push_nav_brand"><img class="img-responsive" alt="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/amv-logo.png"></a>
                                    <ul class="push_nav">
                                        <li class="hidden"> 
                                            <a href="#page-top" class="page-scroll"></a> 
                                        </li>
                                        <li class="active"> 
                                            <a class="page-scroll" href="#main-slider"><?php _e( 'Home', 'amvdm' ); ?></a> 
                                        </li>
                                        <li> 
                                            <a href="#about" class="page-scroll"><?php _e( 'About', 'amvdm' ); ?></a> 
                                        </li>
                                        <li> 
                                            <a href="#services" class="page-scroll"><?php _e( 'Services', 'amvdm' ); ?></a> 
                                        </li>
                                        <li> 
                                            <a href="#our-team" class="page-scroll"><?php _e( 'Team', 'amvdm' ); ?></a> 
                                        </li>
                                        <li> 
                                            <a class="page-scroll" href="#Portfolio"><?php _e( 'Work', 'amvdm' ); ?></a> 
                                        </li>
                                        <li> 
                                            <a class="page-scroll" href="#contact"><?php _e( 'Contact Us', 'amvdm' ); ?></a> 
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="main-button right">
                <button class="toggle-menu menu-right push-body jPushMenuBtn"> 
                    <span></span> 
                    <span></span> 
                    <span></span> 
                </button>
            </div>
        </div>
        <!--Header-->         
        <!--Slider-->
        <section id="main-slider" class="dark-slider">
            <div class="tp-banner-container">
                <div class="fullscreenslider tp-banner">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="6" data-delay="8000"> 
                            <!-- MAIN IMAGE -->                             
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/satellite_background.jpg" alt="slidebg1" data-bgposition="center top"> 
                            <!-- LAYER NR. 1 -->
                            <p class="tp-caption sft tp-resizeme tp-caption tpfirst" data-x="center" data-y="130" data-speed="500" data-start="1000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5;"><?php _e( 'Stream Anything. Stream Everywhere.', 'amvdm' ); ?></p>
                            <!-- LAYER NR. 2 -->
                            <h2 class="tp-caption fade tp-resizeme text-left" data-x="center" data-y="190" data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9;"> <?php _e( 'WHEN IT COMES TO JIVE EVENTS,', 'amvdm' ); ?><br> <?php _e( 'WE\'VE GOT YOU COVERED.', 'amvdm' ); ?></h2>
                            <!-- LAYER NR. 3 -->
                            <p class="tp-caption sft tp-resizeme tplast" data-x="center" data-y="310" data-speed="500" data-start="2000" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 5;"><?php _e( 'AMV Digital Media is the only glass-to-glass live video', 'amvdm' ); ?><br> <?php _e( 'provider with the experience to ensure that your live event', 'amvdm' ); ?><br> <?php _e( 'is a guaranteed success.', 'amvdm' ); ?></p>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-button sft tp-resizeme" data-x="center" data-y="420" data-speed="500" data-start="2800" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"> 
                                <a href="#responsive" class="hvr-outline-out btn"><?php _e( 'Call Us', 'amvdm' ); ?></a> 
                                <a href="tel:3107511911" class="btn hvr-shutter-out-vertical"><?php _e( '+1.310.751.1911', 'amvdm' ); ?></a> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Slider-->         
        <!--about Us-->
        <section id="about" class="top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeIn">
                        <p class="title"><?php _e( 'Here\'s what we offer', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'Fully-Managed Video Feeds', 'amvdm' ); ?></h2>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="row">
                            <div class="col-md-12 col-xs-6">
                                <div class="canvas-box  magin-bottom text-right" data-wow-delay="0.3s"> 
                                    <span class="text-center"><i class="icon icon-basic-laptop  color-style1"></i></span>
                                    <h4 class="color-style1"><?php _e( 'FULL-TIME SERVICES', 'amvdm' ); ?></h4>
                                    <p><?php _e( 'Whether it\'s an OTT offering, or a full-time web channel, we can provide dedicated support to ensure you\'re always live.', 'amvdm' ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-6">
                                <div class="canvas-box  magin-bottom text-right" data-wow-delay="0"> 
                                    <span class="text-center"><i class="icon icon-basic-keyboard color-style2"></i></span>
                                    <h4 class="color-style2"><?php _e( 'AD HOC EVENTS', 'amvdm' ); ?></h4>
                                    <p><?php _e( 'You can have your one-off events run by the same team that streams the Oscars, GRAMMYs, and Emmys.', 'amvdm' ); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12" data-wow-delay="0"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/imac.png" alt="desktop" class="desk-img"/> 
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="row">
                            <div class="col-md-12 col-xs-6">
                                <div class="canvas-box magin-bottom text-left" data-wow-delay="0.3s"> 
                                    <span class="text-center"><i class="icon icon-basic-globe color-style2"></i></span>
                                    <h4 class="color-style2"><?php _e( 'COLLOCATION', 'amvdm' ); ?></h4>
                                    <p><?php _e( 'Whether you need a quarter rack or 50 racks, we\'ve got the space to fit your needs. We have redundant power & ISPs.', 'amvdm' ); ?></p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-6">
                                <div class="canvas-box magin-bottom text-left" data-wow-delay="0.3s"> 
                                    <span class="text-center"><i class="icon icon-basic-mixer2  color-style1"></i></span>
                                    <h4 class="color-style1"><?php _e( 'CONSULTATION', 'amvdm' ); ?></h4>
                                    <p><?php _e( 'We offer a variety of consultation services to help our customers become highly-proficient in all things streaming.', 'amvdm' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about Us-->         
        <!--full-img-->
        <section id="full-img" class="padding">
            <div class="container-fluid">
                <div class="row full-img">
                    <div class="col-md-6 col-xs-12"> 
                        <img class="img-full-img" alt="fully responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/4k.jpg"> 
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-xs-12  fes7-text-cont">
                                <div class="title-type-2">
                                    <h2 class="head-title type-1"><span class="font-light"><?php _e( 'We are 4K ready', 'amvdm' ); ?></span></h2>
                                    <p class="title"><?php _e( 'End-to-end', 'amvdm' ); ?></p>
                                </div>
                                <p class="mb-60"> <?php _e( 'All the pieces of this puzzle are finally in place. AMVDM is now ready to handle full production and distribution of your 4K events.', 'amvdm' ); ?> </p>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="canvas-box  magin-bottom"> 
                                            <span class="text-center"><i class="icon icon-basic-upload  color-style2"></i></span>
                                            <h4 class="color-style2"><?php _e( 'ZURICH', 'amvdm' ); ?></h4>
                                            <p><?php _e( 'AMV\'s most exclusive production truck is on the road and can enable multiple 4K HDR feeds.', 'amvdm' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="canvas-box  magin-bottom"> 
                                            <span class="text-center"><i class="icon icon-basic-floppydisk  color-style1"></i></span>
                                            <h4 class="color-style1"><?php _e( 'BACKUP', 'amvdm' ); ?></h4>
                                            <p><?php _e( 'We always have redundancy in place. The LiveU 600 powers AMVDM to provide backhaul for your 4K HEVC feed.', 'amvdm' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <div class="canvas-box  magin-bottom"> 
                                            <span class="text-center"><i class="icon icon-basic-server-cloud color-style1"></i></span>
                                            <h4 class="color-style1"><?php _e( 'ELEMENTAL', 'amvdm' ); ?></h4>
                                            <p><?php _e( 'If we\'re going 4K, we\'re doing it with our Elemental encoders. Best-in-class and best in the business.', 'amvdm' ); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="canvas-box  magin-bottom"> 
                                            <span class="text-center"><i class="icon icon-basic-webpage-multiple  color-style2"></i></span>
                                            <h4 class="color-style2"><?php _e( 'HTML5', 'amvdm' ); ?></h4>
                                            <p><?php _e( 'Of course we need to display the end product, so we built the best HTML5 multi-angle video player in the market.', 'amvdm' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="btn-more"> 
                                        <a href="downloads/AMVDM-AboutUs.pdf" class="more wow"><?php _e( 'PDF', 'amvdm' ); ?><i class="fa fa-angle-right"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--full-img-->         
        <!--Counter-->
        <section id="facts" class="padding">
            <h3 class="hidden"><?php _e( 'hidden', 'amvdm' ); ?></h3>
            <div class="container">
                <div class="row number-counters"> 
                    <!-- first count item -->
                    <div class="col-md-3 col-xs-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="counters-item  row"> 
                            <i class="cin icon-basic-video"></i>
                            <h2><strong data-to="50000"><?php _e( '0', 'amvdm' ); ?></strong></h2>
                            <p><?php _e( 'LIVE EVENTS STREAMED', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="counters-item  row"> 
                            <i class=" icon icon-ecommerce-graph3 "></i>
                            <h2><strong data-to="1000000"><?php _e( '0', 'amvdm' ); ?></strong></h2>
                            <p><?php _e( 'CONCURRENT USERS', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="counters-item  row"> 
                            <i class=" icon icon-basic-lock"></i>
                            <h2><strong data-to="99"><?php _e( '0', 'amvdm' ); ?></strong></h2>
                            <p><?php _e( '% UPTIME', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="counters-item  row"> 
                            <i class="icon icon-basic-alarm"></i>
                            <h2><strong><?php _e( '0', 'amvdm' ); ?></strong></h2>
                            <p><?php _e( 'FAILURES', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <!-- end first count item -->                     
                </div>
            </div>
        </section>
        <!--Counter-->         
        <!--Services-->
        <section id="services" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeIn">
                        <p class="title"><?php _e( 'Reliability at scale', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'StreamCloud™', 'amvdm' ); ?></h2>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-basic-smartphone  color-style1"></i></span>
                            <h4 class="color-style1"><?php _e( 'PROPRIETARY PLATFORM', 'amvdm' ); ?></h4>
                            <p><?php _e( 'Our platform has helped power thousands of events in a simple and automated fashion.', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-ecommerce-dollar color-style2"></i></span>
                            <h4 class="color-style2"><?php _e( 'AFFORDABILITY', 'amvdm' ); ?></h4>
                            <p><?php _e( 'The more events you stream with us, the lower your per event price goes. It\'s that simple.', 'amvdm' ); ?> </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-basic-globe  color-style1"></i></span>
                            <h4 class="color-style1"><?php _e( 'ENDLESS POSSIBILITIES', 'amvdm' ); ?></h4>
                            <p><?php _e( 'StreamCloud™ can pull from RTMP feeds, telephone couplers, satellite IRDs and more. If you have a feed, we can work with it.', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-ecommerce-graph2 color-style2"></i></span>
                            <h4 class="color-style2"><?php _e( 'ANALYTICS', 'amvdm' ); ?></h4>
                            <p><?php _e( 'Get daily or monthly reports on your users, or utilize our player to get real-time analytics during your live events.', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-basic-todo-txt  color-style1"></i></span>
                            <h4 class="color-style1"><?php _e( 'EASY ONBOARDING', 'amvdm' ); ?></h4>
                            <p><?php _e( 'If you have a CMS, we can ingest your event schedule automatically. If not, we make it easy for you to schedule events through our portal.', 'amvdm' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="canvas-box  magin-bottom text-center"> 
                            <span class="text-center"><i class="icon icon-basic-lock color-style2"></i></span>
                            <h4 class="color-style2"><?php _e( '99.999% UPTIME', 'amvdm' ); ?></h4>
                            <p><?php _e( 'We focus heavily on redundancy and it has proven worthwhile. Our goal is to always be prepared for the worst-case-scenario.', 'amvdm' ); ?></p>
                        </div>
                    </div>                     
                </div>
                <div class="row">
                    <div class="btn-more"> 
                        <a href="downloads/StreamCloud.pdf" class="more wow"><?php _e( 'PDF', 'amvdm' ); ?><i class="fa fa-angle-right"></i></a> 
                    </div>
                </div>
            </div>
        </section>
        <!--Services-->         
        <!--Our team-->
        <section id="our-team" class="padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 wow fadeIn">
                        <p class="title"><?php _e( 'Some of us', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'Leadership Team', 'amvdm' ); ?></h2>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="team-wrap">
                            <div class="team-image"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff/ian670x670.jpg" alt="Ian Dittbrenner" class="img-responsive">
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <ul class="social-link"> 
                                            <li>
                                                <a href="https://www.linkedin.com/in/ian-dittbrenner-8638a94" target="_blank" class="text-center"><i class="fa fa-linkedin"></i><span></span></a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/ian.dittbrenner" target="_blank" class="text-center"><i class="fa fa-facebook"></i><span></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><?php _e( 'Ian Dittbrenner', 'amvdm' ); ?></h3>
                            <small><?php _e( 'VP, Production & Biz Dev', 'amvdm' ); ?></small>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="team-wrap">
                            <div class="team-image"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff/carl.jpg" alt="Carl Burmeister" class="img-responsive">
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <ul class="social-link">
                                            <li>
                                                <a href="https://www.linkedin.com/in/carl-burmeister-347bb716/" target="_blank" class="text-center"><i class="fa fa-linkedin"></i><span></span></a>
                                            </li>
                                            <li>
                                                <a href="https://facebook.com/NAME" target="_blank" class="text-center"><i class="fa fa-facebook"></i><span></span></a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/NAME" target="_blank" class="text-center"><i class="fa fa-twitter"></i><span></span></a>
                                            </li>                                                                                                                                                                                 -->                 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><?php _e( 'Carl Burmeister', 'amvdm' ); ?></h3>
                            <small><?php _e( 'Senior Manager, Product & Software Architecture', 'amvdm' ); ?></small>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Our team-->         
        <!-- Work Portfolio -->
        <!-- Hidden images for the gallery sections -->
        <a class="fancybox portfolio-btn" data-fancybox-group="adobe" title="Additional feed to Youtube Live with Closed-Captions" href="images/portfolio/max2.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="grammys" href="images/portfolio/grammys2.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="grammys" href="images/portfolio/grammys3.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="iicd" href="images/portfolio/iicd2.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="glasshouse" href="images/portfolio/glasshouse2.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="oscars" href="images/portfolio/oscars2.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="oscars" href="images/portfolio/oscars3.jpg"></a>
        <a class="fancybox portfolio-btn" data-fancybox-group="oscars" href="images/portfolio/oscars4.jpg"></a>
        <section id="Portfolio" class="padding" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="title"><?php _e( 'Recent Projects', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'Some of Our Work', 'amvdm' ); ?></h2>
                        <div class="work-filter">
                            <ul class="text-center">
                                <li>
                                    <a href="javascript:;" data-filter="all" class="active filter"><?php _e( 'All', 'amvdm' ); ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-filter=".award_shows" class="filter"><?php _e( 'Award Shows', 'amvdm' ); ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-filter=".corporate" class="filter"><?php _e( 'Corporate Events', 'amvdm' ); ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-filter=".full_time" class="filter"><?php _e( 'Full-Time', 'amvdm' ); ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-filter=".consultation" class="filter"><?php _e( 'Consultation', 'amvdm' ); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container Portfolio-wrapper">
                <div class="icon">
                    <div class="wrap-container clearfix">
                        <div class="row wrap-content">
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-4 col-xs-6 mix work-item award_shows">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class="overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'The Oscars', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Transmission from venue, encoding & CDN delivery', 'amvdm' ); ?></p>
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="oscars" href="images/portfolio/oscars1.jpg" title=""><i class="icon icon-basic-picture-multiple"></i></a>
                                                    <!--<a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a> -->
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/oscars.jpg" alt="The Oscars"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 mix work-item corporate">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class="overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'Adobe MAX & SUMMIT', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Transmission from venue, encoding & CDN delivery', 'amvdm' ); ?></p>
                                                    <!--  <a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a>-->
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="adobe" href="images/portfolio/max1.jpg" title="Main Adobe Max HD feed. 2 day show. Custom Primetime player we built."><i class="icon icon-basic-picture-multiple"></i></a>
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/adobe.jpg" alt="Adobe"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 mix work-item consultation">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class="overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'Glass House', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Custom Development & Consultation', 'amvdm' ); ?></p>
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="glasshouse" href="images/portfolio/glasshouse1.jpg" title=""><i class="icon icon-basic-picture-multiple"></i></a>
                                                    <!--    <a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a>-->
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/glasshouse.jpg" alt="Glass House"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 mix work-item award_shows">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class="overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'The GRAMMYs', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Production, Transmission, encoding & CDN delivery', 'amvdm' ); ?></p>
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="grammys" href="images/portfolio/grammys1.jpg" title=""><i class="icon icon-basic-picture-multiple"></i></a>
                                                    <!--   <a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a>-->
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/grammys.jpg" alt="GRAMMYs"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 mix work-item consultation">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class=" overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'If I Can Dream', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Custom Development & Consultation', 'amvdm' ); ?></p>
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="iicd" href="images/portfolio/iicd1.jpg" title="Custom website. 67 live 24/7 feeds"><i class="icon icon-basic-picture-multiple"></i></a>
                                                    <!--    <a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a>-->
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/iicd.jpg" alt="If I Can Dream"/> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6 mix work-item full_time">
                                    <div class="wrap-item">
                                        <div class="item-container">
                                            <div class="overlay text-center">
                                                <div class="overlay-inner">
                                                    <h4 class="base"><?php _e( 'Big Brother OTT', 'amvdm' ); ?></h4>
                                                    <div class="line"></div>
                                                    <p><?php _e( 'Full-time service', 'amvdm' ); ?></p>
                                                    <a class="fancybox portfolio-btn" data-fancybox-group="bigbrother" href="images/portfolio/bigbrotherOTT.jpg" title=""><i class="icon icon-basic-picture"></i></a>
                                                    <!--   <a href="project_details.html" class="portfolio-btn"><i class="icon icon-basic-link"></i></a>-->
                                                </div>
                                            </div>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio/bigbrother.jpg" alt="Big Brother OTT"/> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Portfolio -->         
        <!-- Our Clients -->
        <section id="client" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="title"><?php _e( 'How we do what we do', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'Our Partners', 'amvdm' ); ?></h2>
                        <div id="client-slider" class="owl-carousel">
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/elemental.png" alt=""/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/akamai.png" alt=""/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/nicepeopleatwork.png" alt=""/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/cisco.png" alt=""/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/wowza.png" alt=""/></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos/level3.png" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our clients -->         
        <!-- Testimonials -->
        <section id="testinomial" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="title"><?php _e( 'We work with some amazing people.', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'what our clients say', 'amvdm' ); ?></h2>
                        <div id="testinomial-slider" class="owl-carousel">
                            <!--<div class="item">
            <p>This is a great group of people to work with.</p>
            <div class="clinet-img"><img src="images/clients/gus_elliott.jpg" alt="user"></div>
            <h5><b>Gus Elliott</b>, Senior Director, Video Operations & Technology, for Silver Chalice</h5>
          </div>-->
                            <div class="item">
                                <p><?php _e( 'Akamai is proud of our alliance with The Recording Academy and AMV Digital Media, which has led to new and exciting ways to engage audiences and extend the GRAMMY brand with initiatives like GRAMMY Live that marry broadcast and online content to form even more compelling events.', 'amvdm' ); ?> </p>
                                <div class="clinet-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/bill_wheaton.jpg" alt="user">
                                </div>
                                <h5><b><?php _e( 'Bill Wheaton', 'amvdm' ); ?></b><?php _e( ', Senior Vice President and General Manager, Media, for Akamai', 'amvdm' ); ?></h5>
                            </div>
                            <div class="item">
                                <p><?php _e( 'We are excited to put viewers in charge with this interactive real life and real-time reality competition. The Glass House will be using state-of- the-art technology to facilitate first-of-its-kind audience integration.', 'amvdm' ); ?> </p>
                                <div class="clinet-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/tim_bock.jpg" alt="user">
                                </div>
                                <h5><b><?php _e( 'Tim Bock', 'amvdm' ); ?></b><?php _e( ', VP, Production - ABC Alternate Series & Specials', 'amvdm' ); ?></h5>
                            </div>
                            <div class="item">
                                <p><?php _e( 'We are proud again to work with AMV Digital Media. Their arsenal of digital media products is second to none and is helping us continually provide the expanding audience a more engaging, multi-faceted web video viewing experience.', 'amvdm' ); ?> </p>
                                <div class="clinet-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients/peter_anton.jpg" alt="user">
                                </div>
                                <h5><b><?php _e( 'Peter Anton', 'amvdm' ); ?></b><?php _e( ', VP, The Recording Academy', 'amvdm' ); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->         
        <!-- Contact Us -->
        <section id="contact" class="padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <p class="title"><?php _e( 'Get in Touch', 'amvdm' ); ?></p>
                        <div class="divider">
                            <div class="dv-top"></div>
                            <div class="dv-middle"></div>
                            <div class="dv-bottom"></div>
                        </div>
                        <h2 class="head-title"><?php _e( 'Contact Us', 'amvdm' ); ?></h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="contact-info">
                            <div class="title-type-2">
                                <h4 class="title"><b><?php _e( 'AMV Digital Media LLC', 'amvdm' ); ?></b></h4>
                            </div>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong><?php _e( 'Office:', 'amvdm' ); ?></strong> 
                                        <?php _e( '12950 Culver Blvd. Ste. 200', 'amvdm' ); ?>
                                    </li>
                                    <li>
                                        <strong><?php _e( 'Location:', 'amvdm' ); ?></strong> 
                                        <?php _e( 'Los Angeles, CA 90066', 'amvdm' ); ?>
                                    </li>
                                    <li>
                                        <strong><?php _e( 'Phone:', 'amvdm' ); ?></strong> 
                                        <?php _e( '+1.310.751.1911', 'amvdm' ); ?>
                                    </li>
                                    <li>
                                        <strong><?php _e( 'E-mail:', 'amvdm' ); ?></strong> 
                                        <?php _e( 'info@amvdm.com', 'amvdm' ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="share">
                                <a target="_blank" href="https://twitter.com/AMV_DM" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="https://www.linkedin.com/company/1042984" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="contact-backgroung">
                            <form class="contact-form" id="form_contact">
                                <div class="form-group">
                                    <div class="box">
                                        <input id="name" class="form-control" type="text" name="name" placeholder="Your name *" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="box">
                                        <input id="email" class="form-control" type="text" name="email" placeholder="Your email *" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="box">
                                        <input id="mysubject" class="form-control" type="text" name="mysubject" placeholder="Subject *" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="box">
                                        <textarea id="mymessage" class="form-control" name="mymessage" required placeholder="Message *"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit_message" class="btn btn-red hvr-sweep-to-right" data-wow-delay="0.8s" data-loading-text="Loading...">
                                    <?php _e( 'Email AMVDM', 'amvdm' ); ?>
                                </button>
                                <span class="loading"><i class="fa-pulse"></i></span>
                                <div id="reply_message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us -->         
        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right footer-share">
                            <a target="_blank" href="https://twitter.com/AMV_DM"><i class="fa fa-twitter"></i></a> 
                            <a href="https://www.linkedin.com/company/1042984" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <p class="pull-left copyright"><?php _e( 'COPYRIGHT (©) 2016 AMV Digital Media LLC', 'amvdm' ); ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->         
        <a href="#." class="go-top text-center show"><i class="fa fa-long-arrow-up"></i></a>
        <div id="moduleControl">
            <ul>
                <li class="hidden">
                    <a href="#page-top" class="page-scroll"></a>
                </li>
                <li class="active">
                    <a class="page-scroll" href="#main-slider"></a>
                </li>
                <li>
                    <a href="#about" class="page-scroll"></a>
                </li>
                <li>
                    <a href="#services" class="page-scroll"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#our-team"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#Portfolio"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact"></a>
                </li>
            </ul>
        </div>
        <!-- Js lib -->                                                                                                                                                                  
        <!-- Js lib -->
        <!-- Default Statcounter code for AMVDM http://amvdm.com -->
        <noscript>
            <div class="statcounter">
                <a title="Web Analytics" href="https:/statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/11931626/0/ab7a4879/1/" alt="Web
Analytics"></a>
            </div>
        </noscript>
        <!-- End of Statcounter Code -->        

<?php get_footer(); ?>