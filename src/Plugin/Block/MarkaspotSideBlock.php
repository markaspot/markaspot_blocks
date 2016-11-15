<?php

namespace Drupal\markaspot_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Button Action' Block.
 *
 * @Block(
 *   id = "markaspot_side_block",
 *   admin_label = @Translation("Markaspot Side Action block"),
 * )
 */
class MarkaspotSideBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '
        <div class="mas-action">
          <ul class="theme-grey orientation-vertical col-3">
            <li class="mas-button"><a href="#" role="button" aria-label=""><span class="fa fa-map"></span><span class="">Toggle Map</span></a></li>
            <li class="mas-button"><a href="/report" data-rel="popup" title="" role="button" aria-label=""><span class="fa fa-plus"></span><span class="add">Add Service request</span></a></li>
          </ul>
        </div>
       ',
    );
  }

}
