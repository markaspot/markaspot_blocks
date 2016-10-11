<?php

/**
 * Provides a 'Button Action' Block
 *
 * @Block(
 *   id = "markaspot_base_add_block",
 *   admin_label = @Translation("Markaspot Stage Add block"),
 * )
 */

namespace Drupal\markaspot_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class MarkaspotStageAddBlock extends BlockBase {
  /**
   * Provides a 'Stage Add block' block.
   *
   * @Block(
   *   id = "Markaspot Stage Add Request Block",
   *   admin_label = @Translation("Mark-a-Spot: Stage Add Request block")
   * )
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '
        <div class="row">
        <div class="button-sidekick col-xs-3">
            <p class="btn btn-circle btn-lg"><i class="fa fa-map-marker"></i></p>
        </div>
        <div class="button-add col-xs-9">
            <p><a href="node/add/service_request">Add a report</a></p>
        </div>
        </div>
       '
    );
  }
}
