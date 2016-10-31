<?php

namespace Drupal\markaspot_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Button Action' Block
 *
 * @Block(
 *   id = "markaspot_base_block",
 *   admin_label = @Translation("Markaspot Stage block"),
 * )
 */

class MarkaspotStageBlock extends BlockBase {

  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href="/about"><i class="fa fa-info-circle"></i></a>
             <p>' . $this->t('About this platform') . '</p>
         </div>
          
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href="/open311"><i class="fa fa-pie-chart"></i></a>
             <p>' . $this->t('Open311, the GeoReport v2 API of Mark-a-Spot') . '</p>
         </div>
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href="/requests"><i class="fa fa-eye"></i></a>
             <p>' . $this->t('Search and check for requests') . '</p>
         </div>
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href="/user"><i class="fa fa-user"></i></a>
             <p>' . $this->t('Already have an account?') . '</p>
         </div>
       '
    );
  }
}
