<body>
    <div class="container-fluid p-0 m-0">
        <div id="homepage-image" class="w-100" style="height: 80px;"></div>
        <div class="container">
            <div class="my-4 py-3">
                <h1 class="text-primary text-title">DATA PENDAFTARAN U-TRON</h1>
                <a href="<?php BASE_URL ?> home" style="font-family: var(--title-font)">KEMBALI KE MENU PENDAFTARAN</a>
            </div>
            <table class="table">
                <thead>
                    <tr class="text-secondary text-uppercase" style="font-size: 12px">
                        <th></th>
                        <th class="fw-semibold">Nama</th>
                        <th class="fw-semibold">NRP</th>
                        <th class="fw-semibold">Program Studi</th>
                        <th class="fw-semibold">No Telepon</th>
                        <th class="fw-semibold">Email</th>
                        <th class="fw-semibold">Nama Kelompok</th>
                        <th class="fw-semibold">Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $nomor = 1;
                        foreach( $data['user'] as $user ) { 
                    ?>    
                        <tr>
                            <td class="align-middle"><?= $nomor ?></td>
                            <td class="align-middle"><?= $user['nama'] ?></td>
                            <td class="align-middle"><?= $user['nrp'] ?></td>
                            <td class="align-middle"><?= $user['program_studi'] ?></td>
                            <td class="align-middle"><?= $user['nomor_telepon'] ?></td>
                            <td class="align-middle"><?= $user['email_address'] ?></td>
                            <td class="align-middle"><?= $user['nama_kelompok'] ?></td>
                            <td class="align-middle">
                                <form class="show-bukti" data-id="<?= $user['bukti_pembayaran'] ?>" action="<?php $_SERVER['PHP_SELF'] ?>" >
                                    <button type="submit" style="letter-spacing: 2px; font-size: 12px;" name="btn-submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBuktiPembayaran">
                                        LIHAT GAMBAR
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php 
                            $nomor++;
                        } 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<script>
    $(".show-bukti").submit(function(e){
        var getUrl = window.location;
        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        var id = $(this).data("id")
        $('#modalBuktiPembayaran').modal('show');
        $('#img-bukti').attr('src', baseUrl + '/public/uploads/' + id);
        return false;
    });
</script>
<div class="modal fade" id="modalBuktiPembayaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bukti Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="img-bukti" src="" width="100%" height="100%">
            </div>
        </div>
    </div>
</div>