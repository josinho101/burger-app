<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="burger-wrapper">
    <div class="Burger">
        <div class="BurgerIngredients BreadTop">
            <div class="BurgerIngredients Seeds1"></div>
            <div class="BurgerIngredients Seeds2"></div>
        </div>
            <p id="welcomeMsg" class="Message">Please start adding ingredients !!!.</p>
        <div class="BurgerIngredients BreadBottom"></div>
    </div>
    <div class="BuildControls">
        <p>Current Price : <strong id="lblCost">4.00</strong></p>
        <div class="BuildControl">
            <div class="Label">Salad</div>
            <input type="hidden" id="saladPrice" value=<?= $price['Salad'] ?> />
            <button id="lessSalad" class="Less" disabled="" onclick="lessSalad()">Less</button>
            <button id="moreSalad" class="More" onclick="addSalad()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Cheese</div>            
            <input type="hidden" id="cheesePrice" value=<?= $price['Cheese'] ?> />
            <button id="lessCheese" class="Less" disabled="" onclick="lessCheese()">Less</button>
            <button class="More" onclick="addCheese()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Bacon</div>            
            <input type="hidden" id="baconPrice" value=<?= $price['Bacon'] ?> />
            <button id="lessBacon" class="Less" disabled="" onclick="lessBacon()">Less</button>
            <button class="More" onclick="addBacon()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Meat</div>
            <input type="hidden" id="meatPrice" value=<?= $price['Meat'] ?> />
            <button id="lessMeat" class="Less" disabled="" onclick="lessMeat()">Less</button>
            <button class="More" onclick="addMeat()">More</button>
        </div>
        <button class="OrderButton" disabled="" id="btnOrder">
            ORDER NOW
        </button>
    </div>
</div>
