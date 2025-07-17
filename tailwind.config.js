/**
 * TAILWIND CSS CONFIGURATION
 * Responsável por: Build do CSS + PurgeCSS + Tema customizado Aliu
 * Depende de: 
 * - Tailwind CSS 3.3.5+
 * - PostCSS 8.5.6+
 * - Autoprefixer 10.4.21+
 * 
 * IMPORTANTE: Sempre rodar 'npm run build:css' após alterações
 */

/** @type {import('tailwindcss').Config} */
module.exports = {
  // ARQUIVOS MONITORADOS PARA PURGECSS
  // Inclui todos os arquivos PHP do tema WordPress para garantir que classes dinâmicas não sejam removidas
  content: [
    './**/*.php',        // Todos os templates PHP do tema
    './src/**/*.css',    // Arquivos CSS fonte
    './src/**/*.js',     // Arquivos JavaScript (se houver)
  ],
  
  // SAFELIST - CLASSES QUE NUNCA DEVEM SER REMOVIDAS
  // Protege classes dinâmicas do WordPress (menus, widgets, shortcodes)
  safelist: [
    // Classes de menu WordPress (geradas dinamicamente)
    'current-menu-item',
    'current_page_item',
    'current-menu-parent',
    'current-menu-ancestor',
    'menu-item',
    'menu-item-has-children',
    'sub-menu',
    
    // Classes de interação (hover, group)
    'group',
    'group-hover',
    'cart',
    'dropdown',
    
    // Classes responsivas
    'hidden',
    'block',
    'md:block',
    'md:hidden',
    'lg:block',
    'lg:hidden',
    
    // Classes de cores e tipografia
    'text-red-500',
    'text-gray-800',
    'font-bold',
    'font-semibold',
    'font-medium',
    'font-sans',
    
    // Classes de layout e espaçamento
    'bg-white',
    'shadow',
    'shadow-lg',
    'shadow-xl',
    'rounded-md',
    'transition-all',
    'transition-colors',
    'duration-300',
    'space-x-6',
    'space-x-8',
    'items-center',
    'justify-between',
    'flex',
    'absolute',
    'relative',
    'z-50',
    'w-full',
    'min-w-[10rem]',
    'px-4',
    'py-2',
    'pt-20',
    'pt-16',
    'mt-2',
    'mt-4',
    'mx-auto',
    'max-w-7xl',
    'px-8',
    'h-20',
  ],
  
  // TEMA CUSTOMIZADO - CORES E FONTES DO ALIU
  theme: {
    extend: {
      // PALETA DE CORES DO TEMA ALIU
      colors: {
        'aliu-primary': '#FF6B6B',    // Vermelho principal da marca
        'aliu-secondary': '#4ECDC4',  // Verde-azulado secundário
        'aliu-accent': '#45B7D1',     // Azul de destaque
        'aliu-dark': '#2D3748',       // Cinza escuro para textos
        'aliu-light': '#F7FAFC',      // Cinza claro para fundos
      },
      
      // FONTE PRINCIPAL DO TEMA
      fontFamily: {
        'aliu': ['Poppins', 'sans-serif'], // Fonte Google Fonts
      },
    },
  },
  
  // PLUGINS ADICIONAIS (se necessário no futuro)
  plugins: [],
}

