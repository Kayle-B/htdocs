<?php
  include(dirname(__DIR__).'/includes/header.php');
?>

<div id="main">
  <div class="content">
  <?php

  $url = "http://192.168.52.70/";

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  //for debug only!
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

  $resp = curl_exec($curl);
  curl_close($curl);
var_dump($resp);

?>  
  </div>
</div>

<?php
  include(dirname(__DIR__).'/includes/footer.php');
?>
