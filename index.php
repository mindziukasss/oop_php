<?php

  /*$myVar1 = 'Hello ';
  $myVar2 = 'world!';
  echo $myVar1.' '.$myVar2;

  $numbers = array(12,45,25,45);
  $numbers = [12,45,25,45];
  print_r($numbers);
  echo $numbers[1];



  $ages = array(
        "John" => 35,
        "Mary" => 27,
        "Bob" => 55
        );

    // echo $ages['Mary'];

    array_pop($ages); //delete last
    array_shift($ages); //delete first
    print_r($ages);*/


    // for($i = 0;$i <= 5;$i++){
    //   echo $i;
    // }

    // $i = 0;
    // while($i <=10){
    //     echo 'Number '.$i.'<br />';
    //     $i++;
    // }



    // $numbers = array(12,45,25,45);

    // foreach ($numbers as $number) {
    //   echo 'This is number '.$number.'<br />';
    // }


    // $ages = array(
    //     "John" => 35,
    //     "Mary" => 27,
    //     "Bob" => 55
    //     );

    // foreach ($ages as $name => $age) {
    //   echo $name.' is '. $age. ' years old <br />';
    // }

    function greet(){
        echo 'Hello world';
    }

    greet();

    function greet($name){
        echo 'Hello '. $name;
    }

    greet('Tom');


    function greet($greeting, $name=''){
        echo $greeting.' '.$name;
    }

    greet('Welcome','Tom');



?>