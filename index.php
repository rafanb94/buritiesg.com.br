<?php
require __DIR__ . '/config.php';

$url = $_GET['url'] ?? '';
$url = trim($url, '/');

$routes = [

    // HOME
    '' => 'pages/home.php',

    // PRINCIPAIS
    'sobre-nos'  => 'pages/sobre-nos.php',
    'blog'       => 'pages/blog.php',
    'nossa-plataforma' => 'pages/nossa-plataforma.php',

    // SERVIÇOS FINANCEIROS
    'servicos-financeiros/produtos-financeiros-sustentaveis'
        => 'pages/servicos-financeiros/produtos-financeiros-sustentaveis.php',
    'servicos-financeiros/esg-em-analise-de-credito'
        => 'pages/servicos-financeiros/esg-em-analise-de-credito.php',
    'servicos-financeiros/consultoria-esg-para-investidores'
        => 'pages/servicos-financeiros/consultoria-esg-para-investidores.php',

    // SERVIÇOS DETALHADOS
    'servicos-detalhados/conformidade-e-riscos-socioambientais'
        => 'pages/servicos-detalhados/conformidade-e-riscos-socioambientais.php',
    'servicos-detalhados/estrategias-esg-e-governança'
        => 'pages/servicos-detalhados/estrategias-esg-e-governança.php',
    'servicos-detalhados/treinamento-e-engajamento'
        => 'pages/servicos-detalhados/treinamento-e-engajamento.php',

    // NOSSOS DIFERENCIAIS
    'nossos-diferenciais/expertise-no-mercado-financeiro'
        => 'pages/nossos-diferenciais/expertise-no-mercado-financeiro.php',
    'nossos-diferenciais/track-record-comprovado'
        => 'pages/nossos-diferenciais/track-record-comprovado.php',
    'nossos-diferenciais/atuacao-estrategica'
        => 'pages/nossos-diferenciais/atuacao-estrategica.php',
];

if (array_key_exists($url, $routes)) {
    require $routes[$url];
    exit;
}

// 404 genérica
http_response_code(404);
echo 'Página não encontrada';
