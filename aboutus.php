<?php /* Template Name: aboutus */ ?>
<?php get_header() ?>
<div class="container">
    <div class="container-about">
        <div class="row">
            <div class="col-sm-8">
                <h2>About <?php the_field("company_name")?></h2>
                <h4><?php the_field("company_tiny_desc")?></h4>
                <p><?php the_field("company_desc")?></p>
                <a class="btn btn-lg btn-primary" href="<?php echo get_site_url(); ?>/contact-us">Get in Touch</a>
            </div>
            <div class="col-sm-4">
            <div class="text-center">
                <br>
                <br>
                <br>
            <img max-width="70%" src="<?php the_field('company_image'); ?>" aria-hidden="true"
                    preserveAspectRatio="xMidYMid slice" focusable="false" class="mx-auto d-block">
                    </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>