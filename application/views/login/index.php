<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div id="homepage-image" class="position-fixed col h-100 col-sm-12 col-lg-6 col-6 d-none d-sm-none d-md-none d-lg-block d-xl-block bg-dark"></div>
            <div class="ms-auto col col-sm-12 col-lg-6 col-8">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="d-flex flex-column py-5 mx-auto" style="width: 30rem">
                        <div class="mb-3">
                            <h1 class="text-primary display-5 text-title m-0">LOGIN U-TRON</h1>
                            <a href="<?= BASE_URL ?>/admin/index" style="font-family: var(--title-font)">CHECK LIST PENDAFTARAN</a>
                        </div>
                        <form class="mb-2" action="<?= BASE_URL; ?>/auth/loginAuth" method="POST" enctype="multipart/form-data">
                            <div class="mb-2">
                                <label>Email Address</label>
                                <input class="form-control" type="email" name="email-address" placeholder="Email Address" required>
                            </div>
                            <div class="mb-2">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary w-100 text-white py-2" style="letter-spacing: 2px; font-size: 12px;" name="btn-submit" type="submit">LOGIN</button>
                            </div>
                        </form>
                        <div class="justify-content-center d-flex" style="font-size: 14px">
                            <span>Ingin melakukan registrasi akun?</span>&nbsp;&nbsp;
                            <a href="<?= BASE_URL ?>/home/index">Daftar Sekarang</a>
                        </div>
                        <?= Flash::flash(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>