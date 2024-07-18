<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PostCategoria $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-categoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_id')->textInput() ?>

    <?= $form->field($model, 'categoria_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
