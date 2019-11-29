<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/
namespace  Drupal\custom_service;

class HelloServices2 {
 protected $say_something;
 public function __construct() {
   $this->say_something = 'Hello World 2!';
 }
 public function  sayHello($name = ''){
   if (empty($name)) {
     return $this->say_something;
   }
   else {
     return "Hellos " . $name . "!";
   }
 }
}
