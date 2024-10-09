<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Plan</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>


    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Business Plan</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Business Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <style>
        .breadcrumbs {
            background-image: url('img/networking.jpg');
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }

        .grid-item {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #999;
        }

        .grid-item img {
            width: 100%;
        }
    </style>
    <section>
        <h1 class="text-center tw-text-4xl tw-font-semibold tw-pt-8">ENROLLMENT</h1>
        <div class="container">
            <div class="tw-flex tw-justify-center tw-gap-10">
                <img class="tw-w-1/2 tw-py-10" src="img/networking.png" alt="">
                <div class=" ">
                    <h2 style="text-align:left; font-size: 25px; font-weight: bold;padding-top:84px; ">Joining The
                        Business
                    </h2>
                    <ul class='text-left tw-list-disc'
                        style="list-style:disc; text-align:center; font-size: 18px;  padding-left: 20px;">
                        <li style="">ZERO CHARGE FOR ENROLLMENT</li>
                        <li style="">NO REGISTRATION FEES</li>
                        <li style="">NO COMPULSION OF ANY TYPE OF PURCHASE.</li>
                    </ul>
                </div>
            </div>

            <?php require_once 'partials/bussiness-details.php'; ?>
    </section>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>