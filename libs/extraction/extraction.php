<?php


  function extract1($filename){
      $xml = simplexml_load_file($filename) ;
      $process = [] ;
      $activity = [] ;
      $flux = [] ;
      $bpmn = [] ;
      foreach ($xml->Pools as $items) {
        $pools = $items->Pools ;
        foreach ($pools->Pool as $pool) {
          array_push($process ,$pool.Name ) ;
        }
      }
      foreach ($xml->MessageFlows as $items) {
        $messageFlows = $items->MessageFlow ;
        foreach ($messageFlows->MessageFlow as $mflux) {
          array_push($flux , $mflux.Name) ;
        }
      }
      foreach ($xml->Activities as $items) {
        $activities = $items->MessageFlow ;
        foreach ($activities->Activity as $activite) {
          array_push($activity , $activite.Name) ;
        }
      }
      array_push($bpmn , $process ) ;
      array_push($bpmn , $activity ) ;
      array_push($bpmn , $flux ) ;
      return $bpmn ;
    }


    function extractMfc($filename){
      $xml = simplexml_load_file($filename) ;
      $mfc= [] ;
      print_r($xml);
      foreach ($xml->mxCell as $cells) {
         array_push($mfc ,$cells.value ) ;
      }
      return $mfc ;
    }


    function extractMfc2($file){
      if (file_exists($file)) {
    	  $xml = simplexml_load_file($file) ;
    		$mfc= array();
        printf("EXISTE !!!" ) ;
    		foreach ($xml->mxCell as $cells ) {
    			printf("foreach Loop") ;
          //array_push($mfc ,$cells.value ) ;
          $mfc[] = $cells.value;
          //array_push($stack, "apple", "raspberry");
    			//echo $cells.value ;
          printf("foreach  end §§§§") ;
    		}
        return $mfc ;
    	}
    	else {
    		exit('Failed to open extraction.php.');
    	}
    }
    // function extract2($filename){
    // $xml = simplexml_load_file($filename) ;
    // $process = [] ;
    // $activity = [] ;
    // $flux = [] ;
    // $bpmn = [] ;
    // foreach ($xml->Pools as $items) {
    //     //$pools = $items->Pools ;
    //     $pools = $items->Pools ;
    //     foreach ($pools->Pool as $pool) {
    //     array_push($process ,$pool.Name ) ;
    //     array_push($activity , $pool->Activity.Name) ;
    //     array_push($flux , $pool->MessageFlow.Name) ;
    //     }
    // }
    // array_push($bpmn , $process ) ;
    // array_push($bpmn , $activity ) ;
    // array_push($bpmn , $flux ) ;
    // }

?>
