<?php

class Utama extends EMongoDocument
{
    public $tanggal;
    public $konten;
    

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function collectionName()
    {
        return 'utama';
    }
  


    public function attributeLabels()
    {
        return array(
            '_id' => 'Id',
            'konten' => 'Konten',
            'tanggal' => 'Tanggal',
              
        );
    }

}
