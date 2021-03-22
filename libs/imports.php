<?php

  //function that gets the project name from the project creation form
  function getProjectName(){
    // Check if the form is submitted
    if ( isset( $_POST['project-name'] ) ) {
      //check if the name contains special caracters
      if(ctype_alnum($projectName)){
        $projectName = $_POST['nomProjet'];
        return $projectName;
      }
      else{
        throw new Exception('Le nom doit être plus long et sans caractères spéciaux.');
      }
    }
    else{
      throw new Exception('Pas de nom fourni');
    }
  }

  //function that returns user-stories from the US form
  //a user-story is an array element
  //a user-story is an array in itself
  function getUserStories(){
    while (isset($_POST['user-stories'])) {
      $userStories = array();

      //https://stackoverflow.com/questions/25111916/put-form-data-into-a-php-array

      $us = $_POST['a'];
      array_push($userStories,$us);
    }
    return $userStories;
  }

  //converts an xml file into a json file
  function parseUrl ($url) {
		$fileContents= file_get_contents($url);
		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
		$fileContents = trim(str_replace('"', "'", $fileContents));
		$simpleXml = simplexml_load_string($fileContents);
		$json = json_encode($simpleXml);
		return $json;
	}

  //function that returns the BPMN file converted into json/array
  //https://stackoverflow.com/questions/8830599/php-convert-xml-to-json
  function getBPMN(){
    $xmlBPMN = $_POST['bpmn'];
    $jsonBPMN = parseUrl($xmlBPMN);
    return $jsonBPMN;
  }

  function getMCF(){
    $xmlMCF = $_POST['mcf'];
    $jsonMCF = parseUrl($xmlMCF);
    return $jsonMCF;
  }


  if (!empty($_POST))
  {
    $projectName = $_POST['nomProjet'];
    // $us = getUserStories();
    // $bpmn = getBPMN();
    // $mcf = getMCF();
    //
    // echo $projectName;
    // foreach ($us as $key => $value) {
    //   echo "US :";
    //   echo $key.'  =>  '.$value;
    //   echo $bpmn;
    // }
    echo "$projectName";
  }


?>
