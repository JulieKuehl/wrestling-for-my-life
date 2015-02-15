<?php get_header(); ?>

<div id="container">
    <a name="top"></a>

    <div class="hero-image">
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/shawn-michaels-portrait-notext.jpg" class="hero-image img-responsive" alt="Shawn Michaels portrait">
    </div>
<?php
$args = array(
    'sort_order' => 'ASC',
    'sort_column' => 'menu_order', //post_title
    'hierarchical' => 1,
    'exclude' => '164',
    'child_of' => 0,
    'parent' => -1,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish'
);
$pages = get_pages($args);
//start loop
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
    ?>
	<div class='<?php echo "$slug" ?>'><a class="anchor" id='<?php echo "$slug" ?>'></a>
        <div class="text-block">
		    <?php echo "$content" ?>
        </div>
	</div>

<?php
}

get_footer(); ?>