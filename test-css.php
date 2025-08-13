<?php
/**
 * ARQUIVO DE TESTE DO CSS
 * Responsável por: Verificar se o CSS do Tailwind está funcionando
 * 
 * IMPORTANTE: Este arquivo deve ser removido em produção
 */

// Verificar se o WordPress está carregado
if (!defined('ABSPATH')) {
    require_once('../../../wp-load.php');
}

// Verificar se o tema está ativo
$current_theme = wp_get_theme();
echo "<h1>Teste do CSS - Tema: " . $current_theme->get('Name') . "</h1>";

// Verificar se o CSS do Tailwind está sendo carregado
$css_file = get_template_directory() . '/dist/output.css';
if (file_exists($css_file)) {
    echo "<p style='color: green;'>✅ CSS do Tailwind encontrado em: " . $css_file . "</p>";
    echo "<p>Última modificação: " . date('Y-m-d H:i:s', filemtime($css_file)) . "</p>";
    
    // Verificar se as cores customizadas estão no CSS
    $css_content = file_get_contents($css_file);
    if (strpos($css_content, 'bg-aliu-primary') !== false) {
        echo "<p style='color: green;'>✅ Cor aliu-primary encontrada no CSS</p>";
    } else {
        echo "<p style='color: red;'>❌ Cor aliu-primary NÃO encontrada no CSS</p>";
    }
    
    if (strpos($css_content, 'text-aliu-accent') !== false) {
        echo "<p style='color: green;'>✅ Cor text-aliu-accent encontrada no CSS</p>";
    } else {
        echo "<p style='color: red;'>❌ Cor text-aliu-accent NÃO encontrada no CSS</p>";
    }
} else {
    echo "<p style='color: red;'>❌ CSS do Tailwind NÃO encontrado!</p>";
}

// Verificar se as funções do tema estão funcionando
if (function_exists('wp_enqueue_style')) {
    echo "<p style='color: green;'>✅ Função wp_enqueue_style está funcionando</p>";
} else {
    echo "<p style='color: red;'>❌ Função wp_enqueue_style NÃO encontrada</p>";
}

// Verificar se o header pode ser carregado
ob_start();
get_header();
$header_content = ob_get_clean();
if (!empty($header_content)) {
    echo "<p style='color: green;'>✅ Header carregado com sucesso</p>";
} else {
    echo "<p style='color: red;'>❌ Erro ao carregar header</p>";
}

echo "<hr>";
echo "<h2>Teste Visual do CSS:</h2>";

// Testar classes básicas do Tailwind
echo "<div style='margin: 20px; padding: 20px; border: 2px solid #ccc;'>";
echo "<h3>Teste de Classes Básicas:</h3>";
echo "<p class='text-red-500 font-bold'>Este texto deve ser vermelho e negrito (text-red-500 font-bold)</p>";
echo "<p class='text-blue-600 text-xl'>Este texto deve ser azul e maior (text-blue-600 text-xl)</p>";
echo "<p class='bg-gray-200 p-4 rounded'>Este parágrafo deve ter fundo cinza, padding e bordas arredondadas</p>";
echo "</div>";

// Testar classes customizadas do tema
echo "<div style='margin: 20px; padding: 20px; border: 2px solid #ccc;'>";
echo "<h3>Teste de Classes Customizadas do Tema:</h3>";
echo "<p class='bg-aliu-primary text-white p-4 rounded'>Este parágrafo deve ter fundo vermelho do tema (bg-aliu-primary)</p>";
echo "<p class='bg-aliu-secondary text-white p-4 rounded'>Este parágrafo deve ter fundo verde do tema (bg-aliu-secondary)</p>";
echo "<p class='text-aliu-accent font-bold text-xl'>Este texto deve ser azul do tema (text-aliu-accent)</p>";
echo "</div>";

// Testar responsividade
echo "<div style='margin: 20px; padding: 20px; border: 2px solid #ccc;'>";
echo "<h3>Teste de Responsividade:</h3>";
echo "<div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4'>";
echo "<div class='bg-blue-100 p-4 rounded'>Coluna 1</div>";
echo "<div class='bg-green-100 p-4 rounded'>Coluna 2</div>";
echo "<div class='bg-red-100 p-4 rounded'>Coluna 3</div>";
echo "</div>";
echo "</div>";

echo "<hr>";
echo "<h2>Informações do Sistema:</h2>";
echo "<p>WordPress Version: " . get_bloginfo('version') . "</p>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Theme Directory: " . get_template_directory() . "</p>";
echo "<p>Theme URI: " . get_template_directory_uri() . "</p>";
echo "<p>CSS File: " . get_template_directory_uri() . '/dist/output.css</p>';

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
