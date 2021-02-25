<?php
/**
 * Featured Services
 * Used on the homepage
 */

$headline = "Featured Services Headline Here (H2)";
$pages    = [
	[
		"image"        => "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg",
		"title"        => "Material Take Off",
		"body"         => "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.",
		"button_title" => "Service Details",
	],
	[
		"image"        => "/components/03-organisms/FeaturedServices/images/installation.jpg",
		"title"        => "Installation",
		"body"         => "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.",
		"button_title" => "Service Details",
	],
	[
		"image"        => "/components/03-organisms/FeaturedServices/images/MSI_1247.jpg",
		"title"        => "Technical Drafting Service",
		"body"         => "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.",
		"button_title" => "Service Details",
	]
];
?>

<section class="FeaturedServices bg-light" >
    <div class="grid-container">
        <header class="section-header text-center" data-aos="fade-up">
            <h2><?= $headline ?></h2>
        </header>
        <div class="FlexRow medium-up-2 large-up-3">
			<?php foreach ( $pages as $page ) {
				// To do if time, pass in variables? doesn't really matter since we will swap out with Twig anyway
				include "components/02-molecules/PageTeaserBlock/PageTeaserBlock.php";
			} ?>
        </div>
    </div>
</section>
