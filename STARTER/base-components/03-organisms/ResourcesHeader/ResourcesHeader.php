<?php
/**
 * ResourcesHeader, created after discussing with Melanie since Rep Locator, Case Studies Listing, and Post Listing all share the same styling
 */

$headline             = 'Lorem Ipsum Dolor';
$number_of_results    = '##';
$number_showing_label = "#-## of $number_of_results";
?>
<header class="RepLocatorResults-header">
    <h2><?= $headline ?></h2>
    <div class="grid-x grid-margin-x grid-margin-y medium-up-2">
        <div class="cell"><?= $number_of_results ?> Results</div>
        <div class="cell medium-text-right">
			<?php include "components/02-molecules/Showing/Showing.php" ?>
        </div>
    </div>
</header>
