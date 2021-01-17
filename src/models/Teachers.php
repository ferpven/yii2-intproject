<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $class
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'class'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'class' => 'Class',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
