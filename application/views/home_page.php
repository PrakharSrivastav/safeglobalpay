<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("common/header");
?>
<!-- Start Home Page Slider -->
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->
        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?=base_url()?>images/slider/bg1.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated2">
                            <span>Welcome to <strong>AyJo Consulting</strong></span>
                        </h2>
                        <h3 class="animated3 white">
                            <span>Where Creativity Meets Technology</span>
                        </h3>
                        <p class="animated4">
						
						
						<a href="<?=site_url().'/home/services'?>" class="slider btn btn-system btn-large">
						
						Check out our services now</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?=base_url()?>images/slider/bg2.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated4">
                            <span>We create Memorable Digital Experiences</span>
                        </h2>
                        <h3 class="animated5 white">
                            <span>Design + Development + Passion</span>
                        </h3>
                        <p class="animated6"><a href="<?=site_url().'/home/pricing'?>" class="slider btn btn-system btn-large">Check out our prices</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
            <div class="item">
                <img class="img-responsive" src="<?=base_url()?>images/slider/bg3.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h2 class="animated7">
                            <span>We help you Stay Ahead of the Curve</span>
                        </h2>
                        <h3 class="animated8 white">
                            <span>Ideation. Creation. Execution.</span>
                        </h3>
                        <div class="">
                            <a class="animated4 slider btn btn-system btn-large btn-min-block" href="<?=site_url().'/home/contact'?>">Contact us Now</a>
                            <!-- <a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->
        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>
