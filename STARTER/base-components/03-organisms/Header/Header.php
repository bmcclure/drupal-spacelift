<?php
/**
 * SITE HEADER
 */

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MSI Frontend Components</title>
    <meta name="description" content="MSI Frontend Components">
    <meta name="author" content="Top Floor">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/index.css?v=1">
    <link rel="stylesheet" href="/dist/fontawesome.css?v=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"/>
</head>
<body>

<div class="off-canvas-wrapper">
	<?php include "components/03-organisms/OffcanvasMain/OffcanvasMain.php"; ?>
	<?php include "components/03-organisms/OffcanvasMyAccount/OffcanvasMyAccount.php"; ?>
	<?php include "components/03-organisms/OffcanvasCart/OffcanvasCart.php"; ?>
	<?php include "components/03-organisms/OffcanvasFilter/OffcanvasFilter.php"; ?>

    <div class="off-canvas-content" data-off-canvas-content>

        <header class="Header" role="banner" data-sticky-container>

            <div class="Header-wrap" data-sticky-on="small" data-sticky data-options="marginTop:0;"
                 style="width:100%;">
				<?php include "components/03-organisms/Header/inc/Header-main.php"; ?>
            </div>

        </header> <!-- end .header -->

