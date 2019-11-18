<?php

namespace Drupal\hello_world;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class hello_worldServiceProvider.
 *
 * @package Drupal\hello_world
 */
class hello_worldServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
     $definition = $container->getDefinition('link_generater');
     $definition->setClass('Drupal\hello_world\MyLinkGenerator\MyLinkGenerator');
     //\Drupal::logger('hello_world')->notice('updated sucessfully');
    // $definition = $container->getDefinition('HelloWorld.HelloWorldService');
    // $definition->setClass('Drupal\HelloWorld\MyLinkGenerator\HelloWorldService2');
    // $definition->setArguments(
    //   [
    //     new Reference('entity.manager'),
    //     new Reference('password'),
    //     new Reference('language_manager'),
    //     new Reference('logger.factory'),
    //     new Reference('hello_world.netforum_client'),
    //   ]
    // );
  }

}
