<?php get_header();?>
<h1>Clase Fran Moreno 3</h1>
<h2>Sección de noticias</h2>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h2>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <p><?php the_excerpt();?></p>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer();?>