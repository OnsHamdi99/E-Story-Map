<?php

  // require(ectractionsPHP)

  $us = getUserStories();

  if (!empty($_SESSION["email"])) {
    function usVsMcf(){
      $score = 0;
      $neg = 0 ;
      $resUsMcf = array();
      $mcf = getMCF(); //array sous forme de json decodé
      foreach ($u as $key => $value) { // the us
        foreach ($m as $key => $value) { // the mcf
          if(compare($u,$m)==1){
            $score++;
          }
          else {
            $neg --;
            pass;
          }
        }
      }
      $resUsMcf.array_push($score,$neg);
      return $resUsMcf;
    }

    function usVsBpmn(){
      $bpmn = getBPMN(); //array sous forme de json decodé
      $score = 0;
      $neg = 0 ;
      $resUsBpmn = array();
      $mcf = getMCF(); //array sous forme de json decodé
      foreach ($u as $key => $value) { // the us
        foreach ($b as $key => $value) { // the bpmn
          if(compare($u,$b)==1){
            $score++;
          }
          else {
            $neg --;
            pass;
          }
        }
      }
      $resUsBpmn.array_push($score,$neg);
      return $resUsBpmn;
    }
    /*
    Fonction de comparaison du MFC et du BPMN
    @return : résultat de la cmparaison dans un array
    */
    function mcfVsBpmn(){
      $mcf = getMCF(); //array sous forme de json decodé
      $bpmn = getBPMN(); //array sous forme de json decodé
      $mcfActors; // extract
      $bpmnActors ; // extract
      $score = 0;
      $neg = 0 ;
      $actors ;
      $flux;
      $resMcfBpmn = array();
      $mcf = getMCF(); //array sous forme de json decodé
      foreach ($u as $key => $value) { // the us
        foreach ($b as $key => $value) { // the bpmn
          if ($b.isActor()) {
            $actors++;
            if(compare($u,$b)==1){
              $score++;
            }
            else {
              $neg --;
              pass;
            }
          }
          if ($b.isFlux()) {
            $flux++;
            if(compare($u,$b)==1){
              $score++;
            }
            else {
              $neg --;
              pass;
            }
          }
        }
      }
      $resMcfBpmn.array_push($score,$neg);
      return $resMcfBpmn;
    }
  }
/*
Comparaison de deux chaînes 
@return : 1 si vrai, -1 si faux
*/
  function compareChaines($c;$s){ 
    if(strpos($c, $s) !== false){
        return 1;
    } else{
        return -1;
    }
  }else {
    throw new \Exception("Error , You are not connected", 1);

  }


 ?>
