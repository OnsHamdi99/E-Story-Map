<?php
	require_once('extraction.php');
	/*$file = fopen('bpmn.xpdl' , 'r') ;
    $extract = extract1($file) ;
	echo $extract[0][0]; */

/*
	require_once('extraction.php');
	$file = fopen('mfc.xml' , 'r') ;
    $extract = extractMfc($file) ;
	echo $extract[0][0];



	$xml = simplexml_load_file($filename) ;

 */

	/* if (file_exists('mfc.xml')) {
		$xml = simplexml_load_file('mfc.xml') ;
		$mfc= [] ;
		printf("EXISTE !!!" ) ;
		echo $xml[1]->agent ;

		/* foreach ($xml->mxfile as $tout) {
			printf("foreach  11111") ;
			foreach ($tout->mxCell as $cells ) {
				printf("foreach  222222") ;
				echo $cells.value ;
			}
		}	 */
	/*}
	else {
		exit('Failed to open extraction.php.');
	} */


	$simpleXml = extractMfc2('mfc.xml'); //<==
	echo $simpleXml;

	// foreach($simpleXml->children() as $state){
	// 	$states[]= array('value' => $state->value);
	// }
	// $json = json_encode($simpleXml);
	//
	// echo $json->mxCell;











?>
