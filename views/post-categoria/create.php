<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PostCategoria $model */

$this->title = Yii::t('app', 'Create Post Categoria');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Categorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
