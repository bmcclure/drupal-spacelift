<?php
/**
 * Reusable callout Strip
 * used on Product Category Listing
 */

$headline = "Contact Our Support Center H2 Headline";
$wyisywg  = "<ul>
				<li>Get product information questions answered</li>
				<li>Have a SCR check over your order to make sure it’s right</li>
				<li>Check the status of your order and shipping inquiries</li>
				<li>Ask about our services for your job or project</li>
			  </ul>";
$button_title = 'Contact Us Today';
$button_link  = '#';

?>
<section class="ReusableCalloutStrip AngledBackground reverse bg-dark-blue" data-aos="SectionFade">
	<div class="AngledBackground-text grid-container">
		<div class="grid-x grid-padding-y large-up-2 vertical-center">
			<div class="ReusableCalloutStrip-text cell">
				<div class="ReusableCalloutStrip-text-container">
					<h2 class="ReusableCalloutStrip-title SectionFade-one"><?= $headline ?></h2>
					<a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?> <span
							class="fas fa-caret-right"></span></a>
				</div>
			</div>
			<div class="ReusableCalloutStrip-right cell ">
				<div class="wysiwyg styled-bullets SectionFade-two"><?= $wyisywg ?></div>
			</div>
		</div>
	</div>
</section>
