<?php

namespace Drupal\domain_adv;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\domain_access\AccessMethod\NoRecords;

class DomainAdvServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    $definition = $container->getDefinition('domain_access.access_method');
    $definition->setClass(NoRecords::class)
      ->setArguments([]);
  }

}
