<?php

namespace Drupal\my_service;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**my_service
 * Class MyServiceServiceProvider.
 *
 * @package Drupal\my_service
 */
class MyServiceServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) { 
     
     $definition = $container->getDefinition('my_service.say_hello');
     //print_r($definition); die();
     $op = $definition->setClass('Drupal\my_service\HelloServices2');
     
    //  return array(
    //     '#title' => $opt,
    //     '#markup' => 'Here is some content.',
    //  );
     //\Drupal::logger('my_service')->notice('updated sucessfully');
  }
}
