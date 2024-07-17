<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PostSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-search">

    <?php $form = ActiveForm::begin([
        'action' => ['search-results'],
        'method' => 'get',
    ]); ?>

<div class="row row-cols-lg-auto g-3 align-items-center">
            <?= $form->field($model, 'title')->label(false) ?>
            <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-outline-success my-2 my-sm-0']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
