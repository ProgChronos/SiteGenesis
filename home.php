<?php 
    include_once('function.php');

    include_once('layout/topo.php');
    $local= "home";

    include_once('layout/menu.php');

    ?>
    <div class="containers">
    
    
    <?php
    include_once('paginas/home/carrosel.php');

    $carrosel = array (
        array(
            "img/testimonial-1.jpg",
            "teste2"
        ),
        array(
            "img/testimonial-2.jpg",
            "teste4"
        ),
        array(
            "img/testimonial-3.jpg",
            "teste2"
        ),
        array(
            "img/testimonial-4.jpg",
            "teste4"
        ),);
        
$genesis = array("A Gênesis","a"
,"<b>A Gênesis Holding Group</b> tem por finalidade a criação e inovação direcionada a expansão.<br><br>

Suas atividades geram empregos e renda para o mundo, o Brasil e os brasileiros.
A Holding é a controladora  da Mais TV, ONG AMAR, Posto Shell Fraga Maia.<br><br>
 
<b>A GÊNESIS HOLDING GROUP OF BRAZIL S/A</b>, é a controladora de todas as empresas do <b>GÊNESIS GROUP  S/A</b>, ela é a representante direta dos interesses dos  ACIONISTAS e INVESTIDORES no GRUPO.
"
,"img/prediomockup.png");

$prodserv = array("Produtos e Serviços","a"
,"Projetar, planejar e executar obras de infraestrutura (estradas, vias urbanas, pontes, túneis, ferrovias, metrôs, pistas de aeroportos, portos e projetos de abastecimento de água, sistemas de irrigação, 
sistemas de esgoto, instalações industriais, redes de transporte por dutos e linhas de eletricidade. <br><br>

Reformar e alterar obras de infraestrutura e a construção de estruturas pré-fabricadas in loco para fins diversos, de natureza permanente ou temporária.<br><br>

Realização de empreendimentos imobiliários, residenciais ou não, provendo recursos financeiros, técnicos e materiais para a sua execução e posterior venda (incorporação imobiliária). A execução de obras por empreitada ou subempreitada<br><br>

Efetuar construção ou reforma de edifícios de todos os tipos (residenciais, comerciais, industriais, agropecuários, públicos), complementações e alterações de imóveis, a montagem
 de estruturas de casas e edifícios pré-fabricadas in loco para fins 
diversos de natureza  permanente ou temporária. <br><br>
"
,"img/serv.jpg");



    text($genesis,1,0,"section1","",""); 
    text($prodserv,0,0,"section2","",""); 

include_once("paginas/home/esg2.php");
carrosel($carrosel,"img/carrosel/");    

    
?>

<style>
     .globe-container {
        display: flex;
        justify-content: center;
    }
    @media only screen and (max-width: 600px) {
        .globe {
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background-image: url('img/terra2.png');
        background-size: cover;
        box-shadow: -25px -25px 25px black inset, 5px 5px 30px white inset, 0px 0px 20px #DCAF34;
        animation: rotate 35s linear infinite;
    }
  }
  
  /* Estilos para a visualização em PC */
  @media only screen and (min-width: 601px) {
    .globo img{
    padding-top: 2%;
    overflow: hidden;
  }
   
    .globe {
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background-image: url('img/terra2.png');
        background-size: cover;
        box-shadow: -25px -25px 25px black inset, 5px 5px 30px white inset, 0px 0px 20px #DCAF34;
        animation: rotate 20s linear infinite;
    }

   
  }

    
    
    
    @keyframes rotate {
        to {
            background-position: 100%;
        }
    }
</style>

<div class="text-center globo">
    <h1 class="titulo">Presença Global</h1>
    <div class="globe-container">
        <div class="globe"></div>

    </div>
    <img src="img/GLOBO GENESIS2.png" class="img-fluid" alt="" srcset="">

</div>

<?php
    include_once('layout/rodape.php');
    
?>