<?php
/**
 * RepLocatorResults
 * used on RepLocator page template only
 */

$posts = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
?>
<section class="RepLocatorResults bg-light">
    <div class="grid-container">

		<?php include "components/03-organisms/ResourcesHeader/ResourcesHeader.php" ?>

        <section class="RepLocatorResults-posts FlexRow medium-up-2">
			<?php
			foreach ( $posts as $post ) {
				include 'components/02-molecules/IndividualRep/IndividualRep.php';
			}
			?>
        </section>
        <hr>
		<?php include "components/03-organisms/Pagination/Pagination.php" ?>
	    <?php include "components/03-organisms/EmailARep/EmailARep.php" ?>

    </div>
</section>
