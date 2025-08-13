<?php
/**
 * HEADER.PHP - CABEÇALHO PRINCIPAL DO TEMA ALIU
 * Responsável por: Estrutura HTML do header + Menu WordPress + Logo
 * Depende de: 
 * - functions.php (wp_nav_menu)
 * - Google Fonts (Poppins)
 * - CSS customizado (menu sticky, dropdowns)
 * 
 * IMPORTANTE: Classe 'menu' é obrigatória para funcionalidade sticky
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    
    <!-- GOOGLE FONTS - POPPINS -->
    <!-- Responsável por: Fonte principal do tema Aliu -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class('bg-white'); ?>>
    
    <!-- ============================================================================
         HEADER PRINCIPAL - MENU STICKY
         ============================================================================ -->
    
    <!-- 
     * HEADER COM MENU STICKY
     * Responsável por: Menu fixo no topo + Logo + Navegação
     * Depende de: Classe 'menu' para CSS sticky funcionar
     * 
     * IMPORTANTE: A classe 'menu' é essencial para position: sticky
     -->
    <header class="menu w-full bg-white shadow-lg">
        
        <!-- CONTAINER DO HEADER -->
        <!-- Responsável por: Centralização + Flexbox + Padding -->
        <div class="max-w-7xl mx-auto px-8 flex justify-between items-center py-4 mg-bottom-0">
            
            <!-- LOGO ALIU -->
            <!-- Responsável por: Logo da marca + Link para home -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold logo-gradient">Aliu</a>
            
            <!-- MENU DE NAVEGAÇÃO WORDPRESS -->
            <!-- 
             * MENU PRINCIPAL DINÂMICO
             * Responsável por: Links editáveis pelo painel WordPress
             * Depende de: functions.php (register_nav_menus + filtros)
             * 
             * IMPORTANTE: Classes Tailwind são aplicadas via filtros no functions.php
             -->
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-principal',  // Localização registrada no functions.php
                'container' => false,                  // Remove div container padrão
                'menu_class' => 'flex space-x-8 text-gray-800 font-medium font-sans', // Classes Tailwind
                'link_before' => '',                   // Sem conteúdo antes do link
                'link_after' => '',                    // Sem conteúdo depois do link
                'fallback_cb' => false,                // Não mostra menu padrão se não existir
            ]);
            ?>
        </div>
    </header>
    
    <!-- CONTEÚDO PRINCIPAL -->
    <!-- Responsável por: Início do conteúdo da página -->
    <div> 