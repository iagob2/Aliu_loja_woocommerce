<?php
/*
Template Name: Contato
*/
get_header();
?>

<main class="min-h-screen bg-gray-50">
    <!-- Header da Página -->
    <div class="bg-gradient-to-r from-aliu-primary to-aliu-secondary py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold text-white mb-4">
                📞 Entre em Contato
            </h1>
            <p class="text-xl text-white/90">
                Estamos aqui para ajudar! Entre em contato conosco
            </p>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <!-- Informações de Contato -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
            
            <!-- Formulário de Contato -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-aliu-dark mb-4">
                        💬 Envie sua Mensagem
                    </h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary rounded-full"></div>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nome *</label>
                            <input type="text" class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Sobrenome *</label>
                            <input type="text" class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all" required>
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">E-mail *</label>
                        <input type="email" class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Telefone</label>
                        <input type="tel" class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Assunto *</label>
                        <select class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all" required>
                            <option value="">Selecione um assunto...</option>
                            <option value="duvida">Dúvida sobre Produtos</option>
                            <option value="personalizacao">Personalização de Estampas</option>
                            <option value="pedido">Status do Pedido</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Mensagem *</label>
                        <textarea rows="5" class="w-full p-3 border border-gray-200 rounded-lg focus:border-aliu-primary focus:ring-1 focus:ring-aliu-primary/20 transition-all resize-none" placeholder="Digite sua mensagem aqui..." required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-aliu-primary to-aliu-secondary text-white py-3 rounded-lg font-semibold hover:shadow-lg transition-all duration-300">
                        📤 Enviar Mensagem
                    </button>
                </form>
            </div>

            <!-- Informações de Contato -->
            <div class="space-y-8">
                <!-- Contatos Diretos -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-bold text-aliu-dark mb-6">
                        📞 Contatos Diretos
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-aliu-primary/10 rounded-full flex items-center justify-center">
                                <span class="text-aliu-primary text-xl">📧</span>
                            </div>
                            <div>
                                <p class="font-semibold text-aliu-dark">E-mail</p>
                                <p class="text-gray-600">contato@aliu.com.br</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-aliu-secondary/10 rounded-full flex items-center justify-center">
                                <span class="text-aliu-secondary text-xl">📱</span>
                            </div>
                            <div>
                                <p class="font-semibold text-aliu-dark">WhatsApp</p>
                                <p class="text-gray-600">(11) 99999-9999</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-aliu-accent/10 rounded-full flex items-center justify-center">
                                <span class="text-aliu-accent text-xl">💬</span>
                            </div>
                            <div>
                                <p class="font-semibold text-aliu-dark">Chat Online</p>
                                <p class="text-gray-600">Disponível 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Horário de Atendimento -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-bold text-aliu-dark mb-6">
                        🕒 Horário de Atendimento
                    </h3>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Segunda a Sexta</span>
                            <span class="font-semibold text-aliu-dark">8h às 18h</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Sábado</span>
                            <span class="font-semibold text-aliu-dark">9h às 15h</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Domingo</span>
                            <span class="font-semibold text-aliu-dark">Fechado</span>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-green-50 rounded-lg">
                        <p class="text-green-700 text-sm">
                            <strong>💡 Dica:</strong> Para dúvidas urgentes, use nosso chat online disponível 24/7!
                        </p>
                    </div>
                </div>

                <!-- Redes Sociais -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h3 class="text-xl font-bold text-aliu-dark mb-6">
                        🌐 Redes Sociais
                    </h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <span class="text-blue-600 text-xl">📘</span>
                            <span class="font-medium text-blue-700">Facebook</span>
                        </a>
                        
                        <a href="#" class="flex items-center space-x-3 p-3 bg-pink-50 rounded-lg hover:bg-pink-100 transition-colors">
                            <span class="text-pink-600 text-xl">📷</span>
                            <span class="font-medium text-pink-700">Instagram</span>
                        </a>
                        
                        <a href="#" class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <span class="text-blue-600 text-xl">🐦</span>
                            <span class="font-medium text-blue-700">Twitter</span>
                        </a>
                        
                        <a href="#" class="flex items-center space-x-3 p-3 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                            <span class="text-red-600 text-xl">📺</span>
                            <span class="font-medium text-red-700">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-aliu-dark mb-4">
                    ❓ Perguntas Frequentes
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-aliu-primary to-aliu-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Como funciona a personalização de estampas?</h4>
                        <p class="text-gray-600 text-sm">Você pode criar estampas usando nossa IA, fazer upload de imagens próprias ou usar nosso editor criativo. O processo é simples e intuitivo!</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Qual o prazo de entrega?</h4>
                        <p class="text-gray-600 text-sm">O prazo varia de 5 a 15 dias úteis, dependendo da complexidade da personalização e da região de entrega.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Posso cancelar meu pedido?</h4>
                        <p class="text-gray-600 text-sm">Sim! Você pode cancelar até 24h após a confirmação do pedido, antes do início da produção.</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Aceitam quais formas de pagamento?</h4>
                        <p class="text-gray-600 text-sm">Aceitamos cartões de crédito, PIX, boleto bancário e transferência. Parcelamos em até 12x sem juros!</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Como funciona a troca?</h4>
                        <p class="text-gray-600 text-sm">Oferecemos 30 dias para troca, desde que o produto esteja em perfeito estado e na embalagem original.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-aliu-dark mb-2">Fazem envio para todo o Brasil?</h4>
                        <p class="text-gray-600 text-sm">Sim! Entregamos em todo o território nacional, com frete grátis para compras acima de R$ 99.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Final -->
        <div class="bg-gradient-to-r from-aliu-primary/10 to-aliu-secondary/10 rounded-2xl p-8 text-center">
            <h3 class="text-2xl font-bold text-aliu-dark mb-4">
                🚀 Pronto para Criar?
            </h3>
            <p class="text-gray-600 mb-6">
                Não perca mais tempo! Comece a criar suas estampas personalizadas agora mesmo.
            </p>
            <a href="/criar-sua-estampa" class="inline-block bg-gradient-to-r from-aliu-primary to-aliu-secondary text-white px-8 py-3 rounded-xl font-semibold hover:shadow-lg transition-all duration-300">
                🎨 Criar Minha Estampa
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?> 