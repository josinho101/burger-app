<?php

/* @var $this yii\web\View */

<<<<<<< HEAD
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

=======
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
            <input type="hidden" id="saladPrice" value=<?= $price['salad'] ?> />
            <button id="lessSalad" class="Less" disabled="" onclick="lessSalad()">Less</button>
            <button id="moreSalad" class="More" onclick="addSalad()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Cheese</div>            
            <input type="hidden" id="cheesePrice" value=<?= $price['cheese'] ?> />
            <button id="lessCheese" class="Less" disabled="" onclick="lessCheese()">Less</button>
            <button class="More" onclick="addCheese()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Bacon</div>            
            <input type="hidden" id="baconPrice" value=<?= $price['bacon'] ?> />
            <button id="lessBacon" class="Less" disabled="" onclick="lessBacon()">Less</button>
            <button class="More" onclick="addBacon()">More</button>
        </div>
        <div class="BuildControl">
            <div class="Label">Meat</div>
            <input type="hidden" id="meatPrice" value=<?= $price['meat'] ?> />
            <button id="lessMeat" class="Less" disabled="" onclick="lessMeat()">Less</button>
            <button class="More" onclick="addMeat()">More</button>
        </div>
        <button class="OrderButton" disabled="" id="btnOrder">
            ORDER NOW
        </button>
>>>>>>> bd41d8ae44bb8503263252db26753b8281aa723a
    </div>
</div>
