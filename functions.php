<?php
/**
 * FUNCTIONS.PHP - CONFIGURAÇÕES PRINCIPAIS DO TEMA ALIU
 * Responsável por: Hooks WordPress + Menu + Tailwind + Otimizações
 * Depende de: 
 * - WordPress 5.0+
 * - Tailwind CSS 3.3.5+
 * 
 * IMPORTANTE: Sempre testar após alterações em hooks
 */

// ============================================================================
// ENQUEUE DE ESTILOS E SCRIPTS
// ============================================================================

/**
 * CARREGA O CSS DO TAILWIND BUILDADO
 * Responsável por: Incluir o CSS compilado do Tailwind no frontend
 * Depende de: Arquivo dist/output.css existir
 * 
 * IMPORTANTE: Usa filemtime() para cache busting automático
 */
add_action('wp_enqueue_scripts', function() {
    $css_file = get_template_directory() . '/dist/output.css';
    if (file_exists($css_file)) {
        wp_enqueue_style('aliu-tailwind', get_template_directory_uri() . '/dist/output.css', [], filemtime($css_file));
    }
});

// ============================================================================
// CONFIGURAÇÃO DE MENUS
// ============================================================================

/**
 * REGISTRA O MENU PRINCIPAL
 * Responsável por: Criar localização 'menu-principal' no painel WordPress
 * Depende de: wp_nav_menu() nos templates
 * 
 * IMPORTANTE: Deve ser registrado antes de ser usado
 */
add_action('after_setup_theme', function() {
    register_nav_menus([
        'menu-principal' => 'Menu Principal',
    ]);
});

// ============================================================================
// FILTROS DO TAILWIND PARA MENU WORDPRESS
// ============================================================================

/**
 * ADICIONA CLASSES TAILWIND AO SUBMENU
 * Responsável por: Estilizar dropdowns do menu com Tailwind
 * Depende de: wp_nav_menu() com theme_location 'menu-principal'
 * 
 * IMPORTANTE: Classes devem estar na safelist do tailwind.config.js
 */
add_filter('nav_menu_submenu_css_class', function($classes, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'menu-principal') {
        $classes[] = 'absolute left-0 top-full mt-4 min-w-[10rem] bg-white shadow-xl rounded-md py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50';
    }
    return $classes;
}, 10, 3);

/**
 * ADICIONA CLASSES TAILWIND AOS ITENS DO MENU PRINCIPAL
 * Responsável por: Habilitar group-hover para dropdowns
 * Depende de: wp_nav_menu() com theme_location 'menu-principal'
 * 
 * IMPORTANTE: Apenas para itens de nível 0 (menu principal)
 */
add_filter('nav_menu_css_class', function($classes, $item, $args, $depth) {
    if (isset($args->theme_location) && $args->theme_location === 'menu-principal' && $depth === 0) {
        $classes[] = 'relative group';
    }
    return $classes;
}, 10, 4);

// ============================================================================
// OTIMIZAÇÕES E SEGURANÇA
// ============================================================================

/**
 * REMOVE VERSÃO DO WORDPRESS DO HEADER
 * Responsável por: Ocultar versão do WordPress por segurança
 * Depende de: Nenhuma dependência específica
 */
remove_action('wp_head', 'wp_generator');

/**
 * DESABILITA O EDITOR DE ARQUIVOS PELO PAINEL
 * Responsável por: Prevenir edição de arquivos via painel WordPress
 * Depende de: Nenhuma dependência específica
 * 
 * IMPORTANTE: Apenas para produção, remover em desenvolvimento se necessário
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * REMOVE EMOJIS DO WORDPRESS
 * Responsável por: Desabilitar emojis nativos do WordPress
 * Depende de: Nenhuma dependência específica
 * 
 * IMPORTANTE: Melhora performance, mas remove emojis nativos
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles'); 

/**
 * REGISTRA OS MENUS DO RODAPÉ
 * Responsável por: Criar localizações para os menus do rodapé no painel WordPress
 * Depende de: wp_nav_menu() no footer.php
 * 
 * IMPORTANTE: Cada seção do rodapé tem seu próprio menu para melhor organização
 */
function aliu_register_menus() {
    register_nav_menus([
        'footer-links-uteis' => __('Links Úteis - Rodapé'),
        'footer-redes-sociais' => __('Redes Sociais - Rodapé'),
        'footer-legal' => __('Legal - Rodapé'),
    ]);
}
add_action('after_setup_theme', 'aliu_register_menus');

/**
 * WALKER PERSONALIZADO PARA OS MENUS DO RODAPÉ
 * Responsável por: Manter as classes CSS corretas para o layout do rodapé
 * Depende de: wp_nav_menu() com theme_location do rodapé
 * 
 * IMPORTANTE: Mantém o layout visual exato do rodapé original
 * Links de redes sociais abrem automaticamente em nova aba
 */
