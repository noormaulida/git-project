<?php

echo "Progress: <div id='test'></div>";
        echo CHtml::script("$(function(){ setInterval(function(){ $('#test').load('".$this->createUrl('site/getStatus',array('id'=>$job))."');}, 1000);});");

?>