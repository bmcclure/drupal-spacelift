<?php
/**
 * Contact Us Box
 * This really seems like something that should just not be its own component, but Melanie had some very specific styling requests.
 */

$title   = "Headline About Contacting Us";
$wysiwyg = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
?>
<div class="ContactUsBox bg-light text-center">
    <div class="ContactUsBox-text">
        <h2><?= $title ?></h2>
		<?= $wysiwyg ?>
        <p>Speak with a CSR:
            <a href="tel:+1800234-0135">
                <span class="fas fa-phone"></span>
                (800) 234-0135
            </a>
        </p>
        <a href="#" class="button">Contact Us <span class="fas fa-caret-right"></span></a>
    </div>
</div>
