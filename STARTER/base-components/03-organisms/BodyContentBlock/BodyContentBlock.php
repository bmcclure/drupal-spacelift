<?php
/**
 * Body Content
 * used in organisms/Content 5050
 */

$headline     = 'Headline For More About this Service';
$wysiwyg      = '<h4>H4 Subheadline Example</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit. Morbi in sem quis dui placerat ornare. Pellesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
				<ul>
					<li>Aliquam tincidunt mauris eu risus</li>
					<li>Vestibulum auctor dapibus neque</li>
					<li>Cras ornare tristique elit</li>
					<li>Donec quis dui at dolor tempor interdum</li>
				</ul>';
$button_title = 'Example Button';
$button_link  = '#placeholder';

if ( $headline ) {
	?>
    <article class="BodyContentBlock cell">
        <header>
			<?php include "components/01-atoms/Line/Line.php"; ?>
            <h2 class="title"><?= $headline ?></h2>
        </header>
        <div class="styled-bullets wysiwyg"><?= $wysiwyg ?></div>
		<?php if ( $button_title ) {
			?>
            <a href="<?= $button_link ?>" class="button"><?= $button_title ?>
                <span class="fas fa-caret-right"></span>
            </a>
		<?php } ?>
    </article>

	<?php
}

