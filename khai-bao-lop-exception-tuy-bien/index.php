<?php
include_once "MyException.php";
//function checkNum($number){
//    if ($number > 1){
//        throw new Exception("gia tri phai bang 1 tro xuong");
//    }
//    return true;
//}
//
//try {
//    checkNum(2);
//}catch (Exception $e ){
//    echo 'Message:' . $e->getMessage();
//}

function divide($a, $b){
    if ($b === 0){
        throw new MyException();
    } else{
        echo $a/$b;
    }
}

//print_r(divide(3,4));
try {
  $result = divide(5,2);
  echo $result;
  $result = divide(4,0);
  echo $result;

} catch (MyException $e) {
    echo 'Message:' . $e->check();
}