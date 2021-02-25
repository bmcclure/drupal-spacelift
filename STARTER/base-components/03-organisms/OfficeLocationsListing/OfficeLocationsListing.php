<?php
/**
 * OfficeLocationsListing
 */

$headline         = "Office Locations";
$body_copy        = "At MSI, we have invested in state-of-the-art facilities around the world to provide labeling services wherever our customers do business, including offshore locations. From our North American facilities to our international offices, our service and sales staff supports process labeling and asset identification needs worldwide.";
$office_locations = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];

?>
<section class="OfficeLocationsListing bg-light">
    <header class="section-header">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell xlarge-8">
                    <h2><?= $headline ?></h2>
                    <p><?= $body_copy ?></p>
                </div>
            </div>
        </div>
    </header>
    <div class="grid-container">
        <div class="FlexRow medium-up-2">
			<?php foreach ( $office_locations as $office_location ) {
				include "components/02-molecules/IndividualOfficeLocation/IndividualOfficeLocation.php";
			} ?>
        </div>
    </div>
</section>
