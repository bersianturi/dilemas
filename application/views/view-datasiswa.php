<!-- <html> 

<head>
    <title>Tampil Data Siswa</title> 
</head> 

<body> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Data Siswa 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>nama siswa</th> 
                <th>:</th> 
                <td> 
                    <?= $namasiswa; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>NIS</td> 
                <td>:</td> 
                <td> 
                    <?= $nis; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>kelas</td> 
                <td>:</td> 
                <td> 
                    <?= $kelas; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>tanggal lahir</td> 
                <td>:</td> 
                <td> 
                    <?= $tgllahir; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>tempat lahir</td> 
                <td>:</td> 
                <td> 
                    <?= $tmplahir; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>alamat</td> 
                <td>:</td> 
                <td> 
                    <?= $alamat; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>jenis kelamin</td> 
                <td>:</td> 
                <td> 
                    <?= $jnskelamin; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>agama</td> 
                <td>:</td> 
                <td> 
                    <?= $agama; ?> 
                </td> 
            </tr> 
            <tr>
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('datasiswa');
                                ?>">Kembali</a> 
                </td>
            </tr> 
        </table> 
    </center> 
</body> 
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>Tampil Data Siswa</title>

    <!-- Icons font CSS-->
    <link href="<?= base_url('assets') ?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets') ?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets') ?>/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets') ?>/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Tampil Data Siswa</h2>
                    <form action="<?= base_url() ?>Datasiswa/cetak" method="POST">
                        <div class="input-group">
                            <label class="label">Nama Siswa</label>
                            <h3 class="text-white"> <?= $namasiswa; ?> </h3>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="input-group">
                                        <label class="label">NIS</label>
                                        <h3 class="text-white"> <?= $nis; ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kelas</label>
                                    <h3 class="text-white"> <?= $kelas; ?> </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Lahir</label>
                                    <h3 class="text-white"> <?= $tmplahir; ?> </h3>
                                </div>
                            </div>
                            <div class=" col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <h3 class="text-white"> <?= $tgllahir; ?> </h3>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Alamat</label>
                            <h3 class="text-white"> <?= $alamat; ?> </h3>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Agama</label>
                                    <h3 class="text-white"> <?= $agama; ?> </h3>
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="label">Jenis Kelamin</label>
                                <h3 class="text-white"> <?= $jnskelamin; ?> </h3>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <a href="<?= base_url('datasiswa'); ?>" class="btn btn--radius-2 btn--blue">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?= base_url('assets') ?>/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datepicker/moment.min.js"></script>
    <script src="<?= base_url('assets') ?>/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets') ?>/js/global.js"></script>

</body>

</html>