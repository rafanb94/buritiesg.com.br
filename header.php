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
    <title><?php echo $pageTitle ?></title>
</head>
<body class="bg-[#FFF8F6]">
    <header class="text-white py-4 fixed w-full top-0 z-50">
    <div class="absolute inset-0 bg-[#150C08]"></div>

    <div class="container mx-auto px-4 relative z-10">
        <nav class="flex items-center justify-between">
            <div class="text-orange-500 font-bold text-2xl">
                buriti.
            </div>

<!-- MENU DESKTOP -->
<div class="hidden md:flex space-x-8 text-sm">

    <a href="<?= BASE_URL ?>/" class="hover:text-orange-500 transition">Início</a>
    <a href="<?= BASE_URL ?>/sobre-nos" class="hover:text-orange-500 transition">Sobre Nós</a>

    <!-- DROPDOWN DESKTOP -->
    <div class="relative group">
        <button class="hover:text-orange-500 transition flex items-center space-x-1">
            <span>Áreas de Atuação</span>
            <span>▼</span>
        </button>

        <!-- SUBMENU -->
        <div class="absolute left-0 mt-2 bg-[#1c120d] shadow-lg rounded-lg w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <ul class="py-3 text-sm">

                <li class="px-4 py-2 font-bold text-orange-400">Serviços Financeiros</li>
                <li><a href="<?= BASE_URL ?>/servicos-financeiros/produtos-financeiros-sustentaveis" class="block px-4 py-2 hover:bg-[#281a14]">Produtos financeiros sustentáveis</a></li>
                <li><a href="<?= BASE_URL ?>/servicos-financeiros/esg-em-analise-de-credito" class="block px-4 py-2 hover:bg-[#281a14]">ESG em análise de crédito</a></li>
                <li><a href="<?= BASE_URL ?>/servicos-financeiros/consultoria-esg-para-investidores" class="block px-4 py-2 hover:bg-[#281a14]">Consultoria ESG para investidores</a></li>

                <li class="px-4 py-2 font-bold text-orange-400 mt-3">Serviços Detalhados</li>
                <li><a href="<?= BASE_URL ?>/servicos-detalhados/conformidade-e-riscos-socioambientais" class="block px-4 py-2 hover:bg-[#281a14]">Conformidade e Riscos Socioambientais</a></li>
                <li><a href="<?= BASE_URL ?>/servicos-detalhados/estrategias-esg-e-governança" class="block px-4 py-2 hover:bg-[#281a14]">Estratégias ESG e Governança</a></li>
                <li><a href="<?= BASE_URL ?>/servicos-detalhados/treinamento-e-engajamento" class="block px-4 py-2 hover:bg-[#281a14]">Treinamentos e Engajamento</a></li>

                <li class="px-4 py-2 font-bold text-orange-400 mt-3">Nossos Diferenciais</li>
                <li><a href="<?= BASE_URL ?>/nossos-diferenciais/expertise-no-mercado-financeiro" class="block px-4 py-2 hover:bg-[#281a14]">Expertise no mercado financeiro</a></li>
                <li><a href="<?= BASE_URL ?>/nossos-diferenciais/track-record-comprovado" class="block px-4 py-2 hover:bg-[#281a14]">Track record comprovado</a></li>
                <li><a href="<?= BASE_URL ?>/nossos-diferenciais/atuacao-estrategica" class="block px-4 py-2 hover:bg-[#281a14]">Atuação estratégica</a></li>

            </ul>
        </div>
    </div>

    <!-- Âncoras na home -->
    <a href="<?= BASE_URL ?>/nossa-plataforma" class="hover:text-orange-500 transition">Sobre a Plataforma</a>
    <!-- <a href="/#time" class="hover:text-orange-500 transition">Equipe</a>
    <a href="/#blog" class="hover:text-orange-500 transition">Blog</a> -->
</div>

<!-- Botão Plataforma Desktop -->
<div class="hidden md:block">
    <a href="#" class="flex items-center space-x-2 text-sm hover:text-orange-500 transition">
        <span>Acessar plataforma</span>
        <span><img src="icons/icon-login.svg" alt=""></span>
    </a>
</div>

<!-- Botão Mobile -->
<button id="menuButton" class="md:hidden text-white focus:outline-none z-50">
    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12"></path>
    </svg>
</button>
</nav>
</div>
</header>

<!-- MOBILE MENU -->
<div id="mobileMenu"
     class="fixed inset-0 bg-[#150C08] z-40 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <div class="flex flex-col h-full pt-20 px-6">

        <div class="flex flex-col space-y-6 text-white text-lg">
            <a href="<?= BASE_URL ?>/" class="hover:text-orange-500 transition py-2 border-b border-gray-700">Início</a>
            <a href="<?= BASE_URL ?>/sobre-nos" class="hover:text-orange-500 transition py-2 border-b border-gray-700">Sobre Nós</a>

            <!-- ACCORDION MOBILE -->
            <div>
                <button class="w-full text-left py-2 border-b border-gray-700 flex justify-between items-center submenu-btn">
                    Áreas de Atuação <span>+</span>
                </button>

                <div class="submenu hidden pl-4 mt-2 space-y-3 text-base">

                    <p class="text-orange-400 font-bold">Serviços Financeiros</p>
                    <a href="<?= BASE_URL ?>/servicos-financeiros/produtos-financeiros-sustentaveis" class="block">Produtos financeiros sustentáveis</a>
                    <a href="<?= BASE_URL ?>/servicos-financeiros/esg-analise-credito" class="block">ESG em análise de crédito</a>
                    <a href="<?= BASE_URL ?>/servicos-financeiros/consultoria-esg-investidores" class="block">Consultoria ESG para investidores</a>

                    <p class="text-orange-400 font-bold mt-4">Serviços Detalhados</p>
                    <a href="<?= BASE_URL ?>/servicos-detalhados/conformidade-riscos-socioambientais" class="block">Conformidade e Riscos Socioambientais</a>
                    <a href="<?= BASE_URL ?>/servicos-detalhados/estrategias-esg-governanca" class="block">Estratégias ESG e Governança</a>
                    <a href="<?= BASE_URL ?>/servicos-detalhados/treinamentos-engajamento" class="block">Treinamentos e Engajamento</a>

                    <p class="text-orange-400 font-bold mt-4">Nossos Diferenciais</p>
                    <a href="<?= BASE_URL ?>/nossos-diferenciais/expertise-no-mercado-financeiro" class="block">Expertise no mercado financeiro</a>
                    <a href="<?= BASE_URL ?>/nossos-diferenciais/track-record-comprovado" class="block">Track record comprovado</a>
                    <a href="<?= BASE_URL ?>/nossos-diferenciais/atuacao-estrategica" class="block">Atuação estratégica</a>

                </div>
            </div>

            <!-- <a href="/#time" class="hover:text-orange-500 transition py-2 border-b border-gray-700">Equipe</a>
            <a href="/#blog" class="hover:text-orange-500 transition py-2 border-b border-gray-700">Blog</a> -->
        </div>

        <div class="mt-8">
            <a href="#" class="flex items-center justify-center space-x-2 bg-orange-500 text-white py-3 px-6 rounded-lg hover:bg-orange-600 transition">
                <span>Acessar plataforma</span>
                <span><img src="icons/icon-login.svg" alt=""></span>
            </a>
        </div>
    </div>
</div>

    <main class="pt-16">