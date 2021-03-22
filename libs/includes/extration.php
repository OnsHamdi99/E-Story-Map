<?php
//extraction des fichiers .xml
    function extract2($filename){
    $xml = simplexml_load_file($filename) ;
    $process = [] ;
    $activity = [] ;
    $flux = [] ;
    $bpmn = [] ;
    foreach ($xml->Pools as $items) {
        //$pools = $items->Pools ;
        $pools = $items->Pools ;
        foreach ($pools->Pool as $pool) {
        array_push($process ,$pool.Name ) ;
        array_push($activity , $pool->Activity.Name) ;
        array_push($flux , $pool->MessageFlow.Name) ;
        }
    }
    array_push($bpmn , $process ) ;
    array_push($bpmn , $activity ) ;
    array_push($bpmn , $flux ) ;
    }






?>