<?php
/**
 * ProductSpecifications
 */


$table = [
	[
		'label' => 'Mounting Style',
		'value' => 'Self-Adhesive'
	],
	[
		'label' => 'Adhesive',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'Water Resistance',
		'value' => 'Excellent'
	],
	[
		'label' => 'UV Resistance',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'Chemical Resistance',
		'value' => 'Dolor'
	],
	[
		'label' => 'Detergent Resistance',
		'value' => 'XYZ'
	],
	[
		'label' => 'Abrasion Resistance',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'Corrosion Resistance',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'Humidity and Thermal Resistance',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'Industry Compliance',
		'value' => 'Lorem Ipsum'
	],
	[
		'label' => 'FDA Compliant',
		'value' => 'Xyz'
	],
	[
		'label' => 'Indoor or Outdoor Use',
		'value' => 'Lorem Ipsum Dolor'
	],
	[
		'label' => 'Expected Outdoor Durability',
		'value' => 'etc. etc.'
	],

]

?>
<section class="ProductSpecifications">
    <div class="grid-container">
        <header class="section-header">
            <div class="Line">
            </div>
            <h2 class="">Product Specifications</h2>
        </header>
		<?php if ( $table ) { ?>
            <div class="ProductSpecifications-specs">
				<?php
				foreach ( $table as $item ) {
					$label = $item['label'];
					$value = $item['value']; ?>
                    <div class="ProductSpecifications-spec">
                        <div class="ProductSpecifications-label"><?= $label ?></div>
                        <div class="ProductSpecifications-value"><?= $value ?></div>
                    </div>
					<?php
				} ?>
            </div>
		<?php } ?>
    </div>
</section>
