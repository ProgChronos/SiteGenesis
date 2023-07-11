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
    $local= "compliance";
    include_once('layout/menu.php');
    
    ?>


    <div class="container my-5">
        <h1 class="titulo" style="display:block; ">Compliance</h1>
      

    </div>

    <?php
    $prodserv = array("Nosso canal","a"
,"Nosso canal ético é um aspecto fundamental da gestão de nossa empresa. Nele definimos valores e princípios e estabelecemos uma cultura de integridade e transparência. <b>A Gênesis Holding Group S/A</b> segue princípios éticos e é transparente em suas ações e decisões.<br><br>


Isso inclui respeito às leis e regulamentos, responsabilidade social e ambiental e tratamento justo e equitativo de todos os envolvidos em nossos negócios, incluindo colaboradores, clientes, fornecedores e comunidades locais.<br><br>


Nossos princípios de ética são importantes para gerenciar conflitos de interesse e resolver questões comerciais complexas. Uma empresa de construção ética deve ser sensível às preocupações das partes interessadas e buscar soluções justas e equitativas para todas as partes envolvidas.<br><br>


Além disso, é fundamental para construir e manter uma boa reputação, garantir a confiança de clientes e colaboradores e proteger a integridade da empresa.<br><br>


Um compromisso com a ética ajuda a proteger contra potenciais riscos legais e financeiros e constrói relacionamentos de longo prazo com as partes interessadas.<br><br>


Em suma, é extremamente vital para o sucesso de longo prazo de uma empresa. A implementação do nosso canal de ética visa construir e manter uma boa reputação, garantir a confiança das partes interessadas e proteger a integridade de ambas as partes.
<br><br>
"
,"img/closeup-of-diverse-people-joining-their-hands.png ");

$prodserv2 = array("Proteção geral de dados (LGPD).","a"
,"Nosso canal de proteção de dados é estritamente sigiloso no que tange o manuseio de informações. Todos os dados serão tratados pela nossa equipe assegurando tratamento especializado e totalmente adaptável a qualquer tipo de situação. <br><br>

Toda via, por questões de segurança, não disponibilizamos nenhum detalhe sobre o andamento dos processos iniciados conosco. Para casos específicos, disponibilizamos um número serial que pode ser utilizado para realizar determinadas verificações.<br><br>
"
,"img/green-master-key-black-keyboard-computer-security-privacy-concept_Easy-Resize.com.jpg");


    text($prodserv,0,0,"section1","",""); 
    text($prodserv2,2,0,"section1","","");  

?>

<?php
include_once("layout/rodape.php")
?>

