<?php

namespace app\controllers;

use app\models\PostCategoria;
use app\models\PostCategoriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostCategoriaController implements the CRUD actions for PostCategoria model.
 */
class PostCategoriaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all PostCategoria models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PostCategoriaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PostCategoria model.
     * @param int $post_id Post ID
     * @param int $categoria_id Categoria ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($post_id, $categoria_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($post_id, $categoria_id),
        ]);
    }

    /**
     * Creates a new PostCategoria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PostCategoria();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'post_id' => $model->post_id, 'categoria_id' => $model->categoria_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PostCategoria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $post_id Post ID
     * @param int $categoria_id Categoria ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($post_id, $categoria_id)
    {
        $model = $this->findModel($post_id, $categoria_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'post_id' => $model->post_id, 'categoria_id' => $model->categoria_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PostCategoria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $post_id Post ID
     * @param int $categoria_id Categoria ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($post_id, $categoria_id)
    {
        $this->findModel($post_id, $categoria_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PostCategoria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $post_id Post ID
     * @param int $categoria_id Categoria ID
     * @return PostCategoria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($post_id, $categoria_id)
    {
        if (($model = PostCategoria::findOne(['post_id' => $post_id, 'categoria_id' => $categoria_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
