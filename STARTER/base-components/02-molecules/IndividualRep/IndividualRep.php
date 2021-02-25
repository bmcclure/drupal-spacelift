<?php
/**
 * Individual Rep
 * used on RepLocator template>  organism/RepLocatorResults
 */

$image    = 'components/02-molecules/IndividualRep/MSI-Avatar.jpg';
$name     = 'Brad Angell';
$subtitle = 'CONTRACTOR';
$email    = 'placeholder@test.com';
$phone    = '(800) 234-0135 ext.1125';
$mobile   = '(262) 123-4567';
$fax      = '(414) 973-1331';

$states = 'Wisconsin, Iowa, Minnesota, Illinois, Michigan, Montana, Nebraska, Kansas'; // this will need to pull automatically from states assigned to each rep

$is_contractor = true; // suggested logic - and then we would wrap the relevant section with if statements if they are a contractor

?>
<div class="IndividualRep HorizontalCard FlexRow-item">
    <div class="HorizontalCard-container">
        <div class="HorizontalCard-header bg-dark-blue grid-x vertical-center">
            <div class="IndividualRep-image HorizontalCard-image cell shrink lozad"
                 data-background-image="<?= $image ?>"
                 style="background: url(assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            <div class="HorizontalCard-title cell auto">
                <h3 class="HeaderFont--regular"><?= $name ?></h3>
                <h6 class="white"><?= $subtitle ?></h6>
            </div>
            <div class="HorizontalCard-button cell large-shrink">
                <a href="#" data-open="EmailARep" class="button"><span class="far fa-envelope"></span> EMAIL ME</a>
            </div>
        </div>
        <div class="HorizontalCard-body grid-x large-up-2">
            <div class="IndividualRep-contact cell">
                <h4>Contact</h4>
                <ul class="HorizontalCard-list no-bullet">
					<?php
					if ( $phone ) {
						echo "<li><a href='tel:+1$phone'><span class='fas fa-phone'></span> $phone</a></li>";
					}

					if ( $mobile ) {
						echo "<li><a href='tel:+1$mobile'><span class='fas fa-mobile-alt'></span> $mobile</a></li>";
					}
					if ( $fax ) {
						echo "<li><span class='fas fa-fax'></span> $fax</li>";
					}

					?>
                </ul>
            </div>
            <div class="cell">
                <h4>States Served</h4>
                <p><?= $states ?></p>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * BEGIN NON-CONTRACTOR EXAMPLE. DO NOT DELETE RIGHT AWAY. THIS WILL NEED LOGIC AROUND IT
 */
$name     = 'Harrison Wilkes';
$subtitle = 'END USER MATERIAL';
$email    = 'placeholder@test.com';
$phone    = '(800) 234-0135 ext.1125';
$mobile   = '(262) 123-4567';
$fax      = '(414) 973-1331';
$image    = 'components/02-molecules/IndividualRep/placeholder-headshot.png';


$industries = [
	[
		'link'  => '#placeholder',
		'icon'  => 'assets/images/yellow-icon.svg',
		'title' => 'Oil & Gas'
	],
	[
		'link'  => '#placeholder',
		'icon'  => 'assets/images/placeholder.svg',
		'title' => 'Pulp & Paper'
	],
	[
		'link'  => '#placeholder',
		'icon'  => 'assets/images/placeholder.svg',
		'title' => 'Industrial Manufacturing'
	],
	[
		'link'  => '#placeholder',
		'icon'  => 'assets/images/placeholder.svg',
		'title' => 'Process Chemical'
	],

]

?>
<div class="IndividualRep HorizontalCard FlexRow-item">
    <div class="HorizontalCard-container">
        <div class="HorizontalCard-header bg-dark-blue grid-x vertical-center">
            <div class="IndividualRep-image HorizontalCard-image cell shrink lozad"
                 data-background-image="<?= $image ?>"
                 style="background: url(assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            <div class="HorizontalCard-title cell auto">
                <h3 class="HeaderFont--regular"><?= $name ?></h3>
                <h6 class="white"><?= $subtitle ?></h6>
            </div>
            <div class="HorizontalCard-button cell large-shrink">
                <a href="#" data-open="EmailARep" class="button"><span class="far fa-envelope"></span> EMAIL ME</a>
            </div>
        </div>
        <div class="HorizontalCard-body grid-x large-up-2">
            <div class="IndividualRep-contact cell">
                <h4>Contact</h4>
                <ul class="HorizontalCard-list no-bullet">
					<?php
					if ( $phone ) {
						echo "<li><a href='tel:+1$phone'><span class='fas fa-phone'></span> $phone</a></li>";
					}

					if ( $mobile ) {
						echo "<li><a href='tel:+1$mobile'><span class='fas fa-mobile-alt'></span> $mobile</a></li>";
					}
					if ( $fax ) {
						echo "<li><span class='fas fa-fax'></span> $fax</li>";
					}

					?>
                </ul>
            </div>
            <div class="cell">
                <h4>Industries Served</h4>
                <ul class="HorizontalCard-list no-bullet">
					<?php
					foreach ( $industries as $industry ) {
						$icon  = file_get_contents( $industry['icon'] );
						$title = $industry['title'];
						$link  = $industry['link'];
						echo "<li><a href='$link'><span class='HorizontalCard-tinyIcon'>$icon</span> $title</a></li>";
					}
					?>
                </ul>
            </div>
        </div>
    </div>
</div>
