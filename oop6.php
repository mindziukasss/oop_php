<?php 

class People {
  public $person1 = "Jonas";
  public $person2 = "Petras";
  public $person3 = "Tadas";

  protected $person4 = 'minde';
  private $person5 = 'Jon';
/*
  function iterateObject(){
    foreach($this as $key => $value){
      print "$key => $value\n";
    }
  }
  */
}



$people = new People;

foreach($people as $key => $value){
  print "$key => $value\n";
}
// $people->iterateObject();