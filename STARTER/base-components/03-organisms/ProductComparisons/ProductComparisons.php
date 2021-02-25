<?php
/**
 * ProductComparisons
 *
 */

// SUGGESTED Structure

$rows    = [
	[
		'title'  => '',
		'values' => [
			'MS-900 Adhesive',
			'Economy MS-900 Markers',
			'Adhesive Roll MS-900',
			'MS-970 Coiled Pipe Markers',
			'MS-975 Pipe Markers',
		]
	],
	[
		'title'  => 'Base Materials',
		'values' => [
			'Thick PVC',
			'Thick PVC',
			'Thick PVC',
			'Thick PVC',
			'Thick PVC',
		]
	],
	[
		'title'  => 'Water Resistance',
		'values' => [
			'Excellent',
			'Excellent',
			'Excellent',
			'Excellent',
			'Excellent',
		]
	],
	[
		'title'  => 'Chemical Resistance',
		'values' => [
			'Resistant to acids, alkalis and salts',
			'Resistant to acids, alkalis and salts',
			'Resistant to acids, alkalis and salts',
			'Resistant to acids, alkalis and salts',
			'Resistant to acids, alkalis and salts',
		]
	],
	[
		'title'  => 'Surface Temperature Range',
		'values' => [
			'-40°F to +180°F',
			'-40°F to +180°F',
			'-40°F to +180°F',
			'-40°F to +180°F',
			'-40°F to +180°F',
		]
	],
	[
		'title'  => 'Expected Outdoor Durability',
		'values' => [
			'5 years',
			'5 years',
			'5 years',
			'5 years',
			'5 years',
		]
	],

];
$lastrow = [
	'title'  => '',
	'values' => [
		[
			'url'   => '',
			'label' => 'Current'
		],
		[
			'url'   => '#',
			'label' => 'View'
		],
		[
			'url'   => '#',
			'label' => 'View'
		],
		[
			'url'   => '#',
			'label' => 'View'
		],
		[
			'url'   => '#',
			'label' => 'View'
		],
	]
];

if ( $rows ) {
	$i = 0;
	?>

    <section class="ProductComparisons">
        <div class="grid-container">
            <header class="section-header">
                <div class="Line"></div>
                <h2>Product Comparisons</h2>
            </header>
            <div class="ProductComparisons-chart">
				<?php foreach ( $rows as $row ) {
					$title  = $row['title'];
					$values = $row['values'];
					$i ++;
					if ( $values ) {
						$a = 1;

						?>
                        <div class="ProductComparisons-row ProductComparisons-row-<?= $i ?>">
                            <div class="ProductComparisons-title ProductComparisons-cell ProductComparisons-cell-<?= $a ?>">
                                <div class="ProductComparisons-cellContent">
                                    <div class="ProductComparisons-cellContentContainer"><?= $title ?></div>
                                </div>
                            </div>
							<?php foreach ( $values as $value ) {
								$a ++;
								?>
                                <div class="ProductComparisons-cell ProductComparisons-cell-<?= $a ?>">
                                    <div class="ProductComparisons-cellContent">
                                        <div class="ProductComparisons-cellContentContainer"><?= $value ?></div>
                                    </div>
                                </div>
							<?php } ?>
                        </div>

					<?php }
				} ?>
                <!-- last row (includes buttons, has a different need) -->
				<?php if ( $lastrow ) {
				$b = 'last';

				$buttonTitle  = $lastrow['title'];
				$buttonvalues = $lastrow['values'];
				if ( $buttonvalues ) {
				$c = 1;

				?>
                <div class="ProductComparisons-row ProductComparisons-row-<?= $b ?>">
                    <div class="ProductComparisons-title ProductComparisons-cell ProductComparisons-cell-<?= $c ?>">
                        <div class="ProductComparisons-cellContent">
                            <div class="ProductComparisons-cellContentContainer"><?= $buttonTitle ?></div>
                        </div>
                    </div>
					<?php foreach ( $buttonvalues

					as $buttonvalue ) {
					$url   = $buttonvalue['url'];
					$label = $buttonvalue['label'];
					$c ++;
					?>
                    <div class="ProductComparisons-cell ProductComparisons-cell-<?= $c ?>">
						<?php
						$htmlTag = "div";
						$caret   = "";
						if ( ! empty( $url ) ) {
							$htmlTag = "a";
							$caret   = '<span class="fas fa-caret-right"></span>';
						} ?>
                        <<?= $htmlTag ?> href="<?= $url ?>" class="ProductComparisons-cellContent">
                        <div class="ProductComparisons-cellContentContainer"
                        ><?= $label ?> <span
                                    class="show-for-medium ProductComparisons-cellContentContainerShow">Product</span>
							<?= $caret ?>
                        </div>
                    </<?= $htmlTag ?>>
                </div>
			<?php } ?>
            </div>

			<?php }

			} ?>

            <!-- end last row -->
        </div>
        </div>
    </section>
	<?php
}
