<?php
 
namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\hello_world\MyLinkGenerator\MyLinkGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
 
class HelloWorldController {
    private $link_generator;
    public function hello() {
        // $hello = $this->link_generator->generate($text, $url);
        // return new Response($hello);
        //$generater = \Drupal::service('link_generater');
        //$gene = $generater->generate();
        
        return array(
                '#title' => 'Hello World!',
                '#markup' => 'Here is some content.',
            );
    }
}
