<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="root">
   <div>
      <div class="Layout_Content__3SAqO">
         <header class="Toolbar_Toolbar__2pTQV">
            <div class="DrawerToggle_DrawerToggle__2f_XQ">
               <div></div>
               <div></div>
               <div></div>
            </div>
            <div class="Toolbar_Logo__3fJu1">
               <div class="Logo_Logo__37zrV"><img src="logo/logo.png" alt="My Burger"></div>
            </div>
            <nav class="Toolbar_DesktopOnly__1twaU">
               <ul class="NavigationItems_NavigationItems__1kYTE">
                  <li class="NavigationItem_NavigationItem__2MFnw"><a aria-current="page" class="NavigationItem_active__1qkL5" href="/">Burger Builder</a></li>
                  <li class="NavigationItem_NavigationItem__2MFnw"><a href="/login">Login</a></li>
               </ul>
            </nav>
         </header>
         <div class="SideDrawer_SideDrawer__2P7P5 SideDrawer_Close__12PoY">
            <div class="SideDrawer_Logo__3KDfp">
               <div class="Logo_Logo__37zrV"><img src="logo/logo.png" alt="My Burger"></div>
            </div>
            <nav>
               <ul class="NavigationItems_NavigationItems__1kYTE">
                  <li class="NavigationItem_NavigationItem__2MFnw"><a aria-current="page" class="NavigationItem_active__1qkL5" href="/">Burger Builder</a></li>
                  <li class="NavigationItem_NavigationItem__2MFnw"><a href="/login">Login</a></li>
               </ul>
            </nav>
         </div>
      </div>
      <main>
         <div class="Modal_Modal__2-MHQ" style="transform: translateY(-100vh); opacity: 0;"></div>
         <div class="Modal_Modal__2-MHQ" style="transform: translateY(-100vh); opacity: 0;">
            <h3>Your Order</h3>
            <p>A delicious burger with following ingredients :</p>
            <ul>
               <li><span style="text-transform: capitalize;">salad</span> : 0 </li>
               <li><span style="text-transform: capitalize;">bacon</span> : 0 </li>
               <li><span style="text-transform: capitalize;">cheese</span> : 0 </li>
               <li><span style="text-transform: capitalize;">meat</span> : 0 </li>
            </ul>
            <p><strong>Total Price : 4.00</strong></p>
            <p>Continue to Checkout?</p>
            <button class="Button_Button__2_yUN Button_Danger__22cxd">CANCEL</button><button class="Button_Button__2_yUN Button_Success__1YUK9">CONTINUE</button>
         </div>
         <div class="Burger_Burger__1bt4S">
            <div class="BurgerIngredients_BreadTop__1Tgt_">
               <div class="BurgerIngredients_Seeds1__3gHSL"></div>
               <div class="BurgerIngredients_Seeds2__1QdVy"></div>
            </div>
            <p>Please start adding ingredients !!!.</p>
            <div class="BurgerIngredients_BreadBottom__3qx0s"></div>
         </div>
         <div class="BuildControls_BuildControls__h_mQt">
            <p>Current Price : <strong>4.00</strong></p>
            <div class="BuildControl_BuildControl__1PzSL">
               <div class="BuildControl_Label__2ea1p">Salad</div>
               <button class="BuildControl_Less__3KFta" disabled="">Less</button><button class="BuildControl_More__3u6ga">More</button>
            </div>
            <div class="BuildControl_BuildControl__1PzSL">
               <div class="BuildControl_Label__2ea1p">Cheese</div>
               <button class="BuildControl_Less__3KFta" disabled="">Less</button><button class="BuildControl_More__3u6ga">More</button>
            </div>
            <div class="BuildControl_BuildControl__1PzSL">
               <div class="BuildControl_Label__2ea1p">Bacon</div>
               <button class="BuildControl_Less__3KFta" disabled="">Less</button><button class="BuildControl_More__3u6ga">More</button>
            </div>
            <div class="BuildControl_BuildControl__1PzSL">
               <div class="BuildControl_Label__2ea1p">Meat</div>
               <button class="BuildControl_Less__3KFta" disabled="">Less</button><button class="BuildControl_More__3u6ga">More</button>
            </div>
            <button class="BuildControls_OrderButton__1eKNn" disabled=""> SIGN UP FOR ORDER</button>
         </div>
      </main>
   </div>
</div>
<!-- 
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Burger Builder', 'url' => ['/site/index']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
              //   ['label' => 'Login', 'url' => ['/site/login']]
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div> -->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
