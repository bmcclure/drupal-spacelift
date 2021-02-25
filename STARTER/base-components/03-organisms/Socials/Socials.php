<?php
/**
 * Socials
 * description: just getting a head start on this
 */


$socials = [
	[
		'icon' => 'facebook-f',
		'url'  => 'https://www.facebook.com/markingservices/?ref=hl'
	],
	[
		'icon' => 'twitter',
		'url'  => 'https://twitter.com/MarkingServices'
	],
	[
		'icon' => 'youtube',
		'url'  => 'https://www.youtube.com/channel/UC3yrx0Y57F7VT5pFk7L_DmA'
	],
	[
		'icon' => 'linkedin-in',
		'url'  => 'https://www.linkedin.com/company/marking-services-inc'
	],
];

if ( $socials ) {
	?>

    <div class="Socials">
        <div class="Socials-row">

			<?php
			foreach ( $socials as $social ) {
				$icon = $social['icon'];
				$url  = $social['url'];
				?>
                <a href="<?= $url; ?>" class="Socials-button" target="_blank" rel="noopener">
                    <span class="fab fa-<?= $icon; ?>"></span>
                </a>
				<?php
			}
			?>

        </div>
    </div>

	<?php
}
