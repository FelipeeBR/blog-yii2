<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "categoria".
 *
 * @property int $id
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 *
 * @property PostCategoria[] $postCategorias
 * @property Post[] $posts
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['name', 'required'],
            ['name', 'string', 'max'=>255],
            [['created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nome'),
            'created_at' => Yii::t('app', 'Criado'),
            'updated_at' => Yii::t('app', 'Atualizado'),
        ];
    }

    /**
     * Gets query for [[PostCategorias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPostCategorias()
    {
        return $this->hasMany(PostCategoria::class, ['categoria_id' => 'id']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::class, ['id' => 'post_id'])->viaTable('post_categoria', ['categoria_id' => 'id']);
    }
}
