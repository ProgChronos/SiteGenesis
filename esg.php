<?php 
    include_once('function.php');

    include_once('layout/topo.php');
    
?>
<style>
    @media only screen and (max-width: 600px) {
    /* Adicione aqui os estilos específicos para celular */
    body{
        margin-top: 40%;
    }
  }
  
  /* Estilos para a visualização em PC */
  @media only screen and (min-width: 601px) {
    body{
        margin-top: 8%;
    }
  }
   
    .bullet {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #EEC04A;
        margin-right: 5px;
    }
</style>
<?php
    $local= "esg";
    include_once('layout/menu.php');
    
    ?>


    <div class="container my-5">
        <h1 class="titulo" style="display:block; ">ESG</h1>
<h6 class="lead">        <span class="bullet"></span>
Enviromental, Social e Governance </h6> <small>Governança ambiental, Social e Corporativa</small>

    </div>

    <?php
    include_once("paginas/home/esg2.php");
    $prodserv = array("Mas o que é ESG?","a"
,"<b>A Genesis Holding Group</b> tem como compromisso adotar práticas <b>ESG (Ambiente, Social e Governança)</b> em todas as suas operações. Nós acreditamos que o desenvolvimento sustentável é crucial para o sucesso a longo prazo e para a construção de um futuro melhor para as comunidades em que atuamos.<br><br>

O objetivo é estimular o crescimento econômico, descentralizar conhecimento e cultura, bem como conservar os recursos naturais e deixar um legado para as gerações futuras.<br><br>

Para isso, é necessário que haja uma <b>harmonização entre o desenvolvimento econômico, a preservação do meio ambiente, a justiça social</b>, a qualidade de vida e o uso racional de recursos naturais.<br><br>
Em relação ao meio ambiente, nós implementamos medidas para minimizar o impacto de nossas obras, como o gerenciamento de resíduos, a utilização de fontes de energia renovável e a preservação de áreas verdes. Além disso, trabalhamos com fornecedores e parceiros para garantir que eles também sigam padrões ambientais rigorosos.<br><br>

No que diz respeito à questão social, nós valorizamos a diversidade e a inclusão em nossa equipe e trabalhamos para garantir condições seguras e saudáveis de trabalho para nossos funcionários. Nós também nos esforçamos para minimizar o impacto de nossas obras na vida das comunidades locais, sejam elas financeiras ou sociais, e para incluir a participação local em nossos projetos.<br><br>

Por fim, a governança é um componente-chave de nossa abordagem <b>ESG</b>. Nós promovemos a transparência em todas as nossas atividades e decisões, além de garantir a integridade em nossos negócios. Nós também nos guiamos por princípios éticos e valores corporativos elevados, e trabalhamos para criar uma cultura de responsabilidade em nossa empresa.<br><br>
"
,"img/esg-concept-nature-meet-technology-green-energy-renewable-and-sustainable-resources-environmental-and-ecology-care-hand-embracing-green-leaf-and-globe.png");


    text($prodserv,0,0,"section1","",""); 
?>
<div class="container">

<div class="container-fluid mt-5 bg-dark" style="border-radius: 20px;">
<div class="row">

<div class="col-lg-3 col-md-12 mb-4">
    <div class="container pt-1 pb-3">
        <div class="text-center">
            <h3 class="text-light pt-3 ">Passo A</h3>
        </div>
        <div class="accordion show" id="environmental-accordion">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header" id="diversity-heading">
                            <h2 class="mb-0 text-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#diversity-collapse2" aria-expanded="false" aria-controls="diversity-collapse">
                                <i class="bi bi-arrow-90deg-down"></i> Ecologico 
                                </button>
                            </h2>
                        </div>
                        <div id="diversity-collapse2" class="collapse" aria-labelledby="diversity-heading" data-parent="#environmental-accordion">
                           <p class="text-center px-5 pt-2">Cuidar, preservar e proteger os recursos
não-renováveis. Fomentar a produção e 
consumo de recurso renovavél</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-12 mb-4">

<div class="container-fluid">
<div class="container pt-1 pb-3">
        <div class="text-center">
            <h3 class="text-light pt-3 ">Passo B</h3>
        </div>
        <div class="accordion show" id="social-accordion">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header" id="diversity-heading">
                            <h2 class="mb-0 text-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#diversity-collapse" aria-expanded="true" aria-controls="diversity-collapse">
                                <i class="bi bi-arrow-90deg-down"></i>   Política
                                </button>
                            </h2>
                        </div>
                        <div id="diversity-collapse" class="collapse"  aria-labelledby="diversity-heading" data-parent="#social-accordion">
                            <div class="card-body">
                            <p class="text-center px-2 pt-2">Engajamento na disseminação e respeito
aos direitos da declaração universal dos
direitos humanos. Cooperação tecnológica
e científica entre instituições, empresas
e nações</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-lg-3 col-md-12 mb-4">

<div class="container-fluid">
<div class="container pt-1 pb-3">
        <div class="text-center">
            <h3 class="text-light pt-3 ">Passo C</h3>
        </div>
        <div class="accordion show" id="social-accordion">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header" id="diversity-heading">
                            <h2 class="mb-0 text-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#diversity-collapse9" aria-expanded="true" aria-controls="diversity-collapse">
                                <i class="bi bi-arrow-90deg-down"></i>   Ambiental
                                </button>
                            </h2>
                        </div>
                        <div id="diversity-collapse9" class="collapse"  aria-labelledby="diversity-heading9" data-parent="#social-accordion">
                            <div class="card-body">
                            <p class="text-center px-4 pt-2">Consiste na busca pelo equilíbrio da
satisfação das necessidades fundamentais
humanas e a restauração dos ecossistemas
naturais.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="col-lg-3 col-md-12 mb-4">

<div class="container-fluid">
<div class="container pt-1 pb-3">
        <div class="text-center">
            <h3 class="text-light pt-3 ">Passo D</h3>
        </div>
        <div class="accordion show" id="governance-accordion">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-header" id="governance-heading">
                            <h2 class="mb-0 text-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#governance-collapse" aria-expanded="true" aria-controls="governance-collapse">
                                <i class="bi bi-arrow-90deg-down"></i> Econômica
                                </button>
                            </h2>
                        </div>
                        <div id="governance-collapse" class="collapse" aria-labelledby="governance-heading" data-parent="#governance-accordion">
                            <div class="card-body">
                            <p class="text-center px-4 pt-2">Abrange as categorias que promovam
iniciativas de desenvolvimento, local,
econômica solidária, produção e consumo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>

</div></div></div></div></div>
<?php
include_once("layout/rodape.php")
?>

