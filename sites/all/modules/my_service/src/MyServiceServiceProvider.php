<?php

namespace Drupal\my_service;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class my_serviceServiceProvider.
 *
 * @package Drupal\my_service
 */
class MyServiceServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) { 
     //$definition = $container->getDefinition('link_generater');
     //$definition->setClass('Drupal\my_service\MyLinkGenerator\MyLinkGenerator');
     //\Drupal::logger('my_service')->notice('updated sucessfully');
  }
}
