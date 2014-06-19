<?php


class Konten extends EMongoDocument
{
    public $header;
    public $jurusan;

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
        return 'konten';
    }
   

}
