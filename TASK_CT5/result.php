<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $value1=$_POST["value1"];
    $value2=$_POST["value2"];
    $operator=$_POST["operator"];

    switch($operator)
    {
        case '+':
            $result=$value1+$value2;
            break;
        case '-':
             $result=$value1-$value2;
             break;
       case '/':
        if($value2!=0){
             $result=$value1/$value2;}
            else{$result="denominator cannot be 0";}
             break;  
        case '*':
           $result=$value1*$value2;
             break;   
         default:
            $result = "Invalid operator";
            break;     
    }
    header('Content-Type: application/json');
    echo json_encode(array('result' => $result));
}

?>
