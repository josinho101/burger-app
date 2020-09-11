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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;display=swap" rel="stylesheet"/>
     <title>Burger App - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="root">
   <div>
      <div class="Layout Content">
         <header class="Toolbar">
            <div class="Logo">
                <img src="logo/logo.png" alt="Burger app"/>
            </div>
            <nav>
                <ul class="NavigationItems">
                    <li class="NavigationItem">
                        <a class="active" aria-current="page" href="/">Burger Builder</a>
                    </li>
                    <li class="NavigationItem">
                        <a href="/orders">Orders</a>
                    </li>
                    <li class="NavigationItem">
                        <a href="/logout">Logout</a>
                    </li>
                </ul>
            </nav>
         </header>
      </div>
      <main>
        <?= $content ?>
      </main>
   </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
