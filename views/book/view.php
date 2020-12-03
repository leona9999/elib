<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = $model->b_name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'b_name' => $model->b_name, 'b_author_name' => $model->b_author_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'b_name' => $model->b_name, 'b_author_name' => $model->b_author_name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'b_name',
            'b_author_name',
            'b_year',
            'b_rating',
            ['label' => 'Author', 'value' => Html::a('Info', ['/author/view', 'id' => $model->b_author_name]), 'format' => 'raw']
        ],
    ]) ?>

</div>
