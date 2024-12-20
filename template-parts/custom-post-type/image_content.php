<?php 
$section = $args['section'];
$content = $section['content'];
$animation = $section['animation'];
$classes = "";

if ($animation['position'] === "left") {
    $classes = "image-left";
} else if ($animation['position'] === "right") {
    $classes = "image-right";
}
?>

<section class="image-content-section section <?php echo $classes; ?>">
    <div class="container">
        <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="section-content">
            <div class="section-heading">
                <div class="pre-heading">
                <span><b><?php echo $content['pre_heading'] ?></b></span>
                </div>
                <h2 class="heading-lg">
                <b><?php echo $content['heading'] ?></b>
                </h2>
            </div>
            <div class="section-text medium">
                <p class="">
                    <?php echo $content['text'] ?>
                </p>
            </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-12">
            <div class="section-image <?php echo (!$animation['spacing']) ? 'no-space' : '' ?>">
            <?php if($animation['video']) { ?>
            <video
                playsinline
                src="<?php echo $animation['video'] ?>"
                loop
                autoplay
                muted="true"
                class="img-responsive"
            ></video>
            <?php } ?>
            </div>
        </div>
        </div>
    </div>
</section>