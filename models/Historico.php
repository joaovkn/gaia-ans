<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historico".
 *
 * @property string $id_historico
 * @property string $version
 * @property string $data
 * @property string $author
 * @property string $description
 */
class Historico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'historico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['version', 'data', 'author', 'description'], 'required'],
            [['version', 'author', 'description'], 'string'],
            [['data'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_historico' => 'Id Historico',
            'version' => 'Version',
            'data' => 'Data',
            'author' => 'Author',
            'description' => 'Description',
        ];
    }
}
