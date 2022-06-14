<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div id="homepage-image" class="position-fixed col h-100 col-sm-12 col-lg-6 col-6 d-none d-sm-none d-md-none d-lg-block d-xl-block bg-dark"></div>
            <div class="ms-auto col col-sm-12 col-lg-6 col-8">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="d-flex flex-column py-5 mx-auto" style="width: 30rem">
                        <div class="mb-3">
                            <h1 class="text-primary display-5 text-title m-0">FORM PENDAFTARAN U-TRON</h1>
                            <a href="<?= BASE_URL ?>/admin/index" style="font-family: var(--title-font)">CHECK LIST PENDAFTARAN</a>
                        </div>
                        <form class="mb-2" action="<?= BASE_URL; ?>/user/insertUser" method="POST" enctype="multipart/form-data">
                            <div class="mb-2">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama" pattern="\S.*" required>
                            </div>
                            <div class="mb-2">
                                <label for="nrp">NRP</label>
                                <input class="form-control" type="text" name="nrp" placeholder="NRP" pattern="^[\d]+$" required>
                            </div>
                            <div class="mb-2">
                                <label>Program Studi</label>
                                <select name="program-studi" class="form-select" style="font-size: 14px;">
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Arsitektur">Arsitektur</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    <option value="Pendidikan Bahasa Mandarin">Pendidikan Bahasa Mandarin</option>
                                    <option value="Sastra Inggris">Sastra Inggris</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label>Nomor Telepon</label>
                                <input class="form-control" type="text" name="nomor-telepon" placeholder="Nomor Telepon" pattern="^[\d]+$" required>
                            </div>
                            <div class="mb-2">
                                <label>Nama Kelompok</label>
                                <input class="form-control" type="text" name="nama-kelompok" placeholder="Nama Kelompok" pattern="\S+" required>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between align-items-end">
                                    <label>Bukti Pembayaran</label>
                                    <span class="float-end" style="font-size: 12px;">Rp. 50.000/Team</span>
                                </div>
                                <input class="form-control" type="file" name="bukti-pembayaran" style="font-size: 14px;" required>
                            </div>
                            <div class="mb-2">
                                <label>Email Address</label>
                                <input class="form-control" type="email" name="email-address" placeholder="Email Address" required>
                            </div>
                            <div class="mb-2">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary w-100 text-white py-2" style="letter-spacing: 2px; font-size: 12px;" name="btn-submit" type="submit">DAFTAR SEKARANG</button>
                            </div>
                        </form>
                        <div class="justify-content-center d-flex" style="font-size: 14px">
                            <span>Telah membuat akun?</span>&nbsp;&nbsp;
                            <a href="<?= BASE_URL ?>/auth/login/">Login Sekarang</a>
                        </div>
                        <?= Flash::flash(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>