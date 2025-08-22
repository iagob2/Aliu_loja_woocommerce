<?php
/*
Template Name: Equipe
*/
get_header();
?>

<main class="min-h-screen bg-gray-50">
    <!-- Header da Página -->
    <div class="bg-gradient-to-r from-aliu-primary to-aliu-secondary py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">
                👥 Nossa Equipe
            </h1>
            <p class="text-xl text-white/90">
                Conheça os profissionais apaixonados que fazem a Aliu acontecer
            </p>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Introdução da Equipe -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    🚀 Quem Somos
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-700 text-center">
                <p class="text-lg leading-relaxed">
                    Nossa equipe é composta por profissionais apaixonados por tecnologia, moda e inovação. Trabalhamos juntos para criar uma experiência única e revolucionária no mundo da moda personalizada.
                </p>
            </div>
        </div>

        <!-- Membros da Equipe -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- CEO -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">👨‍💼</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">João Silva</h3>
                <p class="text-aliu-primary font-semibold mb-3">CEO & Fundador</p>
                <p class="text-gray-600 text-sm mb-4">
                    Visionário apaixonado por tecnologia e moda. Lidera a estratégia da empresa e garante que nossa missão seja cumprida.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-primary/10 text-aliu-primary rounded-full text-xs">Estratégia</span>
                    <span class="px-3 py-1 bg-aliu-primary/10 text-aliu-primary rounded-full text-xs">Inovação</span>
                </div>
            </div>

            <!-- CTO -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-secondary to-aliu-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">👨‍💻</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">Maria Santos</h3>
                <p class="text-aliu-secondary font-semibold mb-3">CTO & Desenvolvedora</p>
                <p class="text-gray-600 text-sm mb-4">
                    Especialista em IA e desenvolvimento web. Responsável por toda a tecnologia que torna a personalização possível.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-secondary/10 text-aliu-secondary rounded-full text-xs">IA</span>
                    <span class="px-3 py-1 bg-aliu-secondary/10 text-aliu-secondary rounded-full text-xs">Tecnologia</span>
                </div>
            </div>

            <!-- Designer -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-accent to-aliu-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">🎨</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">Pedro Costa</h3>
                <p class="text-aliu-accent font-semibold mb-3">Designer Criativo</p>
                <p class="text-gray-600 text-sm mb-4">
                    Artista digital e especialista em UX/UI. Cria experiências visuais incríveis e intuitivas para nossos usuários.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-accent/10 text-aliu-accent rounded-full text-xs">Design</span>
                    <span class="px-3 py-1 bg-aliu-accent/10 text-aliu-accent rounded-full text-xs">UX/UI</span>
                </div>
            </div>

            <!-- Marketing -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-primary to-aliu-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">📢</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">Ana Oliveira</h3>
                <p class="text-aliu-primary font-semibold mb-3">Marketing Digital</p>
                <p class="text-gray-600 text-sm mb-4">
                    Especialista em marketing digital e redes sociais. Conecta nossa marca com pessoas criativas ao redor do mundo.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-primary/10 text-aliu-primary rounded-full text-xs">Marketing</span>
                    <span class="px-3 py-1 bg-aliu-primary/10 text-aliu-primary rounded-full text-xs">Redes Sociais</span>
                </div>
            </div>

            <!-- Atendimento -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-secondary to-aliu-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">💬</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">Carlos Lima</h3>
                <p class="text-aliu-secondary font-semibold mb-3">Atendimento ao Cliente</p>
                <p class="text-gray-600 text-sm mb-4">
                    Especialista em experiência do cliente. Garante que cada interação seja positiva e satisfatória.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-secondary/10 text-aliu-secondary rounded-full text-xs">Suporte</span>
                    <span class="px-3 py-1 bg-aliu-secondary/10 text-aliu-secondary rounded-full text-xs">CX</span>
                </div>
            </div>

            <!-- Operações -->
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
                <div class="w-32 h-32 bg-gradient-to-br from-aliu-accent to-aliu-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-4xl">⚙️</span>
                </div>
                <h3 class="text-xl font-bold text-aliu-dark mb-2">Fernanda Rocha</h3>
                <p class="text-aliu-accent font-semibold mb-3">Operações</p>
                <p class="text-gray-600 text-sm mb-4">
                    Gerencia toda a logística e parcerias com fornecedores. Garante que cada pedido seja entregue com qualidade.
                </p>
                <div class="flex justify-center space-x-3">
                    <span class="px-3 py-1 bg-aliu-accent/10 text-aliu-accent rounded-full text-xs">Logística</span>
                    <span class="px-3 py-1 bg-aliu-accent/10 text-aliu-accent rounded-full text-xs">Qualidade</span>
                </div>
            </div>
        </div>

        <!-- Valores da Equipe -->
        <div class="bg-gradient-to-r from-aliu-primary/10 to-aliu-secondary/10 rounded-2xl p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    💎 Nossos Valores
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 bg-aliu-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Foco no Cliente</h4>
                    <p class="text-sm text-gray-600">Cada decisão é tomada pensando na satisfação do cliente</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-aliu-secondary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🚀</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Inovação Constante</h4>
                    <p class="text-sm text-gray-600">Sempre buscamos novas formas de melhorar nossa plataforma</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-aliu-accent text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🤝</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Trabalho em Equipe</h4>
                    <p class="text-sm text-gray-600">Acreditamos que juntos somos mais fortes</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-aliu-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">✨</span>
                    </div>
                    <h4 class="font-semibold text-aliu-dark mb-2">Qualidade</h4>
                    <p class="text-sm text-gray-600">Não aceitamos nada menos que a excelência</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <h3 class="text-2xl font-bold text-aliu-dark mb-4">
                🚀 Quer Fazer Parte da Nossa Equipe?
            </h3>
            <p class="text-gray-600 mb-6">
                Estamos sempre em busca de talentos apaixonados por inovação e criatividade.
            </p>
            <button class="bg-gradient-to-r from-aliu-primary to-aliu-secondary text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                Enviar Currículo
            </button>
        </div>
    </div>
</main>

<?php get_footer(); ?>
