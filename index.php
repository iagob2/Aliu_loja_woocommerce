<?php
// Fallback padrão do tema
get_header();
?>
<main class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                <?php bloginfo('name'); ?>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                <?php bloginfo('description'); ?>
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article class="bg-white rounded-2xl p-8 shadow-lg">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">
                            <?php the_title(); ?>
                        </h2>
                        <div class="prose prose-lg max-w-none">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <div class="bg-white rounded-2xl p-8 shadow-lg text-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Nenhum conteúdo encontrado</h2>
                    <p class="text-gray-600">Esta página ainda não possui conteúdo. Volte mais tarde!</p>
                    <a href="<?php echo home_url('/'); ?>" class="inline-block mt-4 px-6 py-3 bg-aliu-primary text-white rounded-xl font-semibold hover:bg-red-600 transition-colors">
                        Voltar ao Início
                    </a>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?> 