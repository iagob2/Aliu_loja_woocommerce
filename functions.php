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
    wp_enqueue_style('aliu-tailwind', get_template_directory_uri() . '/dist/output.css', [], filemtime(get_template_directory() . '/dist/output.css'));
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