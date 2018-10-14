<?php

namespace app\models;

use PDO;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    CONST USER_ACTIVE_STATE = '1';
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $is_active;

    public static function findIdentity($id)
    {
        $user = \Yii::$app->db->createCommand(
            'SELECT * FROM user WHERE id="' . $id . '"'
        )
            ->queryOne(PDO::FETCH_ASSOC);
        return new static($user);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new \Exception('Not Implemented');
    }

    public static function findByUsername($username)
    {
        $user = \Yii::$app->db->createCommand(
            'SELECT * FROM user WHERE username="' . $username . '"'
        )->queryOne(PDO::FETCH_ASSOC);
        return new static($user);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function validateActiveUser()
    {
        return $this->is_active === self::USER_ACTIVE_STATE;
    }
}
