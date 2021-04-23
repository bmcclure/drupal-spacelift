<?php

/**
 * @file
 * OffcanvasMyAccount.php.
 */

$right_menu = [
  [
    'name' => 'Sign In',
    'url' => '#',
  ],
  [
    'name' => 'Account Dashboard',
    'url' => '#',
  ],
  [
    'name' => 'Account Information',
    'url' => '#',
  ],
  [
    'name' => 'Addresses',
    'url' => '#',
  ],
  [
    'name' => 'Orders/Quotes',
    'url' => '#',
  ],
  [
    'name' => 'Payment Options',
    'url' => '#',
  ],
  [
    'name' => 'Documents',
    'url' => '#',
  ],
  [
    'name' => 'All My Data',
    'url' => '#',
  ],
  [
    'name' => 'My Jobs',
    'url' => '#',
  ],
]
?>

<div class="OffcanvasMyAccount Header-offcanvas off-canvas position-left"
     id="OffcanvasMyAccount"
     data-off-canvas
     data-transition="overlap">
  <button class="close-button" aria-label="Close menu" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
  <div class="OffcanvasMain-container">
    <div class="OffcanvasMain-search">
      <div class="SearchInput ">
        <h2 class="OffcanvasMain-title">My Account</h2>
      </div>
    </div>
    <div class="OffcanvasMenu">
      <?php
      if ($right_menu) { ?>
        <ul id="OffcanvasMenu-menu2"
            class="OffcanvasMenu-menu menu vertical accordion-menu"
            data-accordion-menu
            data-submenu-toggle="true">
          <?php foreach ($right_menu as $menu_item) {
            $url = $menu_item['url'];
            $name = $menu_item['name'];
            echo "<li class='OffcanvasMenu-menuParent'><a href='$url'>$name</a></li>";
          } ?>
        </ul>
        <?php
      }
      ?>
    </div>
  </div>

</div>
