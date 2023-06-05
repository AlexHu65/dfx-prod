<?php

class parse
{
  // saca de la respuesta todo el contenido tipo imagen
  public function parseImg($response){
    $item  = "";
    foreach ($response as $tweet => $img){
      if(isset($img['entities']['media'][0]['media_url'])){
        $item = array("img" => $img);
      }
    }
    return $item;
  }

  // saca todo el contenido tipo video
  public function parseVideo($response){
    $item  = "";
    foreach ($response as $tweet => $video){
      if(isset($value['extended_entities']['media'][0]['type'])
      && $value['extended_entities']['media'][0]['type'] == "video" ){
        $item = array("video" => $value['extended_entities']['media'][0]['video_info']['variants'][3]['url']);
      }
    }
    $item["response"] = $response;
    return $item;

  }

  // obtener y guardar solo el texto
  public function parseText($response){
    $item  = "";
    foreach ($response as $tweet => $text){
      if(isset($text['full_text'])){
        $item = array("text" => $text);
      }
    }
    return $item;

  }

  // sacae del response el contenido del rtw

  public function parseRtw($response){
    $item  = "";
    foreach ($response as $tweet => $rtw){
      if(isset($rtw["retweeted_status"])){
        $item = array("rtw" => $rtw["retweeted_status"]);
      }
    }
    return $item;
  }

  public function getImgContent($img){
    $imagen ='';
    if(isset($img['img']['entities']['media'][0]['media_url'])){
      if (isset($img['img']['entities']['media'][0]['media_url'])!=null){
        $imagen=$img['img']['entities']['media'][0]['media_url'];
      } else {
        if ($img['img']['quoted_status']['entities']['media'][0]['media_url']!=null) {
          $imagen=$img['img']['retweeted_status']['quoted_status']['entities']['media'][0]['media_url'];
        } else {
          $imagen='assets/img/pmx_logo.png';
        }
      }
    }else{
      $imagen='assets/img/pmx_logo.png';
    }
    return $imagen;
  }

  public function xmlToJson($url, $facebook = false){

    if($facebook){
      $feed = file_get_contents($url);
      $feed = str_replace('<media:', '<', $feed);
      $rss = simplexml_load_string($feed);
      return $rss;

    }else{

      $xmlData = simplexml_load_file($url);
      $prices;

      if(!empty($xmlData)){
        foreach ($xmlData->children() as $place) {
          $prices[] = array(
            "regular" =>$place->gas_price[0],
            "premium" => $place->gas_price[1],
            "diesel" => $place->gas_price[2],
          );
        }
        $regularGas = 0;
        $premiumGas = 0;
        $dieselGas = 0;

        $regularGasCantidad = 0;
        $premiumGasCantidad = 0;
        $dieselGasCantidad = 0;

        for ($i=0; $i < count($prices) ; $i++) {
          $regularGas += floatval($prices[$i]["regular"][0]);
          $premiumGas += floatval($prices[$i]["premium"][0]);
          $dieselGas += floatval($prices[$i]["diesel"][0]);

          if(!empty($prices[$i]["regular"])){
            $regularGasCantidad++;
          }
          if(!empty($prices[$i]["premium"])){
            $premiumGasCantidad++;
          }
          if(!empty($prices[$i]["diesel"])){
            $dieselGasCantidad++;
          }
        }

        $pricesGas = array(
          "regular" => (round($regularGas / $regularGasCantidad, 3)),
          "premium" => (round($premiumGas / $premiumGasCantidad, 3)),
          "diesel" => (round($dieselGas / $dieselGasCantidad, 3))
        );

        return $pricesGas;

      }else{
        return false;
      }
    }
  }
}
