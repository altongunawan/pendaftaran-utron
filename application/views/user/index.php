<?php
    $GLOBALS['user_img'] = BASE_URL . '/uploads/temp/'.$_SESSION['user'][0]['foto_profil'];
    $GLOBALS['default_img'] = BASE_URL . '/uploads/temp/default.jpg';
    $GLOBALS['check_img'] = file_exists('uploads/temp/'.$_SESSION['user'][0]['foto_profil']);
?>
<body>
    <div class="container-fluid p-0 d-flex flex-column my-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="hstack gap-3">
                    <div>
                        <img width="60" height="60" src="<?= $GLOBALS['check_img'] ? $GLOBALS['user_img'] : $GLOBALS['default_img'] ?>" class="img-thumbnail" alt="...">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6>Selamat Datang,</h6>
                        <h4 class="m-0 p-0"><?= $_SESSION['user'][0]['nama'] ?></h4>
                    </div>
                </div>
                <div>
                    <a href="<?= BASE_URL ?>/auth/logoutAuth">Log Out</a>
                </div>
            </div>
        </div>
        <div id="homepage-image" class="bg-dark" style="height: 100px;"></div>
        <div class="container py-5 d-flex justify-content-center">
            <div class="w-75">
                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <div class="card p-3">
                            <h5 class="text-center">Foto Profil</h5>
                            <img style="width: 100%" class="my-3 d-flex align-self-center" src="<?= $GLOBALS['check_img'] ? $GLOBALS['user_img'] : $GLOBALS['default_img'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card p-3 h-100">
                            <h5 class="text-center mb-3">Filter & Upload Foto</h5>
                            <form class="h-100" action="<?= BASE_URL; ?>/user/filterImg" method="POST" enctype="multipart/form-data">
                                <div class="d-flex flex-column justify-content-center h-100">
                                    <span>Upload Foto Baru (JPG only)</span>
                                    <input name="photo" class="form-control mb-3" type="file" id="formFile" required>
                                    <span>Pilih Filter</span>
                                    <select class="form-select mb-3" name="filter-type" aria-label="Pilih Filter">
                                        <option value="BW">Black & White</option>
                                        <option value="Pixelate">Pixelate</option>
                                        <option value="Negate">Negate</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Upload Foto</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>