<?php
$section = $args['section'];
$images = $section['logos'];

?>

<?php
if(count($images) > 0) {
?>
<section class="partners-logo section">
    <?php
    if($section['heading']) {
    ?>
    <div class="container">
    <div class="row">
        <!--# Section Heading #-->
        <div class="section-heading" data-aos="fade-in" data-aos-delay="100">
        <h3><?php echo $section['heading'] ?></h3>
        </div>
    </div>
    </div>
    <?php } ?>

    <!--# Marquee #-->
    <div class="marquee slides-5">
        <ul class="marquee-content">
            <?php
            foreach ($images as $image) {
                if($image['logo']) {
            ?>
            <li>
                <div class="image">
                    <img src="<?php echo $image['logo'] ?>" alt="Logo" />
                </div>
            </li>
            <?php } } ?>
        </ul>
    </div>
</section>
<?php } ?>