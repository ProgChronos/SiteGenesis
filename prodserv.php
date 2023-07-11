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
    $local= "prodserv";
    include_once('layout/menu.php');
    
    ?>


    <div class="container">
        <h1 class="titulo" style="display:block; ">Produtos & Serviços</h1>
<h6 class="lead">        <span class="bullet"></span>
Nossos produtos e serviços que oferecemos a sua empresa.</h6>

    </div>

    <?php
    
    $prodserv = array("Construção civil","a"
,"Projetar, planejar e executar obras de infraestrutura (estradas, vias urbanas, pontes, túneis, ferrovias, metrôs, pistas de aeroportos, portos e projetos de abastecimento de água, sistemas de irrigação, 
sistemas de esgoto, instalações industriais, redes de transporte por dutos e linhas de eletricidade. <br><br>

Reformar e alterar obras de infraestrutura e a construção de estruturas pré-fabricadas in loco para fins diversos, de natureza permanente ou temporária.<br><br>

Realização de empreendimentos imobiliários, residenciais ou não, provendo recursos financeiros, técnicos e materiais para a sua execução e posterior venda (incorporação imobiliária). A execução de obras por empreitada ou subempreitada<br><br>

Efetuar construção ou reforma de edifícios de todos os tipos (residenciais, comerciais, industriais, agropecuários, públicos), complementações e alterações de imóveis, a montagem
 de estruturas de casas e edifícios pré-fabricadas in loco para fins 
diversos de natureza  permanente ou temporária. <br><br>
"
,"img/construction-silhouette.jpg");

$prodserv2 = array("Incorporação imobiliária","a"
,"Incorporações e partições em empreendimentos imobiliários, projetos corporativos e sociais; 
      
Identificar oportunidades de investimento em terrenos, avaliar as condições de mercado e desenvolver projetos que atendam às necessidades e expectativas dos compradores.<br><br>

Garantir que o projeto seja construído de acordo com as especificações e normas técnicas, bem como pela garantia da qualidade do empreendimento.

Negociar com compradores, realizar a venda de unidades e administrar a documentação necessária. <br><br>

Pós-venda, como assistência técnica e garantia dos imóveis vendidos.

garantia da qualidade e segurança dos imóveis vendidos, bem como na satisfação dos compradores.<br><br>
"
,"img/real-estate-business-residential-rental-investment.jpg");

$prodserv3 = array("Ativos","a"
,"Participação no capital de outras sociedades, como sócia, como acionista ou como consorciada<br><br>
Participar, adquirindo, fornecendo, alugando e ou vendendo ativos mobiliários, imobiliários, ativos financeiros e outros, em operações estruturadas junto a bolsas de valores e ou
 fundos de investimentos nacionais e ou internacionais;<br><br>


 Negociar contratos de títulos de sociedades de capitalização. Criar, coletar, intermediar
 e redistribuir recursos financeiros próprios ou de terceiros sob sua responsabilidade.<br><br>
 
 A organização, participação, administração e ou gestão, sob qualquer forma,
 em sociedades e negócios de qualquer natureza, na qualidade de sócia ou acionista<br><br>

 
"
,"img/aerial-view-business-data-analysis-graph.jpg");

$prodserv4 = array("Consultoria e acessoria","a"
,"Prestação de serviços de assessoria e consultoria econômica, financeira, contábil e tributária
      
Consultoria e assessoria mercadológica, empresarial, jurídica, tributária e financeira, cadastros.<br><br>

Planejamentos, formação e criação projetos estruturais de negócios e análises de riscos;

Negociar contratos de títulos de sociedades de capitalização. <br><br>

Criar, coletar, intermediar e redistribuir recursos financeiros próprios ou de terceiros sob sua responsabilidade

Administração, comercialização e de gestão de produtos e serviços.<br><br>
"
,"img/business-people-discussing-ideas-meeting-using-laptop-office.jpg");

$prodserv5 = array("Administração e Gestão","a"
,"Participação no capital de outras sociedades, como sócia, como acionista ou como consorciada
Participar, adquirindo, fornecendo, alugando e ou vendendo ativos mobiliários, imobiliários, ativos financeiros e outros, em operações estruturadas junto a bolsas de valores e ou
 fundos de investimentos nacionais e ou internacionais;<br><br>


 Negociar contratos de títulos de sociedades de capitalização. Criar, coletar, intermediar
 e redistribuir recursos financeiros próprios ou de terceiros sob sua responsabilidade.<br><br>
 
 A organização, participação, administração e ou gestão, sob qualquer forma,
 em sociedades e negócios de qualquer natureza, na qualidade de sócia ou acionista<br><br>


"
,"img/elegant-man-suit-showing-two-partners-paper.jpg");


    text($prodserv,0,0,"section1","",""); 
    text($prodserv2,0,0,"section1","",""); 
    text($prodserv3,0,0,"section1","",""); 
    text($prodserv4,0,0,"section1","",""); 
    text($prodserv5,0,0,"section1","",""); 

include_once("layout/rodape.php")
?>

