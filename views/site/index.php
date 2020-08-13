<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<main>
    <div class="Burger">
        <div class="BurgerIngredients BreadTop">
            <div class="BurgerIngredients Seeds1"></div>
            <div class="BurgerIngredients Seeds2"></div>
        </div>
        <p class="Message">Please start adding ingredients !!!.</p>
        <div class="BurgerIngredients BreadBottom"></div>
    </div>
    <div class="BuildControls">
        <p>Current Price : <strong>4.00</strong></p>
        <div class="BuildControl">
            <div class="Label">Salad</div>
            <button class="Less" disabled="">Less</button>
            <button class="More">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Cheese</div>
            <button class="Less" disabled="">Less</button>
            <button class="More">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Bacon</div>
            <button class="Less" disabled="">Less</button>
            <button class="More">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Meat</div>
            <button class="Less" disabled="">Less</button>
            <button class="More">More</button>
        </div>
        <button class="OrderButton" disabled="">
            SIGN UP FOR ORDER
        </button>
    </div>
</main>
