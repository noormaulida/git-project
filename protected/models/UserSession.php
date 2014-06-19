<?php


class UserSession extends YMongoDocument
{
    /** @var string */
    public $user_id;
    /** @var string */
    public $session_key;

    
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    
    public function collectionName()
    {
        return 'users_session';
    }

    public function attributeLabels()
    {
        return array(
            '_id' => 'Id',
            'id' => 'Id',
            'user_id' => 'User Id',
            'session_key' => 'Session key',
        );
    }
} 
?>