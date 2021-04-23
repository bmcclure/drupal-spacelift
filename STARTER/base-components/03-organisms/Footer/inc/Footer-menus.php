<?php

/**
 * @file
 * Footer-menus.php.
 */

$footer_menu_1 = [
  [
    'name' => 'Material Take-off',
    'url' => '#',
  ],
  [
    'name' => 'Submittals',
    'url' => '#',
  ],
  [
    'name' => 'Special Packaging',
    'url' => '#',
  ],
  [
    'name' => 'Technical Drafting Service',
    'url' => '#',
  ],
  [
    'name' => 'Installation',
    'url' => '#',
  ],
  [
    'name' => 'Engineering',
    'url' => '#',
  ],
  [
    'name' => 'Order Guarantee Service',
    'url' => '#',
  ],
  [
    'name' => 'Custom Product Design',
    'url' => '#',
  ],
];
$footer_menu_2 = [
  [
    'name' => 'Contact Us',
    'url' => '#',
  ],
  [
    'name' => 'Rep Locator',
    'url' => '#',
  ],
  [
    'name' => 'My Account',
    'url' => '#',
  ],
  [
    'name' => 'Quick Order',
    'url' => '#',
  ],
  [
    'name' => 'Bulk Order Form',
    'url' => '#',
  ],
  [
    'name' => 'Careers',
    'url' => '#',
  ],

];

?>

<nav role="navigation" class="Footer-menus">
  <ul id="FooterAccordionMenu"
      class="menu vertical medium-horizontal accordion-menu" data-accordion-menu
      data-submenu-toggle="true">
    <li>
      <div class="Footer-line Line"></div>
      <a href="#"><h4 class="Footer-title">Contact Us</h4></a>
      <ul class="menu vertical nested">
        <li>
          <?php include "components/03-organisms/Footer/inc/Footer-contact.php"; ?>
          <div class="Footer-socials show-for-medium">
            <?php include "components/03-organisms/Socials/Socials.php"; ?>
          </div>
        </li>
      </ul>
    </li>
    <li>
      <div class="Footer-line Line"></div>
      <a href="#"><h4 class="Footer-title">Identification Services</h4></a>
      <ul class="menu vertical nested">
        <?php foreach ($footer_menu_1 as $menu_item) {
          $name = $menu_item['name'];
          $url = $menu_item['url'];
          echo "<li><a href='$url'>$name</a></li>";
        } ?>
      </ul>
    </li>
    <li>
      <div class="Footer-line Line"></div>
      <a href="#"><h4 class="Footer-title">Quick Links</h4></a>
      <ul class="menu vertical nested">
        <?php foreach ($footer_menu_2 as $menu_item) {
          $name = $menu_item['name'];
          $url = $menu_item['url'];
          echo "<li><a href='$url'>$name</a></li>";
        } ?>
      </ul>
    </li>
  </ul>
</nav>
