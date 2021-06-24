<?php

/**
 * @file
 * Main Nav.
 *
 * Notes: The ul, li structure seems pretty standard.
 * Hopefully this matches up with Drupal.
 */

$main_nav = [
  [
    'name' => 'Products',
    'url' => '',
    'special_classes' => 'is-MegaMenu is-MegaMenu-product',
    'children' =>
      [
        [
          'name' => 'Products By Category',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'View All Products',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Pipe Markers',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Coiled Pipe Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Self-Adhesive Pipe Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Carrier Pipe Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Duct Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Stencils',
                  'url' => '#',
                ],
                [
                  'name' => 'Locator Tacks',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Tags',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Equipment Tags',
                  'url' => '#',
                ],
                [
                  'name' => 'Valve Tags',
                  'url' => '#',
                ],
                [
                  'name' => 'Accident Prevention Tags',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Signs',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Equipment Signs',
                  'url' => '#',
                ],
                [
                  'name' => 'GHS Signs',
                  'url' => '#',
                ],
                [
                  'name' => 'Operational & Safety Signage',
                  'url' => '#',
                ],
                [
                  'name' => 'M&O Evacuation & Escape Signs',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Tape',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Underground Warning Tape',
                  'url' => '#',
                ],
                [
                  'name' => 'Arrow & Banding Tape',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Electrical',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Arc Flash Labels',
                  'url' => '#',
                ],
                [
                  'name' => 'Control Panel Labels',
                  'url' => '#',
                ],
                [
                  'name' => 'Switch Plates',
                  'url' => '#',
                ],
                [
                  'name' => 'Conduit & Cable Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Cable Tray Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Wire Markers',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Fire Protection',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Fire ID Pipe Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Fire ID Tags',
                  'url' => '#',
                ],
                [
                  'name' => 'Fire ID Labels',
                  'url' => '#',
                ],
              ],
            ],


            [
              'name' => 'Solar',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Solar Placards',
                  'url' => '#',
                ],
                [
                  'name' => 'Solar Sitemaps',
                  'url' => '#',
                ],
                [
                  'name' => 'Solar Wire Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Solar Labels',
                  'url' => '#',
                ],
                [
                  'name' => 'Solar Fence & Gate Signs',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Health & Safety',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Health & Safety Signage',
                  'url' => '#',
                ],
                [
                  'name' => 'Floor Graphics',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Ammonia',
              'url' => '#',
              'children' => [
                [
                  'name' => 'Component & Equipment Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Ammonia Pipe Markers',
                  'url' => '#',
                ],
                [
                  'name' => 'Critical Valve & Instrument Tags',
                  'url' => '#',
                ],
                [
                  'name' => 'Custom PSM Signage',
                  'url' => '#',
                ],
                [
                  'name' => 'Control Bank & Valve Group Signage',
                  'url' => '#',
                ],
              ],
            ],
            [
              'name' => 'Mounting Options & Accessories',
              'url' => '#',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Products By Industry',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [

            [
              'name' => 'Electrical Contractors',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'EPC Contractors',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Food & Beverage',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Health Care',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Industrial Manufacturing',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Marine and Offshore',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Mechanical Contractors',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Oil & Gas',
              'url' => '#',
              'children' => '',
            ],

            [
              'name' => 'Pharmaceutical',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Power Generation',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Process Chemical',
              'url' => '#',
              'children' => '',
            ],
            [
              'name' => 'Solar Energy',
              'url' => '#',
              'children' => '',
            ],


          ],
        ],
      ],
  ],
  [
    'name' => 'Technology',
    'url' => '',
    'special_classes' => 'is-MegaMenu',
    'children' =>
      [
        [
          'name' => 'Technology Headline',
          'description' => '<p>Lorem ipsum dolor sit amet, consecteter ading elit. Donex odio quisque volupat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra.</p><p><a href="#" class="link">VIEW ALL TECHNOLOGY <span class="fas fa-caret-right"></span></a></p>',
          'url' => '',
          'children' => '',
          'special_classes' => '',

        ],
        [
          'name' => 'Technologies',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'AIM Mobile Technology',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'ATLAS Service',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'AIM Auditing',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Custom Programming',
              'url' => '',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Other Pages',
          'url' => '',
          'description' => '',
          'special_classes' => 'MegaMenu-teasers',
          'children' => [
            [
              'name' => 'AIM Forms',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail.jpg',
              'children' => '',

            ],
            [
              'name' => 'AIM Services',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail-two.jpg',
              'children' => '',
            ],
          ],
        ],
      ],
  ],
  [
    'name' => 'Contractor Services',
    'url' => '',
    'special_classes' => 'is-MegaMenu',
    'children' =>
      [
        [
          'name' => 'Contractor Services',
          'description' => '<p>Lorem ipsum dolor sit amet, consecteter ading elit. Donex odio quisque volupat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra.</p><p><a href="#" class="link">VIEW ALL SERVICES <span class="fas fa-caret-right"></span></a></p>',
          'url' => '',
          'children' => '',
          'special_classes' => '',

        ],
        [
          'name' => 'Services',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'Order Guarantee Service',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Custom Product Design',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Material Take-Off',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Submittals',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Special Packaging',
              'url' => '',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Other Pages',
          'url' => '',
          'description' => '',
          'special_classes' => 'MegaMenu-teasers',
          'children' => [
            [
              'name' => 'Service Brochures',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail.jpg',
            ],
            [
              'name' => 'Industries',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail-two.jpg',
            ],
          ],
        ],
      ],
  ],
  [
    'name' => 'Owner Services',
    'url' => '',
    'special_classes' => 'is-MegaMenu',
    'children' =>
      [
        [
          'name' => 'Owner Services',
          'description' => '<p>Lorem ipsum dolor sit amet, consecteter ading elit. Donex odio quisque volupat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra.</p><p><a href="#" class="link">VIEW ALL SERVICES <span class="fas fa-caret-right"></span></a></p>',
          'url' => '',
          'children' => '',
          'special_classes' => '',

        ],
        [
          'name' => 'Services',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'Technical Drafting',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Installation',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Engineering',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Order Guarantee Service',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Custom Product Design',
              'url' => '',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Other Pages',
          'url' => '',
          'description' => '',
          'special_classes' => 'MegaMenu-teasers',
          'children' => [
            [
              'name' => 'Laser Scanning',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail.jpg',
              'children' => '',
            ],
            [
              'name' => 'Technology',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail-two.jpg',
              'children' => '',
            ],
          ],
        ],
      ],

  ],
  [
    'name' => 'Industries',
    'url' => '',
    'special_classes' => 'is-MegaMenu long',
    'children' =>
      [
        [
          'name' => 'Industries Headline',
          'description' => '<p>Lorem ipsum dolor sit amet, consecteter ading elit. Donex odio quisque volupat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra.</p><p><a href="#" class="link">VIEW ALL INDUSTRIES <span class="fas fa-caret-right"></span></a></p>',
          'url' => '',
          'children' => '',
          'special_classes' => '',

        ],
        [
          'name' => 'Industries',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'Health Care',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Mechanical Contractors',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Electrical Contractors',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Oil & Gas',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Power Generation',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Process Chemical',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Marine and Offshore',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Industrial Manufacturing',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Solar Energy',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Food & Beverage',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Pharmaceutical',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'EPC Contractors',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Pulp & Paper',
              'url' => '',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Other Pages',
          'url' => '',
          'description' => '',
          'special_classes' => 'MegaMenu-teasers',
          'children' => [
            [
              'name' => 'Contractor Services',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail.jpg',
            ],
            [
              'name' => 'Technology',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail-two.jpg',
            ],
          ],
        ],
      ],
  ],
  [
    'name' => 'Resources',
    'url' => '',
    'special_classes' => 'is-MegaMenu long',
    'children' =>
      [
        [
          'name' => 'Resources Headline',
          'description' => '<p>Lorem ipsum dolor sit amet, consecteter ading elit. Donex odio quisque volupat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra.</p><p><a href="#" class="link">VIEW ALL RESOURCES <span class="fas fa-caret-right"></span></a></p>',
          'url' => '',
          'children' => '',
          'special_classes' => '',

        ],
        [
          'name' => 'Resources',
          'url' => '',
          'description' => '',
          'special_classes' => '',
          'children' => [
            [
              'name' => 'Catalogs',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Service Brochures',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Standards Documents',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Product Sell Sheets',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Tip Sheets',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Technical Data Sheets',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Instructional Videos',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Case Studies',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Blog',
              'url' => '',
              'children' => '',
            ],
            [
              'name' => 'Business Central',
              'url' => '',
              'children' => '',
            ],
          ],
        ],
        [
          'name' => 'Other Pages',
          'url' => '',
          'description' => '',
          'special_classes' => 'MegaMenu-teasers',
          'children' => [
            [
              'name' => 'Laser Scanning',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail.jpg',
            ],
            [
              'name' => 'Technology',
              'url' => '#',
              'image' => 'assets/images/placeholder-thumbnail-two.jpg',
            ],
          ],
        ],
      ],
  ],
]
?>
<nav id="Header-mainNav" role="navigation" class="Header-mainNav">
  <div class="grid-container">
    <?php if ($main_nav) { ?>
      <ul class="Header-mainNavMenu">
        <?php foreach ($main_nav as $top_level) {
          $name = $top_level['name'];
          $url = $top_level['url'];
          $children = $top_level['children'];
          $special_classes = $top_level['special_classes'];
          echo "<li class='$special_classes' onclick=''><a href='$url'>$name</a>";

          if (strpos($special_classes, 'is-MegaMenu') !== FALSE) {
            ?>
            <div class='MegaMenu-wrapper'>
              <div class="MegaMenu grid-container">
                <?php if ($children) { ?>
                  <?php
                  echo "<ul class='MegaMenu-menu MegaMenu-topMenu'>";
                  foreach ($children as $child) {
                    $childName = $child['name'];
                    $childUrl = $child['url'];
                    $grandchildren = $child['children'];
                    $description = $child['description'];
                    $child_special_classes = $child['special_classes'];

                    echo "<li class='MegaMenu-columns'><a href='$childUrl'>$childName</a>";
                    if ($description) {
                      echo $description;
                    }
                    if (strpos($child_special_classes, 'MegaMenu-teasers') !== FALSE) {
                      if ($grandchildren) {
                        echo "<ul class='MegaMenu-menu MegaMenu-submenu MegaMenu-teasers FlexRow medium-up-2'>";
                        foreach ($grandchildren as $grandchild) {
                          $grandchildName = $grandchild['name'];
                          $grandchildUrl = $grandchild['url'];
                          $grandchildImage = $grandchild['image'];
                          echo "<li class='FlexRow-item'><a href='$grandchildUrl'><div class='MegaMenu-teasersImage' style='background: url($grandchildImage) no-repeat center; background-size: cover;'></div><div class='h5 HeaderFont--regular MegaMenu-teasersTitle'>$grandchildName</div></a></li>";
                        }
                        echo "</ul>";
                      }
                    }
                    elseif ($grandchildren) {
                      echo "<ul class='MegaMenu-menu MegaMenu-submenu'>";

                      foreach ($grandchildren as $grandchild) {
                        $grandchildName = $grandchild['name'];
                        $grandchildUrl = $grandchild['url'];
                        $greatgrandchildren = $grandchild['children'];
                        echo "<li><a href='$grandchildUrl'>$grandchildName</a>";
                        if ($greatgrandchildren) {
                          echo "<ul class='MegaMenu-menu MegaMenu-submenu MegaMenu-subsubmenu'>";
                          foreach ($greatgrandchildren as $greatgrandchild) {
                            $greatgrandchildName = $greatgrandchild['name'];
                            $greatgrandchildUrl = $greatgrandchild['url'];
                            echo "<li><a href='$greatgrandchildUrl'>$greatgrandchildName</a>";
                          }
                          echo "</ul>";
                        }
                        echo "</li>";
                      }
                      echo "</ul>";
                    }
                    echo "</li>";
                  }
                  echo "</ul>";
                }
                ?>
              </div>
              <div class="MegaMenu-footer">
                <div class="grid-container">
                  <div class="MegaMenu-footerRow">
                    <div class="MegaMenu-footerItem">
                      <a href="#"><span class="fas fa-search-location"></span>
                        Find a Rep <span
                          class="fas fa-caret-right"></span></a>
                    </div>
                    <div class="MegaMenu-footerItem">
                      <a href="#"> <span class="fas fa-envelope"></span> Contact
                        Support <span
                          class="fas fa-caret-right"></span></a>
                    </div>
                    <div class="MegaMenu-footerItem">
                      <a href="tel:+18002340135"><span
                          class="fas fa-phone"></span> TALK TO A CSR
                        <span class="light">(800) 234-0135</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          echo "</li>";
        } ?>
      </ul>
    <?php } ?>
  </div>

</nav>
