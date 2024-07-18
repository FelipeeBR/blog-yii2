<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\PostCategoria $model */

$this->title = Yii::t('app', 'Update Post Categoria: {name}', [
    'name' => $model->post_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Post Categorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'post_id' => $model->post_id, 'categoria_id' => $model->categoria_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="post-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
