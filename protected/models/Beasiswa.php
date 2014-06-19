<?php


class Beasiswa extends EMongoDocument
{
    /** @var string */
    public $title;
    public $pubDate;
    public $link;
    public $description;
    public $source;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function collectionName()
    {
        return 'beasiswa';
    }
     public function attributeLabels()
    {
        return array(
            '_id' => 'Id',
            'title' => 'title',
            'pubDate' => 'pubDate',
            'link' => 'link',
            'source' => 'source',
            'description' => 'description',
        );
    }
}
