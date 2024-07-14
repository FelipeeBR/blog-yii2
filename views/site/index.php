<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div>
        <div>
            <?= 
            Yii::$app->user->isGuest
            ? Html::a('Criar Conta', '/site/register', ['class' => 'btn btn-primary', 'name' => 'newUser-button'])
            : Html::Button('Novo Post', ['class' => 'btn btn-success', 'name' => 'newJob-button'])  
            ?>
        </div>
        <div>
            <?= 
                Yii::$app->user->isGuest
                ? Html::a('Login', '/site/login', ['class' => 'btn btn-success', 'name' => 'newJob-button']) 
                : Html::hiddenInput("")
            ?>
        </div>
    </div>
</div>
