<?php 
    function carrosel($array){
        $vezes = count($array);
        ?>
        <div class="container-fluid py-5">
        <div class="container py-5">
    <div class="owl-carousel testimonial-carousel">
<?php
    for ($i= 0; $i != $vezes;$i++){
        
?>
    <div class="text-center pb-4">
        <img class="img-fluid mx-auto" src="<?php echo $array[$i][0]?>" style="width: 100%; height: 100%; border-radius:5%;" >
            <div class="testimonial-text bg-white p-4 mt-n5" style="border-radius:5%;">
                <p class="mt-5"><?php echo $array[$i][1]?></p>
            </div>
            
        </div>
<?php
    }

?>
        </div>
        </div>
    </div>
        <?php
    }
    carrosel($carrosel);
?>
