<?php require_once('couch/cms.php'); ?>
<cms:template title='Company Disclaimer'>

    <cms:editable name='disclaimer' label='Disclaimer' type='richtext' />
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Company Disclaimer</title>
        <?php require_once 'partials/head.php' ?>
    </head>

    <body>
        <?php require_once 'partials/navbar.php' ?>
        <?php breadcrumbs('Disclaimer', 'Disclaimer') ?>
        <div class="container">
            <h1 class="tw-font-bold tw-text-2xl tw-text-justify tw-my-8">Company Disclaimer</h1>
            <cms:show_disclaimer />
        </div>

        <?php require_once 'partials/scripts.php' ?>
        <?php require_once 'partials/footer.php' ?>
    </body>

    </html>