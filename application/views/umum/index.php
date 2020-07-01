<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta name="description" content="Sistem Informasi Laboratorium SMK Muh Karangmojo">
    <meta name="author" content="Eko Cahyanto">
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body style="background-repeat: space repeat; background-image:linear-gradient(rgba(0, 0, 255, 0.5), rgba(254, 241, 17, 0.5)), url('./assets/images/bg.png'); ">

    <!-- Image and text -->
    <div class="navbar navbar-light">
        <a class="navbar-brand align-center" href="#">
            <img src="<?= base_url(); ?>assets/images/logo-depan.png" width="auto" height="100" class="d-inline-block align-top" loading="lazy">
        </a>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="<?= base_url('auth'); ?>" class="card" style="width: 15rem; background-color:azure">
                    <img src="<?= base_url(); ?>assets/images/logo-labkom.png" width="200" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 style="text-align:center">LAB. KOMPUTER</h4>
                    </div>
                </a>
            </div>
            <div class="col-md-auto">
                <a href="<?= base_url('auth'); ?>" class="card" style="width: 15rem; background-color:azure">
                    <img src="<?= base_url(); ?>assets/images/bg.png" width="auto" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 style="text-align:center">LAB. OTKP</h4>
                    </div>
                </a>
            </div>
            <div class="col-md-auto">
                <a href="<?= base_url('auth'); ?>" class="card" style="width: 15rem; background-color:azure">
                    <img src="<?= base_url(); ?>assets/images/bg.png" width="auto" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 style="text-align:center">LAB. AKL</h4>
                    </div>
                </a>
            </div>
            <div class="col-md-auto">
                <a href="<?= base_url('auth'); ?>" class="card" style="width: 15rem; background-color:azure">
                    <img src="<?= base_url(); ?>assets/images/lab-tkro.png" width="200" height="200" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 style="text-align:center">LAB. TKRO</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-lg-offset-1 text-center" style="text-align: center; margin-top: 50px;">
                <br>
                <hr class="medium">
                <strong>Copyright &copy; 2020 <a href="http://smkmuhkarangmojo.sch.id">SMK Muh Karangmojo</a>.</strong> All rights
                reserved.
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url(); ?>bootstrap/jss/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>