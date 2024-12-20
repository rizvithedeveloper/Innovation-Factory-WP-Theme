<?php 
get_header();
?>

<?php 
$AllSections = get_field('sections_container');
if($AllSections){
    foreach($AllSections as $section){
        $sectionType = $section['select_section_type'];
        $tempUrl = 'template-parts/custom-post-type/'.$sectionType;
        get_template_part($tempUrl, 'custom', array('section' => $section[$sectionType]));
    }
}
?>

<?php 
get_footer();
?>