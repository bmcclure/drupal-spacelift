<?php
/**
 * ProductsTopHalf
 * used for Preset Products
 * shell might be used for custom products as well
 */

$BackgroundColors = [
	[
		'name'       => 'red',
		'hex-color'  => '#d22728',
		'text-color' => 'white'
	],
	[
		'name'       => 'orange',
		'hex-color'  => '#f08e20',
		'text-color' => 'black'
	],
	[
		'name'       => 'yellow',
		'hex-color'  => '#fff200',
		'text-color' => 'black'
	],
	[
		'name'       => 'brown',
		'hex-color'  => '#7e4127',
		'text-color' => 'white'
	],
	[
		'name'       => 'green',
		'hex-color'  => '#40ae49',
		'text-color' => 'white'
	],
	[
		'name'       => 'blue',
		'hex-color'  => '#0071ae',
		'text-color' => 'white'
	],
	[
		'name'       => 'purple',
		'hex-color'  => '#68408e',
		'text-color' => 'white'
	],

	[
		'name'       => 'white',
		'hex-color'  => '#ffffff',
		'text-color' => 'black'
	],

	[
		'name'       => 'grey',
		'hex-color'  => '#696a6c',
		'text-color' => 'white'
	],

	[
		'name'       => 'black',
		'hex-color'  => '#000000',
		'text-color' => 'white'
	],
	[
		'name'       => 'glow',
		'hex-color'  => '#DEE5AC',
		'text-color' => 'black'
	],
];

$Sizes            = [
	[
		'title'    => '1" x 3"',
		'value'    => 'rect-1x3',
		'mounting' => [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ],
	],
	[
		'title'    => '1.5" Round',
		'value'    => 'round-1-5',
		'mounting' => [ 0 ],
	],
	[
		'title'    => '1.5" Square',
		'value'    => 'square-1-5',
		'mounting' => [ 0 ],
	],
];
$DefaultSizeValue = $Sizes[0]['value']; // First one should be default
?>

<style>


    <?php
     foreach ($BackgroundColors as $background_color) {
            $name = $background_color['name'];
            $hex_code = $background_color['hex-color']; ?>
    .CustomTag-background.<?= $name?>, .CustomTag-text.<?= $name?> { /* CustomTag-background can be removed if we go the gradient route */
        fill: <?= $hex_code?>;
    }

    .CustomTag-gradient.<?= $name?> .CustomTag-gradientOne, .CustomTag-gradient.<?= $name?> .CustomTag-gradientThree {
        stop-color: <?= $hex_code?>;
    }

    <?php
     }?>
    /* Sizes Dynamic Styling */
    .CustomTag-size {
        display: none; /* hide all */
    }

    /* Display rules if the size is selected */
    <?php
		foreach ($Sizes as $Size) {
		    $Sizevalue = $Size['value'];?>
    .CustomTag--<?= $Sizevalue?> .CustomTag-size--<?= $Sizevalue?> {
        display: block;
    }

    <?php
     }?>
</style>
<section id="app" class="ProductsTopHalf">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y large-up-2">
            <div id="ProductsTopHalf-imageContainer" class="ProductsTopHalf-imageContainer cell">
            </div>
            <div class="cell">
				<?php include "components/02-molecules/ProductHeadlineIntro/ProductHeadlineIntro.php" ?>
				<?php include "components/03-organisms/ProductImages/ProductImages.php" ?>
				<?php include "components/02-molecules/ProductToggle/ProductToggle.php" ?>
				<?php include "components/03-organisms/ProductPresetOptions/ProductPresetOptions.php" ?>
				<?php include "components/03-organisms/ProductCustomVariableOptions/ProductCustomVariableOptions.php" ?>
				<?php include "components/03-organisms/CompleteOrder/CompleteOrder.php" ?>
				<?php include "components/03-organisms/ForwardToAFriend/ForwardToAFriend.php" ?>
            </div>
        </div>
    </div>
</section>
<script defer src="components/03-organisms/ProductsTopHalf/dist/ProductsTopHalf.js?v=1.0.0"></script>

