<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="Burger">
    <div class="BurgerIngredients BreadTop">
        <div class="BurgerIngredients Seeds1"></div>
        <div class="BurgerIngredients Seeds2"></div>
    </div>
        <p id="welcomeMsg" class="Message">Please start adding ingredients !!!.</p>
    <div class="BurgerIngredients BreadBottom"></div>
</div>
<div class="BuildControls">
    <p>Current Price : <strong>4.00</strong></p>
    <div class="BuildControl">
        <div class="Label">Salad</div>
        <button id="lessSalad" class="Less" disabled="" onclick="lessSalad()">Less</button>
        <button id="moreSalad" class="More" onclick="addSalad()">More</button>
    </div>
    <div class="BuildControl">
        <div class="Label">Cheese</div>
        <button id="lessCheese" class="Less" disabled="" onclick="lessCheese()">Less</button>
        <button class="More" onclick="addCheese()">More</button>
    </div>
    <div class="BuildControl">
        <div class="Label">Bacon</div>
        <button id="lessBacon" class="Less" disabled="" onclick="lessBacon()">Less</button>
        <button class="More" onclick="addBacon()">More</button>
    </div>
    <div class="BuildControl">
        <div class="Label">Meat</div>
        <button id="lessMeat" class="Less" disabled="" onclick="lessMeat()">Less</button>
        <button class="More" onclick="addMeat()">More</button>
    </div>
    <button class="OrderButton" disabled="" id="btnOrder">
        SIGN UP FOR ORDER
    </button>
</div>
