<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $author yii\data\ActiveRecord */

if (isset($author)) {
    $this->title = 'Books (' . $author->a_name . ')';
    $this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
} else {
    $this->title = 'Books';
}

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
		<?php if (!isset($author)): ?>
        	<?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
		<?php endif ?>
    </p>


    <?php if (!isset($author)): ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'b_name',
                'b_author_name',
                'b_year',
                'b_rating',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php else: ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'b_name',
                'b_author_name',
                'b_year',
                'b_rating',
            ],
        ]); ?>
    <?php endif ?>

</div>
