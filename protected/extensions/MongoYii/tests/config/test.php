<?php
return CMap::mergeArray(
    require('../../../config/main.php'),
       array(
           'components' => array(
               'mongodb'     => array(
                   'class'  => 'EMongoClient',
                   'server' => 'mongodb://localhost:27017',
                   'db'     => 'databaseTA'
               ),
               'authManager' => array(
                   'class' => 'EMongoAuthManager',
               )
           ),
       )
);
