<?php include 'header.php'; ?>
<!-- /top header -->

<div class="collapse navbar-collapse text-center" id="navigation">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="index.php">Home</a>
      </div>
    </li>

    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="about_us.php">About us</a>
      </div>
    </li>
    <!-- <li class="nav-item">
              <div class="active" >
              <a class="nav-link"  href="services.php">Services</a>
              </div>
            </li> -->

    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="Website_Development.php">Website Development</a>
      </div>

    </li>


    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="Digital_Marketing.php">Digital Marketing</a>
      </div>


    </li>
    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="#">Designing</a>
      </div>
    </li>

    <li class="nav-item">
      <div class="active">
        <a class="nav-link" style="color: #f96a3f; " href="contact_us.php">Contact Us</a>
      </div>
    </li>


    <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Shortcode
              </a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="components/buttons.html">Buttons</a>
                  <a class="dropdown-item" href="components/icons.html">Icons</a>
                  <a class="dropdown-item" href="components/typography.html">Typography</a>
                  <a class="dropdown-item" href="components/accordions.html">Accordions</a>
                  <a class="dropdown-item" href="components/blog-contents.html">Blog Contents</a>
                  <a class="dropdown-item" href="components/service-contents.html">Service Contents</a>
                  <a class="dropdown-item" href="components/team-contents.html">Team Contents</a>
              </div>
            </li> -->
  </ul>
  <!-- search -->
  <!-- get start btn -->
  <!--  <a href="contact_us.php" class="btn btn-primary hover-ripple">get a Quote </a> -->

</div>
</nav>
</div>
</div>
<!-- /navigation -->
</header>
<!-- /header -->

<!-- page title -->
<section class="banner-section bg-cover overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white mt-3">Contact Us</h2>
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0">
            <li class="breadcrumb-item font-weight-semebold"><a class="text-white" href="index.php">Home</a></li>
            <li class="breadcrumb-item font-weight-semebold active text-primary" aria-current="page">Contact Us</li>
          </ol>
          <br>
          <br>
          <br>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact items -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <!-- Addresses -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
          <i class="fa fa-map-marker text-primary icon-lg mb-4"></i>
          <h4 class="mb-4">Our Address</h4>
          <ul class="list-unstyled">
            <li>Sr No. 41/1, Phule Society, near Ramchandra Sabhagrugha, Choudhari Wasti, Ashoka Nagar, Wadgaon Sheri, Pune, Maharashtra 411014
            </li>
          </ul>
        </div>
      </div>
      <!-- phone -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
          <i class="fa fa-phone text-primary icon-lg mb-4"></i>
          <h4 class="mb-4">Phone Number</h4>
          <ul class="list-unstyled">
            <li>+91 9145445449 </li>
            <br>
            <br>


          </ul>
        </div>
      </div>
      <!-- Mail -->
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="bg-white box-shadow text-center p-5 px-md-2 px-lg-5">
          <i class="fa fa-envelope text-primary icon-lg mb-4"></i>
          <h4 class="mb-4">Message Us</h4>
          <ul class="list-unstyled">

            <li>contact@aliveantechsolutions.com</li>
            <br>
            <br>


            <!-- <li>info@example.com</li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /contact item -->


<!-- contact form and map -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- google map -->
      <div class="col-md-4 mb-5 mb-md-0">
        <iframe class="g_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.015889217365!2d73.93892657529278!3d18.55750078254327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c3a624d1bdb3%3A0x8f3555bb6ea08a54!2sAlivean%20Tech%20Solutions!5e1!3m2!1sen!2sin!4v1731763544262!5m2!1sen!2sin" width="300" height="400" frameborder="0" style="border:0;"></iframe>
      </div>
      <div class="col-md-8">
        <h3 class="section-title">Contact Form</h3>
        <form action="process_contact_form.php" method="POST" class="row">
          <div class="col-md-6">
            <input type="text" name="name" id="name" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="Name">
          </div>
          <div class="col-md-6">
            <input type="email" name="mail" id="mail" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="Email">
          </div>
          <div class="col-md-6">
            <input type="text" name="phone" id="phone" class="form-control border-0 rounded-0 box-shadow mb-4" placeholder="Phone">
          </div>
          <!--   <div class="col-md-6">
            <input type="file" name="subject" id="subject" placeholder="Subject">
          </div> -->
          <div class="col-12">
            <textarea name="message" id="message" class="form-control border-0 rounded-0 box-shadow mb-5 py-3 px-4" placeholder="Your Message"></textarea>
          </div>
          <div class="col-12">
            <button type="submit" value="send" class="btn btn-primary hover-ripple">send message</button>
            <br>
            <br>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /contact form and map -->

<?php include 'footer.php'; ?>