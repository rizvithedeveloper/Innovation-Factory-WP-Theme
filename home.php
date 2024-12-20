<?php
/*
Template Name: Home
*/
get_header();
?>

    <!-- ## HERO SLIDER ##-->
    <section class="hero-slider section">
      <div id="heroSlider" class="slider">
        <?php 
        $banner_slider = get_field("hero_slider");
        $bannerSlides = $banner_slider['slides'];
        foreach ($bannerSlides as $slide) {
        ?>
        <!--# Slide #-->
        <div class="slide">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-12">
                <!--## CONTENT ##-->
                <div class="content">
                  <div class="section-heading">
                    <div
                      class="pre-heading large"
                      data-aos="fade-right"
                      data-aos-delay="100"
                    >
                      <p><?php echo $slide['pre_heading'] ?></p>
                    </div>
                    <h1 data-aos="fade-right" data-aos-delay="300">
                      <?php echo $slide['heading'] ?>
                    </h1>
                  </div>

                  <div class="button-wrapper">
                    <a
                      href="<?php echo $slide['button']['link'] ?>"
                      class="custom-button normal"
                      data-aos="fade-up"
                      data-aos-delay="500"
                    >
                      <?php echo $slide['button']['text'] ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="slide-bg">
            <video
              playsinline
              src="<?php echo $slide['background'] ?>"
              loop
              autoplay
              muted="true"
            ></video>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>

    <!--## LOGO SLIDER ##-->
    <?php 
      $partnersData = get_field("partners_logo");
      get_template_part('template-parts/sections/logo_slider', 'custom', array('section' => $partnersData));
    ?>

    <!--## ABOUT SECTION ##-->
    <?php
    $aboutSection = get_field("about_section");
    $aboutBoxes = $aboutSection['boxes'];
    ?>
    <section class="about-section section">
      <div class="container">
        <div class="row background">
          <div class="col-md-6 col-sm-12 col-12">
            <div class="section-heading">
              <?php if($aboutSection['pre_heading']) { ?>
              <div class="pre-heading">
                <p><?php echo $aboutSection['pre_heading'] ?></p>
              </div>
              <?php } ?>

              <?php if($aboutSection['heading']) { ?>
                <h2><?php echo $aboutSection['heading'] ?></h2>
              <?php } ?> 
            </div>

            <div class="section-text medium">
              <p>
                <?php echo $aboutSection['text'] ?>
              </p>
            </div>
          </div>

          <div class="col-md-5 col-sm-12 col-12">
            <div class="section-image">
              <!-- <img
                src="/images/about-img.png"
                alt="About Image"
                class="img-responsive"
              /> -->
              <?php if($aboutSection['animation']) { ?>
              <video
                playsinline
                src="<?php echo $aboutSection['animation'] ?>"
                loop
                autoplay
                muted="true"
                class="img-responsive"
              ></video>
              <?php } ?>
            </div>
          </div>
        </div>

        <?php if(count($aboutBoxes) > 0) { ?>
        <div class="row boxes">

        <?php foreach($aboutBoxes as $box) { ?>
          <!--# Icon Box #-->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card-box">
              <?php 
              if($box['icon']) {
              ?>
              <div class="icon">
                <img
                  src="<?php echo $box['icon'] ?>"
                  alt="icon"
                  class="img-responsive"
                />
              </div>
              <?php } ?>
              <div class="content">
                <div class="section-heading">
                  <h3><?php echo $box['heading'] ?></h3>
                </div>
                <div class="section-text small">
                  <p>
                    <?php echo $box['text'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
        <?php } ?>
      </div>
    </section>

    <!--## VIDEO SECTION ##-->
    <?php 
    $videoSection = get_field("video_section");
    ?>
    <section class="video-section section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-6 col-12">
            <div class="content">
              <div class="section-heading">
                <div class="pre-heading">
                  <p><?php echo $videoSection['pre_heading'] ?></p>
                </div>
                <h2><?php echo $videoSection['heading'] ?></h2>
              </div>

              <div class="section-text medium">
                <p>
                  <?php echo $videoSection['text'] ?>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-12">
            <div class="video-wrapContainer">
              <div class="video-button-wrapper">
                <button
                  id="play-video"
                  class="video-playBtn"
                  data-bs-toggle="modal"
                  data-bs-target="#staticBackdrop"
                >
                  <span></span>
                </button>
              </div>

              <div class="video-bg">
                <img
                  src="<?php echo $videoSection['video']['background'] ?>"
                  alt="Video background"
                  class="img-responsive"
                />
              </div>

              <!--## VIDEO MODAL ##-->
              <div
                class="modal custom-modal fade"
                id="staticBackdrop"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div
                        style="
                          position: relative;
                          padding-bottom: 56.25%;
                          height: 0;
                          overflow: hidden;
                        "
                      >
                        <iframe
                          src="https://www.youtube-nocookie.com/embed/<?php echo $videoSection['video']['video_id'] ?>?si=OdZLsiI2Rjo0zMiQ&amp;controls=0"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin"
                          allowfullscreen
                          style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                          "
                        ></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--## SOLUTIONS SECTION ##-->
    <?php 
      $solutionData = get_field("solution_section");
      get_template_part('template-parts/sections/solutions_section', 'custom', array('section' => $solutionData));
    ?>
    

    <!--## TRUSTED LEADERS ##-->
    <?php 
    $leaderSection = get_field("leaders_logo");
    $leadersRow1 = $leaderSection['logos_row_1'];
    $leadersRow2 = $leaderSection['logos_row_2'];
    ?>
    <section class="trusted-leaders-section section text-center">
      <div class="container">
        <div class="section-heading">
          <h2><span><?php echo $leaderSection['heading'] ?></span></h2>
        </div>

        <div class="row">
          <!--# Marquee #-->
          <div class="marquee slides-7">
            <ul class="marquee-content">
              <?php
              foreach($leadersRow1 as $item) {
                if($item['logo'])
              ?>
              <li>
                <div class="image">
                  <img src="<?php echo $item['logo'] ?>" alt="Logo" />
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>

          <!--# Marquee #-->
          <div class="marquee slides-7 last">
            <ul class="marquee-content" direction="right">
              <?php
              foreach($leadersRow2 as $item) {
                if($item['logo'])
              ?>
              <li>
                <div class="image">
                  <img src="<?php echo $item['logo'] ?>" alt="Logo" />
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--## CALL TO ACTION ##-->
    <?php
    get_template_part('template-parts/sections/call_to_action', 'custom', array('section' => null));
    ?>

   <?php
get_footer();
?>