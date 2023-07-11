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
    $local= "xclusiveah";
    include_once('layout/menu.php');
    
    ?>


    <div class="container">
        <h1 class="titulo" style="display:block; ">Nossos Projetos</h1>


    </div>

    <?php
    
    $prodserv = array("Xclusive Apart Hotel","a"
,"Um local perfeito para as pessoas mais exigentes. Nossos quartos elegantemente decorados oferecem o máximo em conforto e privacidade. Além disso, você terá acesso às nossas completas áreas de lazer, perfeitas para relaxar e descontrair após um longo dia. Nossa equipe altamente treinada está pronta para atender a todas as suas necessidades, proporcionando um serviço impecável.
<br><br>
Localizado em uma região privilegiada, o <b>Xclusive Apart Hotel</b> oferece fácil acesso a atrações locais e importantes centros comerciais. Permita-nos tornar a sua estadia memorável com nossa dedicação inigualável ao seu conforto e satisfação.<br><br>

Expandindo para atender às suas necessidades, também oferecemos uma ampla gama de serviços e comodidades, como:<br><br>

<ul style='text-align: justify;'>
    <li>Restaurantes e bares sofisticados com opções gastronômicas variadas<br></li>
    <li>Spa de luxo com tratamentos relaxantes e revigorantes<br></li>
    <li>Academia moderna e bem equipada para se exercitar<br></li>
    <li>Salas de reuniões e eventos para suas necessidades corporativas<br></li>
    <li>Serviço de concierge para ajudar com todas as suas solicitações e planejamentos<br></li>
</ul>
<p style='text-align: justify;'>
No <b>Xclusive Apart Hotel</b>, o seu conforto e satisfação são as nossas principais prioridades. Estamos empenhados em proporcionar a você uma experiência inesquecível, garantindo que cada detalhe seja cuidado com perfeição. Desfrute de uma estadia de luxo e comodidade no nosso estabelecimento.
<br><br>
</p>
"
,"img/xclusive.jpg");




    text($prodserv,1,0,"section1","","https://xclusive.institutochronos.com/"); 
    ?>
    
    
    <?php  

include_once("layout/rodape.php")
?>

