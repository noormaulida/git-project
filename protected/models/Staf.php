<?php

class Staf extends EMongoDocument
{
    public $name;
    public $nip;
    public $path;
    public $type;
    public $email;
    public $bidang_penelitian;// = array();
    public $jabatan;// = array();


    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function collectionName()
    {
        return 'staf';
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

    public function attributeLabels()
    {
        return array(
            '_id' => 'Id',
            'id' => 'Id',
            'name' => 'Nama',
            'nip' => 'NIP',
            'path' => 'Path',
            array('bidang_penelitian' => 'Bidang_penelitian'),
            array('jabatan' => 'Jabatan'),
        );
    }

}
