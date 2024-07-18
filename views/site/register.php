<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\Usuario $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Registre-se';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">
    <div class="row d-flex justify-content-center">
        <div class="card col-lg-5 p-5 w-50 shadow-sm mb-5 bg-body-tertiary rounded">
            <div class="justify-content-center">
                <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
                <p class="text-center">Registre-se Agora:</p>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>

            <?= $form->field($model, 'password')->passwordInput()->label(false) ?>

            <div class="form-group">
                <?= Html::submitButton('Criar Conta', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