<!-- CDN for vue -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            size: '<?= $DefaultSizeValue?>', // I think we need to keep the script here for this reason - sizes will default to the first size in the array
            lineOne: '',
            lineCharacterLimit: 50,
            lineTwo: '',
            lines: 2,
            number: '',
            color: 'yellow',
            textColor: 'black',
            colorCombo: 'YELLOW',
            mounting: 0,
            productToggle: 'presets',
            customTag: {
                size: '<?= $DefaultSizeValue?>',
            },
            sizeOptions: [
                {
                    title: '1" x 3"',
                    value: 'rect-1x3',
                    mounting: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                    lines: 2,
                    characterLimit: 50,
                    presets: [0, 1, 2, 3, 4, 5]
                },
                {title: '1.5" Round', value: 'round-1-5', mounting: [0, 1], lines: 1, characterLimit: 12, presets: [5]},
                {title: '1.5" Square', value: 'square-1-5', mounting: [0], lines: 2, characterLimit: 12, presets: [5]},
            ],
            mountingOptions: [
                {id: 0, name: 'Top Hole with Grommet'},
                {id: 1, name: 'Left Side Hole with Grommet'},
                {id: 2, name: 'Left and Right Side Hole with Grommets'},
                {id: 3, name: 'Four Corner Holes with Grommets'},
                {id: 4, name: 'Adhesive Only'},
                {id: 5, name: 'Top Hole (Grommet) with Adhesive'},
                {id: 6, name: 'Left Side Hole (Grommet) with Adhesive'},
                {id: 7, name: 'Left and Right Side Holes (Grommets) with Adhesive'},
                {id: 8, name: 'Four Corner Holes (Grommets) with Adhesive'},
            ],
            presetLegends: [
                {id: 0, name: '120° HOT WATER', colorCombos: [3, 5]},
                {id: 1, name: '140° HOT WATER', colorCombos: [3, 5]},
                {id: 2, name: '160° HOT WATER', colorCombos: [3, 5]},
                {id: 3, name: '2 PSI GAS', colorCombos: [3]},
                {id: 4, name: '2 PSI NATURAL GAS', colorCombos: [3]},
                {id: 5, name: 'LOREM IPSUM', colorCombos: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]},
            ],
            colorCombinations: [
                {
                    id: '1',
                    title: 'RED',
                    background: '#D2232A',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '2',
                    title: 'ORANGE',
                    background: '#F08E20',
                    color: '#000',
                    textName: 'black',
                    border: '',

                },
                {
                    id: '3',
                    title: 'YELLOW',
                    background: '#FFF200',
                    color: '#000',
                    textName: 'black',
                    border: '',
                },
                {
                    id: '4',
                    title: 'BROWN',
                    background: '#7E4127',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '5',
                    title: 'GREEN',
                    background: '#40AE49',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '6',
                    title: 'BLUE',
                    background: '#0071AE',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '7',
                    title: 'PURPLE',
                    background: '#68408E',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '8',
                    title: 'WHITE',
                    background: '#fff',
                    color: '#000',
                    textName: 'black',
                    border: '#000',
                },
                {
                    id: '9',
                    title: 'GREY',
                    background: '#696A6C',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
                {
                    id: '10',
                    title: 'BLACK',
                    background: '#000',
                    color: '#fff',
                    textName: 'white',
                    border: '',
                },
            ]
        },
        computed: {
            customTagSize: function () {
                return this.size
            },
            textColor: function () {
                return this.textColor
            },
            backgroundColor: function () {
                return this.color
            },
            mountingConfiguration: function () {
                return this.mounting
            }
        },
        methods: {
            onProductToggleChange: function () {
                if (this.productToggle === 'presets') {
                    this.lineOne = '' // reset line One
                    this.lineTwo = '' // reset line Two
                    this.number = '' // reset number
                    this.colorCombo = 'YELLOW'
                    this.color = 'yellow' // reset background color
                    this.textColor = 'black' // reset text color
                }
            },
            onSizeChange: function () {
                this.mounting = 0 // reset mounting options
                this.lineOne = '' // reset line One
                this.lineTwo = '' // reset line Two
                this.number = '' // reset number

                // Here is a nice succinct filter getting matching sizes:
                // const matchingSizes = this.sizeOptions.filter((option) => option.value === this.size)
                //
                // DIY filter - this is for IE11 :(

                let matchingSizes = [];
                for (let i = 0; i < this.sizeOptions.length; i++) {
                    if (this.sizeOptions[i].value === this.size) {
                        matchingSizes.push(this.sizeOptions[i])
                    }
                }
                const newCharacterLimit = matchingSizes[0].characterLimit
                const newLines = matchingSizes[0].lines
                this.lineCharacterLimit = newCharacterLimit
                this.lines = newLines
            },
            onPresetLegendChange: function () {
                this.colorCombo = 'YELLOW'
                this.color = 'yellow' // reset background color
                this.textColor = 'black' // reset text color
            },
            // When changing the color combo, change the background color and text color
            onColorComboChange: function () {
                // Here is a nice succinct filter getting matching colorcombos
                // const matchingColorCombos = this.colorCombinations.filter((singleCombo) => singleCombo.title === this.colorCombo)
                //
                // DIY filter -  this is for IE11 :(
                let matchingColorCombos = [];
                for (let a = 0; a < this.colorCombinations.length; a++) {
                    if (this.colorCombinations[a].title === this.colorCombo) {
                        matchingColorCombos.push(this.colorCombinations[a])
                    }
                }
                const newBackground = matchingColorCombos[0].title.toLowerCase();
                const newTextColor = matchingColorCombos[0].textName;
                this.color = newBackground;
                this.textColor = newTextColor;
            }
        }
    })
</script>
