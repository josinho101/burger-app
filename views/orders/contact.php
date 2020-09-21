<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>


<?php
   echo $this->render('preview');
?>
<div>
    <div class="CheckoutSummary">
      <h1>We hope it tastes well!</h1>
      <div class="CheckoutSummary BurgerContainer">
          <button class="Button Danger">CANCEL</button>
          <button class="Button Success" id="continue">CONTINUE</button>
      </div>
    </div>

<div class="ContactData" id="contactData">
   <h4>Enter your Contact Details</h4>
   <?php $form = ActiveForm::begin(); ?>
   
        <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'name')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
        </div>
        <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'street')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
        </div>
        <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'city')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>

        </div>
      <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'zipcode')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
         
        </div>
      <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'country')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
         
        </div>
      <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'state')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
          
        </div>
      <div class="Input_Input">
          <label class="Label"></label>
          <?= $form->field($model, 'email')->textInput(['autofocus' => true,'class' => 'InputElement']) ?>
         
        </div>
      <div class="Input_Input">
         <label class="Label"></label> 
         <?= $form->field($model, 'order_type')->dropdownList([ 'fastest' => 'Fastest', 'cheapest' => 'Cheapest' ], ['prompt'=>'Select Category'],['class' => 'InputElement'] ); ?> 

      </div>
      <button class="Button Success">ORDER</button> 
   
   <?php ActiveForm::end(); ?>
</div>
</div>