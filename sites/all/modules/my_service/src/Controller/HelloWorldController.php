<?php
 
namespace Drupal\my_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
 
class HelloWorldController {
 
    public function hello() {
        $service = \Drupal::service('my_service.say_hello');
        //print_r($service)->; die();
        $services = $service->sayHello();
        //print $services; 
        return array(
                '#title' => $services,
                '#markup' => 'Here is some content.',
            );
    }
}
