<?php


class User extends EMongoDocument
{
    public $username;
    public $password;
    
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function collectionName()
    {
        return 'users';
    }

    public function attributeLabels()
    {
        return array(
            '_id' => 'Id',
            'id' => 'Id',
            'username' => 'Username',
            'password' => 'Password',
        );
    }
}
?>
