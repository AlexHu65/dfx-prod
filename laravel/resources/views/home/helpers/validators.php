<?php

require_once 'parse.php';
class Validators extends parse
{
  public function isRetweet($response){
    // validamos si es un array
    if(is_array($response)){
      foreach ($response as $tweet => $value) {
        if (isset($value['retweeted_status'])) {
          // validamos que es un retweed
          return true;
        }
      }
    }
    // retornamos si no existe
    return false;
  }

  public function isMediaImg($response){
    // validamos si es un array
    if(is_array($response)){
      foreach ($response as $tweet => $value) {
        if (isset($value['entities']['media'][0]['media_url'])) {
          // validamos que es un retweed
          return true;
        }
      }
    }
    // retornamos si no existe
    return false;
  }

  public function isVideo($response){

    foreach ($response as $tweet => $value) {
      if(isset($value['extended_entities']['media'][0]['type'])
      && $value['extended_entities']['media'][0]['type'] == "video" ){
        return true;
      }
    }
    return false;
  }


  public function isText($response){
    if(isset($response[0]["full_text"])){
      return true;
    }
    return false;
  }

  public function getDateString(){
    return array(
        "01" => array("Enero", "Jan", "January" , "01", 1),
        "02" => array("Febrero", "Feb", "February" , "02", 2),
        "03" => array("Marzo", "Marc","March" , "03", 3),
        "04" => array("Abril","Apr","April", "04", 4 ),
        "05" => array("Mayo", "May", "May", "05", 5),
        "06" => array("Junio" ,"Jun", "June", "06", 6),
        "07" => array("Julio", "Jul", "July" , "07" , 7),
        "08" => array("Agosto", "Aug", "August", "08" , 8),
        "09" => array("Septiembre", "Sep", "September", "09", 9),
        "10" => array("Octubre", "Oct", "October", "10", 10),
        "11" => array("Noviembre", "Nov", "November", "11",11),
        "12" => array("Diciembre", "Dev", "December", "12" , 12),
    );
  }

  /**
   * Extracts parts of the strig by string delimiters. Case insensitive search for delimiters
   *
   * @param  string  $stringToExtract
   * @param  string  $startString
   * @param  string  $endString
   * @param  boolean $verbose
   * @return bool|string
   */
  public function getStringBetweenDelimiters($stringToExtract, $startString, $endString = '', $verbose = true)
  {
      $ini = stripos($stringToExtract, $startString);

      if ($ini === false) {
          return false;
      }

      $ini += strlen($startString);
      if ($endString == '') {
          $endPos = $len = strlen($stringToExtract);
      } else {

          $endPos = stripos($stringToExtract, $endString, $ini);
          if ($endPos === false) {
              return false;
          }

          $len = $endPos - $ini;
      }

      if ($verbose) {
          return array(
              'start' => substr($stringToExtract, 0, $ini),
              'find' => substr($stringToExtract, $ini, $len),
              'end' => substr($stringToExtract, $endPos),
            );
            
      } else {
          return substr($stringToExtract, $ini, $len);
      }
  }

  /**
   * Splits given string by delimiters and returns the inner string
   *
   * @param $stringToExtract
   * @param $startString
   * @param $endString
   * @return bool|string
   */
  public function getInnerString($stringToExtract, $startString, $endString)
  {
      return $this->getStringBetweenDelimiters($stringToExtract, $startString, $endString, false);
  }
}
