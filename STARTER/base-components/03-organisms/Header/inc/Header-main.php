<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */

$image = 'components/03-organisms/Header/assets/MSI_logo_USA_stacked.jpg';
?>

<div class="Header-main" id="top-bar-menu">
	<?php include "components/03-organisms/UtilityBar/UtilityBar.php" ?>

    <div class="Header-mainContainer">
        <div class="grid-container">
            <div class="grid-x vertical-center">
                <div class="hide-for-large cell shrink hamburger">
                    <a data-toggle="off-canvas">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </a>
                </div>
                <div class="Header-mainLogo cell auto large-shrink">
                    <a href="#placeholder" title="Home">
                        <img src="<?= $image ?>" alt="Marking Services Incorporated" width="163" height="76"/>
                    </a>
                </div>
				<?php include "components/03-organisms/SearchWithDropdown/SearchWithDropdown.php"; ?>
				<?php include "components/03-organisms/MyAccountMenu/MyAccountMenu.php"; ?>
            </div>

        </div>
        <div class="show-for-large">
			<?php include "components/03-organisms/MegaMenu/MegaMenu.php"; ?>
        </div>
    </div>

</div>
