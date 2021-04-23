<?php

/**
 * @file
 * Custom Variable Options.
 */

$backgroundColors = [
    [
      'name'       => 'red',
      'hex-color'  => '#d22728',
      'text-color' => 'white',
    ],
    [
      'name'       => 'orange',
      'hex-color'  => '#f08e20',
      'text-color' => 'black',
    ],
    [
      'name'       => 'yellow',
      'hex-color'  => '#fff200',
      'text-color' => 'black',
    ],
    [
      'name'       => 'brown',
      'hex-color'  => '#7e4127',
      'text-color' => 'white',
    ],
    [
      'name'       => 'green',
      'hex-color'  => '#40ae49',
      'text-color' => 'white',
    ],
    [
      'name'       => 'blue',
      'hex-color'  => '#0071ae',
      'text-color' => 'white',
    ],
    [
      'name'       => 'purple',
      'hex-color'  => '#68408e',
      'text-color' => 'white',
    ],

    [
      'name'       => 'white',
      'hex-color'  => '#ffffff',
      'text-color' => 'black',
    ],

    [
      'name'       => 'grey',
      'hex-color'  => '#696a6c',
      'text-color' => 'white',
    ],

    [
      'name'       => 'black',
      'hex-color'  => '#000000',
      'text-color' => 'white',
    ],
    /* [
            'name'       => 'glow',
            'hex-color'  => '#DEE5AC',
            'text-color' => 'black'
       ],
     */
];
$mountingOptions = [
    [
      'title' => 'Top Hole with Grommet',
      'value' => 0,
    ],
    [
      'title' => 'Left Side Hole with Grommet',
      'value' => 1,
    ],
    [
      'title' => 'Left and Right Side Hole with Grommets',
      'value' => 2,
    ],
    [
      'title' => 'Four Corner Holes with Grommets',
      'value' => 3,
    ],
    [
      'title' => 'Adhesive Only',
      'value' => 4,
    ],
    [
      'title' => 'Top Hole (Grommet) with Adhesive',
      'value' => 5,
    ],
    [
      'title' => 'Left Side Hole (Grommet) with Adhesive',
      'value' => 6,
    ],
    [
      'title' => 'Left and Right Side Holes (Grommets) with Adhesive',
      'value' => 7,
    ],
    [
      'title' => 'Four Corner Holes (Grommets) with Adhesive',
      'value' => 8,
    ],

];
$sizes = [
    [
      'title'          => '1" x 3"',
      'value'          => 'rect-1x3',
      'mounting'       => [0, 1, 2, 3, 4, 5, 6, 7, 8],
      'characterLimit' => 50,
      'presets'        => [0, 1, 2, 3, 4],

    ],
    [
      'title'          => '1.5" Round',
      'value'          => 'round-1-5',
      'mounting'       => [0],
      'characterLimit' => 12,
      'presets'        => [],


    ],
    [
      'title'          => '1.5" Square',
      'value'          => 'square-1-5',
      'mounting'       => [0],
      'characterLimit' => 12,
      'presets'        => [],
    ],
]
?>

