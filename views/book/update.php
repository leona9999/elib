<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = 'Update Book: ' . $model->b_name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->b_name, 'url' => ['view', 'b_name' => $model->b_name, 'b_author_name' => $model->b_author_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
