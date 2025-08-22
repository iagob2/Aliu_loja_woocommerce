<?php
/*
Template Name: Sobre Nós
*/
get_header();
?>

<main class="min-h-screen bg-gray-50">
    <!-- Header da Página -->
    <div class="bg-gradient-to-r from-aliu-primary to-aliu-secondary py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">
                🎨 Sobre a Aliu
            </h1>
            <p class="text-xl text-white/90">
                Revolucionando a moda através da personalização e criatividade
            </p>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Nossa História -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    📖 Nossa História
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-700">
                <p class="text-lg leading-relaxed mb-6">
                    A <strong>Aliu - Peças e Acessórios</strong> nasceu da paixão por moda e tecnologia, com o objetivo de democratizar a personalização de roupas. Somos uma loja virtual inovadora que revoluciona a experiência de compra ao permitir que nossos clientes criem suas próprias estampas personalizadas.
                </p>
                
                <p class="text-lg leading-relaxed mb-6">
                    Combinando criatividade, tecnologia e praticidade, desenvolvemos uma plataforma de e-commerce moderna e intuitiva que coloca o poder da criação nas mãos de cada cliente. Nossa missão é transformar ideias em realidade, uma estampa de cada vez.
                </p>
            </div>
        </div>

        <!-- Nossa Missão -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-3">Nossa Missão</h3>
                <p class="text-gray-600">
                    Democratizar a personalização de moda, permitindo que cada pessoa expresse sua criatividade através de peças únicas e exclusivas.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-aliu-secondary to-aliu-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">👁️</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-3">Nossa Visão</h3>
                <p class="text-gray-600">
                    Ser a referência em moda personalizada online, combinando tecnologia de ponta com criatividade humana.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-aliu-accent to-aliu-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">💎</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-3">Nossos Valores</h3>
                <p class="text-gray-600">
                    Inovação, criatividade, qualidade e compromisso com a satisfação total do cliente em cada experiência.
                </p>
            </div>
        </div>

        <!-- Diferenciais -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    ⚡ Nossos Diferenciais
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">IA Generativa</h4>
                            <p class="text-gray-600">Primeira loja do segmento com inteligência artificial para criação de estampas únicas.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">Personalização Total</h4>
                            <p class="text-gray-600">Liberdade completa para criar estampas através de IA, upload ou desenho manual.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-primary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">Preview Realista</h4>
                            <p class="text-gray-600">Visualização precisa do produto final antes da compra.</p>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-secondary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">Qualidade Garantida</h4>
                            <p class="text-gray-600">Produtos com acabamento profissional e materiais de alta qualidade.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-secondary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">5</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">Interface Intuitiva</h4>
                            <p class="text-gray-600">Experiência de usuário simplificada que democratiza o processo criativo.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-aliu-secondary text-white rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="text-sm font-bold">6</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-aliu-dark mb-2">Sem Limitações</h4>
                            <p class="text-gray-600">Liberdade total de criação sem restrições de design ou estilo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Público-Alvo -->
        <div class="bg-gradient-to-r from-aliu-primary/10 to-aliu-secondary/10 rounded-2xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    👥 Para Quem Fazemos
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-12 h-12 bg-aliu-primary text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-xl">🎨</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Criativos</h4>
                    <p class="text-sm text-gray-600">Pessoas que valorizam expressão pessoal</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-aliu-secondary text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-xl">👔</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Empresas</h4>
                    <p class="text-sm text-gray-600">Uniformes e brindes personalizados</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-aliu-accent text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-xl">🎉</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Eventos</h4>
                    <p class="text-sm text-gray-600">Camisetas para festivais e formatura</p>
                </div>

                <div class="text-center">
                    <div class="w-12 h-12 bg-aliu-primary text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-xl">🎁</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Presentes</h4>
                    <p class="text-sm text-gray-600">Itens únicos para ocasiões especiais</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 