<!-- End Home Page Slider -->
<!-- Start Services Section -->
<div class="section service">
    <div class="container">
        <div class="row">
            <!-- Start Service Icon 1 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <i class="fa fa-paint-brush icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Website Design / Redesign</h4>
                    <p>Clean, professional and intutive web-designs that will adapt to the future growth of your business or organization.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->
            <!-- Start Service Icon 2 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <i class="fa fa-mobile icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>UI / UX Design </h4>
                    <p>Slick, beautiful and asthetically pleasing interface designs to enhance the user experience and simplify the functionality.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->
            <!-- Start Service Icon 2 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <i class="fa fa-database icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Database Development</h4>
                    <p>We design and build secure database applications that perform at scale using relational and document-based databases.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->
            <!-- Start Service Icon 3 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <i class="fa fa-html5 icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>HTML5</h4>
                    <p>A live website crafted from your designs using HTML5, CSS and JavaScript for full browser compatibility across all the devices.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->
            <!-- Start Service Icon 6 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                <div class="service-icon">
                    <i class="fa fa-thumbs-o-up icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Branding & Strategy</h4>
                    <p>Our team of expert consultants helps you to best articulate who you are, what you do, and most importantly, why any of it matters.</p>
                </div>
            </div>
            <!-- End Service Icon 6 -->
            <!-- Start Service Icon 4 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                <div class="service-icon">
                    <i class="fa fa-code icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Software Design / Development</h4>
                    <p>We craft supremely functional websites and softwares engineered for stability, performance, and long-term adaptability. </p>
                </div>
            </div>
            <!-- End Service Icon 4 -->
            <!-- Start Service Icon 5 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                <div class="service-icon">
                    <i class="fa fa-wordpress icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Content Management</h4>
                    <p>We work with powerful CMS solutions like wordpress, Drupal and Joomla to keep your site up to date and secure.</p>
                </div>
            </div>
            <!-- End Service Icon 5 -->
            <!-- Start Service Icon 7 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                <div class="service-icon">
                    <i class="fa fa-shopping-cart icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>E-Commerce</h4>
                    <p>We help you to develop your e-commerce website or store and offer features to checkout items and process payments.</p>
                </div>
            </div>
            <!-- End Service Icon 7 -->
            <!-- Start Service Icon 8 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                <div class="service-icon">
                    <i class="fa fa-laptop icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Desktop and Mobile apps</h4>
                    <p>We create cross-platform desktop applications and mobile apps for different Operating systems to help your product reach a larger userbase.</p>
                </div>
            </div>
            <!-- End Service Icon 8 -->
            <!-- Start Service Icon 8 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                <div class="service-icon">
                    <i class="fa fa-bar-chart-o icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>SEO & Web Analytics</h4>
                    <p>We implement SEO for your website to improve page rankings increasing your inbound leads and provide you statistical reports.</p>
                </div>
            </div>
            <!-- End Service Icon 8 -->
            <!-- Start Service Icon 8 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                <div class="service-icon">
                    <i class="fa fa-rocket icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Software consulting</h4>
                    <p>We provide Software consulting to startups, large multinationals and everything in between to make their products/services more effective and appealing. </p>
                </div>
            </div>
            <!-- End Service Icon 8 -->
            <!-- Start Service Icon 8 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                <div class="service-icon">
                    <i class="fa fa-exchange icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>API Integration</h4>
                    <p>We help to convert your existing site or app into powerful applications that share data by providing API integrations and allow us to tie into existing services.</p>
                </div>
            </div>
            <!-- End Service Icon 8 -->
        </div>
    </div>
    <!-- Start Purchase Section -->
    <div class="section purchase">
        <div class="container">
            <!-- Start Big Heading -->

            <!-- End Big Heading -->
            <!-- Start Video Section Content -->
            <div class="section-video-content text-center">
                <!-- Start Animations Text -->
                <h1 class="text-center fittext wite-text font-size-40 uppercase">About Us</h1>
                <h1 class="fittext wite-text uppercase tlt">
                    <span class="texts">
                        <span>Open up your Business to New Possibilities</span>
                        <span>Create Memorable Digital Experiences</span>
                        <span>Revolutionize your Business</span>
                        <span>Open up your Business to New Possibilities</span>
                        <span>Reachout to larger userbase</span>
                    </span><br />
                    with AyJo Consulting <!-- Template is Ready for <br/>Business, Agency <strong>or</strong> Creative Portfolios -->
                </h1>
                <!-- End Animations Text -->
                <p class="text-center font-size-20  wite-text">
                    Our team of expert designers, full-stack developers and software consultants at AyJo Consulting would like to welcome you to our humble web-abode. AyJo Consulting is a South Dakota based web-software design agency specialized in custom designed, professionally created websites and softwares for both personal and corporate business. 
                    <br /><br />
                    Whether you are looking to update your site, create or improve a custom software, add new features to your website, better your ranking position on searches or just wondering if you should start a site, WE ARE HERE FOR YOU!
                    <br /><br />
                    Mail us now to get a  quote!
                </p>
                <!-- Start Buttons -->
                <a href="<?=site_url().'/home/services'?>" class="btn-system btn-large"><i class="fa fa-tasks"></i> Check Out Features</a>
                <a href="<?=site_url().'/home/pricing'?>" class="btn-system btn-large btn-wite"><i class="fa fa-download"></i>Check Out Packages</a>
            </div>
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- End Purchase Section -->

    <div class="container">
        <!-- .row -->
        <!-- divider -->
        <div class="hr1 margin-top"></div>
        <div class="row">
            <div class="col-md-4">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Why Choose Us</span></h4>
                <!-- Accordion -->
                <div class="panel-group" id="accordion">
                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-one">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-laptop-1"></i> We listen
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-one" class="panel-collapse collapse">
                            <div class="panel-body">We believe that great development and design can only happen if the web developer truly knows who they are working with. This is why every project we start always begins with us getting to know about your business. We want to know what makes you unique, why people come to you, and what your plans are for the future. Only then can we start to build a site or web campaign with you that will really hit the nail on the head.</div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->
                    <!-- Start Accordion 2 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-gift-1"></i> We love
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-tow" class="panel-collapse collapse">
                            <div class="panel-body">We are the lucky ones. We get to wake up every morning and look forward to work, because every person on our team completely loves what we do. From our designers to our administrators, every person who works at AyJo Consulting has a passion for their job no matter what department they work in, and embraces their desire to give just a little bit extra to every client who comes through our doors.</div>
                        </div>
                    </div>
                    <!-- End Accordion 2 -->
                    <!-- Start Accordion 3 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-three" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> We know
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-three" class="panel-collapse collapse">
                            <div class="panel-body">We’ve put our efforts into creating the ‘dream team’ of web and design experts. We’ve got many years of experience in digital development and site design . But that doesn’t mean we’re a bunch of old fogeys either. We’re a young and dynamic team, with a finger always on the pulse of the latest in website and trends, and our satisfied customers are living testament to that.</div>
                        </div>
                    </div>
                    <!-- End Accordion 3 -->
                    <!-- Start Accordion 4 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-four" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> We show
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-four" class="panel-collapse collapse">
                            <div class="panel-body">The web based environment can be a confusing place to work, and as a business owner it can leave you wondering exactly what you’re paying for. We make it our job to be transparent and accountable from the outset, and with our crystal clear pricing and no nonsense reporting strategies will ensure you are never left in the dark with your project.</div>
                        </div>
                    </div>
                    <!-- End Accordion 4 -->
                    <!-- Start Accordion 5 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-five" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> We give
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-five" class="panel-collapse collapse">
                            <div class="panel-body">Our overarching aim is to bring affordable, high performance websites to every client, and our competitive pricing certainly ticks that box. But still, we like to add value at every possible stage, which is why we can give back as much as we can to you. You can expect a beautiful creations,  training to use your site,  hosting for a year,  email accounts and  site support from our developers for a year after the site is launched.</div>
                        </div>
                    </div>
                    <!-- End Accordion 5 -->
                    <!-- Start Accordion 6 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-six" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> We promise
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-six" class="panel-collapse collapse">
                            <div class="panel-body">It’s no accident that we’ve developed a loyal fan base in the short time we’ve been in the design business. We know that we’ll always stand out from the crowd because we make tough promises, and then deliver on them every time. We promise to be contactable, we promise on our deadlines, and above all, we promise complete and utter satisfaction with unique customer guarantee.</div>
                        </div>
                    </div>
                    <!-- End Accordion 6 -->
                    <!-- Start Accordion 7 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-sev" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> We support
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-sev" class="panel-collapse collapse">
                            <div class="panel-body">We are invested in your success. At each step starting from requirement gathering, implementation, deployment and further maintenance, our team of experts guide you and abstract you from the complexities involved.</div>
                        </div>
                    </div>
                    <!-- End Accordion 7 -->
                    <!-- Start Accordion 8 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-eight" class="collapsed">
                                    <i class="icon-down-open-1 control-icon"></i>
                                    <i class="icon-tint"></i> You save
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-eight" class="panel-collapse collapse">
                            <div class="panel-body">We offer a simple pricing plan to our customers. You can customize your product from our pricing page to get an estimate of the cost involved. Since each new project has its own complexity, you can always contact us to provide you a  quote for your services.</div>
                        </div>
                    </div>
                    <!-- End Accordion 8 -->
                </div>
                <!-- End Accordion -->
            </div>
            <h4 class="classic-title"><span>Our Skillset</span></h4>
            <div class="col-md-4">

                <div class="skill-shortcode">
                    <div class="skill">
                        <p>Web Design</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="90">
                                <span class="progress-bar-span" >90%</span>
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>UI / UX Design</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="80">
                                <span class="progress-bar-span" >80%</span>
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Database Development</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="90">
                                <span class="progress-bar-span" >90%</span>
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>HTML 5</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="95">
                                <span class="progress-bar-span" >95%</span>
                                <span class="sr-only">95% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Branding & Strategy</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="85">
                                <span class="progress-bar-span" >85%</span>
                                <span class="sr-only">85% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Software Design / Development</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="90">
                                <span class="progress-bar-span" >90%</span>
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="skill-shortcode">
                    <div class="skill">
                        <p>Content Management</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="85">
                                <span class="progress-bar-span" >85%</span>
                                <span class="sr-only">85% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>E - Commerce</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="80">
                                <span class="progress-bar-span" >80%</span>
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Desktop and Mobile Apps</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="70">
                                <span class="progress-bar-span" >70%</span>
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Search Engine Optimisation</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="90">
                                <span class="progress-bar-span" >90%</span>
                                <span class="sr-only">90% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>Software consulting</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="100">
                                <span class="progress-bar-span" >100%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <p>API Integration</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"  data-percentage="100">
                                <span class="progress-bar-span" >100%</span>
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view("common/footer");
?>