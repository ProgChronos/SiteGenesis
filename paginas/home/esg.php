
<?php 

        function imgcontainer($img,$dispositivo,$text,$text2,$estilo){
?>
        <div class="py-2" style='<?php if($dispositivo == "mobile") echo("margin: 50px 0;")?>'>
        <div class="container">
        <?php if($text) echo("<h1 class='titulo container'>".$text2."</h1>")?>
        </div>
                <div class="container " style="display: flex;justify-content: center;align-items: center; ">
                        <img src="<?php echo $img?>" class="img-fluid <?php echo $estilo?>" >
                </div>
                </div>
<?php 
        }
?>