<?php

namespace Drupal\custom_service;
//namespace Drupal\custom_service\HelloServices2;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class CustomServiceServiceProvider.
 *
 * @package Drupal\custom_service
 */
class CustomServiceServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) { 
      //print_r($container); die();
     $definition = $container->getDefinition('custom_service.say_hello');
     //print_r( $definition); die();
     $op = $definition->setClass('Drupal\custom_service\HelloServices2');
     //print_r($op); die();
     //\Drupal::logger('my_service')->notice('updated sucessfully');
  }
}
