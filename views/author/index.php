<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'a_name',
            'a_year',
            'a_rating',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{list} {view} {update} {delete}',
                'buttons' => [
                    'list' => function($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-th-list">', $url, ['title' => 'Books']);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
