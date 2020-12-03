<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'b_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b_author_name')->dropDownList($model->getAuthors()) ?>

    <?= $form->field($model, 'b_year')->dropDownList($model->getYears()) ?>

    <?= $form->field($model, 'b_rating')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
