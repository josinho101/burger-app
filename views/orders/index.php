<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
$orders = [["Meat"=>0,"Cheese"=>0,"Salad"=>2,"Bacon"=>0,"Price"=>"5.00"],
["Meat"=>2,"Cheese"=>1,"Salad"=>4,"Bacon"=>0,"Price"=>"10.00"],
["Meat"=>3,"Cheese"=>4,"Salad"=>0,"Bacon"=>1,"Price"=>"15.00"],
["Meat"=>2,"Cheese"=>0,"Salad"=>1,"Bacon"=>3,"Price"=>"20.00"]];
?>


<div class="order_wrapper">

     <?php foreach($orders as $order){ ?>

         <div class="Order">

         <p>Ingredients :      

         <span class="Ingredients">meat(<?php echo $order['Meat'];?>)</span>

         <span class="Ingredients">cheese(<?php echo $order['Cheese'];?>)</span>

         <span class="Ingredients">salad(<?php echo $order['Salad'];?>)</span>

         <span class="Ingredients">bacon(<?php echo $order['Bacon'];?>)</span>

         </p>      

         <p>Price : <strong> USD <?php echo $order['Price'];?></strong></p>

     </div>

     <?php }?>
 
</div>