class Aliu_Footer_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li>';
        
        // Lista de domínios de redes sociais
        $dominios_sociais = array(
            'facebook.com',
            'instagram.com',
            'twitter.com',
            'linkedin.com',
            'youtube.com',
            'tiktok.com',
            'pinterest.com',
            'whatsapp.com',
            'x.com' // Twitter/X novo domínio
        );
        
        // Verifica se é link de rede social
        $is_rede_social = false;
        foreach ($dominios_sociais as $dominio) {
            if (strpos($item->url, $dominio) !== false) {
                $is_rede_social = true;
                break;
            }
        }
        
        // Adiciona target="_blank" apenas para redes sociais
        $target = $is_rede_social ? ' target="_blank" rel="noopener noreferrer"' : '';
        
        $output .= '<a href="' . $item->url . '" class="text-gray-300 hover:text-aliu-accent transition-colors"' . $target . '>';
        $output .= $item->title;
        $output .= '</a>';
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
} 

/**
 * SUPORTE AO WOOCOMMERCE
 * Responsável por: Habilitar funcionalidades do WooCommerce no tema
 * Depende de: Plugin WooCommerce ativo
 * 
 * IMPORTANTE: Garante que o tema seja compatível com WooCommerce
 */
add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
});

/**
 * GARANTIR QUE WOOCOMMERCE SEJA CARREGADO
 * Responsável por: Verificar se WooCommerce está ativo antes de usar suas funções
 * Depende de: Plugin WooCommerce ativo
 */
add_action('init', function() {
    if (!class_exists('WooCommerce')) {
        return;
    }
    
    // Garantir que o WooCommerce seja inicializado
    if (!did_action('woocommerce_init')) {
        do_action('woocommerce_init');
    }
});

/**
 * REMOVE ESTILOS PADRÃO DO WOOCOMMERCE
 * Responsável por: Usar apenas nossos estilos Tailwind
 * Depende de: WooCommerce ativo
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * ADICIONA SUPORTE A IMAGENS DE PRODUTO
 * Responsável por: Garantir que imagens de produto sejam exibidas corretamente
 * Depende de: WooCommerce ativo
 */
add_theme_support('post-thumbnails');

/**
 * PERSONALIZA O TEMPLATE DE PRODUTO WOOCOMMERCE
 * Responsável por: Usar nosso template personalizado
 * Depende de: WooCommerce ativo
 */
add_filter('woocommerce_locate_template', function($template, $template_name, $template_path) {
    if ($template_name === 'single-product.php') {
        $custom_template = get_template_directory() . '/single-produto.php';
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }
    return $template;
}, 10, 3);

/**
 * ADICIONA CLASSES CSS PERSONALIZADAS AOS ELEMENTOS WOOCOMMERCE
 * Responsável por: Integrar elementos WooCommerce com nosso design
 * Depende de: WooCommerce ativo
 */
add_filter('woocommerce_product_single_add_to_cart_text', function($text) {
    return 'ADICIONAR AO CARRINHO';
});

add_filter('woocommerce_product_add_to_cart_text', function($text) {
    return 'ADICIONAR AO CARRINHO';
});

/**
 * PERSONALIZA O BOTÃO DE ADICIONAR AO CARRINHO
 * Responsável por: Aplicar nosso estilo ao botão
 * Depende de: WooCommerce ativo
 */
add_filter('woocommerce_loop_add_to_cart_link', function($html, $product) {
    return str_replace('button', 'btn-aliu btn-primary', $html);
}, 10, 2);

/**
 * ESTILOS PERSONALIZADOS PARA CARRINHO E CHECKOUT
 * Responsável por: Estilos específicos para páginas de carrinho e checkout
 * Depende de: WooCommerce ativo
 */
