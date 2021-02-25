<ul class="ProductListingFilter-accordion accordion" data-accordion data-multi-expand="true"
    data-allow-all-closed="true">

	<?php
	$product_types = [
		[
			'name' => 'Coiled Pipe Markers',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Self-Adhesive Pipe Markers',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Carrier Pipe Markers',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Duct Markers',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Stencils',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Locator Tacks',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
		[
			'name' => 'Lorem Ipsum Dolor',
			'icon' => 'assets/images/yellow-icon.svg'
		],
	]
	?>
    <li class="ProductListingFilter-accordionItem accordion-item is-active" data-accordion-item>
        <a href="#" class="ProductListingFilter-title accordion-title">PRODUCT TYPES</a>
        <div class="ProductListingFilter-content accordion-content" data-tab-content>
            <button class="LinkButton"><i class="fal fa-times"></i> CLEAR</button>
            <div>
				<?php if ( $product_types ) { ?>
                    <ul class="ProductListingFilter-list">
						<?php foreach ( $product_types as $product_type ) {
							$icon = $product_type['icon'];
							$name = $product_type['name'];
							?>
                            <li class="ProductListingFilter-listItem">
                                <a class="ProductListingFilter-listItemRow" href="#">
                                    <span class="ProductListingFilter-listItemIcon"><?= file_get_contents( $icon ) ?></span>
                                    <span class="ProductListingFilter-listItemTitle"><?= $name ?></span>
                                </a>
                            </li>
							<?php
						} ?>
                    </ul>
				<?php } ?>

            </div>
            <div>
                <button class="ProductListingFilter-showButton LinkButton"><i class="fal fa-minus"></i> SHOW LESS
                </button>
            </div>
        </div>
    </li>
</ul>
