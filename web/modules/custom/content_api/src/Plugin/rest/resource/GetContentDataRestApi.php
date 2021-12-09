<?php

namespace Drupal\content_api\Plugin\rest\resource;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraphs;
use Drupal\rest\ModifiedResourceResponse;

/**
 * Provides REST API for Content Based on URL
 * @RestResource(
 *   id = "get_content_rest_resource",
 *   label = @Translation("Content API"),
 *   uri_paths = {
 *    "canonical" = "/api/content"
 *  }
 * )
 *
 */
class GetContentDataRestApi extends ResourceBase
{
  /**
   * @return ModifiedResourceResponse
   */
  public function get(): ModifiedResourceResponse
  {
    if (\Drupal::request()->query->has('url')) {
      $url = \Drupal::request()->query->get('url');

      if (!empty($url)) {
        $query = \Drupal::entityQuery('node')->condition('field_unique_url',$url);

        $nodes = $query->execute();

        $node_id = array_values($nodes);

        if (!empty($node_id)) {
          $data = Node::load($node_id[0]);
          return new ModifiedResourceResponse($data);
        }
      }
    }
  }
}
