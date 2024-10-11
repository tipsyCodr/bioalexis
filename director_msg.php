<?php require_once('couch/cms.php'); ?>
<cms:template title='Edit Director`s Message'>

</cms:template>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director`s Message</title>
    <?php require_once 'partials/head.php' ?>
</head>
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 500;
        line-height: 1.2;
    }

    h1 {
        font-size: 2.5rem;
    }

    h2 {
        font-size: 2rem;
    }

    h3 {
        font-size: 1.75rem;
    }

    h4 {
        font-size: 1.5rem;
    }

    h5 {
        font-size: 1.25rem;
    }

    h6 {
        font-size: 1rem;
    }

    p {
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <?php breadcrumbs('Director`s Message', 'Director`s Message') ?>
    <div class="container">
        <!-- <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Company Disclaimer</h1> -->
        <p class="tw-text-black">
            <cms:editable name='message' label='Director`s Message' type='richtext'>
            </cms:editable>
        </p>
    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>
<?php COUCH::invoke(); ?>