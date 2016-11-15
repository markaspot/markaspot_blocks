<?php

namespace Drupal\markaspot_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides some welcome information.
 *
 * @Block(
 *   id = "Markaspot Info Block",
 *   admin_label = @Translation("Mark-a-Spot: Information block")
 * )
 */
class MarkaspotInfoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => '
         <div class="welcome">
             <p>This is a default installation of Mark-a-Spot.</p> <p>You can easily turn this site into a 
                mapping platform without the civic context by customizing taxonomy terms and hiding the status field.</p>
         </div>
       ',
      '#attached' => array(
        'library' => array(
          'markaspot_blocks/markaspot_blocks',
        ),
      ),
    );
  }

}
