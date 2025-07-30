<?php
/**
 * Template WooCommerce Principal
 * Redireciona para nossos templates customizados
 */

// Se for uma página de produto individual
if (is_product()) {
    get_template_part('single-produto');
    return;
}

// Se for uma página de arquivo de produtos (loja)
if (is_shop() || is_product_category() || is_product_tag()) {
    get_template_part('page-produtos');
    return;
}

// Para outras páginas WooCommerce, usar template padrão
get_header();
?>

<main class="font-aliu">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-3xl md:text-4xl font-bold text-aliu-dark mb-8">
            <?php woocommerce_page_title(); ?>
        </h1>
        
        <?php woocommerce_content(); ?>
    </div>
</main>

<?php get_footer(); ?> 