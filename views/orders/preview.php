
<div class="Burger_checkout">
    <div class="BreadTop">
        <div class="Seeds1"></div>
        <div class="Seeds2"></div>
    </div>
    <?php
        if ($ingredients['salad']){     
            for( $i=1;$i<=$ingredients['salad'];$i++ ){
    ?>
    <div class="Salad"></div>
    <?php 
        }
    }
        if ($ingredients['cheese']){
            for( $i=1;$i<=$ingredients['cheese'];$i++ ){
        
    ?>
    <div class="Cheese"></div>
    <?php
        }
    }
        if ($ingredients['bacon']){
            for( $i=1;$i<=$ingredients['bacon'];$i++ ){
    ?>
    <div class="Bacon"></div>
    <?php
        }
    }
    if ($ingredients['meat']){
        for( $i=1;$i<=$ingredients['meat'];$i++ ){
    ?>
    <div class="Meat"></div>
    <?php
        }
    }    
    ?>
    <div class="BreadBottom"></div>
</div>