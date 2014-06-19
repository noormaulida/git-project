<?php

/**
 * @author Maksim Naumov <me@yukki.name>
 * @link http://yukki.name/
 *
 * @version 1.0.0
 *
 * GitHub Repo: @link https://github.com/fromYukki/Yii-MongoDB-Driver
 * Issues: @link https://github.com/fromYukki/Yii-MongoDB-Driver/issues
 * Documentation: @link https://github.com/fromYukki/Yii-MongoDB-Driver/wiki
 */

/**
 * @property ExampleUserSession[] $sessions
 * @property ExampleCountry $country
 * @property YMongoArrayModel|ExampleUseDeviceNested[] $devices
 * @property ExampleUseInfoNested $info
 *
 * Next methods defined in {@see \ext\mongoDb\behaviors\YMongoSoftDeleteBehaviour}
 * @method ExampleUser notRemoved()
 * @method ExampleUser removed()
 * @method boolean isRemoved()
 * @method ExampleUser restore()
 * @method ExampleUser remove()
 * @property int $is_deleted
 */
class News extends EMongoDocument
{
    /** @var string */
    public $_id;
    public $title;
    public $pubDate;
    public $link;
    public $description;
    public $source;
    public $content;
    


/*
    public function rules(){
        return array(
            array('caption,url','required'),
            array('title','category','max'=>255),
            array('url','length','max'=>2000)
        );
    }
    
    public function renderUrl(){
        echo CHtml::link($caption,$url);
    }
*/


    /** @var string */
    //public $notBeSaved = 'This variable will not be saved!';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className
     * @return ExampleUser
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * Returns name of the collection associated with this model
     * @return string
     */
    public function collectionName()
    {
        return 'news';
    }

    /*
    function rules(){
        return array(
            array('username','password', 'required'),
            array('username', 'length', 'max' => 20),
            /*  
            array('ex_sub', 'subdocument', 'type' => 'one', 'rules' => array(
                array('title', 'filter', 'filter' => function($c){
                return new MongoId();               
                }) // this seems not to work
            )),
             
           
        );
    }*/
   

}
