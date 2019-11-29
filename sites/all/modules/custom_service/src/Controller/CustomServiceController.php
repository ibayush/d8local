<?php
/**
 * @file
 * @author Rakesh James
 * Contains \Drupal\custom_service\Controller\CustomServiceController.
 * Please place this file under your example(module_root_folder)/src/Controller/
 */
namespace Drupal\custom_service\Controller;
/**
 * Provides route responses for the Example module.
 */
class CustomServiceController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myPage() {
    $service = \Drupal::service('custom_service.say_hello');
    $output = $service->sayHello('Hello Ayush');
    
    $element = array(
      '#markup' => $output,
    );
    return $element;
  }
}
?>