add_action('wp_head', function() {
    if (is_cart() || is_checkout() || is_page('carrinho')) {
        ?>
        <style>
            /* Garantir que o main ocupe toda a altura da tela */
            main.min-h-screen {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            
            /* Garantir que o footer apareça no final */
            footer {
                margin-top: auto;
            }
            
            /* Layout 70/30 para carrinho */
            .lg\:grid-cols-10 {
                display: grid;
                grid-template-columns: repeat(10, 1fr);
                gap: 2rem;
            }
            
            .lg\:col-span-7 {
                grid-column: span 7;
            }
            
            .lg\:col-span-3 {
                grid-column: span 3;
            }
            
            /* Layout responsivo para carrinho */
            @media (max-width: 1023px) {
                .lg\:grid-cols-10 {
                    grid-template-columns: 1fr;
                }
                .lg\:col-span-7,
                .lg\:col-span-3 {
                    grid-column: span 1;
                }
            }
            
            /* Estilos para itens do carrinho */
            .woocommerce-cart-form .cart-item {
                transition: all 0.3s ease;
            }
            
            .woocommerce-cart-form .cart-item:hover {
                background-color: #f8fafc;
                border-radius: 0.5rem;
                padding: 0.5rem;
                margin: -0.5rem;
            }
            
            /* Input de quantidade personalizado */
            .woocommerce-cart-form .quantity input[type="number"] {
                width: 4rem;
                padding: 0.25rem 0.5rem;
                border: 1px solid #d1d5db;
                border-radius: 0.25rem;
                text-align: center;
                font-size: 0.875rem;
                background-color: white;
                transition: all 0.3s ease;
            }
            
            .woocommerce-cart-form .quantity input[type="number"]:focus {
                outline: none;
                border-color: #f472b6;
                box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
            }
            
            /* Botão remover personalizado */
            .woocommerce-cart-form .cart-item button[onclick*="remove"] {
                transition: all 0.2s ease;
            }
            
            .woocommerce-cart-form .cart-item button[onclick*="remove"]:hover {
                background-color: #fef2f2;
                border-radius: 0.25rem;
                transform: scale(1.1);
            }
            
            /* Imagens dos produtos */
            .woocommerce-cart-form .cart-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 0.5rem;
            }
            
            /* Resumo do pedido */
            .woocommerce-cart-form .cart_totals {
                position: sticky;
                top: 1.5rem;
            }
            
            /* Tamanhos de ícones padronizados */
            .w-4.h-4 {
                width: 1rem;
                height: 1rem;
            }
            
            .w-5.h-5 {
                width: 1.25rem;
                height: 1.25rem;
            }
            
            /* Botão Aplicar Cupom - Posicionamento melhorado */
            .woocommerce-cart-form button[name="apply_coupon"] {
                transform: translateY(-4px);
                transition: all 0.3s ease;
                margin-left: 0.5rem;
            }
            
            .woocommerce-cart-form button[name="apply_coupon"]:hover {
                transform: translateY(-4px) scale(1.02);
            }
            
            /* Container do cupom com alinhamento melhorado */
            .woocommerce-cart-form .flex.items-end {
                align-items: flex-end;
            }
            
            /* Segurança - Movido para baixo */
            .woocommerce-cart-form + div .mt-8 {
                margin-top: 2rem;
            }
            
            /* Melhorar visibilidade dos inputs de quantidade */
            .quantity-input {
                transition: all 0.3s ease;
                border: 1px solid #d1d5db;
            }
            
            .quantity-input:focus {
                outline: none;
                border-color: #f472b6;
                box-shadow: 0 0 0 3px rgba(244, 114, 182, 0.1);
            }
            
            .quantity-input:hover {
                border-color: #f472b6;
            }
            
            /* Botões do tema */
            .btn-aliu {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0.75rem 1.5rem;
                border-radius: 0.5rem;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                cursor: pointer;
                border: none;
                font-size: 0.875rem;
            }
            
            .btn-primary {
                background: linear-gradient(135deg, #f472b6 0%, #06b6d4 100%);
                color: white;
            }
            
            .btn-primary:hover {
                opacity: 0.9;
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(244, 114, 182, 0.3);
            }
            
            .btn-secondary {
                background: white;
                color: #374151;
                border: 2px solid #d1d5db;
            }
            
            .btn-secondary:hover {
                background-color: #f9fafb;
                border-color: #9ca3af;
            }
            
            /* Melhorias para mobile */
            @media (max-width: 768px) {
                .woocommerce-cart-form .cart-item {
                    padding: 1rem 0;
                }
                
                .woocommerce-cart-form .cart-item .flex {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 1rem;
                }
                
                .woocommerce-cart-form .cart-item .flex > div:last-child {
                    width: 100%;
                    justify-content: space-between;
                }
                
                .woocommerce-cart-form .quantity input[type="number"] {
                    width: 5rem;
                }
                
                /* Ajuste do botão aplicar cupom no mobile */
                .woocommerce-cart-form button[name="apply_coupon"] {
                    transform: none;
                }
                
                .woocommerce-cart-form button[name="apply_coupon"]:hover {
                    transform: scale(1.02);
                }
            }
            
            /* Truncate para nomes longos */
            .truncate {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            
            /* Melhor espaçamento */
            .space-y-3 > * + * {
                margin-top: 0.75rem;
            }
            
            .space-y-4 > * + * {
                margin-top: 1rem;
            }
            
            /* Garantir que o grid funcione corretamente */
            .grid {
                display: grid;
            }
            
            .gap-8 {
                gap: 2rem;
            }
            
            /* Feedback visual para atualização */
            .updating-feedback {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #f472b6;
                color: white;
                padding: 0.75rem 1rem;
                border-radius: 0.5rem;
                font-size: 0.875rem;
                z-index: 1000;
                transform: translateX(100%);
                transition: transform 0.3s ease;
            }
            
            .updating-feedback.show {
                transform: translateX(0);
            }
        </style>
        <?php
    }
}); 