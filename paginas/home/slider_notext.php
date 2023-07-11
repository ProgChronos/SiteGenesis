<?php 
    function carrosel($array,$local){
        $vezes = count($array);
        ?>
        <div class="container-fluid py-2">
        <div class="container py-5">
        <h1 class="titulo ">Nossas Empresas</h1>

    <div class="owl-carousel testimonial-carousel">
<?php
 
 $path = $local;
  $diretorio = dir($path);
  
  while($arquivo = $diretorio -> read()){
  $ar = $path.$arquivo;

  
  if (strlen($arquivo)>2) {

  
?>
    <div class="text-center pb-1">
        <img class="img-fluid" src="<?php echo($ar)?>" style="width: 100%; height: 100%; border-radius:5%; margin: 0px;;" >
           
            
        </div>
<?php

}}
$diretorio -> close();

?>
        </div>
        </div>
    </div>
        <?php
    }
?>
