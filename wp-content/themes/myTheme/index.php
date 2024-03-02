<?php get_header(); ?>

<br/>

    <div style="text-align: center;">
        <h2>Halløjsovs</h2>
        <img src="https://picsum.photos/400/500" alt="Italian Trulli">
    </div>

<div class="container" style="text-align: center;">
    <!-- Main Loop -->
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
        }
    }
    ?>
</div>

<br/>

<?php get_footer(); ?>