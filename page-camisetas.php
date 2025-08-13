<?php
/*
Template Name: Produtos
*/
get_header();
?>

<main class="min-h-screen">
    <!-- Header da Página -->
    <section class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-aliu-dark mb-2">
                        camisetas
                    </h1>
                    <p class="text-lg text-gray-600">
                        encontre a melhor camiseta para você
                    </p>
                </div>
                <div class="mt-4 md:mt-0">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="flex items-center space-x-2">
                            <li>
                                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </li>
                            <li>
                                <span class="text-aliu-primary font-medium"><?php echo get_the_title(); ?></span>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Layout Principal com Sidebar e Conteúdo -->
    <div class="flex">
        <!-- Sidebar Esquerda - Filtros -->
        <aside class="w-80 bg-white border-r border-gray-200 min-h-screen sticky top-0">
            <div class="p-6">
                <!-- Navegar por Section -->
                <div class="mb-8">
                    <h3 class="font-semibold text-gray-900 mb-4">Navegar </h3>
                    <div class="space-y-2">
                        <a href="#" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors">Todos os produtos</a>
                        <a href="#" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors">Camisetas</a>
                        <a href="#" class="block py-2 px-3 rounded-lg bg-gray-100 border border-gray-200 transition-colors">Moletons</a>
                        <a href="#" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors">Bonés</a>
                        <a href="#" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors">Acessórios</a>
                        <a href="#" class="block py-2 px-3 rounded-lg hover:bg-gray-100 transition-colors">Canecas</a>
                    </div>
                </div>

                <!-- Filtro por Section -->
                <div class="mb-8">
                    <h3 class="font-semibold text-gray-900 mb-4">Filtros</h3>
                    <!-- Preço -->
                    <div class="mb-6">
                        <div class="flex items-center justify-between cursor-pointer">
                            <span class="text-gray-700">Preço </span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-2">
                            <span class="px-2 py-1 rounded bg-green-100 text-green-700 text-base" style="font-size: 105%;">R$ 89,99</span>
                            <span class="px-2 py-1 rounded bg-red-100 text-red-700 text-base" style="font-size: 105%;">R$1 45,99</span>
                            <span class="px-2 py-1 rounded bg-red-100 text-red-700 text-base" style="font-size: 105%;">R$ 99,99</span>
                        
                        </div>
                    </div>
                    <!-- Tamanho-->
                    <div class="mb-6">
                        <div class="flex items-center justify-between cursor-pointer">
                            <span class="text-gray-700">Tamanho</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-2 items-center">
                        
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">PP</span>
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">P</span>
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">M</span>
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">G</span>
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">GG</span>
                            <span class="px-1.5 py-0.5 rounded bg-gray-200 text-[#555] text-sm" style="letter-spacing:1px;">XGG</span>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Área Principal Direita -->
        <div class="flex-1 bg-gray-50">
            <!-- Header dos Produtos -->
            <div class="bg-white border-b border-gray-200 px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <label class="text-gray-700 font-medium">Ordenar </label>
                        <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-aliu-primary focus:border-aliu-primary">
                            <option>Recomendado</option>
                            <option>Mais recente</option>
                            <option>Melhor avaliado</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Grid de Produtos -->
            <div class="p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Card de Produto 1 -->
                    <a href="/produto/camiseta-premium" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Premium" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Premium</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900 line-through">R$ 65</span>
                                </div>
                                <div class="flex items-center justify-center gap-2 mb-0.5">
                                    <span class="text-green-600 font-semibold text-lg">R$ 52</span>
                                    <span class="bg-red-500 text-white px-2 py-0.5 rounded-full text-xs font-bold">-20%</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 10x de R$ 6,50</p>
                            </div>
                        </div>
                    </a>
                    <!-- Card de Produto 2 -->
                    <a href="/produto/camiseta-basica" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Básica" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Básica</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900">R$ 35</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 5x de R$ 7,00</p>
                            </div>
                        </div>
                    </a>
                    <!-- Card de Produto 3 -->
                    <a href="/produto/camiseta-arte" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Arte" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Arte</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900 line-through">R$ 52</span>
                                </div>
                                <div class="flex items-center justify-center gap-2 mb-0.5">
                                    <span class="text-green-600 font-semibold text-lg">R$ 47</span>
                                    <span class="bg-red-500 text-white px-2 py-0.5 rounded-full text-xs font-bold">-10%</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 8x de R$ 5,88</p>
                            </div>
                        </div>
                    </a>
                    <!-- Card de Produto 4 -->
                    <a href="/produto/camiseta-urbana" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Urbana" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Urbana</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900">R$ 42</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 6x de R$ 7,00</p>
                            </div>
                        </div>
                    </a>
                    <!-- Card de Produto 5 -->
                    <a href="/produto/camiseta-designer" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Designer" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Designer</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900 line-through">R$ 58</span>
                                </div>
                                <div class="flex items-center justify-center gap-2 mb-0.5">
                                    <span class="text-green-600 font-semibold text-lg">R$ 49</span>
                                    <span class="bg-red-500 text-white px-2 py-0.5 rounded-full text-xs font-bold">-16%</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 8x de R$ 6,13</p>
                            </div>
                        </div>
                    </a>
                    <!-- Card de Produto 6 -->
                    <a href="/produto/camiseta-classica" class="bg-white rounded-2xl p-4 shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:-translate-y-2 block">
                        <div class="relative">
                            <div class="w-full h-32 mb-3">
                                <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=400&q=80" alt="Camiseta Clássica" class="w-full h-full object-cover rounded-xl">
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 class="font-semibold text-base text-gray-900 mb-2">Camiseta Clássica</h3>
                            <div class="mb-3">
                                <div class="flex items-center justify-center gap-2 mb-1">
                                    <span class="text-xs text-green-600 font-medium">PIX</span>
                                    <span class="font-bold text-2xl text-gray-900">R$ 38</span>
                                </div>
                                <p class="text-xs text-gray-600">em até 4x de R$ 9,50</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Paginação -->
            
        
           
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-4">
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium">
                        Anterior
                    </button>
                    <button class="px-4 py-2 bg-aliu-primary text-white rounded-lg hover:bg-aliu-primary-hover transition-all duration-200 font-medium shadow-sm">
                        1
                    </button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium">
                        2
                    </button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium">
                        3
                    </button>
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 font-medium">
                        Próxima
                    </button>
                </nav>
            </div>
    </div>
        </div>
    </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?> 