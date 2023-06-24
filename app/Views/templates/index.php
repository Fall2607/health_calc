<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $tittle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('fonts/') ?>icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('css/') ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/') ?>jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('css/') ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('css/') ?>owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('css/') ?>owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('css/') ?>jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('css/') ?>bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('fonts/') ?>flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('css/') ?>aos.css">
    <link href="<?= base_url('css/') ?>jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('css/') ?>style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- ======= Header ======= -->
        <?= $this->include('templates/header'); ?>

        <!-- Content -->
        <?= $this->renderSection('page-content'); ?>
        <!-- End Content -->

        <!-- ======= Footer ======= -->
        <?= $this->include('templates/footer'); ?>
    </div>
    <!-- .site-wrap -->

    <script src="<?= base_url('js/') ?>jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery-ui.js"></script>
    <script src="<?= base_url('js/') ?>popper.min.js"></script>
    <script src="<?= base_url('js/') ?>bootstrap.min.js"></script>
    <script src="<?= base_url('js/') ?>owl.carousel.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery.stellar.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery.countdown.min.js"></script>
    <script src="<?= base_url('js/') ?>bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery.easing.1.3.js"></script>
    <script src="<?= base_url('js/') ?>aos.js"></script>
    <script src="<?= base_url('js/') ?>jquery.fancybox.min.js"></script>
    <script src="<?= base_url('js/') ?>jquery.sticky.js"></script>
    <script src="<?= base_url('js/') ?>jquery.mb.YTPlayer.min.js"></script>
    <script src="<?= base_url('js/') ?>health_calculator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script src="<?= base_url('js/') ?>main.js"></script>

</body>

</html>