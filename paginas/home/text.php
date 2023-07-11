<?php 


//Sobre


function text($sub,$b,$margin,$classe,$estilo,$link){
$contador2 = 0;
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

if ($iphone || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) $dispositivo = "mobile";
else $dispositivo = "computador";  


if($dispositivo == "mobile"){
$contador2 = 1;
}else{
static $contador2 = 0;
$contador2++;
}

static $contador3 = 0;
$contador3++;

    if($contador2 === 1){
?>
        <section class=" my-3 container product-features p<?php echo $contador3; ?>" id="p<?php echo $contador3;?>" style=" <?php echo $estilo ?>margin-top: 2%" data-scroll-index="<?php echo $contador3 ?>" style="padding-bottom: <?php if($dispositivo != "mobile") echo($margin)?>px; padding-top: <?php if($dispositivo != "mobile") echo($margin)?>px;">
        <div class="row sameheight-container container" style="margin-left:0px;  <?php echo $estilo ?>">

        <div class="img-holder sameheight col-xs-12 col-sm-6 " style="margin-left:0px;">
                <img src="<?php echo $sub[3] ?>" style=" width: 100%; height: 100%; object-fit: cover; border-radius: 2%;" alt="image description" class="img-responsive">
            </div>
            <!-- Descr of the page -->
            <div class="col-xs-12 col-sm-6 descr sameheight">
                <div class="sameheight2 text-center">
                    <h1 class="titulo text-center"  ><?php echo $sub[0]; ?></h1>
                    <p class="" style="text-align: justify;"><?php echo $sub[2];?></p>
                </div>
                <?php if($b == 1) echo("<hr><a target='_blank' href='$link' class='btn btn-warning' style='border-radius: 15px; color:#ffffff; display: block;'>Saiba Mais</a>") ?>
                <?php if($b ===  2) echo("<hr><a target='_blank' href='$link' lass='btn btn-warning' style='border-radius: 15px; color:#ffffff; display: block;'>Realizar relato</a>") ?>              

            </div>
    
        </div>
    </section>


    <?php
        }
        else{
            ?>
            <section class=" my-3 container product-features p<?php echo $contador3; ?>" id="p<?php echo $contador3;?>" style=" <?php echo $estilo ?>margin-top: 2%" data-scroll-index="<?php echo $contador3 ?>" style="padding-bottom: <?php if($dispositivo != "mobile") echo($margin)?>px; padding-top: <?php if($dispositivo != "mobile") echo($margin)?>px;">
            <div class="row sameheight-container">
            <div class="col-xs-12 col-sm-6 descr sameheight" style="margin-left:0px;">
            <div class="sameheight2 text-center">
                <h1 class="titulo text-center"><?php echo $sub[0]; ?></h1>
                    <p style="text-align: justify;"><?php echo $sub[2];?></p>
                </div>
            </div>

            <div class="img-holder sameheight col-xs-12 col-sm-6 " style="margin-left:0px;">
            <img src="<?php echo $sub[3] ?>" style=" width: 100%; height: 100%; object-fit: cover; border-radius: 2%;" alt="image description" class="img-responsive">
            </div>
            <?php if($b == 1) echo("<hr><a target='_blank' href='$link' class='btn btn-warning' style='border-radius: 15px; color:#ffffff; display: block;'>Saiba Mais</a>") ?>
                <?php if($b ===  2) echo("<hr><a target='_blank' href='$link'class='btn btn-warning' style='border-radius: 15px; color:#ffffff; display: block;'>Realizar relato</a>") ?>                
                </div>
                </div>
        </section>

            <?php
    $contador2 = 0;    
    }
}
?>  
