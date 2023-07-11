<?php 
    include_once('function.php');

    include_once('layout/topo.php');
    $local= "genesis";
    include_once('layout/menu.php');

    $genesis = array("Gênesis - Holding Group Of Brazil S/A","a"
    ,"<b>A GÊNESIS HOLDING GROUP OF BRAZIL S/A</b>, é a controladora de todas as empresas do <b>GÊNESIS GROUP  S/A</b>, ela é a representante direta dos interesses dos 
     ACIONISTAS e INVESTIDORES no GRUPO.<br><br>

    Além de ser a responsável por nortear, direcionar e estabelecer todas as regras, normas negocias e todas as metas a serem alcançadas pelo <b>GRUPO GÊNESIS</b>.<br><br>
    
    <b>A Gênesis</b> é uma Sociedade Anônima de capital fechado, 100,00%<br><br>
     (cem por cento) brasileira, devidamente registrada em todos os órgãos competentes brasileiros,  estabelecida como responsável em :<br><br>
     Participar, adquirindo, fornecendo, alugando e ou vendendo ativos mobiliários, imobiliários, ativos financeiros e outros, em operações estruturadas junto a bolsas de valores e ou fundos de investimentos nacionais e ou internacionais; 
    "
    ,"img/serv.jpg");

    $genesis2 = array("","a"
    ,"Consultoria mercadológica: Análise de mercado, estratégias de marketing, identificação de oportunidades de negócio e análise de concorrência.<br>

    Consultoria empresarial: Assessoria na gestão de empresas, melhoria de processos, planejamento estratégico, desenvolvimento de planos de negócio e análise de viabilidade.<br>
    
    Consultoria jurídica: Orientação legal, análise de contratos, assessoria em questões jurídicas relacionadas aos negócios da empresa e solução de litígios.<br>
    <br>
    Consultoria tributária: Assessoria na área fiscal, planejamento tributário, análise de impacto fiscal em transações comerciais e otimização de impostos.<br>
    
    Consultoria financeira: Análise financeira, gestão de recursos, planejamento financeiro, estruturação de investimentos e análise de riscos.<br><br>
    
    Além disso, a empresa está envolvida em operações financeiras, como aquisição, venda, aluguel e fornecimento de ativos mobiliários, imobiliários e financeiros, em colaboração com bolsas de valores e fundos de investimento nacionais e internacionais.
    
    A negociação de contratos de títulos de sociedades de capitalização também faz parte dos serviços oferecidos, assim como a criação, coleta, intermediação e redistribuição de recursos financeiros próprios ou de terceiros sob a responsabilidade da empresa.<br><br>
    
    A empresa também realiza incorporações e divisões em empreendimentos imobiliários, além de se envolver em projetos corporativos e sociais.<br><br>
    
    Por fim, a empresa possui expertise na construção, reforma e montagem de edifícios de diversos tipos, como residenciais, comerciais, industriais, agropecuários e públicos. Isso inclui complementações e alterações de imóveis, bem como a montagem de estruturas de casas e edifícios pré-fabricadas in loco, para fins permanentes ou temporários.
    
    Essas são as áreas de atuação e serviços oferecidos pela empresa, abrangendo uma ampla gama de necessidades relacionadas a consultoria, assessoria e operações no mercado empresarial e financeiro.<br><br>
     "
    ,"img/MÃO GENESIS.png");
    
    

    text($genesis,0,90,"","margin-top: 18vh;",""); 
    text($genesis2,0,90,"","",""); 

    ?>
        <h5 class="text-center">
        <em>" O Universo é uma grande história ainda sendo escrita,
e o Gênesis é o inicio de tudo."</em>
        </h5>

    <?php

        imgcontainer("img/arvore.png",$dispositivo,1,"Identidade Organizacional ","");
        imgcontainer("",$dispositivo,1,"Linha do tempo do livro de Gênesis    ","");
    
        ?>
        <div class="container text-center mx-auto">
        <h1 class="btn btn-warning text-center" style="display: block;  border-radius: 0% !important;" ><a href="linhadotempo" class="text-center" style="color: aliceblue; display: block;">Saiba mais</a></h1>

        </div>
        <?php
        imgcontainer("img/Grupo 93.png",$dispositivo,1,"","");



    include_once("layout/rodape.php");