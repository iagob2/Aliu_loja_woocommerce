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
  content: [
    './**/*.php',        // Todos os templates PHP do tema
    './src/**/*.css',    // Arquivos CSS fonte
    './src/**/*.js',     // Arquivos JavaScript (se houver)
  ],
  
  // SAFELIST - CLASSES QUE NUNCA DEVEM SER REMOVIDAS
  safelist: [
    // Classes de menu WordPress
    'current-menu-item',
    'current_page_item',
    'current-menu-parent',
    'current-menu-ancestor',
    'menu-item',
    'menu-item-has-children',
    'sub-menu',
    
    // Classes de interação
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
    'sm:flex-row',
    'md:flex-row',
    'lg:flex-row',
    'sm:px-6',
    'lg:px-8',
    'md:text-2xl',
    'md:text-3xl',
    'md:text-4xl',
    'md:text-6xl',
    'md:grid-cols-2',
    'md:grid-cols-3',
    'lg:grid-cols-3',
    'lg:grid-cols-10',
    'xl:grid-cols-4',
    
    // Classes de cores
    'text-red-500',
    'text-gray-800',
    'text-gray-900',
    'text-gray-600',
    'text-white',
    'text-aliu-primary',
    'text-aliu-secondary',
    'text-aliu-accent',
    'text-aliu-dark',
    'text-aliu-light',
    'text-indigo-600',
    'text-green-600',
    'text-green-700',
    'text-red-600',
    'text-red-700',
    
    // Classes de fonte
    'font-bold',
    'font-semibold',
    'font-medium',
    'font-sans',
    'font-aliu',
    
    // Classes de layout
    'bg-white',
    'bg-gray-50',
    'bg-gray-100',
    'bg-slate-50',
    'bg-aliu-primary',
    'bg-aliu-secondary',
    'bg-aliu-accent',
    'bg-aliu-dark',
    'bg-aliu-light',
    'bg-transparent',
    'bg-gradient-to-br',
    'bg-gradient-to-r',
    'from-aliu-primary',
    'to-aliu-secondary',
    
    // Classes de sombra
    'shadow',
    'shadow-lg',
    'shadow-xl',
    'shadow-2xl',
    'shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)]',
    
    // Classes de borda
    'rounded-md',
    'rounded-lg',
    'rounded-xl',
    'rounded-2xl',
    'rounded-full',
    'border',
    'border-2',
    'border-b',
    'border-r',
    'border-t',
    'border-aliu-primary',
    'border-gray-200',
    'border-gray-300',
    'border-gray-700',
    'border-green-200',
    'border-white',
    
    // Classes de transição
    'transition-all',
    'transition-colors',
    'transition-shadow',
    'transition-transform',
    'duration-300',
    'duration-200',
    'duration-500',
    
    // Classes de espaçamento
    'space-x-6',
    'space-x-8',
    'space-y-2',
    'space-y-3',
    'space-y-4',
    
    // Classes de flexbox
    'flex',
    'flex-col',
    'flex-wrap',
    'items-center',
    'items-start',
    'items-end',
    'justify-center',
    'justify-between',
    
    // Classes de posicionamento
    'absolute',
    'relative',
    'sticky',
    'z-50',
    'z-100',
    
    // Classes de dimensões
    'w-full',
    'w-80',
    'w-20',
    'w-16',
    'w-12',
    'w-6',
    'w-5',
    'w-4',
    'h-full',
    'h-20',
    'h-16',
    'h-12',
    'h-8',
    'h-6',
    'h-5',
    'h-4',
    'min-w-0',
    'min-w-[10rem]',
    'min-h-screen',
    
    // Classes de max-width
    'max-w-2xl',
    'max-w-3xl',
    'max-w-4xl',
    'max-w-7xl',
    'max-w-md',
    'max-w-sm',
    'max-w-none',
    
    // Classes de padding
    'px-1',
    'px-1.5',
    'px-2',
    'px-3',
    'px-4',
    'px-6',
    'px-8',
    'py-0',
    'py-0.5',
    'py-1',
    'py-2',
    'py-3',
    'py-4',
    'py-6',
    'py-8',
    'py-12',
    'py-16',
    'py-20',
    'pt-8',
    'pt-16',
    'pt-20',
    'pb-6',
    
    // Classes de margin
    'mt-1',
    'mt-2',
    'mt-4',
    'mt-8',
    'mt-12',
    'mb-0',
    'mb-0.5',
    'mb-1',
    'mb-2',
    'mb-3',
    'mb-4',
    'mb-6',
    'mb-8',
    'mb-12',
    'mb-16',
    'mx-auto',
    'my-3',
    'mr-2',
    'mr-3',
    
    // Classes de grid
    'grid',
    'grid-cols-1',
    'grid-cols-2',
    'grid-cols-3',
    'grid-cols-10',
    'gap-2',
    'gap-3',
    'gap-4',
    'gap-6',
    'gap-8',
    
    // Classes de transformação
    'transform',
    'hover:transform',
    'hover:-translate-y-1',
    'hover:-translate-y-2',
    'hover:scale-105',
    'hover:scale-110',
    'hover:translate-y-1',
    'hover:translate-y-2',
    
    // Classes de hover
    'hover:bg-aliu-primary',
    'hover:bg-aliu-secondary',
    'hover:bg-gray-100',
    'hover:bg-gray-50',
    'hover:bg-gray-800',
    'hover:bg-red-600',
    'hover:bg-white',
    'hover:text-aliu-accent',
    'hover:text-aliu-primary',
    'hover:text-indigo-600',
    'hover:text-red-500',
    'hover:text-red-700',
    'hover:text-white',
    'hover:shadow-xl',
    'hover:shadow-2xl',
    'hover:border-gray-400',
    
    // Classes de focus
    'focus:border-aliu-primary',
    'focus:outline-none',
    'focus:ring-2',
    'focus:ring-aliu-primary',
    'focus:ring-aliu-primary/20',
    
    // Classes de estado
    'opacity-0',
    'opacity-20',
    'opacity-70',
    'opacity-90',
    'invisible',
    'visible',
    'pointer-events-none',
    'pointer-events-all',
    
    // Classes de texto
    'text-center',
    'text-2xl',
    'text-3xl',
    'text-4xl',
    'text-base',
    'text-lg',
    'text-sm',
    'text-xl',
    'text-xs',
    'leading-relaxed',
    'tracking-tight',
    'tracking-widest',
    'uppercase',
    'line-through',
    
    // Classes de cursor
    'cursor-pointer',
    'select-none',
    
    // Classes de overflow
    'overflow-hidden',
    'truncate',
    
    // Classes de aspect ratio
    'aspect-square',
    
    // Classes de object fit
    'object-cover',
    
    // Classes de backdrop
    'backdrop-blur',
    
    // Classes de animação
    'animate-soft-pulse',
    'animate-shake',
    'animate-fade-in-up',
    
    // Classes de ring
    'ring-2',
    'ring-aliu-primary',
    'ring-aliu-primary/20',
    
    // Classes de blur
    'blur',
    
    // Classes de outline
    'outline',
    
    // Classes de progress
    'progress',
    
    // Classes de dialog
    'dialog',
    
    // Classes de summary
    'summary',
    
    // Classes de fieldset
    'fieldset',
    
    // Classes de legend
    'legend',
    
    // Classes de menu
    'menu',
    
    // Classes de ol
    'ol',
    
    // Classes de ul
    'ul',
    
    // Classes de li
    'li',
    
    // Classes de dt
    'dt',
    
    // Classes de dd
    'dd',
    
    // Classes de dl
    'dl',
    
    // Classes de figure
    'figure',
    
    // Classes de blockquote
    'blockquote',
    
    // Classes de pre
    'pre',
    
    // Classes de code
    'code',
    
    // Classes de kbd
    'kbd',
    
    // Classes de samp
    'samp',
    
    // Classes de small
    'small',
    
    // Classes de sub
    'sub',
    
    // Classes de sup
    'sup',
    
    // Classes de abbr
    'abbr',
    
    // Classes de hr
    'hr',
    
    // Classes de table
    'table',
    
    // Classes de button
    'button',
    
    // Classes de input
    'input',
    
    // Classes de select
    'select',
    
    // Classes de textarea
    'textarea',
    
    // Classes de optgroup
    'optgroup',
    
    // Classes de audio
    'audio',
    
    // Classes de canvas
    'canvas',
    
    // Classes de embed
    'embed',
    
    // Classes de iframe
    'iframe',
    
    // Classes de img
    'img',
    
    // Classes de object
    'object',
    
    // Classes de svg
    'svg',
    
    // Classes de video
    'video',
    
    // Classes de a
    'a',
    
    // Classes de b
    'b',
    
    // Classes de strong
    'strong',
    
    // Classes de em
    'em',
    
    // Classes de i
    'i',
    
    // Classes de mark
    'mark',
    
    // Classes de del
    'del',
    
    // Classes de ins
    'ins',
    
    // Classes de s
    's',
    
    // Classes de u
    'u',
    
    // Classes de time
    'time',
    
    // Classes de cite
    'cite',
    
    // Classes de q
    'q',
    
    // Classes de dfn
    'dfn',
    
    // Classes de var
    'var',
    
    // Classes de samp
    'samp',
    
    // Classes de kbd
    'kbd',
    
    // Classes de ruby
    'ruby',
    
    // Classes de rt
    'rt',
    
    // Classes de rp
    'rp',
    
    // Classes de bdi
    'bdi',
    
    // Classes de bdo
    'bdo',
    
    // Classes de span
    'span',
    
    // Classes de div
    'div',
    
    // Classes de p
    'p',
    
    // Classes de h1
    'h1',
    
    // Classes de h2
    'h2',
    
    // Classes de h3
    'h3',
    
    // Classes de h4
    'h4',
    
    // Classes de h5
    'h5',
    
    // Classes de h6
    'h6',
    
    // Classes de article
    'article',
    
    // Classes de section
    'section',
    
    // Classes de nav
    'nav',
    
    // Classes de aside
    'aside',
    
    // Classes de header
    'header',
    
    // Classes de footer
    'footer',
    
    // Classes de main
    'main',
    
    // Classes de address
    'address',
    
    // Classes de details
    'details',
    
    // Classes de figcaption
    'figcaption',
    
    // Classes de caption
    'caption',
    
    // Classes de colgroup
    'colgroup',
    
    // Classes de col
    'col',
    
    // Classes de tbody
    'tbody',
    
    // Classes de thead
    'thead',
    
    // Classes de tfoot
    'tfoot',
    
    // Classes de tr
    'tr',
    
    // Classes de td
    'td',
    
    // Classes de th
    'th',
    
    // Classes de form
    'form',
    
    // Classes de label
    'label',
    
    // Classes de fieldset
    'fieldset',
    
    // Classes de legend
    'legend',
    
    // Classes de datalist
    'datalist',
    
    // Classes de option
    'option',
    
    // Classes de optgroup
    'optgroup',
    
    // Classes de meter
    'meter',
    
    // Classes de progress
    'progress',
    
    // Classes de output
    'output',
    
    // Classes de canvas
    'canvas',
    
    // Classes de map
    'map',
    
    // Classes de area
    'area',
    
    // Classes de track
    'track',
    
    // Classes de source
    'source',
    
    // Classes de picture
    'picture',
    
    // Classes de param
    'param',
    
    // Classes de embed
    'embed',
    
    // Classes de object
    'object',
    
    // Classes de iframe
    'iframe',
    
    // Classes de video
    'video',
    
    // Classes de audio
    'audio',
    
    // Classes de source
    'source',
    
    // Classes de track
    'track',
    
    // Classes de map
    'map',
    
    // Classes de area
    'area',
    
    // Classes de svg
    'svg',
    
    // Classes de path
    'path',
    
    // Classes de circle
    'circle',
    
    // Classes de ellipse
    'ellipse',
    
    // Classes de line
    'line',
    
    // Classes de polyline
    'polyline',
    
    // Classes de polygon
    'polygon',
    
    // Classes de rect
    'rect',
    
    // Classes de text
    'text',
    
    // Classes de tspan
    'tspan',
    
    // Classes de textPath
    'textPath',
    
    // Classes de use
    'use',
    
    // Classes de g
    'g',
    
    // Classes de defs
    'defs',
    
    // Classes de symbol
    'symbol',
    
    // Classes de marker
    'marker',
    
    // Classes de pattern
    'pattern',
    
    // Classes de linearGradient
    'linearGradient',
    
    // Classes de radialGradient
    'radialGradient',
    
    // Classes de stop
    'stop',
    
    // Classes de filter
    'filter',
    
    // Classes de feBlend
    'feBlend',
    
    // Classes de feColorMatrix
    'feColorMatrix',
    
    // Classes de feComponentTransfer
    'feComponentTransfer',
    
    // Classes de feComposite
    'feComposite',
    
    // Classes de feConvolveMatrix
    'feConvolveMatrix',
    
    // Classes de feDiffuseLighting
    'feDiffuseLighting',
    
    // Classes de feDisplacementMap
    'feDisplacementMap',
    
    // Classes de feDropShadow
    'feDropShadow',
    
    // Classes de feFlood
    'feFlood',
    
    // Classes de feGaussianBlur
    'feGaussianBlur',
    
    // Classes de feImage
    'feImage',
    
    // Classes de feMerge
    'feMerge',
    
    // Classes de feMergeNode
    'feMergeNode',
    
    // Classes de feMorphology
    'feMorphology',
    
    // Classes de feOffset
    'feOffset',
    
    // Classes de feSpecularLighting
    'feSpecularLighting',
    
    // Classes de feTile
    'feTile',
    
    // Classes de feTurbulence
    'feTurbulence',
    
    // Classes de feDistantLight
    'feDistantLight',
    
    // Classes de fePointLight
    'fePointLight',
    
    // Classes de feSpotLight
    'feSpotLight',
    
    // Classes de feFuncA
    'feFuncA',
    
    // Classes de feFuncR
    'feFuncR',
    
    // Classes de feFuncG
    'feFuncG',
    
    // Classes de feFuncB
    'feFuncB',
    
    // Classes de feFuncRGBA
    'feFuncRGBA',
    
    // Classes de feFuncRGB
    'feFuncRGB',
    
    // Classes de feFuncL
    'feFuncL',
    
    // Classes de feFuncAlpha
    'feFuncAlpha',
    
    // Classes de feFuncRed
    'feFuncRed',
    
    // Classes de feFuncGreen
    'feFuncGreen',
    
    // Classes de feFuncBlue
    'feFuncBlue',
    
    // Classes de feFuncLightness
    'feFuncLightness'
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
