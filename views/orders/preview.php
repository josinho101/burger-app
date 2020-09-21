<?php
    $session = Yii::$app->session;

?>
<div class="Burger_checkout">
    <div class="BreadTop">
        <div class="Seeds1"></div>
        <div class="Seeds2"></div>
    </div>
    <?php
        if ($session['ingredients']['salad']){     
            for( $i=1;$i<=$session['ingredients']['salad'];$i++ ){
    ?>
    <div class="Salad"></div>
    <?php 
        }
    }
        if ($session['ingredients']['cheese']){
            for( $i=1;$i<=$session['ingredients']['cheese'];$i++ ){
        
    ?>
    <div class="Cheese"></div>
    <?php
        }
    }
        if ($session['ingredients']['bacon']){
            for( $i=1;$i<=$session['ingredients']['bacon'];$i++ ){
    ?>
    <div class="Bacon"></div>
    <?php
        }
    }
    if ($session['ingredients']['meat']){
        for( $i=1;$i<=$session['ingredients']['meat'];$i++ ){
    ?>
    <div class="Meat"></div>
    <?php
        }
    }    
    ?>
    <div class="BreadBottom"></div>
</div>