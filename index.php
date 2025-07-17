<?php
// Fallback padrão do tema
get_header();
?>
<main class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>Nenhum conteúdo encontrado.</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?> 