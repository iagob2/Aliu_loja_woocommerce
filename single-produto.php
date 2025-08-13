<?php
/**
 * Template para página individual de produto WooCommerce
 * Arquivo: single-produto.php
 */
get_header();
?>

<main class="font-aliu">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- HOOK OBRIGATÓRIO: Antes do produto (invisível) -->
        <div style="display: none;">
            <?php do_action('woocommerce_before_single_product'); ?>
        </div>
        
        <!-- Hero Section: Produto com Layout Dividido - REDUZIDO -->
        <section class="pt-16 bg-gradient-to-br from-aliu-primary to-aliu-secondary">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col lg:flex-row items-center gap-6">
                    <!-- Lado Esquerdo: Conteúdo Textual (40%) -->
                    <div class="lg:w-2/5 w-full text-white">
                        <h1 class="text-2xl md:text-3xl font-bold mb-3 uppercase tracking-tight">
                            <?php the_title(); ?>
                        </h1>
                        <p class="text-base mb-4 opacity-90 leading-relaxed">
                            <?php echo get_the_excerpt() ?: 'Descrição premium do produto. Ideal para quem busca estilo, conforto e qualidade excepcional.'; ?>
                        </p>
                        
                        <!-- Preços WooCommerce -->
                        <div class="flex items-center gap-3 mb-4">
                            <?php if (function_exists('wc_get_product')) : ?>
                                <?php 
                                global $product;
                                $product = wc_get_product(get_the_ID());
                                if ($product) :
                                ?>
                                    <span class="text-xl font-bold text-white">
                                        <?php echo $product->get_price_html(); ?>
                                    </span>
                                <?php endif; ?>
                            <?php else : ?>
                                <span class="text-xl font-bold text-white">R$ 99,90</span>
                                <span class="text-sm text-white opacity-70 line-through">R$ 129,90</span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Botões de Ação WooCommerce -->
                        <div class="flex flex-col sm:flex-row gap-2 mb-4">
                            <?php if (function_exists('woocommerce_template_single_add_to_cart')) : ?>
                                <div class="custom-add-to-cart" style="width: 100%;">
                                    <style>
                                        .custom-add-to-cart .single_add_to_cart_button,
                                        .custom-add-to-cart button[type="submit"],
                                        .custom-add-to-cart input[type="submit"] {
                                            background: #FF6B6B !important;
                                            color: white !important;
                                            padding: 0.5rem 1rem !important;
                                            font-size: 0.9rem !important;
                                            font-weight: bold !important;
                                            text-transform: uppercase !important;
                                            border: none !important;
                                            border-radius: 0.5rem !important;
                                            cursor: pointer !important;
                                            transition: all 0.3s ease !important;
                                            display: inline-block !important;
                                            text-decoration: none !important;
                                            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4) !important;
                                            width: 100% !important;
                                            text-align: center !important;
                                            margin: 0 !important;
                                            line-height: 1.5 !important;
                                        }
                                        .custom-add-to-cart .single_add_to_cart_button:hover,
                                        .custom-add-to-cart button[type="submit"]:hover,
                                        .custom-add-to-cart input[type="submit"]:hover {
                                            background: #e55a5a !important;
                                            transform: translateY(-2px) !important;
                                            box-shadow: 0 10px 25px -3px rgba(255, 107, 107, 0.6) !important;
                                            color: white !important;
                                        }
                                        .custom-add-to-cart .quantity input {
                                            background: rgba(255, 255, 255, 0.1) !important;
                                            border: 1px solid rgba(255, 255, 255, 0.3) !important;
                                            color: white !important;
                                            padding: 0.4rem !important;
                                            border-radius: 0.4rem !important;
                                            width: 60px !important;
                                            text-align: center !important;
                                            font-size: 0.8rem !important;
                                            font-weight: 500 !important;
                                        }
                                        .custom-add-to-cart .quantity input:focus {
                                            outline: none !important;
                                            border-color: rgba(255, 255, 255, 0.5) !important;
                                            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.2) !important;
                                        }
                                    </style>
                                    <?php woocommerce_template_single_add_to_cart(); ?>
                                </div>
                            <?php else : ?>
                                <button class="btn-aliu btn-primary text-sm py-2 px-4 mt-1">
                                    ADICIONAR AO CARRINHO
                                </button>
                            <?php endif; ?>
                            <button id="btn-mais-detalhes" class="btn-aliu btn-secondary text-sm py-2 px-4">
                                MAIS DETALHES
                            </button>
                        </div>
                        
                        <!-- Opções de Cores (mantém seu design customizado) -->
                        <div class="flex items-center gap-3">
                            <span class="text-white opacity-90 text-sm" style="margin-right: 10px;">Cores disponíveis:</span>
                            <div class="flex gap-2">
                                <span class="w-8 h-8 rounded-full bg-white border-2 border-white shadow-lg cursor-pointer hover:scale-110 transition-transform"></span>
                                <span class="w-8 h-8 rounded-full bg-gray-300 border-2 border-white shadow-lg cursor-pointer hover:scale-110 transition-transform"></span>
                                <span class="w-8 h-8 rounded-full bg-black border-2 border-white shadow-lg cursor-pointer hover:scale-110 transition-transform"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lado Direito: Imagem do Produto (60%) -->
                    <div class="lg:w-3/5 w-full flex items-center justify-center">
                        <div class="relative">
                            <?php
                            // Primeira tentativa: Imagem WooCommerce
                            $image_id = null;
                            if (function_exists('wc_get_product')) {
                                global $product;
                                $product = wc_get_product(get_the_ID());
                                if ($product) {
                                    $image_id = $product->get_image_id();
                                }
                            }
                            
                            if ($image_id) {
                                // Usar imagem do produto WooCommerce
                                echo wp_get_attachment_image($image_id, 'medium', false, [
                                    'class' => 'rounded-lg shadow-lg max-w-sm w-full object-cover hover:scale-105 transition-transform duration-300',
                                    'alt' => get_the_title()
                                ]);
                            } else {
                                // Fallback: Imagem baseada no título
                                $img = 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80';
                                if (stripos(get_the_title(), 'vestido') !== false) {
                                    $img = 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=400&q=80';
                                } elseif (stripos(get_the_title(), 'moletom') !== false) {
                                    $img = 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80';
                                } elseif (stripos(get_the_title(), 'boné') !== false || stripos(get_the_title(), 'bone') !== false) {
                                    $img = 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80';
                                }
                                ?>
                                <img src="<?php echo $img; ?>" alt="<?php the_title(); ?>" class="rounded-lg shadow-lg max-w-sm w-full object-cover hover:scale-105 transition-transform duration-300">
                                <?php
                            }
                            ?>
                            
                            <!-- Elemento gráfico de texto - REDUZIDO -->
                            <span class="absolute -right-4 top-1/2 -translate-y-1/2 text-3xl font-black text-white opacity-20 select-none rotate-90 tracking-widest pointer-events-none">
                                <?php echo strtoupper(substr(get_the_title(), 0, 4)); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Detalhes do Produto (Oculta inicialmente) -->
        <div id="detalhes-produto" class="hidden">
            <section class="py-12 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300">
                        <?php if (function_exists('woocommerce_output_product_data_tabs')) : ?>
                            <?php woocommerce_output_product_data_tabs(); ?>
                        <?php else : ?>
                            <h2 class="text-2xl font-bold text-aliu-dark mb-6">Detalhes do Produto</h2>
                            <div class="prose max-w-none">
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>

        <!-- HOOK OBRIGATÓRIO: Depois do produto (invisível) -->
        <div style="display: none;">
            <?php do_action('woocommerce_after_single_product'); ?>
        </div>
        
    <?php endwhile; ?>

    <!-- Seção de Produtos (Categorias) - Estilo da Home -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Categorias
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Explore nossas categorias e encontre o produto perfeito para você
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Categoria 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-primary rounded-full flex items-center justify-center mb-6 mx-auto">
                        <span class="text-2xl text-white">👕</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Camisetas
                    </h3>
                    <p class="text-gray-600 text-center mb-6">
                        Camisetas premium com estampas exclusivas e materiais de alta qualidade
                    </p>
                    <div class="text-center">
                        <a href="<?php echo home_url('/camisetas/'); ?>" class="bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors inline-block">
                            Ver Camisetas
                        </a>
                    </div>
                </div>
                
                <!-- Categoria 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-secondary rounded-full flex items-center justify-center mb-6 mx-auto">
                        <span class="text-2xl text-white">🧥</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Moletons
                    </h3>
                    <p class="text-gray-600 text-center mb-6">
                        Moletons confortáveis e estilosos para todos os momentos
                    </p>
                    <div class="text-center">
                        <a href="<?php echo home_url('/casacos/'); ?>" class="bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors inline-block">
                            Ver Moletons
                        </a>
                    </div>
                </div>
                
                <!-- Categoria 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-accent rounded-full flex items-center justify-center mb-6 mx-auto">
                        <span class="text-2xl text-white">🧢</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Acessórios
                    </h3>
                    <p class="text-gray-600 text-center mb-6">
                        Acessórios únicos para complementar seu estilo
                    </p>
                    <div class="text-center">
                        <a href="<?php echo home_url('/bones/'); ?>" class="bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors inline-block">
                            Ver Acessórios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Serviços (Benefícios) - Estilo da Home -->
    <section class="py-16 bg-gradient-to-r from-aliu-primary to-aliu-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Benefícios
                </h2>
                <p class="text-xl text-white opacity-90 max-w-2xl mx-auto">
                    Conheça os diferenciais que fazem da nossa marca a escolha certa
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Benefício 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-primary rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Entrega Rápida
                    </h3>
                    <p class="text-gray-600 text-center">
                        Receba seu produto em poucos dias, com rastreio completo e segurança garantida
                    </p>
                </div>
                
                <!-- Benefício 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-secondary rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Qualidade Premium
                    </h3>
                    <p class="text-gray-600 text-center">
                        Produtos selecionados com materiais de alta qualidade e acabamento perfeito
                    </p>
                </div>
                
                <!-- Benefício 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-aliu-accent rounded-full flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Compra Segura
                    </h3>
                    <p class="text-gray-600 text-center">
                        Ambiente protegido e diversas formas de pagamento para sua comodidade
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// JavaScript para o botão "Mais Detalhes"
document.addEventListener('DOMContentLoaded', function() {
    const btnMaisDetalhes = document.getElementById('btn-mais-detalhes');
    const detalhesProduto = document.getElementById('detalhes-produto');
    
    if (btnMaisDetalhes && detalhesProduto) {
        btnMaisDetalhes.addEventListener('click', function() {
            if (detalhesProduto.classList.contains('hidden')) {
                detalhesProduto.classList.remove('hidden');
                btnMaisDetalhes.textContent = 'MENOS DETALHES';
            } else {
                detalhesProduto.classList.add('hidden');
                btnMaisDetalhes.textContent = 'MAIS DETALHES';
            }
        });
    }
});
</script>

<?php get_footer(); ?>