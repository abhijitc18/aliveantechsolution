<?php include 'header.php'; ?>

<!-- navigation -->

<div class="collapse navbar-collapse text-center" id="navigation">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <div class="active">
        <a class="nav-link" href="index.php">Home</a>
      </div>
    </li>

    <li class="nav-item">
      <div class="active">
        <a class="nav-link" style="color: #f96a3f; " href="about_us.php">About us</a>
      </div>
    </li>

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
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </div>
    </li>
  </ul>
 
</div>
</nav>
</div>
</div>
<!-- /navigation -->

<!-- page title -->
<section class="banner-section bg-cover overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white mt-3">Get A Quote</h2>

        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0">
            <li class="breadcrumb-item font-weight-semebold"><a class="text-white" href="index.php">Home</a></li>
            <li class="breadcrumb-item font-weight-semebold active text-primary" aria-current="page">Get A Quote</li>
            <br>
            <br>
            <br>
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

<!-- quick contact -->
<section class="inquiry-section position-relative">
  <div class="container ">
    <div class="row justify-content-between mb-80">
      <div class="col-lg-8 col-md-6 mb-8 mb-md-0">
        <span class="section-title-border "></span>
        <p class="subtitle">Inquiry Form</p>
        <form action="#">
          <input type="text" name="name" id="name" class="form-control form-control-sm border-0 rounded-0 box-shadow mb-3" placeholder="Name">
          <input type="email" name="mail" id="mail" class="form-control form-control-sm border-0 rounded-0 box-shadow mb-3" placeholder="Email">
          <input type="text" name="phone" id="phone" class="form-control form-control-sm border-0 rounded-0 box-shadow mb-3" placeholder="Phone">
          <input type="text" name="subject" id="subject" class="form-control form-control-sm border-0 rounded-0 box-shadow mb-3" placeholder="Subject">
          <textarea name="message" id="message" class="form-control form-control-sm border-0 rounded-0 box-shadow mb-3 py-3 px-4" placeholder="Your Message"></textarea>
          <button type="submit" value="send" class="btn btn-primary">send message</button>
        </form>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <style type="text/css">
          @media (min-width: 360px) and (max-width: 640px) {
            .humandala_round {

              width: 300px;
              height: 350px;
            }
          }
        </style>
        <img class="img-inquiry" src="images/inquiry/inquiry.jpg">
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>