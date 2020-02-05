<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Masuk | Sistem Informasi Pegawai</title>
    <link href="<?= asset('website/nice/dist/css/style.min.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image:url(<?= asset('website/img/bg-login.jpg') ?>); background-size: cover;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?= asset('website/nice/assets/images/logo-icon.png') ?>" alt="logo" /></span>
                        <h4 class="font-medium m-b-20">Masuk Aplikasi</h4>
                    </div>

                    <?php if ($this->session->flashdata("gagal")) : ?>
                        <div class="alert alert-danger"> <?= $this->session->flashdata("gagal") ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata("sukses")) : ?>
                        <div class="alert alert-success"> <?= $this->session->flashdata("sukses") ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                    <?php endif; ?>

                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" id="loginform" method="POST" action="<?= base_url("auth/login") ?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input name="username" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= asset('website/nice/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= asset('website/nice/assets/libs/popper.js/dist/umd/popper.min.js') ?>"></script>
    <script src="<?= asset('website/nice/assets/libs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>