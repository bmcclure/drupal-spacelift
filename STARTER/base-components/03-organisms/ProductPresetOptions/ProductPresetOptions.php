<?php
/**
 * ProductPresetOptions
 *
 */
$presetLegends = [
	[ 'id' => 0, 'name' => '120° HOT WATER' ],
	[ 'id' => 1, 'name' => '140° HOT WATER' ],
	[ 'id' => 2, 'name' => '160° HOT WATER' ],
	[ 'id' => 3, 'name' => '2 PSI GAS' ],
	[ 'id' => 4, 'name' => '2 PSI NATURAL GAS' ],
];
$Sizes         = [
	[
		'title'          => '1" x 3"',
		'value'          => 'rect-1x3',
		'mounting'       => [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ],
		'characterLimit' => 50,
		'presets'        => [ 0, 1, 2, 3, 4 ],

	],
	[
		'title'          => '1.5" Round',
		'value'          => 'round-1-5',
		'mounting'       => [ 0 ],
		'characterLimit' => 12,
		'presets'        => [],


	],
	[
		'title'          => '1.5" Square',
		'value'          => 'square-1-5',
		'mounting'       => [ 0 ],
		'characterLimit' => 12,
		'presets'        => [],
	],
];
?>

<div id="ProductPresetOptions" class="ProductPresetOptions">
    <h3 class="title">Select Options</h3>
    <div class="flex-container align-middle">
        <label class="flex-child-shrink Label" for="pipe-diameter">
            SIZE
        </label>
        <div class="flex-child-auto">
            <span class=" Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                  title="<div class='title'><b>Size</b></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                <i class="fas fa-question-circle"></i>
                <span class="sr-only">More information on Size</span>
            </span>
        </div>
    </div>
    <select name="pipe-diameter" id="pipe-diameter" v-model="size" @change="onSizeChange(mounting)">

        <option disabled selected>- Select a Size Option -</option>
        <option v-bind:value="sizeOption.value"
                v-for="sizeOption in sizeOptions">{{ sizeOption.title }}
        </option>
    </select>
    <div class="flex-container align-middle">
        <label class="Label flex-child-shrink" for="legend">
            LEGEND
        </label>
        <div class="flex-child-auto">
            <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                  title="<div class='title'><b>Legend</b></div>Doloremque laudantium, totam rem aperiam, eaque ipsa">
                <i class="fas fa-question-circle"></i>
                <span class="sr-only">More information on Legends</span>
            </span>
        </div>
    </div>

	<?php foreach ( $Sizes as $size ) {
		$sizeValue   = $size['value'];
		$sizeTitle   = $size['title'];
		$sizePresets = $size['presets']; ?>
        <div v-if="size === '<?= $sizeValue ?>'"> <!-- only display if this size option selected -->
            <select name="legend" id="legend" v-model="lineOne">
                <option disabled selected>- Select a Preset Legend -</option>
				<?php
				/* echoes out the options for each size  */
				if ( $sizePresets ) {
					/* gets the match between the size mounting options, and the full list of mounting options */
					$presetArraysIncluded = array_intersect_key( $presetLegends, $sizePresets );

					foreach ( $presetArraysIncluded as $item ) {
						$preset_value = $item['name'];
						echo "<option value='$preset_value'>$preset_value</option>";
					}
				}
				?>
            </select>
        </div>

		<?php
	} ?>


    <div class="flex-container align-middle">
        <label class="Label flex-child-shrink" for="color">
            COLOR COMBINATION
        </label>
        <div class="flex-child-auto">
            <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                  title="<div class='title'><b>Color Combination</b></div>Colors may vary from screen to screen and should only be used as a close approximation of what the final product will look like.">
                <i class="fas fa-question-circle"></i>
                <span class="sr-only">More information on Color Combination</span>
            </span>
        </div>
    </div>

	<?php include "components/02-molecules/ColorCombinations/ColorCombinations.php" ?>
</div>
