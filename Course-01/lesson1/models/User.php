<?php

namespace app\models;

use app\models\tables\Users;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    public static $users ;
    public static function initUsers() {
        $a = 1;
        $st = Users::find()->all();
        foreach ($st as $user) {
            self::$users[$a]['id'] = $user['id'];
            self::$users[$a]['username'] = $user['name'];
            self::$users[$a]['password'] = $user['pass'];
            self::$users[$a]['authKey'] = 'test100key';
            self::$users[$a]['accessToken'] = '100-token';
            $a++;

        }
        return self::$users;
    }
    public static function echUsers() {
        foreach (self::$users as $user) {
            echo   $user['id'].' ';
            echo   $user['username'].' ';
            echo   $user['password'].' ';
            echo   $user['authKey'].' ';
            echo   $user['accessToken'].'<br>';

        };
    }
    public static function userUsers() {
        $st = Users::find()->all();
        foreach ($st as $item) {
            echo $item['name'].' ';
            echo $item['pass'].' ';
        }
    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
