<?php

use app\models\PostCategoria;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PostCategoriaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Post Categorias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Post Categoria'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post_id',
            'categoria_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PostCategoria $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'post_id' => $model->post_id, 'categoria_id' => $model->categoria_id]);
                 }
            ],
        ],
    ]); ?>


</div>
