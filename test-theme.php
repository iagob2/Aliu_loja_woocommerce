<?php
/**
 * ARQUIVO DE TESTE DO TEMA ALIU
 * Responsável por: Verificar se todas as funcionalidades estão funcionando
 * 
 * IMPORTANTE: Este arquivo deve ser removido em produção
 */

// Verificar se o WordPress está carregado
if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

// Verificar se o tema está ativo
$current_theme = wp_get_theme();
echo "<h1>Teste do Tema: " . $current_theme->get('Name') . "</h1>";

// Verificar se o CSS do Tailwind está sendo carregado
$css_file = get_template_directory() . '/dist/output.css';
if (file_exists($css_file)) {
    echo "<p style='color: green;'>✅ CSS do Tailwind encontrado em: " . $css_file . "</p>";
    echo "<p>Última modificação: " . date('Y-m-d H:i:s', filemtime($css_file)) . "</p>";
} else {
    echo "<p style='color: red;'>❌ CSS do Tailwind NÃO encontrado!</p>";
}

// Verificar se as funções do tema estão funcionando
if (function_exists('aliu_register_menus')) {
    echo "<p style='color: green;'>✅ Função aliu_register_menus está funcionando</p>";
} else {
    echo "<p style='color: red;'>❌ Função aliu_register_menus NÃO encontrada</p>";
}

// Verificar se o WooCommerce está ativo
if (class_exists('WooCommerce')) {
    echo "<p style='color: green;'>✅ WooCommerce está ativo</p>";
} else {
    echo "<p style='color: orange;'>⚠️ WooCommerce NÃO está ativo</p>";
}

// Verificar se os menus estão registrados
$menus = get_nav_menu_locations();
if (!empty($menus)) {
    echo "<p style='color: green;'>✅ Menus registrados:</p>";
    foreach ($menus as $location => $menu_id) {
        echo "<p>  - $location: " . wp_get_nav_menu_object($menu_id)->name . "</p>";
    }
} else {
    echo "<p style='color: orange;'>⚠️ Nenhum menu registrado</p>";
}

// Verificar se o header e footer podem ser carregados
ob_start();
get_header();
$header_content = ob_get_clean();
if (!empty($header_content)) {
    echo "<p style='color: green;'>✅ Header carregado com sucesso</p>";
} else {
    echo "<p style='color: red;'>❌ Erro ao carregar header</p>";
}

ob_start();
get_footer();
$footer_content = ob_get_clean();
if (!empty($footer_content)) {
    echo "<p style='color: green;'>✅ Footer carregado com sucesso</p>";
} else {
    echo "<p style='color: red;'>❌ Erro ao carregar footer</p>";
}

echo "<hr>";
echo "<h2>Informações do Sistema:</h2>";
echo "<p>WordPress Version: " . get_bloginfo('version') . "</p>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Theme Directory: " . get_template_directory() . "</p>";
echo "<p>Theme URI: " . get_template_directory_uri() . "</p>";

// Verificar se há erros no log
$error_log = ini_get('error_log');
if ($error_log && file_exists($error_log)) {
    echo "<p>Error Log: " . $error_log . "</p>";
    $recent_errors = file_get_contents($error_log);
    if ($recent_errors) {
        echo "<h3>Erros Recentes:</h3>";
        echo "<pre style='background: #f5f5f5; padding: 10px; max-height: 200px; overflow-y: auto;'>";
        echo htmlspecialchars(substr($recent_errors, -1000));
        echo "</pre>";
    }
}
?>
