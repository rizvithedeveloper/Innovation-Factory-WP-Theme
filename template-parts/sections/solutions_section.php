<?php 
$section = $args['section'];
$args = array(
    'post_type' => 'solutions',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
);

$arr_posts = new WP_Query($args);
?>

<section id="solutions" class="solutions-section section">
      <div class="container">
        <div class="section-heading">
          <div class="pre-heading">
            <p><?php echo $section['pre_heading'] ?></p>
          </div>
          <h2><?php echo $section['heading'] ?></h2>
        </div>
        <div class="row">
            <?php
            if ($arr_posts->have_posts()):
                $count = 0; // Initialize a counter
                while ($arr_posts->have_posts()): $arr_posts->the_post();
            ?>
          <!--# Solution Card #-->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card-box post">
              <a href="<?php echo the_permalink(); ?>" class="section-heading">
                <h3><?php echo the_title() ?></h3>
              </a>
              <a href="<?php echo the_permalink() ?>" class="image">
                <img
                  src="<?php echo the_post_thumbnail_url() ?>"
                  alt="solution card"
                  class="img-responsive"
                />
              </a>
              <div class="section-text small">
                <p>
                  <?php echo the_excerpt(); ?>
                </p>
              </div>

              <div class="link-wrapper">
                <a href="<?php echo the_permalink() ?>" class="link">Read More</a>
              </div>
            </div>
          </div>

          <?php
          
            $count++; 

            endwhile;

            // Reset post data after custom WP_Query loop
            wp_reset_postdata();

            endif;
          ?>

        </div>
      </div>
    </section>