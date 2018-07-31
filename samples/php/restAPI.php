<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, "http://api.beepquest.com/v1/question-module-answers");
   curl_setopt($ch, CURLOPT_HTTPHEADER, array('BQAPPTOK: xxxxxxxxxx',
											  'BQMODTOK: yyyyyyyyyy'));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $html = curl_exec($ch);
   $data = curl_exec($ch);
   curl_close($ch);
   var_dump($data);
   var_dump(json_decode($data));


?>
