<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string|null $nameStudents
 * @property string|null $classStudents
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['nameStudents' , 'class' ,'classStudents'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameStudents' => 'Name Students',
            'classStudents' => 'Class Students',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function getTeacher() {
        return $this->hasOne(Teachers::className(), ['classStudents' => 'class']  );
        }
}
