<?php include_once("inc/header.php"); ?>

<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="breadcrumb-content">
          <h2>Contact</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-area section-padding-100-0">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="single-contact-area mb-100">
          <a href="#" class="d-block mb-50"><img src="img/core-img/logo.png" alt=""></a>
          <p>Loankart is a Direct Channel Partner with leading NBFC'S and Banks. We are running with wide range of products with an expertise team having an experience of more than 15 years in Finance Field., who ensure to design the best product and rate of interest as per customers financial need.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="single-contact-area mb-100">
          <div class="contact-advisor">
            <h5>Contact Us</h5>
            <div class="single-advisor d-flex align-items-center">
              <div class="advisor-img">
                <img src="img/bg-img/25.jpg" alt="">
              </div>
              <div class="advisor-info">
                <h6>Tejeshwar Das</h6>
                <span>Managing Partner</span>
                <p>+91 9173074447</p>
              </div>
            </div>
            <div class="single-advisor d-flex align-items-center">
              <div class="advisor-img">
                <img src="img/bg-img/26.jpg" alt="">
              </div>
              <div class="advisor-info">
                <h6>John Chettiar</h6>
                <span>Managing Partner</span>
                <p>+91 9820169507</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="single-contact-area mb-100">
          <div class="contact--area contact-page">
            <div class="contact-content">
              <h5>Get in touch</h5>
              <div class="single-contact-content d-flex align-items-center">
                <div class="icon">
                  <img src="img/core-img/location.png" alt="">
                </div>
                <div class="text">
                  <p>301-302, Heena Avenue, Char Rasta, Vapi - 396 191</p>
                </div>
              </div>
              <div class="single-contact-content d-flex align-items-center">
                <div class="icon">
                  <img src="img/core-img/call.png" alt="">
                </div>
                <div class="text">
                  <p>+91 9173074447</p>
                  <span>mon-fri , 10.00am - 06.00pm</span>
                </div>
              </div>
              <div class="single-contact-content d-flex align-items-center">
                <div class="icon">
                  <img src="img/core-img/message2.png" alt="">
                </div>
                <div class="text">
                  <p>loankartgujarat@gmail.com</p>
                  <span>we reply in 24 hrs</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="map-area">
    <iframe src="https://maps.google.com/maps?q=20.367154%2C72.922003&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
    <div class="contact---area">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="contact-form-area contact-page">
              <h4 class="mb-50">Send a message</h4>
              <form action="php/contactProcess.php" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Your Name" name="name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Your E-mail" name="email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" placeholder="Your Subject" name="subject">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message" name="message"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn credit-btn mt-30" type="submit" name="contactSubmit">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once("inc/newsletter.php"); ?>
<?php include_once("inc/modal.php"); ?>
<?php include_once("inc/footer.php"); ?>
