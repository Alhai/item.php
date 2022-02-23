<?php 

var_dump($_POST);

if( isset($_POST) && !empty($_POST) ) {
  foreach ($_POST as $key => $number){
  if (isset($number) && !empty($number) ){
    echo $number . " - ".$key;
    //  $number=htmlspecialchars($number);
  }
  }
}
else {
  
  echo "La panier est vide";
};
//  {
//     var_dump($number);

//    