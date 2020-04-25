<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body style="overflow-y:scroll">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><h6 style="font-weight: bold;font-family:'Times New Roman'!important">{{ config('app.name') }}</h6></a>
      </div>

      @include('layouts.nav')
      <!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Providing Best<br><span style="text-decoration:none;font-family:'Times New Roman'">Software Solutions</span><br>For Your Business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>SmartSoft International is an established Software and security company based in Kenya. The sole mandate of the company is to provide custom Software and security measures
            to help in smooth running of any bussiness.
            We utilise cutting-edge technology, extensive knowledge and experience for  you to avoid security breaches and interuptions that may cause you money
            or lead to any loss to the business.
          </p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              We consistently provide exciting experiences in software solutions and security policies to our clients and thus we give outmatched expectations to our clients.
              Our success is invariably rooted in foundational principles upon which we base practice as an ICT  firm.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-deviantart"></i></div>
              <h4 class="title"><a href="">Customer Focus</a></h4>
              <p class="description">
                Our client-facing approach seeks to understand our clients unique needs in order provide tailored Software solutions.
              </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-circle-o-notch"></i></div>
              <h4 class="title"><a href="">Integrity</a></h4>
              <p class="description">
                Our clients have always leveraged our commitment to providing high quality services, accountability, honesty,
                 trustworthiness and responsiveness to find a quick solution to their ICT issues.
              </p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-area-chart"></i></div>
              <h4 class="title"><a href="">Continuous Research &amp; Improvement</a></h4>
              <p class="description">
                We tailor our research services according to the unique needs of every client while improving the existing Infrastructure to suit
                market needs.
              </p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>With 100% Customer Satisfaction.</h4>
            <p>
                Our clients have always leveraged our commitment to providing high quality ICT services, accountability, honesty, trustworthiness and responsiveness to find a quick solution to their business or Industrial issues.

                Our services are founded on both professional and business ethics as regulated by Software laws. With respect to this,we adhere to professional ethics regulating our profession and implement appropriate business
                practices and policies, especially in situations where our clients need help in  controversial ICT  issues.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Dedicated Customer Support</h4>
            <p>
             We make it simple  for your business to scale up as it grows. Our optimised Software Solutions and Software development methodologies
              saves your business time and infrastructure for your workload.
            </p>
            <p>
              We also provide standard general business based applications  that lets you spend less on your infrastructure  with our easy to use
              Software UI.
            </p>
            <p>
             We are always free around the clock with our technical support for our clients  together with additional benefits.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>All of our solutions are practical, budget friendly and can be customised to fit your particular business needs.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-user-secret" style="color: #ff689b;margin-left:15px"></i></div>
              <h4 class="title"><a href="">Penetration Testing</a></h4>
              <p class="description">
                Our Security Assessment services cover the
                full range of methods to discover systems and software vulnerabilities
                before they can result into security breaches and services interuptions.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-handshake-o" style="color: green;"></i></div>
              <h4 class="title"><a href="">Cyber Security Consultancy</a></h4>
              <p class="description">
                Our consultants ensures that you have the &nbsp;appropriate cyber security solutions
                 in place to protect your growing business.
                 You gain instant access to  expert knowledge to improve on your existing infrastructure.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-users" style="color: #3fcdc7;margin-left:15px"></i></div>
              <h4 class="title"><a href="">Cyber Security Training</a></h4>
              <p class="description">&nbsp;
               Improve your business security by providing &nbsp;your employees with the latest training and guidance . Available programs include
               Cyber Security,Cyber Security Awareness and Social Engineering.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;margin-left:15px"></i></div>
              <h4 class="title"><a href="">Vulnerability Scanning</a></h4>
              <p class="description">
                Our Improved state of the art scanners thoroughly assesses the servers,systems, networks and applications for weaknesses so that they
                can be prioritised and fixed before you can experience a costly Cyber Attack.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-globe" style="color: #4236d2;margin-left:15px"></i></div>
              <h4 class="title"><a href="">Web Development &amp; Design</a></h4>
              <p class="description">
                We excell in rapid
                application development and technical problem solving for delegated projects, winning the highest
                customer satisfaction ranking for all produced software solutions.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="fa fa-code" style="color: #4680ff;margin-left:15px"></i></div>
              <h4 class="title"><a href="">Software Development</a></h4>
              <p class="description">
                We excell in rapid
                application development and technical problem solving for delegated projects, winning the highest
                customer satisfaction ranking for all produced software solutions.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>
            We understand ICT needs and concerns of todays businesses and do work closely with you to ensure your well being.
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Our Goal</h5>
                <p class="card-text">
                  We consistently provide an exciting
                  experience in software solutions with contributes to every customer's
                  success resulting to high levels of satisfaction
                </p>
                {{-- <a href="#" class="readmore">Read more </a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Integrity</h5>
                <p class="card-text">
                  We are trustworthy,diligent and honest. We accept
                  responsibility for our actions and follow through on promises and commitments.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Innovation</h5>
                <p class="card-text">
                  We thrive in adopting new ways of
                   doing things and ensure continuous improvement of our services and products.
                 </p>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">50</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">100</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">500</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">8</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              {{-- <li data-filter=".filter-card">Card</li> --}}
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/School.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School System</a></h4>
                <p>App</p>
                <div>
                  <a href="assets/img/portfolio/School.png" data-gall="portfolioGallery" title="App 1" class="venobox link-preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Bet.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Betting Website </a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/Bet.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/School1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School System</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/School1.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/police1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Police  System</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/police1.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Unisol.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School System</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/Unisol.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Unisol1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">School System</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/Unisol1.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/police.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Police  System</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/police.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Bet1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Betting Application</a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/Bet1.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Salon.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Salon</a></h4>
                <p>Web Application</p>
                <div>
                  <a href="assets/img/portfolio/Salon.png" class="venobox link-preview" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/VirtualSchool.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">VirtualSchool</a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/VirtualSchool.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/virtualSchool.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">VirtualSchool</a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/virtualSchool.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/lawyer.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Advocates</a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/lawyer.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/lawyer1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Advocates</a></h4>
                <p>Website</p>
                <div>
                  <a href="assets/img/portfolio/lawyer1.png" class="venobox link-preview" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Our CLients</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>A108 Adam Street, NY 535022</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@example.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+1 5589 55488 55</p>
              </div>
            </div>

            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.js')

</body>

</html>
