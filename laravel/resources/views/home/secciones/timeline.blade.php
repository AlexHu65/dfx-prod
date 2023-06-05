<section id="timeline" class="pt-5 pb-5">
  <?php

  function isRetweet($response){
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

  function isMediaImg($response){
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

  function isVideo($response){

    foreach ($response as $tweet => $value) {
      if(isset($value['extended_entities']['media'][0]['type'])
      && $value['extended_entities']['media'][0]['type'] == "video" ){
        return true;
      }
    }
    return false;
  }


  function isText($response){
    if(isset($response[0]["full_text"])){
      return true;
    }
    return false;
  }

  function getDateString(){
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
  function getStringBetweenDelimiters($stringToExtract, $startString, $endString = '', $verbose = true)
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
  function getInnerString($stringToExtract, $startString, $endString)
  {
    return $this->getStringBetweenDelimiters($stringToExtract, $startString, $endString, false);
  }


  // saca de la respuesta todo el contenido tipo imagen
  function parseImg($response){
    $item  = "";
    foreach ($response as $tweet => $img){
      if(isset($img['entities']['media'][0]['media_url'])){
        $item = array("img" => $img);
      }
    }
    return $item;
  }

  // saca todo el contenido tipo video
  function parseVideo($response){
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
  function parseText($response){
    $item  = "";
    foreach ($response as $tweet => $text){
      if(isset($text['full_text'])){
        $item = array("text" => $text);
      }
    }
    return $item;

  }

  // sacae del response el contenido del rtw

  function parseRtw($response){
    $item  = "";
    foreach ($response as $tweet => $rtw){
      if(isset($rtw["retweeted_status"])){
        $item = array("rtw" => $rtw["retweeted_status"]);
      }
    }
    return $item;
  }

  function getImgContent($img){
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

  function xmlToJson($url, $facebook = false){

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

  // facebook feed
  $urlXml = "https://fetchrss.com/rss/5d264bcf8a93f8d7258b45675ed542ab8a93f8465e8b4567.xml";
  $facebook = xmlToJson($urlXml, true);
  $count = 10;
  // descomponemos nuestro sting de fecha
  $date = date_create($facebook->pubDate);
  $date = date_format($date, 'd-m-Y');
  // Seleccionar la fecha de acuerdo al mapeado de datos
  $arrayDate =  explode("-",$date);
  $dateControl = getDateString();
  $date = $arrayDate[0] ." de ". $dateControl[$arrayDate[1]][0];
  $account = $facebook->channel->title[0];
  // $descripcion=str_replace("false","false&autoplay=true",$facebook->channel->item[$post]->description);


  ?>
  <style media="screen">
  #timeline{
    background: #00459c;
  }
  .wrapp-timeline{
    background: white;
    height: 650px;
    overflow: auto;
  }
.prev-slide {
    width: 30px;
    height: 30px;
    background-image: url(./images/chevron-back-circle-outline.svg);
    background-size: cover;
    filter: invert(1);
    position: absolute;
    top: 35%;
    left: -5%;
    z-index: 999999;
}
.next-slide {
    width: 30px;
    height: 30px;
    background-image: url(./images/chevron-forward-circle-outline.svg);
    background-size: cover;
    filter: invert(1);
    position: absolute;
    top: 35%;
    right: -5%;
    z-index: 999999;
}
</style>
<div class="container pt-5 pb-5">
  <div class="row pt-3">
    <div class="col-sm-12">
      <div class="owl-timeline owl-carousel owl-theme z-0">
        <?php for ($i=0; $i < $count ; $i++) {?>
          <div class="item">
            <div class="wrapp-timeline p-4">
              <p class="pad40">
                <a target="_blank" href="{{$facebook->channel->link}}">
                  <img style="width:20%;float:left;border-radius:50px;padding:2px;border:2px solid #3b5998;" src="{{asset('storage/') . '/' . setting('site.profile')}}" alt="Chirstian cruz">
                </a>
                <i class="fa fa-facebook-official facebookcolor" aria-hidden="true"></i>
                <a target="_blank" href="{{$facebook->channel->link}}">
                  <span class="screenname">
                    <span style="color:#3b5998;" class="name font-weight-bold">
                      <?php echo str_replace('on Facebook' ,  ' ' ,$account);?>
                    </span>
                    <i class="fa fa-check-circle cirblue" aria-hidden="true"></i>
                  </span><br>
                  <span class="pl-2 fechaface">
                    <small><?php echo $date; ?></small>
                  </span>
                </a>

              </p>
              <?php
              $descripcion=str_replace("false","false&autoplay=false",$facebook->channel->item[$i]->description);
              echo $descripcion=str_replace("width=\"500\"","width=\"100%\"",$facebook->channel->item[$i]->description);
              ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
