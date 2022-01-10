<?php

namespace Drupal\drupal_solr\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for drupal-solr routes.
 */
class DrupalSolrController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
