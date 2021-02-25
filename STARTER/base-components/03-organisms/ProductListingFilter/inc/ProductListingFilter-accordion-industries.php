<ul class="ProductListingFilter-accordion accordion" data-accordion data-multi-expand="true"
    data-allow-all-closed="true">
    <li class="ProductListingFilter-accordionItem accordion-item" data-accordion-item>
        <a href="#" class="ProductListingFilter-title accordion-title">INDUSTRIES</a>
        <div class="ProductListingFilter-content accordion-content" data-tab-content>
            <button class="LinkButton"><i class="fal fa-times"></i> CLEAR</button>
            <!-- BEGIN DELETE ME (use HTML from first example, PRODUCT TYPES -->
			<?php
			$industries = [
				[
					'name' => 'Oil & Gas',
					'icon' => 'assets/images/yellow-icon.svg'
				],
				[
					'name' => 'Health Care',
					'icon' => 'assets/images/yellow-icon.svg'
				],
				[
					'name' => 'Mechanical Contractors',
					'icon' => 'assets/images/yellow-icon.svg'
				],
				[
					'name' => 'Electrical Contractors',
					'icon' => 'assets/images/yellow-icon.svg'
				],
				[
					'name' => 'Power Generation',
					'icon' => 'assets/images/yellow-icon.svg'
				],
			]
			?>
            <div>
				<?php if ( $industries ) { ?>
                    <ul class="ProductListingFilter-list">
						<?php foreach ( $industries as $industry ) {
							$industry_icon = $industry['icon'];
							$industry_name = $industry['name'];
							?>
                            <li class="ProductListingFilter-listItem">
                                <a class="ProductListingFilter-listItemRow" href="#">
                                    <span class="ProductListingFilter-listItemIcon"><?= file_get_contents( $industry_icon ) ?></span>
                                    <span class="ProductListingFilter-listItemTitle"><?= $industry_name ?></span>
                                </a>
                            </li>
							<?php
						} ?>
                    </ul>
				<?php } ?>

            </div>
            <!-- END DELTE ME -->
            <div>
                <button class="ProductListingFilter-showButton LinkButton"><i class="fal fa-plus"></i> SHOW MORE</button>
            </div>
        </div>
    </li>
</ul>
