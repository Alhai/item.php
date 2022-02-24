<?php 
echo "<pre>";
var_dump($_POST);
echo "</pre>";
if( isset($_POST) && !empty($_POST) ) {
  foreach ($_POST as $key => $number){
  if (isset($number) && !empty($number) ){
   echo "<pre>"; 
   echo  $key."-". " Quantité" ." : ".$number; 
   echo "</pre>";
  }
}
};
//  {
//     var_dump($number);

//    