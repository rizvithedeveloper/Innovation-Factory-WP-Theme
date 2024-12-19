<?php
/*
Template Name: Biodiversity Monitoring
*/
get_header();
?>

    <!-- ## SUB PAGES BANNER ##-->
    <section class="sub-pages-banner section">
      <div class="container">
        <div class="row">
          <div class="section-heading">
            <div class="pre-heading">
              <p>Solutions</p>
            </div>
            <h1>Biodiversity monitoring</h1>
          </div>
        </div>
      </div>

      <div class="background">
        <video
          playsinline
          src="<?php echo esc_url(get_template_directory_uri()); ?>/videos/Research-biodiversity.mp4"
          loop
          autoplay
          muted="true"
        ></video>
      </div>
    </section>

    <!-- ## IMAGE  CONTENT  SECTION ##-->
    <section class="image-content-section section image-right">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="section-content">
              <div class="section-heading">
                <div class="pre-heading">
                  <span><b>Challenge</b></span>
                </div>
                <h2 class="heading-lg">
                  <b>Complexity of Biodiversity Monitoring</b>
                </h2>
              </div>
              <div class="section-text medium">
                <p class="">
                  Understanding ecological behavior is essential for
                  conservation, reducing human-environment conflicts, and
                  ensuring ecological balance. Traditional methods often rely on
                  manual observations and tracking, which can be time-consuming,
                  invasive, and limited in scope. Habitats are vast and diverse,
                  making comprehensive monitoring challenging.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-12">
            <div class="section-image">
              <video
                playsinline
                src="<?php echo esc_url(get_template_directory_uri()); ?>/videos/Research_Image_1.mp4"
                loop
                autoplay
                muted="true"
                class="image-responsive"
              ></video>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ## IMAGE  CONTENT  SECTION ##-->
    <section class="image-content-section section image-left">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="section-content">
              <div class="section-heading">
                <div class="pre-heading">
                  <span><b>Solution</b></span>
                </div>
                <h2 class="heading-lg">
                  <b>Revolutionize Biodiversity Monitoring</b>
                </h2>
              </div>
              <div class="section-text medium">
                <p class="">
                  Our advanced biodiversity monitoring system leverages
                  AI-powered acoustic and motion detection technologies to
                  observe and analyze ecological patterns in real time. By
                  deploying sensors in natural habitats, the system collects
                  data on species movement, communication patterns, and habitat
                  usage. This non-invasive approach enables researchers to study
                  ecosystems without causing disturbances.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-12">
            <div class="section-image no-space">
              <video
                playsinline
                src="<?php echo esc_url(get_template_directory_uri()); ?>/videos/Biodiversity_image_2-V3.mp4"
                loop
                autoplay
                muted="true"
                class="img-responsive"
              ></video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--## ICON BOXES SECTION ##-->
    <section class="icon-boxes-section section">
      <div class="container">
        <div class="section-heading text-centre">
          <h2>
            <b>Where To Use </b>
          </h2>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card-box icon-bg">
              <div class="icon">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/research-usage-icon1.png"
                  alt="icon"
                  class="img-responsive"
                />
              </div>
              <div class="content">
                <div class="section-heading">
                  <h3>Protected Habitats</h3>
                </div>
                <div class="section-text small">
                  <p>
                    Safeguard wildlife sanctuaries and conservation areas with
                    advanced monitoring solutions.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="card-box icon-bg">
              <div class="icon">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/research-usage-icon2.png"
                  alt="icon"
                  class="img-responsive"
                />
              </div>
              <div class="content">
                <div class="section-heading">
                  <h3>Forests and Reserves</h3>
                </div>
                <div class="section-text small">
                  <p>
                    Enhance research and protection efforts in dense forested
                    areas with AI-driven sensors.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-12">
            <div class="card-box icon-bg">
              <div class="icon">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/research-usage-icon3.png"
                  alt="icon"
                  class="img-responsive"
                />
              </div>
              <div class="content">
                <div class="section-heading">
                  <h3>Water Bodies</h3>
                </div>
                <div class="section-text small">
                  <p>
                    Monitor and protect aquatic ecosystems from wildlife
                    encroachment with real-time alerts.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--## CALL TO ACTION ##-->
    <section class="cta-section section">
      <div class="container">
        <div class="row">
          <div class="section-heading">
            <div class="pre-heading">
              <p>Join the Innovation Factory</p>
            </div>
            <h2><b>Book A Discovery</b> <span>Call To Get Started</span></h2>
          </div>

          <div class="button-wrapper">
            <a href="<?php echo get_site_url(); ?>/contact" class="custom-button normal">
              Get Your Free Consultation Today!
            </a>
          </div>

          <div class="background">
            <video
              playsinline
              src="<?php echo esc_url(get_template_directory_uri()); ?>/videos/Cta-Video.mp4"
              loop
              autoplay
              muted="true"
              class="image-responsive"
            ></video>
          </div>
        </div>
      </div>
    </section>

   <?php
get_footer();
?>