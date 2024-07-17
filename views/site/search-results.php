<?php
/** @var yii\web\View $this */
/** @var app\models\PostSearch $searchModel */
/** @var yii\widgets\ActiveForm $form */

use yii\bootstrap5\Html;

?>
<div class="posts">
    <h2>Resultados da Pesquisa</h2>
    <?php if (!empty($dataProvider->getModels())): ?>
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
    <?php else: ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>
</div>