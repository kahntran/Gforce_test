<?php

namespace app\models;

use yii\db\ActiveRecord;

class Bug extends ActiveRecord
{
    public static function tableName()
    {
        return 'bug_form';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'body'], 'required'],
            [['email'], 'trim'],
            [['email'], 'default'],
            [['email'], 'email'],
            [
                ['image'],
                'image',
                'extensions' => ['jpeg', 'png', 'jpg'],
                'maxSize' => 1024 * 1024,
                'minWidth' => 800,
                'maxWidth' => 800,
                'minHeight' => 600,
                'maxHeight' => 600,
                'maxFiles' => 1,
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'body' => 'Issue description',
            'image' => 'Screenshot'
        ];
    }
}
