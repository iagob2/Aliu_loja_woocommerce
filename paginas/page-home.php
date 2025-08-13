<?php
/*
Template Name: Home
*/
get_header();
?>
<main>
    <!-- Hero Section -->
    <section id="home" class="pt-16 min-h-screen flex items-center bg-gradient-to-br from-aliu-primary to-aliu-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Expresse sua 
                    <span class="text-aliu-accent">Criatividade</span>
                </h1>
                <p class="text-xl md:text-2xl text-white mb-8 opacity-90">
                    Crie estampas únicas com IA, desenhe do zero ou escolha designs prontos. Sua moda, sua personalidade.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-primary">
                        Criar Estampa
                    </a>
                    <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-secondary">
                        Ver Produtos
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-aliu-dark mb-4">
            Como Funciona
          </h2>
          <p class="text-xl text-aliu-light max-w-2xl mx-auto">
            Três formas diferentes de criar sua estampa perfeita
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Feature 1 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow transition-transform duration-300 hover:-translate-y-2">
            <div class="w-16 h-16 bg-aliu-primary rounded-full flex items-center justify-center mb-6 mx-auto">
              <span class="text-2xl text-white">🤖</span>
            </div>
            <h3 class="text-xl font-semibold text-aliu-dark mb-4 text-center">
              IA Criativa
            </h3>
            <p class="text-aliu-light text-center">
              Descreva sua ideia e nossa IA cria designs únicos para você. Rápido, fácil e surpreendente.
            </p>
          </div>

          <!-- Feature 2 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow transition-transform duration-300 hover:-translate-y-2">
            <div class="w-16 h-16 bg-aliu-secondary rounded-full flex items-center justify-center mb-6 mx-auto">
              <span class="text-2xl text-white">🎨</span>
            </div>
            <h3 class="text-xl font-semibold text-aliu-dark mb-4 text-center">
              Editor Próprio
            </h3>
            <p class="text-aliu-light text-center">
              Faça upload de suas imagens ou desenhe diretamente em nossa plataforma intuitiva.
            </p>
          </div>

          <!-- Feature 3 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow transition-transform duration-300 hover:-translate-y-2">
            <div class="w-16 h-16 bg-aliu-accent rounded-full flex items-center justify-center mb-6 mx-auto">
              <span class="text-2xl text-aliu-dark">✨</span>
            </div>
            <h3 class="text-xl font-semibold text-aliu-dark mb-4 text-center">
              Designs Prontos
            </h3>
            <p class="text-aliu-light text-center">
              Navegue por nossa curadoria de estampas exclusivas criadas por designers profissionais.
            </p>
          </div>
        </div>
      </div>
    </section>

   <!-- Seção de Promoções -->
   <section class="py-20 bg-gradient-to-r from-aliu-primary to-aliu-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    🔥 Promoções Imperdíveis
                </h2>
                <p class="text-xl text-white opacity-90 max-w-2xl mx-auto">
                    Aproveite nossos descontos especiais por tempo limitado
                </p>
            </div>
            <!-- Grid de promoções -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Promoção 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                            -30%
                        </div>
                        <div class="w-full aspect-square mb-4">
                            <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Promocional" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Camiseta Premium</h3>
                        <div class="flex justify-center items-center gap-2 mb-4">
                            <span class="text-gray-500 line-through text-lg">R$ 65</span>
                            <span class="font-bold text-2xl text-red-600">R$ 45</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Material 100% algodão, estampa exclusiva</p>
                        <a href="<?php echo home_url('/camisetas/'); ?>" class="block w-full bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors text-center">
                            Comprar Agora
                        </a>
                    </div>
                </div>
                <!-- Promoção 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                            -40%
                        </div>
                        <div class="w-full aspect-square mb-4">
                            <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80" alt="Moletom Promocional" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Moletom Comfort</h3>
                        <div class="flex justify-center items-center gap-2 mb-4">
                            <span class="text-gray-500 line-through text-lg">R$ 120</span>
                            <span class="font-bold text-2xl text-red-600">R$ 72</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Tecido macio, design moderno</p>
                        <a href="<?php echo home_url('/casacos/'); ?>" class="block w-full bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors text-center">
                            Comprar Agora
                        </a>
                    </div>
                </div>
                <!-- Promoção 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300 ease-in-out transform hover:-translate-y-2">
                    <div class="relative">
                        <div class="absolute -top-4 -right-4 bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                            -50%
                        </div>
                        <div class="w-full aspect-square mb-4">
                            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Kit Completo" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Kit Completo</h3>
                        <div class="flex justify-center items-center gap-2 mb-4">
                            <span class="text-gray-500 line-through text-lg">R$ 180</span>
                            <span class="font-bold text-2xl text-red-600">R$ 90</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Camiseta + Moletom + Boné</p>
                        <a href="<?php echo home_url('/produtos/'); ?>" class="block w-full bg-aliu-primary text-white py-3 px-6 rounded-xl font-semibold hover:bg-red-600 transition-colors text-center">
                            Comprar Agora
                        </a>
                    </div>
                </div>
            </div>
            <!-- Banner de Promoção Especial -->
            <div class="mt-12 bg-white rounded-2xl p-8 shadow-xl">
                <div class="text-center">
                    <div class="inline-block bg-red-500 text-white px-6 py-2 rounded-full text-lg font-bold mb-4">
                        ⚡ OFERTA ESPECIAL
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        Frete Grátis em Compras Acima de R$ 100
                    </h3>
                    <p class="text-lg text-gray-600 mb-6">
                        Aproveite o frete grátis em todos os produtos da nossa coleção promocional
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo home_url('/produtos/'); ?>" class="bg-aliu-primary text-white py-3 px-8 rounded-xl font-semibold hover:bg-red-600 transition-colors text-center">
                            Ver Todas as Promoções
                        </a>
                        <a href="<?php echo home_url('/produtos/'); ?>" class="border-2 border-aliu-primary text-aliu-primary py-3 px-8 rounded-xl font-semibold hover:bg-aliu-primary hover:text-white transition-colors text-center">
                            Criar Estampa Personalizada
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produtos -->
    <section id="produtos" class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Mais Vendidos
          </h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Confira nossos 6 produtos mais populares que estão fazendo sucesso.
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Básica" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Camiseta Básica</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 45</p>
              </div>
              <a href="<?php echo home_url('/camisetas/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Camisetas">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80" alt="Moletom Confort" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Moletom Confort</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 89</p>
              </div>
              <a href="<?php echo home_url('/casacos/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Casacos">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=400&q=80" alt="Boné Snapback" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Boné Snapback</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 35</p>
              </div>
              <a href="<?php echo home_url('/bones/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Bonés">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
          <!-- Card 4 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="Estampa Artística" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Estampa Artística</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 39</p>
              </div>
              <a href="<?php echo home_url('/produtos/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Produtos">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80" alt="Eco Bag" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Eco Bag</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 29</p>
              </div>
              <a href="<?php echo home_url('/produtos/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Produtos">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
          <!-- Card 6 -->
          <div class="bg-slate-50 rounded-2xl p-6 flex flex-col items-center transition-all duration-300 ease-in-out shadow-[4px_6px_12px_0_rgba(0,0,0,0.15)] hover:shadow-xl hover:-translate-y-2">
            <div class="w-full aspect-square mb-4">
              <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Caneca Personalizada" class="w-full h-full object-cover rounded-xl">
            </div>
            <div class="w-full flex justify-between items-center mt-2">
              <div>
                <h3 class="font-semibold text-lg text-gray-900">Caneca Personalizada</h3>
                <p class="font-bold text-lg text-indigo-600">R$ 25</p>
              </div>
              <a href="<?php echo home_url('/produtos/'); ?>" class="text-gray-800 hover:text-indigo-600 transition-colors" aria-label="Ver Produtos">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM7.16 16h9.68a2 2 0 0 0 1.97-1.68l1.18-6.59A1 1 0 0 0 19 7H6.21l-.94-4.34A1 1 0 0 0 4.3 2H2v2h1.3l3.6 16.34A2 2 0 0 0 8.8 22h8.4v-2H8.8l-.64-3z"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section id="criar" class="py-20 bg-aliu-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Pronto para Começar?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Transforme suas ideias em realidade. Crie sua primeira estampa personalizada agora.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-primary">
                        Criar Estampa
                    </a>
                    <a href="<?php echo home_url('/produtos/'); ?>" class="btn-aliu btn-secondary">
                        Ver Produtos
                    </a>
              </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 