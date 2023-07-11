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
        margin-top: 15%;
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
    $local= "projetos";
    include_once('layout/menu.php');
    
    ?>


    <div class="container">
        <h1 class="titulo" style="display:block; ">Nossos Projetos</h1>


    </div>

    <?php
    
    $prodserv = array("Chronos Palace Hotel","a"
,"Chronos Palace Hotel é um empreendimento de luxo localizado em uma das regiões mais belas da Bahia. Com uma vista deslumbrante e um design arquitetônico único, Chronos Palace Hotel oferece aos seus hóspedes uma experiência única e inesquecível.<br><br>

Os quartos são espaçosos e elegantes, equipados com as melhores comodidades e tecnologias de última geração. Além disso, a equipe altamente treinada está sempre pronta para atender às necessidades dos hóspedes, oferecendo serviços personalizados e atenção aos detalhes.<br><br>

Chronos Palace Hotel também oferece uma ampla gama de opções gastronômicas, desde restaurantes sofisticados até bares com vista para o mar. Os hóspedes podem desfrutar de uma culinária de classe mundial enquanto admiram a vista deslumbrante.<br><br>

Além disso, o hotel possui uma série de instalações recreativas, incluindo uma piscina ao ar livre, um Spa de última geração e uma academia bem equipada.<br><br>

Em resumo, Chronos Palace Hotel é o lugar perfeito para quem procura uma experiência de luxo e sofisticação. Com sua localização privilegiada, serviços de alta qualidade e instalações de primeira classe, este hotel é o destino ideal para férias inesquecíveis.<br><br>

"
,"img/serv.jpg");




    text($prodserv,1,0,"section1","",""); 
    ?>
    <div class="container">
    <h6 class=" text-center">        
    Descubra o próximo nível de luxo com Wind Vane. Experimente um estilo de vida moderno, com o melhor do conforto, lazer e segurança - tudo em um só lugar.
    Nosso desenvolvimento ultramoderno oferece comodidades de ponta e layouts espaçosos para atender a todas as suas necessidades. 
    Desfrute de um ambiente seguro e tranquilo enquanto está conectado à energia vibrante da cidade.</h6>
    </div>
    
    <?php  

include_once("layout/rodape.php")
?>

