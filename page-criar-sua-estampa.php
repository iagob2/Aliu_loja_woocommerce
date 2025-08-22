<?php
/*
Template Name: Criar sua Estampa
*/
get_header();
?>

<main class="min-h-screen bg-gray-50">
    

    <!-- Navegação por Abas - Design Melhorado -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 py-8 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Barra de Progresso -->
            <div class="flex justify-center mb-6">
                <div class="flex items-center space-x-4">
                    <div id="progress-1" class="w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300">1</div>

                    <div id="line-1" class="w-16 h-1 bg-aliu-primary/30 rounded-full transition-all duration-300"></div>

                    <div id="progress-2" class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300">2</div>

                    <div id="line-2" class="w-16 h-1 bg-gray-300 rounded-full transition-all duration-300"></div>

                    <div id="progress-3" class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300">3</div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1: Criar Estampa (ATIVO) -->
                <button id="tab-criar" class="tab-button active bg-white rounded-2xl shadow-xl border-4 border-aliu-primary p-6 text-center transform scale-105 hover:scale-110 transition-all duration-300 hover:shadow-2xl">
                    <div class="flex flex-col items-center space-y-4">
                        <div class="card-icon w-16 h-16 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-full flex items-center justify-center">
                            <span class="text-3xl">🎨</span>
                        </div>
                        <div>
                            <div class="card-title font-bold text-xl text-aliu-primary mb-2">Solte sua Criatividade</div>
                            <div class="card-subtitle text-sm text-gray-600 mb-3">Transforme sua ideia em arte única</div>
                            <div class="card-progress w-full h-2 bg-gradient-to-r from-aliu-primary to-aliu-secondary rounded-full"></div>
                            <div class="card-stage text-xs text-aliu-primary font-semibold mt-2">ETAPA 1 DE 3</div>
                        </div>
                    </div>
                </button>

                <!-- Card 2: Minhas Estampas (PRÓXIMO) -->
                <button id="tab-estampas" class="tab-button bg-white rounded-2xl shadow-lg border-2 border-gray-200 p-4 text-center hover:shadow-xl transition-all duration-300 hover:border-aliu-primary/30">
                    <div class="flex flex-col items-center space-y-3">
                        <div class="card-icon w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">📋</span>
                        </div>
                        <div>
                            <div class="card-title font-bold text-lg text-gray-700 mb-1">Acompanhe seu Progresso</div>
                            <div class="card-subtitle text-xs text-gray-500 mb-2">Veja aprovações e status</div>
                            <div class="card-progress w-full h-1 bg-gray-200 rounded-full"></div>
                            <div class="card-stage text-xs text-gray-400 font-medium mt-1">ETAPA 2 DE 3</div>
                        </div>
                    </div>
                </button>

                <!-- Card 3: Criar Produtos (BLOQUEADO) -->
                <button id="tab-produtos" class="tab-button bg-gray-50 rounded-2xl shadow-md border-2 border-gray-200 p-4 text-center opacity-75 hover:opacity-100 transition-all duration-300">
                    <div class="flex flex-col items-center space-y-3">
                        <div class="card-icon w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🛍️</span>
                        </div>
                        <div>
                            <div class="card-title font-bold text-lg text-gray-500 mb-1">Monte sua Loja</div>
                            <div class="card-subtitle text-xs text-gray-400 mb-2">Escolha camisetas, canecas...</div>
                            <div class="card-progress w-full h-1 bg-gray-200 rounded-full"></div>
                            <div class="card-stage text-xs text-gray-400 font-medium mt-1">ETAPA 3 DE 3</div>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Conteúdo das Abas -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- ABA 1: CRIAR ESTAMPA -->
        <div id="content-criar" class="tab-content active">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                        🎨 Crie sua Estampa Única
                    </h2>
                    <p class="text-xl text-gray-600">
                        Descreva sua ideia ou envie sua própria arte
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <!-- Campo de Descrição -->
                    <div class="mb-8">
                        <label class="block text-gray-700 font-semibold mb-4 text-lg">
                            📝 Descreva sua estampa ideal
                        </label>
                        <textarea 
                            class="w-full h-56 p-6 border-2 border-gray-200 rounded-xl focus:border-aliu-primary focus:ring-2 focus:ring-aliu-primary/20 transition-all resize-none text-lg"
                            placeholder="Ex: gato fofo com óculos, frase motivacional 'Seja a mudança', logo da minha banda de rock, desenho minimalista de montanhas..."
                        ></textarea>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm text-gray-500">Máximo 500 caracteres</span>
                            <span class="text-sm text-gray-400">0/500</span>
                        </div>
                    </div>

                    <!-- Separador -->
                    <div class="flex items-center my-8">
                        <div class="flex-1 border-t border-gray-300"></div>
                        <span class="px-4 text-gray-500 font-medium">OU</span>
                        <div class="flex-1 border-t border-gray-300"></div>
                    </div>

                    <!-- Botão de Upload -->
                    <div class="mb-8">
                        <label class="block text-gray-700 font-semibold mb-4 text-lg">
                            📁 Envie sua própria arte
                        </label>
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center hover:border-aliu-primary transition-colors cursor-pointer" id="upload-area">
                            <input type="file" id="file-input" class="hidden" accept="image/png,image/jpeg,image/svg+xml" />
                            <div class="w-16 h-16 bg-aliu-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-aliu-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                Enviar sua Arte
                            </h3>
                            <p class="text-gray-600 mb-4 text-base">
                                PNG, JPG, SVG até 10MB
                            </p>
                            <button class="bg-aliu-primary text-white px-6 py-3 rounded-xl font-semibold hover:bg-aliu-primary/90 transition-colors text-base mb-2">
                                Escolher Arquivo
                            </button>
                            
                            <!-- Preview da imagem -->
                            <div id="image-preview" class="hidden mt-4">
                                <img id="preview-img" class="max-w-full h-32 object-contain rounded-lg mx-auto" />
                                <p id="file-name" class="text-sm text-gray-600 mt-2"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Botão de Criação -->
                    <button class="w-full bg-gradient-to-r from-aliu-primary to-aliu-secondary text-white py-4 rounded-xl font-bold text-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        🚀 Enviar para Análise
                    </button>
                </div>
            </div>
        </div>

        <!-- ABA 2: MINHAS ESTAMPAS -->
        <div id="content-estampas" class="tab-content hidden">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                        📋 Suas Estampas
                    </h2>
                    <p class="text-xl text-gray-600">
                        Acompanhe o status das suas criações
                    </p>
                </div>

                <!-- Filtros de Status -->
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button class="px-6 py-3 bg-green-100 text-green-700 rounded-full font-semibold hover:bg-green-200 transition-colors">
                        ✅ Aprovadas (2)
                    </button>
                    <button class="px-6 py-3 bg-yellow-100 text-yellow-700 rounded-full font-semibold hover:bg-yellow-200 transition-colors">
                        ⏳ Em Análise (1)
                    </button>
                    <button class="px-6 py-3 bg-red-100 text-red-700 rounded-full font-semibold hover:bg-red-200 transition-colors">
                        ❌ Precisa Ajustes (1)
                    </button>
                </div>

                <!-- Grid de Estampas -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Estampa 1 - Aprovada -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-green-400 to-green-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">🎨</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Gato com Óculos</h3>
                        <p class="text-gray-500 mb-3">Criada em 15/12/2024</p>
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm font-medium">
                                ✅ Aprovada
                            </span>
                        </div>
                        <p class="text-gray-600 mb-4">Estampa aprovada e disponível para todos os produtos</p>
                        <button class="w-full bg-aliu-primary text-white py-3 rounded-xl font-semibold hover:bg-aliu-primary/90 transition-colors">
                            Ver Produtos
                        </button>
                    </div>

                    <!-- Estampa 2 - Em Análise -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">💭</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Frase Motivacional</h3>
                        <p class="text-gray-500 mb-3">Criada em 14/12/2024</p>
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-medium">
                                ⏳ Em Análise
                            </span>
                        </div>
                        <p class="text-gray-600 mb-4">Nossa equipe está analisando sua estampa</p>
                        <button class="w-full bg-gray-100 text-gray-500 py-3 rounded-xl font-semibold" disabled>
                            Aguardando...
                        </button>
                    </div>

                    <!-- Estampa 3 - Rejeitada -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-red-400 to-red-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">⚠️</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Logo da Banda</h3>
                        <p class="text-gray-500 mb-3">Criada em 13/12/2024</p>
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">
                                ❌ Precisa Ajustes
                            </span>
                        </div>
                        <p class="text-gray-600 mb-4">Resolução muito baixa. Envie em alta qualidade.</p>
                        <button class="w-full bg-aliu-primary text-white py-3 rounded-xl font-semibold hover:bg-aliu-primary/90 transition-colors">
                            Editar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABA 3: LOJA/PRODUTOS -->
        <div id="content-produtos" class="tab-content hidden">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                        🛍️ Criar Produtos Personalizados
                    </h2>
                    <p class="text-xl text-gray-600">
                        Escolha sua estampa aprovada e personalize seus produtos
                    </p>
                </div>

                <!-- Seleção de Estampa -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <label class="block text-gray-600 font-medium mb-2 text-sm">
                        🎨 Escolha sua estampa aprovada:
                    </label>
                    <select class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all text-sm">
                        <option>Selecione uma estampa...</option>
                        <option>Gato com Óculos (Aprovada)</option>
                        <option>Frase Motivacional (Em Análise)</option>
                    </select>
                </div>

                <!-- Produtos Disponíveis -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    <!-- Camiseta -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">👕</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Camiseta</h3>
                        <p class="text-gray-500 mb-3">A partir de R$ 45</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Básica</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Oversized</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Babylook</span>
                        </div>
                        <button class="w-full bg-aliu-primary text-white py-3 rounded-xl font-semibold hover:bg-aliu-primary/90 transition-colors">
                            Personalizar
                        </button>
                    </div>

                    <!-- Caneca -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">☕</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Caneca</h3>
                        <p class="text-gray-500 mb-3">A partir de R$ 25</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">330ml</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">500ml</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Premium</span>
                        </div>
                        <button class="w-full bg-aliu-secondary text-white py-3 rounded-xl font-semibold hover:bg-aliu-secondary/90 transition-colors">
                            Personalizar
                        </button>
                    </div>

                    <!-- Casaco -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="w-full h-48 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl mb-4 flex items-center justify-center">
                            <span class="text-white text-4xl">🧥</span>
                        </div>
                        <h3 class="font-bold text-xl text-gray-900 mb-2">Casaco</h3>
                        <p class="text-gray-500 mb-3">A partir de R$ 89</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Moletom</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Hoodie</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">Casaco</span>
                        </div>
                        <button class="w-full bg-aliu-accent text-white py-3 rounded-xl font-semibold hover:bg-aliu-accent/90 transition-colors">
                            Personalizar
                        </button>
                    </div>
                </div>

                <!-- Carrinho -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-aliu-dark mb-6">
                        🛒 Meu Carrinho
                    </h3>
                    
                    <div class="space-y-4 mb-6">
                        <!-- Item 1 -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <span class="text-gray-600 text-lg">👕</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Camiseta "Gato com Óculos"</h4>
                                    <p class="text-sm text-gray-500">Tamanho M • Cor Branca</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-aliu-primary">R$ 45,00</p>
                                <button class="text-red-500 text-sm hover:text-red-700">Remover</button>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-xl">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <span class="text-gray-600 text-lg">☕</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Caneca "Gato com Óculos"</h4>
                                    <p class="text-sm text-gray-500">330ml • Cor Preta</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-bold text-aliu-primary">R$ 25,00</p>
                                <button class="text-red-500 text-sm hover:text-red-700">Remover</button>
                            </div>
                        </div>
                    </div>

                    <!-- Total e Finalizar -->
                    <div class="border-t border-gray-200 pt-6">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-xl font-semibold text-gray-900">Total:</span>
                            <span class="text-2xl font-bold text-aliu-primary">R$ 70,00</span>
                        </div>
                        <button class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 rounded-xl font-bold text-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            🚀 Finalizar Compra
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript para Navegação das Abas e Upload de Imagens -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    const fileInput = document.getElementById('file-input');
    const uploadArea = document.getElementById('upload-area');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const fileName = document.getElementById('file-name');
    const textarea = document.querySelector('textarea');
    const charCounter = document.querySelector('.text-gray-400');

    // Navegação das Abas
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.remove('scale-105', 'shadow-xl', 'border-4', 'border-aliu-primary');
                btn.classList.add('scale-100');
                
                // Reset all cards to inactive state
                const icon = btn.querySelector('.card-icon');
                const title = btn.querySelector('.card-title');
                const subtitle = btn.querySelector('.card-subtitle');
                const progressBar = btn.querySelector('.card-progress');
                const stageText = btn.querySelector('.card-stage');
                
                if (icon) {
                    icon.className = 'card-icon w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center';
                }
                if (title) {
                    title.className = 'card-title font-bold text-lg text-gray-700 mb-1';
                }
                if (subtitle) {
                    subtitle.className = 'card-subtitle text-xs text-gray-500 mb-2';
                }
                if (progressBar) {
                    progressBar.className = 'card-progress w-full h-1 bg-gray-200 rounded-full';
                }
                if (stageText) {
                    stageText.className = 'card-stage text-xs text-gray-400 font-medium mt-1';
                }
            });
            
            tabContents.forEach(content => {
                content.classList.add('hidden');
                content.classList.remove('active');
            });

            // Reset all progress indicators to gray
            for (let i = 1; i <= 3; i++) {
                const progressEl = document.getElementById(`progress-${i}`);
                const lineEl = document.getElementById(`line-${i}`);
                
                if (progressEl) {
                    progressEl.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                }
                if (lineEl) {
                    lineEl.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                }
            }

            // Add active class to clicked button
            button.classList.add('active', 'scale-105', 'shadow-xl', 'border-4', 'border-aliu-primary');

            // Update clicked card to active state
            const activeIcon = button.querySelector('.card-icon');
            const activeTitle = button.querySelector('.card-title');
            const activeSubtitle = button.querySelector('.card-subtitle');
            const activeProgressBar = button.querySelector('.card-progress');
            const activeStageText = button.querySelector('.card-stage');
            
            if (activeIcon) {
                activeIcon.className = 'card-icon w-16 h-16 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-full flex items-center justify-center';
            }
            if (activeTitle) {
                activeTitle.className = 'card-title font-bold text-xl text-aliu-primary mb-2';
            }
            if (activeSubtitle) {
                activeSubtitle.className = 'card-subtitle text-sm text-gray-600 mb-3';
            }
            if (activeProgressBar) {
                activeProgressBar.className = 'card-progress w-full h-2 bg-gradient-to-r from-aliu-primary to-aliu-secondary rounded-full';
            }
            if (activeStageText) {
                activeStageText.className = 'card-stage text-xs text-aliu-primary font-semibold mt-2';
            }

            // Update progress indicators based on which tab was clicked
            const tabId = button.id;
            if (tabId === 'tab-criar') {
                // Apenas etapa 1 ativa
                const progress1 = document.getElementById('progress-1');
                const line1 = document.getElementById('line-1');
                const progress2 = document.getElementById('progress-2');
                const line2 = document.getElementById('line-2');
                const progress3 = document.getElementById('progress-3');
                
                if (progress1) progress1.className = 'w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line1) line1.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress2) progress2.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line2) line2.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress3) progress3.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
            } else if (tabId === 'tab-estampas') {
                // Apenas etapa 2 ativa
                const progress1 = document.getElementById('progress-1');
                const line1 = document.getElementById('line-1');
                const progress2 = document.getElementById('progress-2');
                const line2 = document.getElementById('line-2');
                const progress3 = document.getElementById('progress-3');
                
                if (progress1) progress1.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line1) line1.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress2) progress2.className = 'w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line2) line2.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress3) progress3.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
            } else if (tabId === 'tab-produtos') {
                // Apenas etapa 3 ativa
                const progress1 = document.getElementById('progress-1');
                const line1 = document.getElementById('line-1');
                const progress2 = document.getElementById('progress-2');
                const line2 = document.getElementById('line-2');
                const progress3 = document.getElementById('progress-3');
                
                if (progress1) progress1.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line1) line1.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress2) progress2.className = 'w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
                if (line2) line2.className = 'w-16 h-1 bg-gray-300 rounded-full transition-all duration-300';
                if (progress3) progress3.className = 'w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center font-bold text-sm transition-all duration-300';
            }

            // Show corresponding content
            const targetId = button.id.replace('tab-', 'content-');
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.remove('hidden');
                targetContent.classList.add('active');
            }
        });
    });

    // Upload de Imagens
    uploadArea.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            // Validar tipo de arquivo
            const validTypes = ['image/png', 'image/jpeg', 'image/svg+xml'];
            if (!validTypes.includes(file.type)) {
                alert('Por favor, selecione apenas arquivos PNG, JPG ou SVG.');
                return;
            }

            // Validar tamanho (10MB)
            const maxSize = 10 * 1024 * 1024; // 10MB em bytes
            if (file.size > maxSize) {
                alert('O arquivo é muito grande. Máximo 10MB permitido.');
                return;
            }

            // Mostrar preview
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                fileName.textContent = file.name;
                imagePreview.classList.remove('hidden');
                
                // Adicionar borda verde para indicar sucesso
                uploadArea.classList.add('border-green-500');
                uploadArea.classList.remove('border-gray-300');
            };
            reader.readAsDataURL(file);
        }
    });

    // Contador de caracteres
    textarea.addEventListener('input', (e) => {
        const length = e.target.value.length;
        charCounter.textContent = `${length}/500`;
        
        if (length > 500) {
            charCounter.classList.add('text-red-500');
        } else {
            charCounter.classList.remove('text-red-500');
        }
    });

    // Drag and Drop
    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('border-aliu-primary', 'bg-aliu-primary/5');
    });

    uploadArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('border-aliu-primary', 'bg-aliu-primary/5');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('border-aliu-primary', 'bg-aliu-primary/5');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            fileInput.dispatchEvent(new Event('change'));
        }
    });
});
</script>

<style>
.tab-button.active {
    border-color: #3B82F6 !important;
    color: #3B82F6;
    background-color: white;
    transform: scale(1.05);
}

.tab-button:hover {
    transform: scale(1.02);
}

.tab-button.active:hover {
    transform: scale(1.1);
}

.tab-content.active {
    display: block;
}

.tab-content {
    display: none;
}

/* Transições suaves para mudanças de cor */
.tab-button, #progress-1, #progress-2, #progress-3, #line-1, #line-2 {
    transition: all 0.3s ease-in-out;
}

/* Animação de entrada para os cards */
@keyframes slideInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.tab-button {
    animation: slideInUp 0.6s ease-out;
}

.tab-button:nth-child(1) { animation-delay: 0.1s; }
.tab-button:nth-child(2) { animation-delay: 0.2s; }
.tab-button:nth-child(3) { animation-delay: 0.3s; }
</style>

<?php get_footer(); ?>
