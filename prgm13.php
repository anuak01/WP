<?php
try{
  //division by zero
   $numerator=10;
   $denominator=2;
   
   if($denominator===0){
      throw new Exception("division by zero error");
   }
   $result=$numerator/$denominator;
   echo "result of division:".$result."<br>";
   $dateString='2024-12-25';
   $dateFormat='Y-m-d';

   $date=DateTime::createFromFormat($dateFormat,$dateString);


   if(!$date|| $date->format($dateFormat)!==$dateString){
      throw new Exception("invalid date format");
   }
   echo"date is valid:".$dateString;
  }catch (Exception $e){
   echo "error:".$e->getMessage();
}
?>