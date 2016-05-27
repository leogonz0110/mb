<?php
/*
Template Name: Home page
*/

get_header();
while ( have_posts() ) : the_post(); ?>

<div class="special-banner">
    <div class="container">
        <div class="row">
			<?php
				$img01 = get_field('banner-01');
				$link01 = get_field('banner-link-01');

				$img02 = get_field('banner-02');
				$link02 = get_field('banner-link-02');
			 ?>
            <div class="col-sm-6"><a href="<?php echo $link01; ?>"><img src="<?php echo $img01["url"]; ?>" alt=""></a></div>
            <div class="col-sm-6"><a href="<?php echo $link02; ?>"><img src="<?php echo $img02["url"]; ?>" alt=""></a></div>
        </div>
    </div>
</div>
<div class="product_display">
	<div class="container">
		<div class="row">
			<?php
				$title = get_field( "featured-title" );
			?>
				<h2 class="title01"><?php echo $title; ?></h2>
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mb' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</div>
<?php
endwhile;
get_footer();
