<?php 
$pageTitle = "Consultoria que Integra Práticas de ESG no seu Negócio | Buriti ESG"; 
include ROOT . '/header.php';
?>
        <!-- Hero Section with Same Background Image -->
        <section id="home" class="text-white py-24 relative overflow-hidden">
            <!-- Background Image Container -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('imagens/bg-hero.png');">
                <!-- Overlay escuro para melhorar legibilidade -->
                <!-- <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div> -->
            </div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl relative">
                    <!-- Slides wrapper -->
                    <div class="home-slides">
                        <!-- Slide 0: hero (original content) -->
                        <div id="home-slide-0" class="home-slide transition-opacity duration-400 opacity-100">
                            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                                Consultoria que Integra Práticas de ESG no seu Negócio.
                            </h1>
                            <p class="text-xl mb-8 text-gray-300">
                                Combinando expertise técnica e atendimento humanizado para resolver seus problemas com agilidade e segurança.
                            </p>
                            <a href="#contato" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                                Falar com um especialista
                            </a>
                        </div>

                        <!-- Slide 1: "Empresas que atendemos" (exemplo de conteúdo do segundo slide) -->
                        <div id="home-slide-1" class="home-slide transition-opacity duration-400 opacity-0 hidden">
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                                Empresas que atendemos
                            </h1>
                            <p class="text-lg mb-6 text-gray-300">
                                Parceiros de diversos setores: financeiro, indústria, tecnologia e serviços. Exemplos:
                            </p>
                            <!-- Placeholder logos / cards -->
                            <div class="flex flex-wrap gap-4">
                                <div class="w-28 h-12 bg-white/10 rounded flex items-center justify-center text-sm">Logo 1</div>
                                <div class="w-28 h-12 bg-white/10 rounded flex items-center justify-center text-sm">Logo 2</div>
                                <div class="w-28 h-12 bg-white/10 rounded flex items-center justify-center text-sm">Logo 3</div>
                                <div class="w-28 h-12 bg-white/10 rounded flex items-center justify-center text-sm">Logo 4</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slider controls: top-border bar with button labels overlaying -->
                <div class="mt-16">
                    <div class="w-72 md:w-96 mx-0">
                        <div class="flex items-center">
                            <!-- base top border providing the continuous line -->
                            <div class="flex-1 border-t-1 border-gray-200 pt-3 relative" role="tablist" aria-label="Home slides">
                                <div class="flex">
                                    <button id="slider-01"
                                        class="flex-1 text-sm text-gray-400 text-left px-3 pt-4 -mt-4 border-t-6 border-transparent transition-colors duration-200 focus:outline-none overflow-hidden whitespace-nowrap truncate"
                                        aria-controls="home-slide-0" aria-selected="true" title="Slide 1" type="button">
                                        <div class="w-full">Integração de práticas <span class="hidden md:inline font-bold">ESG</span></div>
                                    </button>

                                    <button id="slider-02"
                                        class="flex-1 text-sm text-gray-400 text-left px-3 pt-4 -mt-4 border-t-6 border-transparent transition-colors duration-200 focus:outline-none overflow-hidden whitespace-nowrap truncate"
                                        aria-controls="home-slide-1" aria-selected="false" title="Slide 2" type="button">
                                        <div class="w-full">Empresas que atendemos</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre Nós -->
        <section id="sobre" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-6 text-center">Sobre Nós</h2>
                <div class="max-w-4xl mx-auto text-center mb-12">
                    <p class="text-lg mb-4 text-gray-700">
                        A Buriti ESG é uma consultoria dedicada à sustentabilidade e soluções relacionadas a ESG, fundada por Juliana Pacheco e Sara Sato.
                    </p>
                    <p class="text-lg mb-4 text-gray-700">
                        Combinamos nossa experiência no mercado, um histórico comprovado, visão estratégica e excelência técnica para auxiliar empresas no desenvolvimento, integração e comunicação de práticas ESG que gerem resultados reais e mensuráveis.
                    </p>
                    <p class="text-lg text-gray-700">
                        Nossa missão é transformar desafios ambientais, sociais e de governança em oportunidades de crescimento sustentável para nossos clientes.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-5xl font-bold mb-2">15+</h3>
                        <p class="text-sm">Anos de serviço ESG</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-5xl font-bold mb-2">3.000+</h3>
                        <p class="text-sm">Empresas Assessoradas</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-5xl font-bold mb-2">400+</h3>
                        <p class="text-sm">GPs e LPs</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-5xl font-bold mb-2">10+</h3>
                        <p class="text-sm">Profissionais dedicados a ESG</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nossos Serviços -->
        <section id="servicos" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-4xl text-[#231A14] font-bold mb-6">Nossos Serviços</h2>
                        <p class="text-lg mb-8 text-gray-700">Nossa oferta de produtos abrange todo o ciclo de investimento.</p>
                        
                        <div class="space-y-4">
                            <button id="btn-0" class="w-full text-left flex items-center space-x-3 p-4 hover:bg-white rounded-lg transition" onclick="showService(0)">
                                <span class="text-orange-500">→</span>
                                <h3 class="text-3xl font-semibold text-orange-500">Serviços Financeiros</h3>
                            </button>
                            <button id="btn-1" class="w-full text-left flex items-center space-x-3 p-4 hover:bg-white rounded-lg transition" onclick="showService(1)">
                                <span class="text-gray-400">→</span>
                                <h3 class="text-3xl font-semibold text-gray-600">Serviços Detalhados</h3>
                            </button>
                            <button id="btn-2" class="w-full text-left flex items-center space-x-3 p-4 hover:bg-white rounded-lg transition" onclick="showService(2)">
                                <span class="text-gray-400">→</span>
                                <h3 class="text-3xl font-semibold text-gray-600">Nossos Diferenciais</h3>
                            </button>
                        </div>
                    </div>
                    
                    <div>
                        <div id="service-0" class="bg-gradient-to-br from-orange-100 to-orange-50 p-8 rounded-xl">
                            <h3 class="text-2xl font-bold mb-6">Soluções em ESG para Mercado Financeiro</h3>
                            
                            <div class="space-y-6">
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Produtos Financeiros Sustentáveis</h4>
                                    <p class="text-gray-700">Estruturação de fundos, títulos e linhas de crédito alinhados a critérios ESG, promovendo investimentos com impacto positivo.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• ESG em Análise de Crédito</h4>
                                    <p class="text-gray-700">Incorporação de fatores ESG nas metodologias de crédito e políticas de incentivos, reduzindo riscos e ampliando oportunidades.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Consultoria ESG para Investidores</h4>
                                    <p class="text-gray-700">Análise e assessoria para fundos, gestoras e family offices na integração de ESG nos portfólios e estratégias de investimento.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="service-1" class="hidden bg-gradient-to-br from-orange-100 to-orange-50 p-8 rounded-xl">
                            <h3 class="text-2xl font-bold mb-6">Soluções em ESG para Empresas</h3>
                            
                            <div class="space-y-6">
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Conformidade e Riscos Socioambientais</h4>
                                    <p class="text-gray-700">Análise e mitigação de riscos ambientais e sociais para garantir conformidade regulatória e gestão responsável.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Estratégias ESG e Governança</h4>
                                    <p class="text-gray-700">Desenvolvemos e implementamos estratégias que alinham governança corporativa às melhores práticas ambientais, sociais e de gestão.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Treinamentos e Engajamento</h4>
                                    <p class="text-gray-700">Capacitação para integração de ESG na cultura e operações das organizações, promovendo engajamento em todos os níveis.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="service-2" class="hidden bg-gradient-to-br from-orange-100 to-orange-50 p-8 rounded-xl">
                            <h3 class="text-2xl font-bold mb-6">O que nos torna únicos no mercado</h3>
                            
                            <div class="space-y-6">
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Expertise no Mercado Financeiro</h4>
                                    <p class="text-gray-700">Profundo conhecimento do setor financeiro e suas particularidades em relação às práticas ESG.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Track Record Comprovado</h4>
                                    <p class="text-gray-700">Histórico de sucesso em projetos de implementação e desenvolvimento de estratégias ESG.</p>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold mb-2 text-orange-600">• Atuação Estratégica</h4>
                                    <p class="text-gray-700">Visão holística que integra sustentabilidade aos objetivos estratégicos do negócio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nossa Plataforma -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="bg-gray-100 rounded-xl p-8 shadow-lg">
                            <div class="bg-gradient-to-br from-blue-900 to-indigo-900 rounded-lg p-6 text-white mb-4">
                                <div class="h-48 flex items-center justify-center text-sm">
                                    [Imagem da Plataforma - Dashboard com gráficos]
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h2 class="text-4xl text-[#231A14] font-bold mb-6">Nossa Plataforma</h2>
                        <p class="text-xl mb-6 text-gray-700">Avaliações ESG com a tecnologia de uma plataforma premiada</p>
                        
                        <div class="flex flex-wrap gap-4 mb-6">
                            <span class="bg-orange-100 text-orange-600 px-4 py-2 rounded-full text-sm font-semibold">• Eficiente</span>
                            <span class="bg-orange-100 text-orange-600 px-4 py-2 rounded-full text-sm font-semibold">• Líder do Setor</span>
                            <span class="bg-orange-100 text-orange-600 px-4 py-2 rounded-full text-sm font-semibold">• Metodologia Comprovada</span>
                        </div>
                        
                        <p class="text-gray-700 mb-4">
                            À medida que as estruturas, regulamentações e padrões ESG crescem a cada dia, simplifique e otimize as avaliações ESG e concentre-se no que realmente importa: impulsionar mudanças e gerar valor.
                        </p>
                        
                        <p class="text-gray-700 mb-6">
                            Nossa plataforma premiada coloca você no controle, dando-lhe o poder de realizar avaliações ESG incomparáveis, com base na metodologia comprovada de nossos especialistas em ESG e sustentabilidade.
                        </p>
                        
                        <div class="flex gap-4">
                            <a href="#" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                                Solicite um teste
                            </a>
                            <a href="#" class="inline-block border border-orange-500 text-orange-500 px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                                Saiba mais
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nosso Time -->
        <section id="time" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold mb-12 text-center">Nosso Time</h2>
                
                <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                    <!-- Juliana Pacheco -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-400 to-orange-500 p-6 text-white">
                            <div class="w-24 h-24 bg-white rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl font-bold text-center">Juliana Pacheco</h3>
                        </div>
                        
                        <div class="p-6">
                            <p class="text-gray-700 mb-4">
                                Executiva com mais de 12 anos no mercado financeiro, com forte ênfase socioambiental e em investimentos sustentáveis.
                            </p>
                            
                            <p class="text-gray-700 mb-6">
                                Foi Diretora de Sustentabilidade, Riscos e Compliance na Jive Mauá, onde estruturou áreas de GRC, programas de compliance e políticas ESG.
                            </p>
                            
                            <h4 class="font-bold mb-4 text-orange-600">Formação e Certificações</h4>
                            
                            <ul class="space-y-3">
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-formacao.svg" alt="icone formação" title="icone formação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Graduada em Direito (PUC Campinas)</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-formacao.svg" alt="icone formação" title="icone formação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Ciência Política (Unicamp)</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-formacao.svg" alt="icone formação" title="icone formação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">MBA em Gestão Empresarial (Trevisa)</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-certificado.svg" alt="icone certificação" title="icone certificação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Certificada em Sustainable Finance (UNEP FI)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Sara Sato -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-400 to-orange-500 p-6 text-white">
                            <div class="w-24 h-24 bg-white rounded-full mx-auto mb-4"></div>
                            <h3 class="text-2xl font-bold text-center">Sara Sato</h3>
                        </div>
                        
                        <div class="p-6">
                            <p class="text-gray-700 mb-4">
                                Especialista em sustentabilidade e ESG com ampla experiência em análise de riscos socioambientais, políticas de governança e relacionamento com stakeholders.
                            </p>
                            
                            <p class="text-gray-700 mb-6">
                                Experiência em projetos de ESG no setor financeiro e corporativo, com foco em políticas de governança e gestão de stakeholders.
                            </p>
                            
                            <h4 class="font-bold mb-4 text-orange-600">Especialidades</h4>
                            
                            <ul class="space-y-3">
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-certificado.svg" alt="icone certificação" title="icone certificação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Análise de Riscos Socioambientais</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-certificado.svg" alt="icone certificação" title="icone certificação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Políticas de Governança</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-certificado.svg" alt="icone certificação" title="icone certificação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Relacionamento com Stakeholders</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <span class="text-orange-500"><img src="icons/icon-certificado.svg" alt="icone certificação" title="icone certificação"></span>
                                    <span class="text-sm text-[#150C08] font-bold">Liderança de projetos ESG no setor financeiro e corporativo</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/section-contato.php';?>

        <!-- FAQ -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 max-w-4xl">
                <h2 class="text-4xl font-bold mb-4 text-center">Perguntas Frequentes</h2>
                <p class="text-center text-gray-600 mb-12">Tudo o que você precisa saber sobre nossos serviços</p>
                
                <div class="space-y-4 mb-12">
                    <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                        <summary class="font-semibold text-lg flex justify-between items-center">
                            Pergunta 1
                            <span class="text-orange-500">+</span>
                        </summary>
                        <p class="mt-4 text-gray-700">Resposta aqui</p>
                    </details>
                    
                    <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                        <summary class="font-semibold text-lg flex justify-between items-center">
                            Pergunta 2
                            <span class="text-orange-500">+</span>
                        </summary>
                        <p class="mt-4 text-gray-700">Resposta aqui</p>
                    </details>
                    
                    <details class="bg-gray-50 rounded-lg p-6 cursor-pointer">
                        <summary class="font-semibold text-lg flex justify-between items-center">
                            Pergunta 3
                            <span class="text-orange-500">+</span>
                        </summary>
                        <p class="mt-4 text-gray-700">Resposta aqui</p>
                    </details>
                </div>
                
                <div class="text-center bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-2">Ainda tem dúvidas?</h3>
                    <p class="text-gray-600 mb-6">Não conseguiu achar sua dúvida? Entre em contato</p>
                    <a href="#contato" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                        Entrar em contato
                    </a>
                </div>
            </div>
        </section>
<?php include ROOT . '/footer.php';?>