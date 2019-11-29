<?php
 
namespace Drupal\my_example\Controller;
//namespace Drupal\my_example\HelloServices;

class MyExampleController {
    public function hello() {
        //$service = \Drupal::service('my_example.sayHello');
        //$service = \Drupal::service('my_example.say_hello'); 
        //$opt = $service->sayHello();
        return array(
                '#title' => "Hello",
                '#markup' => 'Here is some content.',
            );
    }
}
