<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'eLib';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>eLib</h1>

        <p class="lead">Wellcome to electronic library.</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6 text-center">
                <h2>Books</h2>

                <p><a class="btn btn-default form-control" href="<?= Url::to(['/book/index']) ?>">List of books &raquo;</a></p>
            </div>
            <div class="col-lg-6 text-center">
                <h2>Authors</h2>

                <p><a class="btn btn-default form-control" href="<?= Url::to(['/author/index']) ?>">List of authors &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
