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
        <button class="OrderButton" disabled="" id="btnOrder" data-toggle="modal" data-target="#orderModal">
            ORDER NOW
        </button>
    </div>
</div>

<!-- Modal -->
<div id="orderModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <b>Your Order</b>
        <p>A delicious burger with following ingredients :</p>
        <ul>
            <li>Salad : <span id='salad-count' >0</span></li>
            <li>Bacon : <span id='bacon-count' >0</span></li>
            <li>Cheese: <span id='cheese-count' >0</span></li>
            <li>Meat  : <span id='meat-count' >0</span></li>
        </ul>
        <b>Total Price : <span id='modalLblCost' ></span></b>
        <p>Continue to Checkout?</p>
        <button type="button" class="Button Danger" data-dismiss="modal">CANCEL</button>
        <button class="Button Success">CONTINUE</button>
      </div>
    </div>

  </div>
</div>
