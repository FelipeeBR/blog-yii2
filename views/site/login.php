<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    
    <div class="row d-flex justify-content-center">
        <div class="card col-lg-5 p-5 w-50 shadow-sm mb-5 bg-body-tertiary rounded">
            <div class="justify-content-center">
                <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
                <p class="text-center">Digite seus dados de acesso nos campos abaixo:</p>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false)->input('name', ['placeholder' => "Usuário"]) ?>

            <?= $form->field($model, 'password')->passwordInput()->label(false)->input('password', ['placeholder'=> "Senha"]) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->label('Permanecer Conectado') ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
