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
            : Html::a('Novo Post', '/post/create', ['class' => 'btn btn-success', 'name' => 'newJob-button'])  
            ?>
        </div>
        <div>
            <?= 
                Yii::$app->user->isGuest
                ? Html::a('Login', '/site/login', ['class' => 'btn btn-success', 'name' => 'login-button']) 
                : Html::hiddenInput("")
            ?>
        </div>
    </div>
    <div class="posts">
        <?php if (!empty($posts)): ?>
            <h2>Posts</h2>
            <ul>
                <?php foreach ($posts as $post): ?>
                    <li>
                        <h3><?= Html::encode($post->title) ?></h3>
                        <p><?= Html::encode($post->description) ?></p>
                        <p><small>Criado por: <?= Html::encode($post->createdBy->username) ?> em <?= date('d/m/Y H:i', $post->created_at) ?></small></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum post encontrado.</p>
        <?php endif; ?>
    </div>
</div>
