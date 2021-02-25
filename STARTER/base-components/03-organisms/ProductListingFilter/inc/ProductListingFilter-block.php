<?php
$categories = [
	[
		'name'   => 'Pipe Markers',
		'status' => 'active',
	],
	[
		'name'   => 'Tags',
		'status' => '',
	],
	[
		'name'   => 'Signs',
		'status' => '',
	],
	[
		'name'   => 'Tape',
		'status' => '',
	],
	[
		'name'   => 'Electrical',
		'status' => '',
	],
	[
		'name'   => 'Fire Protection',
		'status' => '',
	],
	[
		'name'   => 'Solar',
		'status' => '',
	],
	[
		'name'   => 'Health & Safety',
		'status' => '',
	],
	[
		'name'   => 'Ammonia',
		'status' => '',
	],
	[
		'name'   => 'Mounting Options & Accessories',
		'status' => '',
	],
]

?>
<div class="ProductListingFilter-block ProductListingFilter-categories show-for-medium">
    <h5>BROWSE CATEGORIES</h5>
    <a href="#">View All Products</a>
    <div>
        <ul class="ProductListingFilter-list">
			<?php foreach ( $categories as $category ) {
				$name   = $category['name'];
				$status = $category['status'];
				?>
                <li class="<?= $status ?>"><a href="#"><?= $name ?></a></li>
			<?php } ?>

        </ul>
    </div>
</div>
