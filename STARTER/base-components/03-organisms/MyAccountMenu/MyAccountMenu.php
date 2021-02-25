<?php

$right_menu = [
	[
		'name' => 'Sign In',
		'url'  => '#',
	],
	[
		'name' => 'Account Dashboard',
		'url'  => '#',
	],
	[
		'name' => 'Account Information',
		'url'  => '#',
	],
	[
		'name' => 'Addresses',
		'url'  => '#',
	],
	[
		'name' => 'Orders/Quotes',
		'url'  => '#',
	],
	[
		'name' => 'Payment Options',
		'url'  => '#',
	],
	[
		'name' => 'Documents',
		'url'  => '#',
	],
	[
		'name' => 'All My Data',
		'url'  => '#',
	],
	[
		'name' => 'My Jobs',
		'url'  => '#',
	],
]
?>

<div class="MyAccountMenu cell auto medium-shrink ">
	<ul id="MyAccountMenu-dropdown" class="MyAccountMenu-dropdown dropdown menu" data-dropdown-menu>
		<li class="MyAccountMenu-account">
			<a href="#" class="h6 show-for-medium MyAccountMenu-title"><span class="far fa-user"></span> SIGN IN</a>
			<button type="button" data-open="OffcanvasMyAccount" class="MyAccountMenu-title hide-for-medium h6"><span
					class="far fa-user"></span></button>
			<?php if ( $right_menu ) { ?>
				<ul class="MyAccountMenu-dropdownMenu menu show-for-medium">
					<?php foreach ( $right_menu as $menu_item ) {
						$url  = $menu_item['url'];
						$name = $menu_item['name'];
						echo "<li class='MyAccountMenu-dropdownMenuItem'><a href='$url'>$name</a></li>";
					} ?>
				</ul>
			<?php } ?>
		</li>
		<li><a href="#" class="h6 MyAccountMenu-title"><span class="far fa-stopwatch"></span><span
					class="show-for-medium">  QUICK ORDER</span></a></li>
		<li>
			<button type="button" data-open="OffcanvasCart" class="MyAccountMenu-title Header-cartButton h6"><span
					class="far fa-shopping-cart"></span><span class="show-for-medium">  CART</span> <span
					class="CartCount">(6)</span></button>
		</li>
	</ul>
</div>
