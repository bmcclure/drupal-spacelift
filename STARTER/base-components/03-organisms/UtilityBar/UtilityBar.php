<?php
/**
 * Used in the Header / header-main
 */

?>

<div class="UtilityBar">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-shrink text-center medium-text-left">
                <ul class="UtilityBar-list">
                    <li class="UtilityBar-listItem">
                        <a href="tel:8002340135"><span class="fas fa-phone-square-alt"></span> (800) 234-0135</a>
                    </li>
                    <li class="UtilityBar-listItem">
                        <a href="#"><span class="fas fa-envelope-square"></span> Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="cell show-for-medium medium-auto">
	            <?php

	            $utility_menu = [
		            [
			            'name' => 'News',
			            'url'  => '#'
		            ],
		            [
			            'name' => 'Blog',
			            'url'  => '#'
		            ],
		            [
			            'name' => 'Careers',
			            'url'  => '#'
		            ],
		            [
			            'name' => 'About Us',
			            'url'  => '#'
		            ],
		            [
			            'name' => 'Rep Locator',
			            'url'  => '#'
		            ],
	            ];
	            ?>

                <nav class="UtilityBar-menu" role="navigation">
		            <?php
		            if ( $utility_menu ) {
			            echo "<ul class='UtilityBar-list UtilityBar-listRight'>";
			            foreach ( $utility_menu as $menu_item ) {
				            $name = $menu_item['name'];
				            $url  = $menu_item['url'];
				            echo "<li class='UtilityBar-listItem UtilityBar-listRightItem'><a href='$url'>$name</a></li>";
			            }
			            echo "</ul>";
		            }
		            ?>
                </nav>
            </div>

        </div>
    </div>
</div>
