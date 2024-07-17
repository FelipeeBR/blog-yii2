<?php

/** @var yii\web\View $this */
/** @var app\models\PostSearch $searchModel */
/** @var yii\widgets\ActiveForm $form */

use yii\bootstrap5\Html;
use yii\widgets\LinkPager;


$this->title = 'Blog';
?>
<div class="site-index">
    <div class="d-flex mx-auto">
        <div class="position-relative p-2 mx-auto">
            <?= $this->render('@app/views/post/search', ['model' => $searchModel]) ?>
        </div>
        <div class="p-2">
            <?= 
            Yii::$app->user->isGuest
            ? Html::hiddenInput("")
            : Html::a('Novo Post', '/post/create', ['class' => 'btn btn-success', 'name' => 'newPost-button']) 
            ?>
        </div>
    </div>
    <div class="posts">
        <?php if ($dataProvider->getCount() > 0): ?>
            <h2>Postagens</h2>
            <div>
                <?php foreach ($dataProvider->getModels() as $post): ?>
                    <div class="card shadow mb-5">
                        <div class="card-header">   
                            <h3><?= Html::encode($post->title) ?></h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-truncate"><?= Html::encode($post->description) ?></p>
                            <p><small>Criado por: <?= Html::encode($post->createdBy->username) ?> em <?= date('d/m/Y H:i', $post->created_at) ?></small></p>
                            <?= Html::a('Continue Lendo', ['post/view', 'id' => $post->id], ['class' => 'btn btn-primary'])?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="pagination">
                <?= LinkPager::widget(['pagination' => $dataProvider->pagination, 'options' => ['class' => 'pagination justify-content-center'], 'linkOptions' => ['class' => 'page-link'],]) ?>
            </div>
        <?php else: ?>
            <p>Nenhum post publicado.</p>
        <?php endif; ?>
    </div>
</div>
