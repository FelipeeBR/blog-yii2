<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="d-flex align-items-center">
        <div class="p-2">
            <?= 
            Yii::$app->user->isGuest
            ? Html::a('Criar Conta', '/site/register', ['class' => 'btn btn-primary', 'name' => 'newUser-button'])
            : Html::a('Novo Post', '/post/create', ['class' => 'btn btn-success', 'name' => 'newJob-button'])  
            ?>
        </div>
        <div class="p-2">
            <?= 
                Yii::$app->user->isGuest
                ? Html::a('Login', '/site/login', ['class' => 'btn btn-success', 'name' => 'login-button']) 
                : Html::hiddenInput("")
            ?>
        </div>
    </div>
    <div class="posts">
        <?php if (!empty($posts)): ?>
            <h2>Postagens</h2>
            <div>
                <?php foreach ($posts as $post): ?>
                    <div class="card shadow mb-5">
                        <div class="card-header">   
                            <h3><?= Html::encode($post->title) ?></h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-truncate"><?= Html::encode($post->description) ?></p>
                            <p><small>Criado por: <?= Html::encode($post->createdBy->username) ?> em <?= date('d/m/Y H:i', $post->created_at) ?></small></p>
                            <?= Html::a('Continue Lendo', '', ['class' => 'btn btn-primary'])?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Nenhum post publicado.</p>
        <?php endif; ?>
    </div>
</div>
