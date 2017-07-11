<?php

namespace Drupal\ucr_global\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'UCR Global: facebook' block.
 *
 * @Block(
 *   id = "ucr_global_facebook",
 *   admin_label = @Translation("Facebook info in the follow us section of the site.")
 * )
 */

class UcrGlobalFollowUsBlock extends BlockBase {
    public function build() {
    $config = \Drupal::config('ucrglobal.settings');
    $facebook = $config->get('facebook');

    return array(
      '#type' => 'markup',
      '#markup' => $facebook,
    );
  }

}