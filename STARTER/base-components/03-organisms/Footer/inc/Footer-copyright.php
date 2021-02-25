<?php
/**
 * Footer-copyright
 */

$footer_copyright_menu = [
	[
		'name' => 'Privacy Policy',
		'url'  => '#'
	],
	[
		'name' => 'Returns Policy',
		'url'  => '#'
	],
	[
		'name' => 'Terms & Conditions',
		'url'  => '#'
	],
]
?>

<div class="Footer-copyright bg-light">
    <div class="grid-container">
        <div class="grid-x grid-margin-x text-center large-text-left">
            <div class="cell large-7">
                <p>© <?php echo date( "Y" ) ?> Marking Services Inc. All Rights Reserved. <span class="Footer-copyrightTopFloor">Designed by <a
                            href="https://www.topflooortech.com" target="_blank">Top Floor</a></span></p>
            </div>
            <div class="cell large-5 large-text-right">
				<?php
				if ( $footer_copyright_menu ) {
					echo "<ul class='Footer-copyrightMenu'>";

					foreach ( $footer_copyright_menu as $menu_item ) {
						$url  = $menu_item['url'];
						$name = $menu_item['name'];
						echo "<li class='Footer-copyrightMenuItem'><a href='$url'>$name</a></li>";
					}
					echo "</ul>";
				}

				?>
            </div>
        </div>

    </div>
</div>
