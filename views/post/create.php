<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\Post $model */
/** @var array $categoryList */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Escrever Novo Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://cdn.tiny.cloud/1/fxwty92u1yu5rja4sjbd5ww8apydrkwy1h9prud6nnxmgb0y/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'image',
    toolbar: 'image',
  });
</script>
<div class="post-create">
    <div class="mb-5">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="post-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label(false)->input('title', ['placeholder' => "Escreva um título para sua postagem"]) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6])->label(false) ?>

        <?= $form->field($model, 'categoria_id')->dropDownList($categoryList, ['prompt' => 'Selecione uma categoria']) ?>

        <div class="form-group">
            <?= Html::submitButton('Publicar', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
