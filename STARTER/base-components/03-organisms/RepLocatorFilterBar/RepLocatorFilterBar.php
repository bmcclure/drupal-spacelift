<?php
/**
 * RepLocatorFilterBar
 * used on templates/RepLocator
 */

// @todo I'm assuming for Drupal, we will need to actually GET the states from the taxonomy list, and only display them in the list if they are being used?
$states = array(
	'AL'=>'Alabama',
	'AK'=>'Alaska',
	'AZ'=>'Arizona',
	'AR'=>'Arkansas',
	'CA'=>'California',
	'CO'=>'Colorado',
	'CT'=>'Connecticut',
	'DE'=>'Delaware',
	'DC'=>'District of Columbia',
	'FL'=>'Florida',
	'GA'=>'Georgia',
	'HI'=>'Hawaii',
	'ID'=>'Idaho',
	'IL'=>'Illinois',
	'IN'=>'Indiana',
	'IA'=>'Iowa',
	'KS'=>'Kansas',
	'KY'=>'Kentucky',
	'LA'=>'Louisiana',
	'ME'=>'Maine',
	'MD'=>'Maryland',
	'MA'=>'Massachusetts',
	'MI'=>'Michigan',
	'MN'=>'Minnesota',
	'MS'=>'Mississippi',
	'MO'=>'Missouri',
	'MT'=>'Montana',
	'NE'=>'Nebraska',
	'NV'=>'Nevada',
	'NH'=>'New Hampshire',
	'NJ'=>'New Jersey',
	'NM'=>'New Mexico',
	'NY'=>'New York',
	'NC'=>'North Carolina',
	'ND'=>'North Dakota',
	'OH'=>'Ohio',
	'OK'=>'Oklahoma',
	'OR'=>'Oregon',
	'PA'=>'Pennsylvania',
	'RI'=>'Rhode Island',
	'SC'=>'South Carolina',
	'SD'=>'South Dakota',
	'TN'=>'Tennessee',
	'TX'=>'Texas',
	'UT'=>'Utah',
	'VT'=>'Vermont',
	'VA'=>'Virginia',
	'WA'=>'Washington',
	'WV'=>'West Virginia',
	'WI'=>'Wisconsin',
	'WY'=>'Wyoming',
);

?>
<div class="RepLocatorFilterBar bg-blue">
    <div class="grid-container">
        <div class="RepLocatorFilterBar-row grid-x grid-margin-x vertical-center">
            <div class="RepLocatorFilterBar-industry cell medium-shrink">
                <div class="grid-x grid-margin-x vertical-center">
                    <label for="industry" class="RepLocatorFilterBar-label cell large-shrink HeaderFont uppercase white">Select An Industry</label>
                    <select name="industry" id="industry" class="RepLocatorFilterBar-select cell large-auto">
                        <option value="contractor">Contractor</option>
                        <option value="end-user-material">Solar</option>
                        <option value="end-user-material">Pharmaceutical</option>
                        <option value="food">Food & Beverage</option>
                        <option value="oil">Oil & Gas</option>
                        <option value="oil">Pulp & Paper</option>
                        <option value="oil">Manufacturing</option>
                        <option value="marine">Marine & Offshore</option>
                        <option value="power-gen">Power Generation</option>
                    </select>
                </div>
            </div>
            <div class="RepLocatorFilterBar-state cell medium-auto">
                <div class="grid-x grid-margin-x vertical-center">
                    <label for="state" class="RepLocatorFilterBar-label cell large-shrink HeaderFont uppercase white">Select A State</label>
                    <select name="state" id="state" class="RepLocatorFilterBar-select cell large-shrink">
                        <?php
                        foreach ($states as $abbrev => $fullname) {
                            echo "<option value='$abbrev'>$fullname</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
