    </div> <!-- Fecha pt-16 do header.php -->
    <!-- Footer -->
    <footer class="bg-aliu-dark text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Seção Principal - Aliu -->
            <div class="mb-16">
                <div class="max-w-4xl">
                    <h3 class="text-3xl font-bold text-aliu-accent mb-6">Aliu</h3>
                    <p class="text-gray-300 text-lg leading-relaxed mb-6">
                        Expressando criatividade através da moda personalizada.
                    </p>
                    <p class="text-gray-400 text-base leading-relaxed">
                        Somos uma empresa especializada em peças e acessórios personalizados, oferecendo produtos únicos que refletem a individualidade de cada cliente. Nossa missão é transformar ideias em realidade através de designs exclusivos e qualidade superior.
                    </p>
                </div>
            </div>

            <!-- Seções de Links -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">Links Úteis</h4>
                    <?php
                    if (has_nav_menu('footer-links-uteis')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer-links-uteis',
                            'container' => false,
                            'menu_class' => 'space-y-2',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_before' => '<span class="text-gray-300 hover:text-aliu-accent transition-colors">',
                            'link_after' => '</span>',
                            'walker' => new Aliu_Footer_Walker()
                        ));
                    } else {
                        echo '<ul class="space-y-2">
                            <li><a href="' . home_url('/sobre/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Sobre</a></li>
                            <li><a href="' . home_url('/produtos/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Produtos</a></li>
                            <li><a href="' . home_url('/contato/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Contato</a></li>
                        </ul>';
                    }
                    ?>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Redes Sociais</h4>
                    <?php
                    if (has_nav_menu('footer-redes-sociais')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer-redes-sociais',
                            'container' => false,
                            'menu_class' => 'space-y-2',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_before' => '<span class="text-gray-300 hover:text-aliu-accent transition-colors">',
                            'link_after' => '</span>',
                            'walker' => new Aliu_Footer_Walker()
                        ));
                    } else {
                        echo '<ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-aliu-accent transition-colors">Facebook</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-aliu-accent transition-colors">Instagram</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-aliu-accent transition-colors">Twitter/X</a></li>
                        </ul>';
                    }
                    ?>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Legal</h4>
                    <?php
                    if (has_nav_menu('footer-legal')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer-legal',
                            'container' => false,
                            'menu_class' => 'space-y-2',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                            'link_before' => '<span class="text-gray-300 hover:text-aliu-accent transition-colors">',
                            'link_after' => '</span>',
                            'walker' => new Aliu_Footer_Walker()
                        ));
                    } else {
                        echo '<ul class="space-y-2">
                            <li><a href="' . home_url('/termos-de-uso/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Termos de Uso</a></li>
                            <li><a href="' . home_url('/politica-privacidade/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Política de Privacidade</a></li>
                            <li><a href="' . home_url('/politica-devolucao/') . '" class="text-gray-300 hover:text-aliu-accent transition-colors">Política de devolução e reembolso</a></li>
                        </ul>';
                    }
                    ?>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2025 Aliu - Peças e Acessórios. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    
    <!-- Força Tailwind a manter classes customizadas -->
    <div class="hidden menu dropdown cart cart-container cart-dropdown"></div>
</body>
</html> 