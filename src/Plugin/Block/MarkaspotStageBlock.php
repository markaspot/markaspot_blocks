<?php

/**
 * Provides a 'Button Action' Block
 *
 * @Block(
 *   id = "markaspot_base_block",
 *   admin_label = @Translation("Markaspot Stage block"),
 * )
 */

namespace Drupal\markaspot_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class MarkaspotStageBlock extends BlockBase {
  /**
   * Provides a 'Stage block' block.
   *
   * @Block(
   *   id = "Markaspot Stage Block",
   *   admin_label = @Translation("Mark-a-Spot: Stage block")
   * )
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg"><i class="fa fa-info-circle"></i></a>
             <p>Lorem Impsum dolor sit amet</p>
         </div>
          
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href=""><i class="fa fa-pie-chart"></i></a>
             <p>Lorem Impsum dolor sit amet</p>
         </div>
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg"  href=""><i class="fa fa-eye"></i></a>
             <p>Lorem Impsum dolor sit amet</p>
         </div>
         <div class="round-button col-xs-3">
             <a class="btn btn-default btn-circle btn-lg" href=""><i class="fa fa-user"></i></a>
             <p>Lorem Impsum dolor sit amet</p>
         </div>
       '
    );
  }
}
