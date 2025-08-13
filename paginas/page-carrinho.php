<?php
/*
Template Name: Carrinho
*/
get_header();
?>

<main class="min-h-screen">
 
   

    <!-- Conteúdo Principal do Carrinho -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php 
            // Verificar se WooCommerce está ativo
            if (!function_exists('WC')) {
                ?>
                <div class="text-center py-16">
                    <div class="max-w-md mx-auto">
                        <div class="w-24 h-24 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-aliu-dark mb-4">WooCommerce não está ativo</h3>
                        <p class="text-gray-600 mb-8">Para usar o carrinho, o plugin WooCommerce precisa estar ativo e configurado.</p>
                        <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-primary">
                            Ver Produtos
                        </a>
                    </div>
                </div>
                <?php
            } else {
                try {
                    // Verificar se o carrinho existe
                    if (!WC()->cart) {
                        throw new Exception('Carrinho não disponível');
                    }
                    
                    // Verificar se o carrinho está vazio
                    if (WC()->cart->is_empty()) {
                        ?>
                        <!-- Carrinho Vazio -->
                        <div class="text-center py-16">
                            <div class="max-w-md mx-auto">
                                
                                <h3 class="text-2xl font-bold text-aliu-dark mb-4">Seu carrinho está vazio</h3>
                                <p class="text-gray-600 mb-8">Que tal dar uma olhada nos nossos produtos incríveis?</p>
                                <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-primary">
                                    Ver Produtos
                                </a>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <!-- Carrinho com Itens - Layout 70/30 -->
                        <div class="grid grid-cols-1 lg:grid-cols-10 gap-8">
                            <!-- Itens do Carrinho - 70% -->
                            <div class="lg:col-span-7">
                                <div class="bg-white rounded-2xl shadow-lg p-8">
                                    <h2 class="text-2xl font-bold text-aliu-dark mb-8 flex items-center">
                                        <svg class="w-5 h-5 mr-3 text-aliu-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                        </svg>
                                        Itens no Carrinho
                                    </h2>
                                    
                                    <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                                    <?php
                                    // Loop dos itens do carrinho
                                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                        $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                        $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                                        
                                        if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                            ?>
                                            <div class="cart-item border-b border-gray-200 pb-6 mb-6 last:border-b-0 last:pb-0">
                                                <div class="flex items-start space-x-4">
                                                    <!-- Imagem do Produto -->
                                                    <div class="w-20 h-20 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-lg overflow-hidden flex-shrink-0">
                                                        <?php
                                                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                                                        if (!$product_permalink) {
                                                            echo $thumbnail;
                                                        } else {
                                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                                                        }
                                                        ?>
                                                    </div>
                                                    
                                                    <!-- Informações do Produto -->
                                                    <div class="flex-1 min-w-0">
                                                        <h3 class="text-lg font-semibold text-aliu-dark mb-1 truncate">
                                                            <?php
                                                            if (!$product_permalink) {
                                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key));
                                                            } else {
                                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="hover:text-aliu-primary">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                                            }
                                                            ?>
                                                        </h3>
                                                        <p class="text-sm text-gray-500 mb-2">
                                                            <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?>
                                                        </p>
                                                        
                                                        <!-- Controles de Quantidade -->
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center space-x-2">
                                                                <label class="text-sm font-medium text-gray-700">Qtd:</label>
                                                                <?php
                                                                if ($_product->is_sold_individually()) {
                                                                    $min_quantity = 1;
                                                                    $max_quantity = 1;
                                                                } else {
                                                                    $min_quantity = 0;
                                                                    $max_quantity = $_product->get_max_purchase_quantity();
                                                                }
                                                                
                                                                $product_quantity = woocommerce_quantity_input(
                                                                    array(
                                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                                        'input_value'  => $cart_item['quantity'],
                                                                        'max_value'    => $max_quantity,
                                                                        'min_value'    => $min_quantity,
                                                                        'product_name' => $_product->get_name(),
                                                                        'classes'      => 'w-16 px-2 py-1 border border-gray-300 rounded text-center quantity-input',
                                                                        'data_key'     => $cart_item_key,
                                                                    ),
                                                                    $_product,
                                                                    false
                                                                );
                                                                
                                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);
                                                                ?>
                                                            </div>
                                                            
                                                            <!-- Preço Total e Botão Remover -->
                                                            <div class="flex items-center space-x-4">
                                                                <span class="font-bold text-lg text-aliu-primary item-subtotal" data-key="<?php echo $cart_item_key; ?>">
                                                                    <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
                                                                </span>
                                                                
                                                                <button type="button" class="text-red-500 hover:text-red-700 transition-colors p-1" onclick="window.location.href='<?php echo esc_url(wc_get_cart_remove_url($cart_item_key)); ?>'">
                                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                    <!-- Cupom de Desconto -->
                                    <div class="mt-8 p-6 bg-gradient-to-r from-aliu-light to-gray-50 rounded-xl border border-gray-200">
                                        <h3 class="font-semibold mb-4 text-aliu-dark flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-aliu-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                                            </svg>
                                            Cupom de Desconto
                                        </h3>
                                        <?php if (wc_coupons_enabled()) : ?>
                                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3 items-end">
                                                <input type="text" name="coupon_code" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-aliu-primary focus:ring-2 focus:ring-aliu-primary/20 transition-all" placeholder="Digite seu cupom">
                                                <button type="submit" class="px-6 py-3 bg-aliu-dark text-white rounded-lg hover:bg-gray-800 transition-colors font-semibold transform -translate-y-1 mg-2" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>">
                                                    Aplicar
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Botões de Ação -->
                                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                                        <button type="submit" class="px-6 py-3 bg-aliu-primary text-white rounded-lg hover:bg-aliu-secondary transition-colors font-semibold" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>">
                                            Atualizar Carrinho
                                        </button>
                                        <?php do_action('woocommerce_cart_actions'); ?>
                                        <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Resumo do Pedido - 30% -->
                            <div class="lg:col-span-3">
                                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-6">
                                    <h2 class="text-xl font-bold text-aliu-dark mb-6 flex items-center">
                                        <svg class="w-4 h-4 mr-2 text-aliu-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Resumo do Pedido
                                    </h2>
                                    
                                    <div class="space-y-3 mb-6">
                                        <div class="flex justify-between text-gray-600 py-2">
                                            <span class="font-medium">Subtotal</span>
                                            <span class="font-semibold cart-subtotal">
                                                <?php echo WC()->cart->get_cart_subtotal(); ?>
                                            </span>
                                        </div>
                                        
                                        <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
                                            <div class="flex justify-between text-gray-600 py-2">
                                                <span class="font-medium">Cupom: <?php echo esc_html($code); ?></span>
                                                <span class="text-green-600 font-semibold">
                                                    -<?php echo wc_price(WC()->cart->get_coupon_discount_amount($code)); ?>
                                                </span>
                                            </div>
                                        <?php endforeach; ?>
                                        
                                        <?php if (WC()->cart->needs_shipping()) : ?>
                                            <div class="flex justify-between text-gray-600 py-2">
                                                <span class="font-medium">Frete</span>
                                                <span class="text-green-600 font-semibold">
                                                    <?php 
                                                    if (WC()->cart->show_shipping()) {
                                                        echo 'Calculando...';
                                                    } else {
                                                        echo 'Grátis';
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <hr class="border-gray-200 my-3">
                                        <div class="flex justify-between text-lg font-bold text-aliu-dark py-2">
                                            <span>Total</span>
                                            <span class="cart-total"><?php echo WC()->cart->get_total(); ?></span>
                                        </div>
                                    </div>

                                    <!-- Informações de Frete -->
                                    <?php if (WC()->cart->needs_shipping()) : ?>
                                        <div class="mb-6 p-3 bg-green-50 rounded-lg border border-green-200">
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-green-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span class="text-xs text-green-700 font-medium">Frete Grátis em Compras Acima de R$ 100</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Botão Finalizar -->
                                    <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="block w-full bg-gradient-to-r from-aliu-primary to-aliu-secondary text-white font-bold py-3 rounded-lg hover:opacity-90 transition-all transform hover:scale-105 mb-3 shadow-lg text-center text-sm">
                                        Finalizar Compra
                                    </a>

                                    <!-- Continuar Comprando -->
                                    <a href="<?php echo home_url('/produtos/'); ?>" class="block w-full border-2 border-gray-300 text-gray-700 font-semibold py-2 rounded-lg hover:bg-gray-50 transition-colors text-center text-sm">
                                        Continuar Comprando
                                    </a>

                                    <!-- Segurança -->
                                    <div class="mt-8 text-center">
                                        <div class="flex justify-center items-center space-x-2 text-gray-400">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 1L3 5V11C3 16.55 6.84 21.74 12 23C17.16 21.74 21 16.55 21 11V5L12 1Z"/>
                                            </svg>
                                            <span class="text-xs">Compra 100% Segura</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } catch (Exception $e) {
                    ?>
                    <div class="text-center py-16">
                        <div class="max-w-md mx-auto">
                            <div class="w-24 h-24 mx-auto mb-6 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-aliu-dark mb-4">Erro no carrinho</h3>
                            <p class="text-gray-600 mb-8">Ocorreu um erro ao carregar o carrinho. Tente novamente.</p>
                            <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-primary">
                                Ver Produtos
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>
</main>

<!-- JavaScript para atualização automática dos preços -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Função simples para atualizar preços
    function updatePrices() {
        const cartForm = document.querySelector('.woocommerce-cart-form');
        if (cartForm) {
            // Mostrar feedback visual
            const feedback = document.createElement('div');
            feedback.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: #f472b6;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                z-index: 9999;
                font-weight: bold;
            `;
            feedback.innerHTML = '🔄 Atualizando...';
            document.body.appendChild(feedback);
            
            // Remover feedback após 2 segundos
            setTimeout(() => feedback.remove(), 2000);
            
            // Submeter formulário
            cartForm.submit();
        }
    }
    
    // Adicionar event listeners para inputs de quantidade
    document.querySelectorAll('.quantity-input').forEach(function(input) {
        // Event listener para mudança de valor
        input.addEventListener('change', function() {
            updatePrices();
        });
        
        // Event listener para quando o input perde o foco
        input.addEventListener('blur', function() {
            updatePrices();
        });
        
        // Event listener para tecla Enter
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                updatePrices();
            }
        });
    });
    
    // Também atualizar quando o usuário clica no botão "Atualizar Carrinho"
    const updateButton = document.querySelector('button[name="update_cart"]');
    if (updateButton) {
        updateButton.addEventListener('click', function() {
            // Feedback visual para o botão
            this.style.opacity = '0.7';
            setTimeout(() => this.style.opacity = '1', 1000);
        });
    }
});
</script>

<?php get_footer(); ?> 