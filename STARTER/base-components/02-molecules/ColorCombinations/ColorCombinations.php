<?php
/**
 * ColorCombinations
 */

$ColorCombinations = [
	[
		'id'         => '1',
		'title'      => 'RED',
		'background' => '#D2232A',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '2',
		'title'      => 'ORANGE',
		'background' => '#F08E20',
		'color'      => '#000',
		'border'     => '',

	],
	[
		'id'         => '3',
		'title'      => 'YELLOW',
		'background' => '#FFF200',
		'color'      => '#000',
		'border'     => '',
	],
	[
		'id'         => '4',
		'title'      => 'BROWN',
		'background' => '#7E4127',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '5',
		'title'      => 'GREEN',
		'background' => '#40AE49',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '6',
		'title'      => 'BLUE',
		'background' => '#0071AE',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '7',
		'title'      => 'PURPLE',
		'background' => '#68408E',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '8',
		'title'      => 'WHITE',
		'background' => '#fff',
		'color'      => '#000',
		'border'     => '#000',
	],
	[
		'id'         => '9',
		'title'      => 'GREY',
		'background' => '#696A6C',
		'color'      => '#fff',
		'border'     => '',
	],
	[
		'id'         => '10',
		'title'      => 'BLACK',
		'background' => '#000',
		'color'      => '#fff',
		'border'     => '',
	],
];

if ( $ColorCombinations ) { ?>
    <ul class="ColorCombinations RadioButtons FlexRow small-up-3 medium-up-6 large-up-4">
		<?php
		foreach ( $ColorCombinations as $color_combination ) {
			$id           = $color_combination['id'];
			$title        = $color_combination['title'];
			$background   = $color_combination['background'];
			$color        = $color_combination['color'];
			$border_color = $color_combination['border'];
			if ( ! $border_color ) {
				$border_color = $background;
			}
			?>
            <li class="RadioButtons-combo FlexRow-item">
                <input class="ColorCombinations-input RadioButtons-input" type="radio" id="<?= $id ?>" name="Color"
                       value="<?= $title ?>" v-model="colorCombo" @change="onColorComboChange()">

                <label for="<?= $id ?>" class="ColorCombinations-button RadioButtons-button button"
                       style="background: <?= $background ?>; color: <?= $color ?>; border: 1px solid <?= $border_color ?>">
					<?= $title ?>
                </label>
            </li>
		<?php } ?>
    </ul>
	<?php
}
