<?php
/**
 * JobPostTeaser
 */


$name         = 'AIM Implementation Specialist';
$job_time     = 'Full-Time';
$location     = 'Milwaukee, WI';
$button_title = 'Apply';
$button_url   = '#outside_Url';
$headline     = 'Job Overview';
$description  = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisue volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nib, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilis fermentum. Aliquam porttitor mauris sit amet orci.';
$posted_date  = 'Jan 26, 2020'; // should pull automatically

?>
<div class="JobPostTeaser HorizontalCard FlexRow-item">
    <div class="HorizontalCard-container">
        <div class="HorizontalCard-header bg-dark-blue grid-x vertical-center">
            <div class="HorizontalCard-title cell large-auto">
                <h3 class="HeaderFont--regular"><?= $name ?></h3>
                <h6 class="white uppercase"><?= $job_time ?> | <?= $location ?></h6>
            </div>
            <div class="HorizontalCard-button cell large-shrink">
                <a href="<?= $button_url ?>" target="_blank" class="button"><span
                            class="fas fa-external-link-alt"></span> <?= $button_title ?></a>
            </div>
        </div>
        <div class="HorizontalCard-body">
            <div class="cell">
                <h4><?= $headline ?></h4>
                <p><?= $description ?></p>
                <p class="uppercase">
                    <small>
                       <b>POSTED:  <date><?= $posted_date ?></date></b>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
