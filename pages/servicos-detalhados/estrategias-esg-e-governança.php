<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/tailwindcss">
        body {      
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: "Lora", serif;
            font-optical-sizing: auto;
        }
    </style>
    <title>Produtos Financeiros Sustentáveis - Buriti ESG</title>
</head>
<body class="bg-[#FFF8F6]">
    <!-- Header -->
<header class="text-white py-4 fixed w-full top-0 z-50">
        <!-- Background Image Container -->
        <div class="absolute inset-0 bg-[#150C08]">
            <!-- Overlay escuro para melhorar legibilidade -->
            <!-- <div class="absolute inset-0 bg-black/60"></div> -->
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <nav class="flex items-center justify-between">
                <div class="text-orange-500 font-bold text-2xl">
                    buriti.
                </div>
                
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 text-sm">
                    <a href="/" class="hover:text-orange-500 transition">Início</a>
                    <a href="#sobre" class="hover:text-orange-500 transition">Sobre Nós</a>
                    <a href="servicos-financeiros.html" class="hover:text-orange-500 transition">Áreas de Atuação</a>
                    <a href="#time" class="hover:text-orange-500 transition">Equipe</a>
                    <a href="#blog" class="hover:text-orange-500 transition">Blog</a>
                </div>
                
                <!-- Botão Plataforma Desktop -->
                <div class="hidden md:block">
                    <a href="#" class="flex items-center space-x-2 text-sm hover:text-orange-500 transition">
                        <span>Acessar plataforma</span>
                        <span><img src="/icons/icon-login.svg" alt=""></span>
                    </a>
                </div>

                <!-- Botão Hamburger Mobile -->
                <button id="menuButton" class="md:hidden text-white focus:outline-none z-50">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] text-white relative overflow-hidden">
        <!-- Background blur effect -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-20 left-10 w-64 h-64 bg-orange-500/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Produtos Financeiros Sustentáveis
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Descubra a importância do ESG em serviços financeiros, como bancos e fintechs podem aplicar práticas ESG e atrair investimentos mais sustentáveis e éticos.
                </p>
                <a href="#contato" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                    Fale com um consultor
                </a>
            </div>
        </div>
    </section>

    <!-- O que Significa ESG -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">O que Significa ESG em Serviços Financeiros?</h2>
                
                <p class="text-base text-gray-700 mb-8 leading-relaxed">
                    O ESG em serviços financeiros é uma abordagem de negócios que incorpora critérios ambientais, sociais e de governança nas operações e decisões de investimento de instituições financeiras, como bancos, fintechs, gestoras de investimentos e seguradoras. O objetivo é ir além da análise financeira tradicional, considerando o impacto da empresa no meio ambiente, na sociedade e a eficácia da sua governança corporativa.
                </p>

                <!-- Ambiental -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-4">Ambiental (E - Environmental)</h3>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        O ESG em serviços de crédito foca em critérios de negócios que incorporam padrões ambientais para o desenvolvimento de uma economia mais justa e sustentável, com impacto ambiental reduzido. A análise envolve, por exemplo, as mudanças climáticas e a utilização de recursos renováveis nas operações dos clientes.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Refere-se a como a instituição financeira gerencia seus impactos no meio ambiente, seja diretamente em suas operações ou indiretamente por meio dos negócios e projetos que financia. Investidores têm buscado cada vez mais empresas que adotam práticas sustentáveis, como redução de emissões e eficiência energética.
                    </p>
                    
                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Financiamento sustentável:</strong> Financiamento verde para apoiar projetos de energia renovável e infraestrutura sustentável.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Gestão de Riscos climáticos:</strong> Avaliação do impacto de mudanças climáticas nas carteiras de crédito e investimento.</span>
                        </li>
                    </ul>

                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="/api/placeholder/800/400" alt="Turbinas eólicas em paisagem montanhosa" class="w-full h-auto">
                    </div>
                </div>

                <!-- Governança -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold mb-4">Governança (G - Governance)</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Refere-se às práticas de gestão e supervisão da empresa, incluindo a estrutura do conselho de administração, a prestação de contas, a transparência e a mitigação de conflitos corporativos. Para instituições financeiras, isso envolve:
                    </p>
                    
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Exemplos:</strong> Gestão de risco e compliance, criação de comitês de investimento responsável, prevenção de conflitos de interesse, entre outros.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossos Outros Serviços -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Nossos Outros Serviços Relacionados</h2>
            
            <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Card 1 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="h-48 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="text-white text-6xl relative z-10">📊</div>
                    </div>
                    <div class="p-6 text-white">
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mb-4 text-lg font-bold">
                            E
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-orange-400 transition">Produtos Financeiros Sustentáveis</h3>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="h-48 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="text-white text-6xl relative z-10">💳</div>
                    </div>
                    <div class="p-6 text-white">
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mb-4 text-lg font-bold">
                            S
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-orange-400 transition">ESG em Análise de Crédito</h3>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition group">
                    <div class="h-48 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-black/20"></div>
                        <div class="text-white text-6xl relative z-10">💼</div>
                    </div>
                    <div class="p-6 text-white">
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mb-4 text-lg font-bold">
                            G
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-orange-400 transition">Consultoria ESG para Investidores</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-center">Perguntas Frequentes</h2>
            <p class="text-center text-gray-600 mb-12">Tudo o que você precisa saber sobre nossos serviços</p>
            
            <div class="space-y-4 mb-12">
                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 1<br><span class="text-sm font-normal text-gray-600">Resposta 1</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 1...</p>
                </details>
                
                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 2<br><span class="text-sm font-normal text-gray-600">Resposta 2</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 2...</p>
                </details>
                
                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 3<br><span class="text-sm font-normal text-gray-600">Resposta 3</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 3...</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 4<br><span class="text-sm font-normal text-gray-600">Resposta 4</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 4...</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 5<br><span class="text-sm font-normal text-gray-600">Resposta 5</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 5...</p>
                </details>

                <details class="bg-gray-50 rounded-lg p-6 cursor-pointer hover:bg-gray-100 transition">
                    <summary class="font-semibold text-base flex justify-between items-center">
                        <span>Pergunta 6<br><span class="text-sm font-normal text-gray-600">Resposta 6</span></span>
                        <span class="text-orange-500 text-2xl flex-shrink-0 ml-4">⊕</span>
                    </summary>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Conteúdo detalhado da resposta 6...</p>
                </details>
            </div>
            
            <div class="text-center bg-gray-50 rounded-xl p-8">
                <h3 class="text-2xl font-bold mb-2">Ainda tem dúvidas?</h3>
                <p class="text-gray-600 mb-6">Não conseguiu achar sua dúvida? Entre em contato</p>
                <a href="#contato" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                    Entre em contato
                </a>
            </div>
        </div>
    </section>

    <!-- Nossa Plataforma -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <div>
                    <div class="rounded-xl overflow-hidden shadow-2xl">
                        <img src="/api/placeholder/600/500" alt="Dashboard da plataforma" class="w-full h-auto">
                    </div>
                </div>
                
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Nossa Plataforma</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Avaliações ESG com a tecnologia de uma plataforma premiada
                    </p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start text-gray-700">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Eficiente</strong></span>
                        </li>
                        <li class="flex items-start text-gray-700">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Líder do setor</strong></span>
                        </li>
                        <li class="flex items-start text-gray-700">
                            <span class="text-orange-500 mr-3 mt-1">•</span>
                            <span><strong>Metodologia comprovada</strong></span>
                        </li>
                    </ul>
                    
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        À medida que as estruturas, regulamentações e padrões ESG crescem a cada dia, simplifique e otimize as avaliações ESG e concentre-se no que realmente importa: impulsionar mudanças e gerar valor.
                    </p>
                    
                    <p class="text-gray-700 mb-8 leading-relaxed">
                        Nossa plataforma premiada coloca você no controle, dando-lhe o poder de realizar avaliações ESG incomparáveis, com base na metodologia comprovada de nossos especialistas em ESG e sustentabilidade.
                    </p>
                    
                    <a href="#" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-md hover:bg-orange-600 transition font-semibold">
                        Solicite um teste
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-20 bg-gradient-to-br from-[#2a2a2a] to-[#1a1a1a] text-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-orange-500">Contato</h2>
                    <h3 class="text-xl md:text-2xl mb-4">Sua rotina empresarial com estratégias mais eficientes</h3>
                    <p class="text-gray-300 mb-8">Entre em contato e solicite um diagnóstico</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-orange-500 text-xl">📞</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Telefone</h4>
                                <p class="text-gray-300 text-sm">+55 (19) 91234-5678</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-orange-500 text-xl">✉️</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">E-mail</h4>
                                <p class="text-gray-300 text-sm">contato@buritiesg.com.br</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-orange-500 text-xl">📍</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Endereço</h4>
                                <p class="text-gray-300 text-sm">Rua Teste, 123 - Centro<br>Campinas - SP</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-orange-500 text-xl">🕐</span>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-1">Horário de funcionamento</h4>
                                <p class="text-gray-300 text-sm">Segunda a Sexta das 9h às 18h</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 text-gray-800">
                    <h3 class="text-2xl font-bold mb-6">Entre em Contato</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nome</label>
                            <input type="text" placeholder="Digite seu nome" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Nome da Empresa</label>
                            <input type="text" placeholder="Digite o nome da empresa" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">E-mail</label>
                            <input type="email" placeholder="Digite seu e-mail" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold mb-2">Telefone</label>
                            <input type="tel" placeholder="Digite seu telefone" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 text-sm">
                        </div>
                        
                        <button class="w-full bg-orange-500 text-white py-3 rounded-md hover:bg-orange-600 transition font-semibold mt-4">
                            Enviar em contato
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>