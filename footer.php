<!--### FOOTER ###-->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a href="<?php echo get_site_url(); ?>" class="footer-logo">
              <span>Innovation</span> Factory
            </a>
            <p class="footer-text">
              Innovation Factory is dedicated to developing sound & vision
              algorithms for a wide range of industries such as safety,
              security, comfort and the healthcare sector
            </p>
          </div>

          <div class="col-md-2">
            <h5>Quick Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="<?php echo get_site_url(); ?>" class="nav-link p-0">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?php echo get_site_url(); ?>#solutions" class="nav-link p-0"
                  >Our Solutions</a
                >
              </li>
              <li class="nav-item mb-2">
                <a href="<?php echo get_site_url(); ?>/markets" class="nav-link p-0">Markets</a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?php echo get_site_url(); ?>/press" class="nav-link p-0">Press</a>
              </li>
              <li class="nav-item mb-2">
                <a href="<?php echo get_site_url(); ?>/contact" class="nav-link p-0">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2">
            <h5>Follow Us</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Facebook</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Instagram</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Twitter</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0">Linkedin</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Newsletter</h5>
            <div class="newsletter-form">
              <?php echo do_shortcode('[contact-form-7 id="54ca854" title="Newsletter Form"]'); ?>
            </div>
            <!-- <form action="" class="newsletter-form">
              <label for="">Stay updated with the latest insights.</label>
              <input
                type="email"
                name=""
                id=""
                placeholder="Enter your email"
              />
              <button class="custom-button normal">Subscribe Now</button>
            </form> -->
          </div>
        </div>

        <hr />

        <div
          class="d-flex flex-wrap justify-content-between align-items-center py-3 footer-bottom"
        >
          <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0"
              >&copy; 2024 Innovation Factory. All rights reserved.</span
            >
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
              <p>
                Design By<a href="https://xammin.com/" target="_blank">
                  Xammin</a
                >
              </p>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <!--# Bootstrap JavaScript #-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!--# Slick JavaScript #-->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--# Custom JS #-->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/custom.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/marquee-slider.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
