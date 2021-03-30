<?php
/**
 * ProductPresetOptions
 *
 */
$presetLegends   = [
	[ 'id' => 0, 'name' => '120° HOT WATER', 'colorCombos' => [ 3, 5 ] ],
	[ 'id' => 1, 'name' => '140° HOT WATER', 'colorCombos' => [ 3, 5 ] ],
	[ 'id' => 2, 'name' => '160° HOT WATER', 'colorCombos' => [ 3, 5 ] ],
	[ 'id' => 3, 'name' => '2 PSI GAS', 'colorCombos' => [ 3 ] ],
	[ 'id' => 4, 'name' => '2 PSI NATURAL GAS', 'colorCombos' => [ 3 ] ],
	[ 'id' => 5, 'name' => 'LOREM IPSUM', 'colorCombos' => [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ] ],
];
$MountingOptions = [
	[
		'title' => 'Top Hole with Grommet',
		'value' => 0
	],
	[
		'title' => 'Left Side Hole with Grommet',
		'value' => 1
	],
	[
		'title' => 'Left and Right Side Hole with Grommets',
		'value' => 2
	],
	[
		'title' => 'Four Corner Holes with Grommets',
		'value' => 3
	],
	[
		'title' => 'Adhesive Only',
		'value' => 4
	],
	[
		'title' => 'Top Hole (Grommet) with Adhesive',
		'value' => 5
	],
	[
		'title' => 'Left Side Hole (Grommet) with Adhesive',
		'value' => 6
	],
	[
		'title' => 'Left and Right Side Holes (Grommets) with Adhesive',
		'value' => 7
	],
	[
		'title' => 'Four Corner Holes (Grommets) with Adhesive',
		'value' => 8
	],

];
$Sizes           = [
	[
		'title'          => '1" x 3"',
		'value'          => 'rect-1x3',
		'mounting'       => [ 0 ],
		'characterLimit' => 50,
		'presets'        => [ 0, 1, 2, 3, 4, 5 ],

	],
	[
		'title'          => '1.5" Round',
		'value'          => 'round-1-5',
		'mounting'       => [ 0 ],
		'characterLimit' => 12,
		'presets'        => [ 5 ],
	],
	[
		'title'          => '1.5" Square',
		'value'          => 'square-1-5',
		'mounting'       => [ 0 ],
		'characterLimit' => 12,
		'presets'        => [ 5 ],
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

        <option value="" disabled selected>- Select a Size Option -</option>
        <option v-bind:value="sizeOption.value"
                v-for="sizeOption in sizeOptions">{{ sizeOption.title }}
        </option>
    </select>

    <div class="field">
        <label class="Label" for="mounting">MOUNTING</label>
		<?php foreach ( $Sizes as $size ) {
			$sizeValue    = $size['value'];
			$sizeTitle    = $size['title'];
			$sizeMounting = $size['mounting']; ?>
            <div v-if="size === '<?= $sizeValue ?>'"> <!-- only display if this size option selected -->
                <select id="mounting" v-model="mounting">
                    <option disabled selected hidden>- Select a Mounting Option -</option>
					<?php
					/* echoes out the options for each size  */
					if ( $sizeMounting ) {
						/* gets the match between the size mounting options, and the full list of mounting options */
						$mountingArraysincluded = array_intersect_key( $MountingOptions, $sizeMounting );

						foreach ( $mountingArraysincluded as $item ) {
							$mount_value = $item['value'];
							$mount_title = $item['title'];
							echo "<option value='$mount_value'>$mount_title</option>";
						}
					}
					?>
                </select>
            </div>

			<?php
		} ?>


    </div>
    <div class="ProductCustomVariableOptions-uvlaminate title ">
        <ul class="Checkboxes">
            <li class="Checkbox facet-item">
                <input type="checkbox" class="Checkbox-input" id="uv2"> <!-- @todo currently this is a unique id, but technically it needs to function the same as the id=uv on custom tab-->
                <label for="uv2">
                    <span class="facet-item__value">Add UV Laminate</span>
                </label>
                <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                      title="<div class='title'><b>UV Laminate</b></div>Lorem ipsum dolor sit amet, adipiscing elit.">
                            <i class="fas fa-question-circle"></i>
                            <span class="sr-only">More information on UV Laminate/span>
                         </span>
            </li>
        </ul>
    </div>
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
            <select name="legend" id="legend" v-model="lineOne" @change="onPresetLegendChange()">
                <option value="" disabled selected>- Select a Preset Legend -</option>
				<?php
				/* echoes out the options for each size  */
				if ( $sizePresets ) {
					/* gets the match between the size mounting options, and the full list of mounting options */

					$newArray = [];
					foreach ( $sizePresets as $sizePreset ) {
						foreach ( $presetLegends as $presetLegend ) {
							$id = $presetLegend['id'];
							if ( $sizePreset === $id ) {
								array_push( $newArray, $presetLegend );
							}
						}
					}

					foreach ( $newArray as $item ) {
						$preset_value = $item['name'];
						echo "<option value='$preset_value'>$preset_value</option>";
					}
				}
				?>
            </select>
        </div>

		<?php
	} ?>

	<?php include "components/02-molecules/ColorCombinations/ColorCombinations.php" ?>
</div>