<div id="ProductCustomVariableOptions" class="ProductCustomVariableOptions hide">
    <h3 class="title">Select Options</h3>

    <form>
        <fieldset>
            <div class="field">
                <label class="Label" for="mounting">SIZE</label>
                <select id="size"
                        name="sizeSelected"
                        v-model="size"
                        @change="onSizeChange()">
                    <option value="" disabled selected hidden>- Select a Size Option -</option>
                    <option v-bind:value="sizeOption.value"
                            v-for="sizeOption in sizeOptions">{{ sizeOption.title }}
                    </option>
                </select>
            </div>
            <div class="field">
                <label class="Label" for="mounting">MOUNTING</label>
                <?php foreach ($sizes as $size) {
                  $sizeValue    = $size['value'];
                  $sizeTitle    = $size['title'];
                  $sizeMounting = $size['mounting']; ?>
                    <div v-if="size === '<?php echo $sizeValue ?>'"> <!-- only display if this size option selected -->
                        <select id="mounting" v-model="mounting">
                            <option disabled selected hidden>- Select a Mounting Option -</option>
                            <?php
                            /* echoes out the options for each size  */
                            if ($sizeMounting) {
                              /* gets the match between the size mounting options, and the full list of mounting options */
                              $mountingArraysincluded = array_intersect_key($mountingOptions, $sizeMounting);

                              foreach ($mountingArraysincluded as $item) {
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
                        <input type="checkbox" class="Checkbox-input" id="uv">
                        <label for="uv">
                            <span class="facet-item__value">Add UV Laminate</span>
                        </label>
                        <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                              title="<div class='title'><b>UV Laminate</b></div>Lorem ipsum dolor sit amet, adipiscing elit.">
                            <i class="fas fa-question-circle"></i>
                            <span class="sr-only">More information on UV Laminate</span>
                         </span>
                    </li>
                </ul>
            </div>
            <div class="field LegendLineOne">
                <label class="Label" for="legendLineOne">LINE 1 (REQUIRED)</label>
                <p class="Caption">Limit: {{lineCharacterLimit}} characters</p>
                <input
                        class="legendLineOne"
                        type="text"
                        name="legend-lineOne"
                        id="legendLineOne"
                        :maxlength="lineCharacterLimit"
                        v-model="lineOne"
                >
            </div>

            <div
                    v-if="lines === 2"
                    class="field LegendLineTwo">
                <label class="Label" for="legendLineTwo">LINE 2 (OPTIONAL)</label>
                <p class="Caption">Limit: {{lineCharacterLimit}} characters</p>
                <input
                        class="legendLineTwo"
                        type="text"
                        name="legend-lineTwo"
                        id="legendLineTwo"
                        :maxlength="lineCharacterLimit"
                        v-model="lineTwo"
                >
            </div>
            <div class="field Numbering">
                <div class="flex-container align-middle">
                    <label class="flex-child-shrink Label" for="Numbering">
                        ADD A NUMBER
                    </label>

                    <div class="flex-child-auto">
                         <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                               title="<div class='title'><b>Numbering System</b></div>Lorem ipsum dolor sit amet, adipiscing elit.">
                            <i class="fas fa-question-circle"></i>
                            <span class="sr-only">More information on the Numbering System</span>
                         </span>
                    </div>
                </div>


                <ul class=" RadioButtons FlexRow small-up-2 medium-up-3">
                    <li class="RadioButtons-combo FlexRow-item">
                        <input type="radio"
                               name="Numbering"
                               value="Sequential"
                               id="NumberingSequential"
                               class="RadioButtons-input"
                               checked
                        >

                        <label for="NumberingSequential" class="RadioButtons-button button">
                            Sequential
                        </label>
                    </li>
                    <li class="RadioButtons-combo FlexRow-item">
                        <input type="radio"
                               name="Numbering"
                               value="NonSequential"
                               id="NumberingNonSequential"
                               class="RadioButtons-input"
                        >
                        <label for="NumberingNonSequential" class="RadioButtons-button button">
                            ONE-OFF
                        </label>
                    </li>
                </ul>
                <div id="NumberingSequential-info" class="NumberingSequential-info">
                    <div class="grid-x grid-margin-x small-up-2">
                        <div class="cell">
                            <label for="legendNumber" class="Label"><span
                                        id="NumberingSequential-starting">Starting </span><span
                                        id="NumberingNonSequential-unique" class="hide">Unique </span>Number</label>
                            <input
                                    type="number"
                                    inputmode="numeric" pattern="[0-9]*"
                                    name="legend-number"
                                    id="legendNumber"
                                    max="999"
                                    placeholder="###"
                                    v-model="number"
                                    onKeyPress="if(this.value.length==3) return false;"
                            >
                        </div>
                        <div id="EndingNumberWrapper" class="cell">
                            <label for="endingNumber" class="Label">Ending Number</label>
                            <input
                                    type="number"
                                    inputmode="numeric" pattern="[0-9]*"
                                    name="ending-number"
                                    id="endingNumber"
                                    max="999"
                                    placeholder="###"
                                    onKeyPress="if(this.value.length==3) return false;"
                            >
                            <p id="endingNumber-error" class="error-message hide">Ending Number must be larger than
                                Starting Number</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="flex-container align-middle">
                    <label class="flex-child-shrink Label" for="BackgroundColors">
                        BACKGROUND COLOR
                    </label>
                    <div class="flex-child-auto">
                         <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                               title="<div class='title'><b>Background Color</b></div>Lorem ipsum dolor sit amet, adipiscing elit.">
                            <i class="fas fa-question-circle"></i>
                            <span class="sr-only">More information on Background Colors</span>
                         </span>
                    </div>
                </div>

                <p class="Caption">Need further customizations? <a href="#">Contact Us</a></p>

                <legend class="sr-only">Configure your tag</legend>
                <div class="field">
                    <ul class="ColorCombinations RadioButtons FlexRow small-up-3 medium-up-6 large-up-4">
                        <?php
                        /*
                         * Here we are using the ColorCombinations styling,
                         * however we need the v-model for vue.
                         */
                        foreach ($backgroundColors as $background_color) {
                          $name         = $background_color['name'];
                          $text_color   = $background_color['text-color'];
                          $hex_code     = $background_color['hex-color'];
                          $capitalName  = ucwords($name);
                          $border_color = $hex_code;

                          if ($name === 'white') {
                            $border_color = '#000';
                          }
                          ?>
                            <li class="RadioButtons-combo FlexRow-item">
                                <input
                                        type="radio"
                                        name="color"
                                        value="<?php echo $name ?>"
                                        id="color<?php echo $capitalName ?>"
                                        class="ColorCombinations-input RadioButtons-input"
                                        data-color="<?php echo $name ?>"
                                        v-model="color"
                                >
                                <label for="color<?php echo $capitalName ?>"
                                       class="ColorCombinations-button RadioButtons-button button"
                                       style="background-color:<?php echo $hex_code ?>; color: <?php echo $text_color ?>; border: 1px solid <?php echo $border_color ?>;">
                                    <?php echo $capitalName ?>
                                </label>
                            </li>
                          <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="field">
                <div class="flex-container align-middle">
                    <label class="Label flex-child-shrink" for="TextColors">
                        TEXT COLOR
                    </label>
                    <div class="flex-child-auto">
                           <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
                                 title="<div class='title'><b>Text Color</b></div>Lorem ipsum dolor sit amet, adipiscing elit.">
                                <i class="fas fa-question-circle"></i>
                                <span class="sr-only">More information on Text Colors</span>
                           </span>

                    </div>
                </div>

                <p class="Caption">Need further customizations? <a href="#">Contact Us</a></p>

                <legend class="sr-only">Configure your tag</legend>
                <div class="field">
                    <ul class="ColorCombinations RadioButtons FlexRow small-up-3 medium-up-6 large-up-4">
                        <?php
                        foreach ($backgroundColors as $text_color) {
                          $name2       = $text_color['name'];
                          $text_color2 = $text_color['text-color'];
                          $hex_code2   = $text_color['hex-color'];
                          $background2 = '#fff';

                          if ($name2 === 'glow') {

                          }
                          else {
                            $capitalName2 = ucwords($name2);

                            if ($name2 === 'white') {
                              $background2 = 'black';
                            }
                            if ($name2 === 'yellow') {
                              // Per functional spec, yellow needs to be darker.
                              $hex_code2 = '#beb61e';
                            }
                            ?>
                                <li class="RadioButtons-combo FlexRow-item">
                                    <input
                                            type="radio"
                                            name="textColor"
                                            value="<?php echo $name2 ?>"
                                            id="textColor<?php echo $capitalName2 ?>"
                                            class="ColorCombinations-input RadioButtons-input"
                                            data-color="text-<?php echo $name2 ?>"
                                            v-model="textColor"
                                    >
                                    <label for="textColor<?php echo $capitalName2 ?>"
                                           class="ColorCombinations-button RadioButtons-button button"
                                           style="background-color: <?php echo $background2 ?>; color: <?php echo $hex_code2 ?>; border:1px solid black;">
                                        <?php echo $capitalName2 ?>
                                    </label>
                                </li>
                            <?php
                          }
                        }
                        ?>
                    </ul>
                </div>
            </div>

    <?php include "components/03-organisms/ProductWarningBox/ProductWarningBox.php" ?>

        </fieldset>


    </form>
</div>

<script defer
        src="/components/03-organisms/ProductCustomVariableOptions/dist/ProductCustomVariableOptions.js?v=1.0.0"></script>
