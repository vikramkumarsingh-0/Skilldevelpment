<?php @include 'links.php'; ?>
<?php @include '../layout/header.php'; ?>



<main>
 
  <!-- contact form -->
  <section class="w3l-contacts-12" id="contact">
    <div class="container py-5">
      <div class="contacts12-main py-md-3">
        <div class="header-section text-center">
          <h3 class="mb-md-5 mb-4">Fill out the form.
        </div>
        <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="">
          <div class="main-input">
            <input type="text" name="w3lName" placeholder="Enter your name" class="contact-input" required="" />
            <input type="email" name="w3lSender" placeholder="Enter your mail" class="contact-input" required="" />
            <input type="email" name="w3lSubject" placeholder="Subject" class="contact-input" />
            <textarea class="contact-textarea contact-input" name="w3lMessage" placeholder="Enter your message" required=""></textarea>
          </div>
          <div class="text-right">
            <button class="btn-secondary btn theme-button">Send</button>
          </div>
        </form>
      </div>
    </div>
    <div class="contant11-top-bg py-5">
      <div class="container py-lg-3">
        <div class="d-grid contact section-gap">
          <div class="contact-info-left d-grid">
            <div class="contact-info">
              <div class="icon">
                <span class="fa fa-location-arrow" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4>Address:</h4>
                <p>Lorem dolor sit, New York, USA</p>
              </div>
            </div>
            <div class="contact-info">
              <div class="icon">
                <span class="fa fa-phone" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4>Phone:</h4>
                <p><a href="tel:+598-658-456">+598-658-456</a></p>
                <p><a href="tel:+598-658-457">+598-658-457</a></p>
              </div>
            </div>
            <div class="contact-info">
              <div class="icon">
                <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
              </div>
              <div class="contact-details">
                <h4>Mail:</h4>
                <p><a href="mailto:mail@example.com" class="email">info@teach.com</a></p>
                <p><a href="mailto:mail@example.com" class="email">teach@support.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </section>
  <!-- //contact form -->
</main>
<?php @include '../layout/footer.php'; ?>